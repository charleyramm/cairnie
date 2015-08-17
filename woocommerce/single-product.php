<?php get_header(); ?>


<div class="row oatmeal push-down-1">

  <div class="col-md-7 text-center">

    <?php
      if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
      	the_post_thumbnail('large');
      }
      ?><br><br>
  </div>
  <div class="col-md-5"><br>

	<?php
		/**
		 * woocommerce_before_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

    <p><?php the_title(); ?></p>

    <?php while ( have_posts() ) : the_post(); ?>

      <?php the_content(); ?>

        <p><br>DETAILS</p>
        <dl class="dl-horizontal">
          <?php //cairnie_the_attributes(); ?>
        </dl>

		<?php wc_get_template_part( 'content', 'single-product' ); ?>
      
      <?php endwhile; // end of the loop. ?>

<?php
		/**
		 * woocommerce_after_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>


	<?php
		/**
		 * woocommerce_sidebar hook
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action( 'woocommerce_sidebar' );
	?>

      <?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>

    </div>


  </div><!-- close row --> 
</div><!-- close the other thing, container -->

<?php get_footer(); ?>



