<?php

// category.php template controls the categories page

get_header(); ?>

<?php echo category_description(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
  // WP Loop to display content, if there is any.
?>

  <!-- <h1><?php the_title(); ?></h1> -->
<p>this is coming from category.php</p>

<div class="float-left">

  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>

</div>
<!-- <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large' ); ?></a> -->

<!-- <div class="alignleft"><?php next_posts_link( 'Next post' ); ?></div>
<div class="alignright"><?php previous_posts_link( 'Previous posts' ); ?></div> -->



<?php endwhile; endif; ?>



<?php get_footer(); ?>



 <!-- foreach ($terms as $key => $term) {
    print "table cell";
  if ($key % 2 === 1)
    print "</div><div class="table-row">"
  }
?>  -->
