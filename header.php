<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<?php if ( ! function_exists( '_wp_render_title_tag' ) ) { ?><title><?php wp_title( ); ?></title><?php } ?>
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta charset="UTF-8">
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- title bar -->
  <div class="w3-teal w3-text-shadow w3-row dogw3_titlebar dogw3_borderdouble">
<table>
<tr>
<td class="w3-teal w3-third">
  <?php the_custom_logo();?>
</td>
<td class="w3-teal w3-center w3-third">  <h1><a class="dogw3_title" href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo('name'); ?></a></h1>
<?php bloginfo('description'); ?>
</td>
<td class="w3-teal w3-third">
&nbsp;
</td>
</tr>
</table>
</div>

<!-- menu -->
 <div id="dogw3_navmenu" class="dogmenu">
  <?php wp_nav_menu( array( 'theme_location' => 'header-menu') );
  ?>
  </div>
