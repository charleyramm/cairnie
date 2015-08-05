<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a carefully crafted introductory page.
 *
 */

get_header(); ?>

<style type="text/css">
.treeweave {
  background: #FFFFFF url(<?php echo get_stylesheet_directory_uri() ?>/treeweave.png) top left;
  background-repeat: no-repeat;
  background-position: left top;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  min-height: 820px;
}
.treeweave p{
    background: #BFB1A7 url(<?php echo get_stylesheet_directory_uri() ?>/sasha.png) top center;
    padding: 10px;
    margin-top: 128px;

}</style>

<div class="row treeweave push-down-1">
  <div class=" col-md-3 col-md-offset-8">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

    </div>
</div>


<?php get_footer(); ?>
