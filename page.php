<?php

// the page.php template is used when an individual page is queried.

get_header(); ?>

  <section class="row">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <h1><?php the_title(); ?></h1>
      <p><?php the_content(); ?></p>
      <p>test page.php</p>
    <?php endwhile; endif; ?>

  </section>

<?php get_footer(); ?>
