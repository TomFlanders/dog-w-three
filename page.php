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

<!-- content area -->
<div class="w3-card-4 w3-round w3-padding-small">
		<?php

			/* Start the Loop */
			while ( have_posts() ) : the_post();
$format = get_post_format() ? : 'standard';
?>

<header class="w3-container w3-teal w3-round w3-text-shadow w3-large">
<span class="entry-title"<?php the_title(); ?></span>
</header>

<article class="w3-container">
<div id="post-><?php the_ID(); ?>" <?php post_class(); ?>>
<div class="post-featured-image"><?php the_post_thumbnail(); ?></div>
<?php the_content(); ?>

</div>
</article>
<?php
			endwhile;

?>

</div>
</div>
<?php
get_sidebar();
?>
</div>

<?php
get_footer();
?>
</body>
</html>
