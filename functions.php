<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */

 add_theme_support( 'post-formats', array( 'aside', 'audio', 'image', 'status', 'video' ) );
if ( is_singular() ) wp_enqueue_script( "comment-reply" );
function theme_prefix_setup() {

	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-width' => true,
	) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );

add_action( 'wp_enqueue_scripts', 'dogw3_enqueue_styles' );


function dogw3_enqueue_styles() {
  $template         = str_replace( '%2F', '/', rawurlencode( get_template() ) );
  $theme_root_uri   = get_theme_root_uri( $template );

  wp_register_style( 'dogw3_customstyle', "$theme_root_uri/$template/custom-editor-style.css" );
	wp_enqueue_style( 'dogw3_customstyle' );

  wp_register_style( 'w3_style', "$theme_root_uri/$template/w3.css" );
    wp_enqueue_style( 'w3_style');

  wp_register_style( 'dogw3_style', "$theme_root_uri/$template/style.css" );
  wp_enqueue_style( 'dogw3_style');
}


function dogw3_widgets_init() {

	register_sidebar( array(
		'name' => __( 'Right Sidebar', 'dog-w-three' ),
		'id' => 'sidebar-1',
		'description' => __( 'Right sidebar which appears on all posts and pages.', 'dog-w-three' ),
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'after_widget' => '</div>',
		'before_title' => ' <p class="w3-teal w3-round w3-text-shadow" style="padding-left: 5px">',
		'after_title' => '</p>',
	) );

}
add_action( 'widgets_init', 'dogw3_widgets_init' );

if ( ! isset( $content_width ) ) {
	$content_width = 1200;
}

function dogw3_setup() {
  $args = array('true');
  add_theme_support( 'post-thumbnails', array( 'post', 'page', 'movie' ) );
  add_theme_support( "title-tag" );
  add_theme_support( "custom-header", $args );
  add_theme_support( "custom-background", $args );
  add_theme_support( 'automatic-feed-links' );
}
add_action( 'after_setup_theme', 'dogw3_setup' );

/* paging settings */
$paging_defaults = array(
  'before'           => '<p>Pages:',
  'after'            => '</p>',
  'link_before'      => '',
  'link_after'       => '',
  'next_or_number'   => 'number',
  'separator'        => ' ',
  'nextpagelink'     => 'Next page',
  'previouspagelink' => 'Previous page',
  'pagelink'         => '%',
  'echo'             => 1
);

/* menu supprot */
function register_dogw3_menu() {
  register_nav_menu('header-menu','Header Menu');
}
add_action( 'init', 'register_dogw3_menu' );

?>
