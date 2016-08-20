<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package bootstrapwp
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer footer-columns" role="contentinfo">

			<div class="container footer-section">
				<div class="row">
					<?php if (dwp_option('footer-title') != '') {
		        echo '<h1 class="centered">';
		        echo dwp_option('footer-title');
		        echo '</h1><hr>';
		      } ?>
					<div class="col-lg-4">
							<?php dynamic_sidebar( 'footer-1' ); ?>
				  </div>
				  <div class="col-lg-4">
							<?php dynamic_sidebar( 'footer-2' ); ?>
			    </div>
				  <div class="col-lg-4">
							<?php dynamic_sidebar( 'footer-3' ); ?>
			    </div>
			</div><!-- .row -->
		</div><!-- .containr -->
		<div class="footerwrap">
			<div class="container">
				<?php if (dwp_option('custom-copywright') != '') {
					echo dwp_option('custom-copywright');
				} else { ?>
				<h4>Created by <a href="http://braginteractive.com">Brad Williams</a> - &copy; <?php _e('Copyright', 'bootstrapwp'); ?> <?php echo date('Y'); ?> </h4>
			<?php } ?>
			</div>
		</div>
	</footer><!-- #colophon -->

	</div><!-- #page -->



<?php wp_footer(); ?>

</body>
</html>
