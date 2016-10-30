<!-- the page template. used when an individual page is queried. -->

<?php
  /*
    Template Name: About Page
  */
?>

<?php get_header(); ?>

<section class="row">
  <div class="small-12 columns text-center">
    <div class="leader">
      <h1>about page.php</h1>

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
      <?php endwhile; else : ?>

        <p><?php _e( 'Sorry, no posts matched your criteria.', 'treehouse-portfolio' ); ?></p>

      <?php endif; ?>

    </div>
  </div>
</section>

<?php get_footer(); ?>
