<div class="w3-tiny w3-col m3 l3">
<?php
get_search_form($echo = true);
?>
<div class="w3-card-4 w3-white w3-small w3-round w3-padding-tiny">

<?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
  <?php dynamic_sidebar( 'sidebar-1' ); ?>
<?php } ?>

</div>
</div>
