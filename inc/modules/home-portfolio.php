<?php
/**
 * File used for homepage portfolio module
 *
 * @package WordPress
 */
?>


<!-- ==== PORTFOLIO ==== -->
<div class="container wrap-section">

  <div class="row">
    <div class="row">
      <?php if (dwp_option('portfolio-title') != '') {
        echo '<h1 class="centered">';
        echo dwp_option('portfolio-title');
        echo '</h1><hr>';
      } ?>
  </div><!-- /row -->
  <div class="container">
  <div class="row">

<?php $page_posts = dwp_option('portfolio-posts-per-page'); ?>
    <?php
    $the_query = new WP_Query( array('post_type' => 'portfolio', 'posts_per_page' => $page_posts) ); ?>

    <?php if ( $the_query->have_posts() ) : ?>


          <!-- the loop -->
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <?php get_template_part( 'content', 'portfolio' ); ?>


            <?php endwhile; ?>
            <!-- end of the loop -->


          <?php wp_reset_postdata(); ?>

        <?php else : ?>
          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>


      </div><!-- /row -->
    </div><!-- /container -->
</div><!-- /container -->
