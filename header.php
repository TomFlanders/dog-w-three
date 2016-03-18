<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

  <style>
  #navmenu ul {margin: 0; padding: 0;
  	list-style-type: none; list-style-image: none; white-space: nowrap;}
  #navmenu li {display: inline;white-space: nowrap; }
  </style>

<?php if ( ! function_exists( '_wp_render_title_tag' ) ) { ?><title><?php wp_title( ); ?></title><?php } ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="/wp-content/themes/dog-w-three/w3.css">
<link rel="stylesheet" type="text/css" href="/wp-content/themes/dog-w-three/style.css">
<meta charset="UTF-8">
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<!-- title bar -->
  <div class="w3-teal w3-text-shadow w3-row" style="border: double;">
     <span class="w3-quarter">
<?php
$show_header_logo = true;
if($show_header_logo) { ?>
  <img src="/wp-content/themes/dog-w-three/image/logo.jpg" alt="site logo">
<?php } else { ?>
  &nbsp;
<?php } ?>
     </span>

<h1 class="w3-half w3-center w3-teal"><a style="text-decoration:none;" href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo('name'); ?></a></h1>

</div>

<!-- menu -->
<div id="navmenu" class="w3-container w3-center">
<ul class="menu">
  <?php wp_nav_menu( array( 'theme_location' => 'header-menu') );
  ?>
</ul>
  </div>

<!-- page -->
    <div class="w3-container w3-row w3-padding-small">

    <div class="w3-padding-small w3-col m9 l9">
