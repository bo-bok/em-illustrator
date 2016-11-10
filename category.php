<?php

// category.php template controls the categories page

get_header(); ?>

<?php echo category_description(); ?>

<?php
  function search_filter($query) {
  if ( !is_admin() && $query->is_main_query() ) {
    if ($query->is_category) {
      $query->set('post_type', array( 'post', 'attachment' ) );
    }
  }
}
add_action('pre_get_posts','search_filter');

?>


<?php get_footer(); ?>












<!-- <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
  // WP Loop to display content, if there is any.
?>

  <h1><?php the_title(); ?></h1>
  <hr />

  <p><?php the_content(); ?></p>

<?php endwhile; endif; ?> -->
