<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head><?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/components/nav2.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/components/nav.css">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/components/header-back.css">
    <link rel="stylesheet" href="/components/nav2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body <?php body_class(); ?>>
 <div class="headerr">
<header>
<div class="nav__brand"><img src="https://i.ibb.co/6R0RqrKg/Chat-GPT-Image-Dec-25-2025-09-00-38-AM.png" alt=""></div>
<?php wp_nav_menu(['theme_location'=>'primary']); ?>
</header>
<nav class="header">
  <div class="header-left">
    </a>
<i class="fa-solid fa-moon icon"></i>
  </div>

  <div class="header-right">
    <a href="<?php echo site_url('/webbook'); ?>"><i class="fa-solid fa-calendar icon"></i></a>
    <div class="language">
      <span>EN</span>
      <i class="fa-solid fa-globe icon"></i>
    </div>

  </div>
</nav>
</div> 
<main>