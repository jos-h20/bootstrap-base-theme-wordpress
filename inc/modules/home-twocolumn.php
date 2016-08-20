<?php
/**
 * File used for homepage two column content module
 *
 * @package WordPress
 */
?>

<!-- ==== ABOUT ==== -->
<div class="container wrap-section">
  <div class="row">
    <?php if (dwp_option('tc-title') != '') {
      echo '<h1 class="centered">';
      echo dwp_option('tc-title');
      echo '</h1><hr>';
    } ?>


    <div class="col-lg-6">
      <?php if (dwp_option('tc-left') != '') {
        echo dwp_option('tc-left');
      } ?>
    </div><!-- col-lg-6 -->

    <div class="col-lg-6">
      <?php if (dwp_option('tc-right') != '') {
        echo dwp_option('tc-right');
      } ?>
    </div><!-- col-lg-6 -->
  </div><!-- row -->
</div><!-- container -->
