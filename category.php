<?php

// category.php template controls the categories page

get_header(); ?>

  <?php echo category_description(); ?>

  <div class="table-container">
    <div class="table-category">

      <div class="table-row-category">

        <!-- category thumbnails: 3 medium + screen , 2 small screen, 1 x-small screen -->
        <div class="table-cell-category">

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="category-page-thumbnail col-sm-6 col-md-4">
              <a class="category-page-thumbnail-image" href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail( 'category-thumb' ); ?>
              </a>
            </div>

          <?php endwhile; endif; ?>

        </div>
      </div>

    </div>
  </div>




  <div class="row">
    <p>this is coming from category.php</p>
  </div>

<!-- simple table like that of font-page.phpc -->
<?php get_footer(); ?>
