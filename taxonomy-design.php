<?php
/**
 *
 * Description: A design is a taxonomy that displays a collection of fabrics
 * (prints the title and featured image of each child page)
 *
 */

get_header(); ?>

<div class="row oatmeal sasha push-down-1">

  <div class="gallery-size-medium">

<?php


while (have_posts()) { the_post(); ?>

  <div class="col-md-4 text-center">
    <a href="<?php the_permalink(); ?>">
      <?php
        if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
          the_post_thumbnail('medium');
        } else {
          ?><img src="noexist" height="512" width="455" />
          <br>No featured image has been chosen for this fabric collection.<?php
        }
        ?>
      <p><?php the_title(); ?></p><br><br>
    </a>
  </div>

<?php } ?>

  </div>

  <div class="col-md-12">
    <br>
  </div>


</div>


<?php get_footer(); ?>
