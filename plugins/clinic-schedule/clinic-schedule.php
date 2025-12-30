<?php
/*
Plugin Name: Clinic Doctor Schedule
Description: Manage and display doctor schedules
Version: 1.2
Author: Your Name
*/

/* 1️⃣ Register Doctor Post Type */
add_action('init', 'clinic_register_doctor');
function clinic_register_doctor() {
    register_post_type('doctor', [
        'labels' => [
            'name' => 'Doctors',
            'singular_name' => 'Doctor'
        ],
        'public' => true,
        'menu_icon' => 'dashicons-id',
        'supports' => ['title']
    ]);
}

/* 2️⃣ Add Doctor Schedule Meta Box */
add_action('add_meta_boxes', 'clinic_add_schedule_box');
function clinic_add_schedule_box() {
    add_meta_box(
        'clinic_schedule_box',
        'Doctor Schedule',
        'clinic_schedule_box_html',
        'doctor'
    );
}

/* 3️⃣ Meta Box Content with Checkboxes */
function clinic_schedule_box_html($post) {
    $selected_days = get_post_meta($post->ID, 'clinic_working_days', true);
    $selected_days = $selected_days ? explode(',', $selected_days) : [];
    $all_days = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];

    echo '<div class="doctor_schedule_checkbox">';
    echo '<p><strong>Working Days:</strong></p>';
    foreach($all_days as $day){
        $checked = in_array($day, $selected_days) ? 'checked' : '';
        echo '<label><input type="checkbox" name="clinic_working_days[]" value="'.$day.'" '.$checked.'> '.$day.'</label><br>';
    }
    echo '</div>';

    $start = get_post_meta($post->ID, 'clinic_start_time', true);
    $end   = get_post_meta($post->ID, 'clinic_end_time', true);

    echo '<p><label><strong>Start Time:</strong></label><br>';
    echo '<input type="time" name="clinic_start_time" value="' . esc_attr($start) . '"></p>';

    echo '<p><label><strong>End Time:</strong></label><br>';
    echo '<input type="time" name="clinic_end_time" value="' . esc_attr($end) . '"></p>';
}

/* 4️⃣ Save Doctor Schedule Data */
add_action('save_post', 'clinic_save_schedule');
function clinic_save_schedule($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    if (isset($_POST['clinic_working_days'])) {
        $days = array_map('sanitize_text_field', $_POST['clinic_working_days']);
        update_post_meta($post_id, 'clinic_working_days', implode(',', $days));
    } else {
        delete_post_meta($post_id, 'clinic_working_days');
    }

    if (isset($_POST['clinic_start_time']))
        update_post_meta($post_id, 'clinic_start_time', sanitize_text_field($_POST['clinic_start_time']));
    if (isset($_POST['clinic_end_time']))
        update_post_meta($post_id, 'clinic_end_time', sanitize_text_field($_POST['clinic_end_time']));
}

