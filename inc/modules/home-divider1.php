<?php
/**
 * File used for homepage hero content module
 *
 * @package WordPress
 */
?>

<!-- ==== HEADERWRAP ==== -->
<?php $bg_img = dwp_option('d1-img', false, 'url');

$bg_url = '';

if ($bg_img != '') {
        $bg_url = "background-image: url('" . $bg_img . "')";
}

?>

    <!-- ==== SECTION DIVIDER3 -->
		<section class="section-divider textdivider divider3" style="<?php echo $bg_url; ?>">
			<div class="container">
        <?php if (dwp_option('d1-content') != '') {
          echo dwp_option('d1-content');
        } ?>
			</div><!-- container -->
		</section><!-- section -->
