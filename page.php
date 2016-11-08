<?php

// the page.php template is used when an individual page is queried.

get_header(); ?>

  <section class="row">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <h1><?php the_title(); ?></h1>
      <p><?php the_content(); ?></p>

    <?php endwhile; else : ?>

      <p><?php _e( 'Sorry, no posts matched your criteria.', 'treehouse-portfolio' ); ?></p>

    <?php endif; ?>

  </section>

<?php get_footer(); ?>
