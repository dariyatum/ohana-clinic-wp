<?php
/* 
Template Name: Hospital Doctors Introduction
*/
get_header();
?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylee/doctor-intro.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>style.css">


<div class="scroll"></div>

<?php
// ✅ Correct pagination for PAGE template
$paged = get_query_var('paged');
if (!$paged) {
  $paged = get_query_var('page');
}
if (!$paged) {
  $paged = 1;
}

$args = [
  'post_type'      => 'doctor',
  'posts_per_page' => 8,
  'paged'          => $paged,
  'orderby'        => 'title',
  'order'          => 'ASC'
];

$query = new WP_Query($args);
?>

<section class="doctor-section">

<?php if ($query->have_posts()) : ?>
  <?php while ($query->have_posts()) : $query->the_post(); ?>

    <?php
      $image   = get_the_post_thumbnail_url(get_the_ID(), 'medium')
                 ?: 'https://via.placeholder.com/300x240?text=No+Image';
      $name    = get_the_title();
      $excerpt = wp_trim_words(get_the_excerpt(), 15, '...');
      $link    = get_permalink();
    ?>

    <div class="doctor-card">
      <a href="<?php echo esc_url($link); ?>">
        <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($name); ?>">
        <h3><?php echo esc_html($name); ?></h3>
        <p><?php echo esc_html($excerpt); ?></p>
      </a>
    </div>

  <?php endwhile; ?>
<?php else : ?>
  <p>No doctors found.</p>
<?php endif; ?>

</section>

<div class="pagination">
  <?php
    echo paginate_links([
      'base'      => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
      'format'    => '?paged=%#%',
      'current'   => $paged,
      'total'     => $query->max_num_pages,
      'mid_size'  => 2,
      'prev_text' => '« Prev',
      'next_text' => 'Next »',
    ]);
  ?>
</div>

<?php
wp_reset_postdata();
get_footer();
?>