// Shortcode: Doctor Schedule as Timetable
add_shortcode('webbook_all_schedules', 'webbook_display_all_schedules');
function webbook_display_all_schedules() {
    $args = [
        'post_type' => 'doctor',
        'posts_per_page' => -1,
        'orderby' => 'title',
        'order' => 'ASC'
    ];
    $doctors = new WP_Query($args);

    if (!$doctors->have_posts()) return '<p>No doctors found.</p>';

    $output = '<h2>Doctor Schedules</h2>';
    $output .= '<div class="webbook-schedules">';

    while ($doctors->have_posts()) : $doctors->the_post();
        $title = get_the_title();
        $days  = get_post_meta(get_the_ID(), 'clinic_working_days', true);
        $start = get_post_meta(get_the_ID(), 'clinic_start_time', true);
        $end   = get_post_meta(get_the_ID(), 'clinic_end_time', true);

        $day_list = $days ? explode(',', $days) : [];

        $output .= '<div class="doctor-box">';
        $output .= '<h3>' . esc_html($title) . '</h3>';
        $output .= '<table>';
        $output .= '<tr><th>Day</th><th>Start</th><th>End</th></tr>';

        foreach($day_list as $day){
            $output .= '<tr>';
            $output .= '<td>' . esc_html($day) . '</td>';
            $output .= '<td>' . esc_html($start) . '</td>';
            $output .= '<td>' . esc_html($end) . '</td>';
            $output .= '</tr>';
        }

        $output .= '</table>';
        $output .= '</div>';

    endwhile;

    wp_reset_postdata();
    $output .= '</div>';

    // CSS for page layout
    $output .= '<style>
        .webbook-schedules { display:flex; flex-wrap:wrap; gap:20px; }
        .doctor-box { border:1px solid #ddd; padding:15px; border-radius:5px; background:#f9f9f9; width:300px; }
        .doctor-box h3 { text-align:center; margin-top:0; }
        .doctor-box table { width:100%; border-collapse:collapse; margin-top:10px; }
        .doctor-box th, .doctor-box td { border:1px solid #ccc; padding:6px; text-align:center; }
        .doctor-box th { background:#eee; }
    </style>';

    return $output;
}


/* 6️⃣ Admin CSS for Checkboxes */
function clinic_admin_styles() {
    echo '<style>
        .doctor_schedule_checkbox label { margin-right:10px; }
    </style>';
}
add_action('admin_head', 'clinic_admin_styles');
// Get all doctor schedules structured by weekdays
function clinic_get_schedules() {
    $weekdays = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];
    $schedule = [];
    foreach ($weekdays as $day) {
        $schedule[$day] = []; // each day will contain doctors
    }

    $doctors = new WP_Query([
        'post_type' => 'doctor',
        'posts_per_page' => -1,
        'orderby' => 'title',
        'order' => 'ASC'
    ]);

    if ($doctors->have_posts()):
        while ($doctors->have_posts()): $doctors->the_post();
            $name = get_the_title();
            $days = get_post_meta(get_the_ID(), 'clinic_working_days', true);
            $start = get_post_meta(get_the_ID(), 'clinic_start_time', true);
            $end = get_post_meta(get_the_ID(), 'clinic_end_time', true);
            $days = $days ? explode(',', $days) : [];

            foreach($days as $day){
                $day = trim($day);
                if (in_array($day, $weekdays)){
                    $schedule[$day][] = $name . ' (' . $start . '-' . $end . ')';
                }
            }
        endwhile;
        wp_reset_postdata();
    endif;

    return $schedule;
}

// Shortcode to display full WebBook timetable
add_shortcode('webbook_all_schedules', 'clinic_display_webbook_schedule');
function clinic_display_webbook_schedule() {
    $schedule = clinic_get_schedules();
    $weekdays = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];

    // Find max rows
    $max_rows = 0;
    foreach($schedule as $day){
        $max_rows = max($max_rows, count($day));
    }

    $output = '<div class="webbook-dynamic-schedule">';
    $output .= '<table class="footer-schedule">';
    $output .= '<thead><tr>';
    foreach($weekdays as $day) $output .= '<th>' . esc_html($day) . '</th>';
    $output .= '</tr></thead><tbody>';

    for ($i = 0; $i < $max_rows; $i++){
        $output .= '<tr>';
        foreach($weekdays as $day){
            $output .= '<td>' . (isset($schedule[$day][$i]) ? esc_html($schedule[$day][$i]) : '/') . '</td>';
        }
        $output .= '</tr>';
    }

    $output .= '</tbody></table></div>';

    return $output;
}
// Shortcode for full timeline WebBook
add_shortcode('webbook_timeline', 'clinic_display_timeline_schedule');
function clinic_display_timeline_schedule() {
    // Get all doctors
    $doctors = new WP_Query([
        'post_type' => 'doctor',
        'posts_per_page' => -1,
        'orderby' => 'title',
        'order' => 'ASC'
    ]);

    if (!$doctors->have_posts()) return '<p>No doctors found.</p>';

    $doctor_list = [];
    while ($doctors->have_posts()) : $doctors->the_post();
        $doctor_list[] = [
            'name' => get_the_title(),
            'days' => array_map('trim', explode(',', get_post_meta(get_the_ID(), 'clinic_working_days', true))),
            'start' => get_post_meta(get_the_ID(), 'clinic_start_time', true),
            'end' => get_post_meta(get_the_ID(), 'clinic_end_time', true),
        ];
    endwhile;
    wp_reset_postdata();

    // Define time slots
    $time_slots = ['17:00','18:00','19:00','20:00','21:00','22:00','23:00'];

    // Build table
    $output = '<table class="webbook-timeline">';
    $output .= '<thead><tr><th>Time</th>';
    foreach($doctor_list as $doc) $output .= '<th>' . esc_html($doc['name']) . '</th>';
    $output .= '</tr></thead><tbody>';

    foreach($time_slots as $time){
        $output .= '<tr>';
        $output .= '<td>' . esc_html($time) . '</td>';

        foreach($doctor_list as $doc){
            // Check if this doctor is working at this time (ignoring day for simplicity)
            if ($time >= $doc['start'] && $time < $doc['end']) {
                $output .= '<td>Available</td>';
            } else {
                $output .= '<td>/</td>';
            }
        }

        $output .= '</tr>';
    }

    $output .= '</tbody></table>';

    // Optional: some basic styling
    $output .= '<style>
        .webbook-timeline { width:100%; border-collapse: collapse; margin-top:20px; }
        .webbook-timeline th, .webbook-timeline td { border:1px solid #ccc; padding:8px; text-align:center; }
        .webbook-timeline th { background:#eee; }
    </style>';

    return $output;
}
add_shortcode('webbook_full_grid', 'clinic_display_full_grid');
function clinic_display_full_grid() {
    // Weekdays
    $weekdays = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];

    // Time slots
    $time_slots = ['17:00','18:00','19:00','20:00','21:00','22:00','23:00'];

    // Get all doctors
    $doctors = new WP_Query([
        'post_type' => 'doctor',
        'posts_per_page' => -1,
        'orderby' => 'title',
        'order' => 'ASC'
    ]);

    if (!$doctors->have_posts()) return '<p>No doctors found.</p>';

    $doctor_list = [];
    while ($doctors->have_posts()) : $doctors->the_post();
        $doctor_list[] = [
            'name' => get_the_title(),
            'days' => array_map('trim', explode(',', get_post_meta(get_the_ID(), 'clinic_working_days', true))),
            'start' => get_post_meta(get_the_ID(), 'clinic_start_time', true),
            'end' => get_post_meta(get_the_ID(), 'clinic_end_time', true),
        ];
    endwhile;
    wp_reset_postdata();

    // Build table
    $output = '<div class="webbook-grid">';
    $output .= '<table class="webbook-schedule">';
    $output .= '<thead><tr><th>Time</th>';
    foreach ($weekdays as $day) $output .= '<th>' . esc_html($day) . '</th>';
    $output .= '</tr></thead><tbody>';

    foreach ($time_slots as $time) {
        $output .= '<tr>';
        $output .= '<td>' . esc_html($time) . '</td>';

        foreach ($weekdays as $day) {
            $cell_doctors = [];
            foreach ($doctor_list as $doc) {
                if (in_array($day, $doc['days']) && $time >= $doc['start'] && $time < $doc['end']) {
                    $cell_doctors[] = $doc['name'];
                }
            }
            if (!empty($cell_doctors)) {
                // Join names with comma
                $output .= '<td>' . implode(', ', $cell_doctors) . '</td>';
            } else {
                $output .= '<td>/</td>';
            }
        }

        $output .= '</tr>';
    }

    $output .= '</tbody></table></div>';

    // Optional: styling
    $output .= '<style>
        .webbook-schedule { width:100%; border-collapse: collapse; margin-top:20px; }
        .webbook-schedule th, .webbook-schedule td { border:1px solid #cf8a40; padding:8px; text-align:center; }
        .webbook-schedule th { background:#2e4a70; color:#fff; }
        .webbook-schedule td { background:#f0f2f2; color:#000; }
    </style>';

    return $output;
}
