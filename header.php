<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

<?php
if ( ! function_exists( '_wp_render_title_tag' ) ) {
	function theme_slug_render_title() {
?>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php
	}
	add_action( 'wp_head', 'theme_slug_render_title' );
}
?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="/wp-content/themes/dog-w-three/w3.css">
<link rel="stylesheet" type="text/css" href="/wp-content/themes/dog-w-three/style.css">

<meta charset="UTF-8">
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<!-- title bar -->
  <div class="w3-teal w3-text-shadow w3-row borderdouble">
<table cellspacing=0 cellpadding=0>
<tr>
<td class="w3-teal w3-third" height="100px">
  <?php the_custom_logo();?>
</td>
<td class="w3-teal w3-center w3-third" height="100px">  <h1><a class="nouline" href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo('name'); ?></a></h1>
<?php bloginfo('description'); ?>
</td>
<td class="w3-teal w3-third" height="100px">
&nbsp;
</td>
</tr>
</table>
</div>

<!-- menu -->
<div id="navmenu" class="dogmenu">
  <?php wp_nav_menu( array( 'theme_location' => 'header-menu') );
  ?>
  </div>
<!-- page -->
    <div class="w3-container w3-row w3-padding-small">

    <div class="w3-padding-small w3-col m9 l9">
