<?php
/**
 *
 * Description: A template that displays a single fabric ie. Rosa - leaf
 *
 */

get_header(); ?>

<div class="row oatmeal sasha push-down-1">
  <div class="col-md-7 text-center">
    <?php
      if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
      	the_post_thumbnail('large');
      }
      ?><br><br>
  </div>
  <div class="col-md-5"><br>

      <p><?php the_title(); ?></p>

      <?php while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>

        <p><br>DETAILS</p>
        <dl class="dl-horizontal">
          <?php cairnie_the_attributes(); ?>
        </dl>


			<?php endwhile; // end of the loop. ?>

      <?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
    </div>
</div>



<?php get_footer(); ?>
