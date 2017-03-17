<?php
/**
 * The main template file.
 *
 */

 if (function_exists('get_header')) {
 get_header();
 } else {
 die();
 }
 ?>

<!-- main content area -->
<div class="w3-padding-small w3-card-4 w3-round">
		<?php

			/* Start the Loop */
			while ( have_posts() ) : the_post();
$format = get_post_format() ? : 'standard';
?>

<header class="w3-container w3-teal w3-round w3-text-shadow w3-large">
<?php the_title(); ?>
</header>

<article class="w3-container">
<div id="post-><?php the_ID(); ?>" <?php post_class(); ?>>
<div class="post-featured-image"><?php the_post_thumbnail(); ?></div>
<?php the_content(); ?>
<?php wp_link_pages( $paging_defaults ); ?>

<div class="w3-small"><?php the_tags("Tags: ", ",", " | ");?>
<a href="<?php the_permalink() ?>"><span class="w3-smaller">
	<?php comments_number( __('Comments (0)','dog-w-three'), __('Comments (1)','dog-w-three'), __('Comments (%)','dog-w-three') ); ?>
</span></a>
</div>
</div>
</article>
<br/>
<?php
			endwhile;

?>
<!-- pagination -->
<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>

</div>
</div>
<!-- side bar -->
<?php
get_sidebar();
?>
</div>

<!-- footer -->
<?php
get_footer();
?>
</body>
</html>
