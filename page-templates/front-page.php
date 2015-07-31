<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a carefully crafted introductory page.
 *
 */

get_header(); ?>

<div class="row treeandweave">
	<div class="col-md-offset-8 col-md-3 push ">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>


	</div>
</div><!--row-->



<?php get_footer(); ?>
