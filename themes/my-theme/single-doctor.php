<?php
/* 
Template Name: Hospital Doctors Introduction
*/
get_header();
?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylee/doctor-intro.css">

<div class="scroll"></div>

<section class="doctor-section">

  <?php
  $args = [
      'post_type' => 'doctor',
      'posts_per_page' => -1,
      'orderby' => 'title',
      'order' => 'ASC'
  ];

  $query = new WP_Query($args);

  if ($query->have_posts()) :
      while ($query->have_posts()) : $query->the_post();

          $image = get_the_post_thumbnail_url(get_the_ID(), 'medium') ?: 'https://via.placeholder.com/300x200?text=No+Image';
          $name  = get_the_title();
          $excerpt = wp_trim_words(get_the_excerpt(), 15, '...');
          $link = get_permalink(); // link to single doctor page
  ?>

      <div class="doctor-card">
        <a href="<?php echo esc_url($link); ?>">
          <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($name); ?>">
          <h3><?php echo esc_html($name); ?></h3>
          <p><?php echo esc_html($excerpt); ?></p>
        </a>
      </div>

  <?php
      endwhile;
      wp_reset_postdata();
  else :
      echo '<p>No doctors found.</p>';
  endif;
  ?>

</section>




<?php get_footer(); ?>
