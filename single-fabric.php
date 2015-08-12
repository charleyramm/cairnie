<?php
/**
 *
 * Description: A template that displays a single fabric ie. Rosa - leaf
 *
 */

get_header(); ?>

<!-- if the page has children: we want to display them in a gallery
  and suppress any DETAILS and THUMBNAIL that would otherwise be displayed on
  a single-fabric page. -->

  <?php
  $id = $post->ID;
  $args = array(
		'post_parent' => $id,
	);

  if ($children = get_children( $args )){
    echo '<p>this page has child pages</p>';
    foreach ($children as $child){
      $link = get_permalink($child->ID);
      echo "<a href='$link'>";
      echo get_the_post_thumbnail($child->ID, 'medium');
      echo "<p>$child->post_title</p>";
      echo "</a>";
      print_r( $child );
    }

  } else { ?>


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
<?php } //end if ?>


<?php get_footer(); ?>
