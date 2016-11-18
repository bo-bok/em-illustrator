<?php

// category.php template controls the categories page

get_header(); ?>

  <div class="row">
    <div class="col-12">

      <div class="category-description"><h1><?php echo category_description(); ?></h1></div>

    </div>
  </div>

  <div class="row">
    <div class="category-gallery-container col-sm-12">

      <!-- display category images -->
        <!-- <div class="table-container"> -->
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
        <!-- </div> -->

      </div>
  </div>

<?php get_footer(); ?>
