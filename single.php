<?php

// The main template. If your Theme provides its own templates, index.php must be present.

get_header(); ?>


  <section class="row">
    <div class="image-container-single">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <h1><?php the_title(); ?></h1>
      <div class="single-image"><?php the_post_thumbnail( 'single-image' ); ?></div>
      <?php the_content(); ?>


    </div>

      <p>test single.php</p>

      <li class="cat">in <?php the_category( ' ' ); ?></li>
      <li class="date ">on <?php the_time( 'F j, Y' ); ?></li>


      <div class="alignleft"><?php next_post_link( ); ?></div>
      <div class="alignright"><?php previous_post_link( ); ?></div>

    <?php endwhile; endif; ?>
  </section>

<?php get_footer(); ?>
