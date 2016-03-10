<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */

 add_theme_support( 'post-formats', array( 'aside', 'audio', 'image', 'status', 'video' ) );
if ( is_singular() ) wp_enqueue_script( "comment-reply" );

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

function custom_theme_setup() {
  $args = array('true');
  add_theme_support( 'post-thumbnails', array( 'post', 'page', 'movie' ) );
  add_theme_support( "title-tag" );
  add_theme_support( "custom-header", $args );
  add_theme_support( "custom-background", $args );
  add_theme_support( 'automatic-feed-links' );
}
add_action( 'after_setup_theme', 'custom_theme_setup' );

function my_theme_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', 'my_theme_add_editor_styles' );

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
function register_my_menu() {
  register_nav_menu('header-menu','Header Menu');
}
add_action( 'init', 'register_my_menu' );

?>
