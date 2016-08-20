<?php
/**
 * The template used for displaying page content in service items
 *
 * @package bootstrapwp
 */
?>

<!-- SERVICE ITEM -->
<div class="col-lg-4 callout">
	<?php if(rwmb_meta('dwp_service_icon') != '') {
		$icon = rwmb_meta('dwp_service_icon');
	} ?>


	<i class="fa fa-<?php echo $icon; ?>"></i>
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
</div>
