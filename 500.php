<?php
/**
 * The 500 template file.
 *
 */

get_header(); ?>

<!-- content area -->
<div class="w3-card-4 w3-round w3-padding-small">
<header class="w3-container w3-teal w3-round w3-text-shadow w3-large">
You Broke It!
</header>

<article class="w3-container">
<p>Something wonderful did not happen. Well, obviously we have failed you. </p>
<p>I've assigned the problem to the <i>Pelican of Broken Websites</i> so hopefully no one else will have to endure this horror.</p>
<div class="w3-container w3-center">
	<img src="/wp-content/themes/dog-w-three/image/404.jpg" alt="pelican">
</div>
</article>
<br/>
</div>
</div>
<?php
get_sidebar();
?>
</div>

<?php
get_footer();
?>
