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

<div class="w3-card-4 w3-round w3-padding-small">
		<?php

			/* Start the Loop */
			while ( have_posts() ) : the_post();
$format = get_post_format() ? : 'standard';
?>

<article class="w3-container" style="margin: 5px 0px 5px 0px;">
<div id="post-><?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="w3-container w3-teal w3-round w3-text-shadow w3-large">
  <span class="entry-title"><?php the_title(); ?></span>
  </header>
<p></p>
<div class="post-featured-image"><?php the_post_thumbnail(); ?></div>
<?php the_content(); ?>
<?php wp_link_pages( $paging_defaults ); ?>
<?php

$cargs = array(
	'post_id' => get_the_ID()
);
$comments = get_comments($cargs);

?>
<ol class="w3-sand w3-small">
<?php wp_list_comments('', $comments); ?>
</ol>
<div class="w3-small">
<?php next_comments_link() ?>
<?php previous_comments_link(); ?>

<?php comments_template(); ?>
<?php
	comment_form();
?>
</div>
<div class="w3-small"><?php the_tags("Tags: ", ",", " ");?>
 - Author: <span class="vcard author"><span class="fn"><?php the_author(); ?></span></span>
 - Published: <span class="date updated published"><?php the_date(); ?></span>
</div>
</div>
</article>
<br/>
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
