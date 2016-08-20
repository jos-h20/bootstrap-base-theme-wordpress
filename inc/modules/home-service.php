<?php
/**
 * File used for homepage service module
 *
 * @package WordPress
 */
?>


<!-- ==== GREYWRAP ==== -->
<div class="greywrap">
  <div class="container">
  <div class="row">

<?php $page_posts = dwp_option('service-posts-per-page'); ?>
    <?php
    $the_query = new WP_Query( array('post_type' => 'service', 'posts_per_page' => $page_posts) ); ?>

    <?php if ( $the_query->have_posts() ) : ?>


          <!-- the loop -->
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <?php get_template_part( 'content', 'service' ); ?>


            <?php endwhile; ?>
            <!-- end of the loop -->


          <?php wp_reset_postdata(); ?>

        <?php else : ?>
          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
  </div><!-- row -->
</div>
</div><!-- greywrap -->
