<?php
/**
 * The sidebar containing the contact sidebar widget area.
 *
 * @package bootstrapwp
 */

if ( ! is_active_sidebar( 'contact' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area col-md-4 col-lg-4" role="complementary">
		<?php dynamic_sidebar( 'contact' ); ?>

</div><!-- #secondary -->

</div> <!-- .row -->
</div> <!-- .container -->
