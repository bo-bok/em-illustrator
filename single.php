<?php

// The main template. If your Theme provides its own templates, index.php must be present.

get_header(); ?>


  <section class="row">

    <div class="table-container">
      <div class="table-single">
        <!-- large image -->
        <div class="table-cell-single">

          <div class="image-container-single">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <!-- <h1><?php the_title(); ?></h1> -->
            <div class="single-image"><?php the_post_thumbnail( 'single-image' ); ?></div>
            <?php the_content(); ?>

            <?php endwhile; endif; ?>

          </div>

        </div>
      </div>
    </div>

      <p>test single.php</p>

      <li class="cat">in <?php the_category( ' ' ); ?></li>
      <li class="date ">on <?php the_time( 'F j, Y' ); ?></li>


      <div class=""><?php next_post_link( ); ?></div>
      <div class=""><?php previous_post_link( ); ?></div>

<!--  thoughts: table with 3 columns (one for prev link, middle for image, last for next link,)-->
<!--  issue: mobile performance: would be better to have links underneath the image at left and right, for more space -->
<!--  solution: use classes (display: none) & media queries to hide table cells on mobile. issue: overwriting classes which isn't
        ideal for performance! -->

        <!-- OR, can I solve this with 'responsive grid', i.e. col-lg col-sm col-md -->
  </section>

<?php get_footer(); ?>
