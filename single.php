<?php
// The main template. If your Theme provides its own templates, index.php must be present.
get_header(); ?>


  <section class="row">

    <div class="single-main-image-container col-md-8 col-md-offset-2">

      <div class="image-container-single">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="single-image"><?php the_post_thumbnail( 'single-image' ); ?></div>
        <?php the_content(); ?>

        <?php endwhile; endif; ?>

      </div>
    </div>

    <div class="col-xs-12">
      <div class="single-prev-post">
        <div class="prev-post-link">
          <?php next_post_link( '%link', '<img src="' .get_bloginfo("template_directory")
           . '/assets/graphics/back-arrow.svg" />', TRUE ); ?>
         </div>
      </div>

      <div class="single-next-post">
        <div class="next-post-link">
          <?php previous_post_link( '%link',
           '<img src="' .get_bloginfo("template_directory")
           . '/assets/graphics/front-arrow.svg" />', TRUE ); ?>
         </div>
      </div>

    </div>
  </section>

  <div class="row">
    <div class="return-to-cat-page">
      <div class="cat">back to <?php the_category( ' ' ); ?></div>
    </div>
  </div>

<?php get_footer(); ?>
