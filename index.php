<?php

// The main template. If your Theme provides its own templates, index.php must be present.

get_header(); ?>


  <section class="row">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <h1><?php the_title(); ?></h1>
      <p><?php the_content(); ?></p>
      <p>test index.php</p>

      <li class="cat">in <?php the_category( ' ' ); ?></li>
      <li class="date ">on <?php the_time( 'F j, Y' ); ?></li>

    <?php endwhile; endif; ?>

  </section>

<?php get_footer(); ?>
