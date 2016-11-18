<?php
  /*
    Template Name: About Page
  */
?>

<?php
// the page template. used when an individual page is queried.
get_header(); ?>

  <div class="row">
    <div class="col-md-6 col-bkg">

      <?php query_posts('cat=10'); while (have_posts()) : the_post(); ?>

        <div class="table-cell left-box-about-image">
          <div class="about-portrait-image"><?php the_post_thumbnail( 'about-portrait-img' ); ?></div>
        </div>

    </div>

    <div class="col-md-6">
      <div class="table-cell right-box-about-text">
        <div class="about-text">
          <?php the_content(); ?>
        </div>
      </div>
    </div>

      <?php endwhile; ?>

    	<?php wp_reset_query(); ?>

  </div>


<?php get_footer(); ?>
