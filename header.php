<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

  <?php if ( is_front_page() ) { ?>
  
  <header id="top">
   
      <div class="hamburger">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>

    <div class="nav">
      <?php wp_nav_menu( array(
        'container' => false,
        'theme_location' => 'primary'
      )); ?> 
   
    </div>
  
  </header>
  
  <?php
  
    }
  
  else { ?>
    
     <header class="portfolio-header" id="top">
    
        <div class="hamburger">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>
     
      <div class="portfolio-nav">
        <?php wp_nav_menu( array(
          'container' => false,
          'theme_location' => 'portfolio-nav'
        )); ?> 
      </div>
     
      <h1 class="portfolio-header-title"><a href="http://mikewalker.co" class="header-home">Michael Walker</a></h1>
     
    </header>
    
      <?php
    }
 ?>





