<?php
/*
Template Name: WebBook Page
*/
get_header(); // Loads header.php
?>

<section class="reservation-section">
</section>

<!-- Display all doctor schedules from plugin -->
<section class="doctor-schedules">
    <div class="container">
        <?php echo do_shortcode('[webbook_all_schedules]'); ?>
    </div>
</section>

<?php get_footer(); // Loads footer.php ?>
