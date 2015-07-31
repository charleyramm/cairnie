<?php get_header(); ?>

<div class="row oatmeal push-down-1">
  <div class=" col-md-6 col-md-offset-3">
		<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'content', 'page' ); ?>
		<?php endwhile; // end of the loop. ?>
  </div>
</div>

<?php get_footer(); ?>
