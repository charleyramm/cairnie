<?php
/**
 * Template Name: Default darker brown 
 *
 * Description: A page template that provides a carefully crafted introductory page.
 *
 */

get_header(); ?>

<div class="row oatmeal sasha push-down-1">
  <div class=" col-md-6 col-md-offset-3">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

    </div>
</div>


<?php get_footer(); ?>
