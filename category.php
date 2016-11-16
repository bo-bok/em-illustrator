<?php

// category.php template controls the categories page

get_header(); ?>

  <?php echo category_description(); ?>

  <div class="table-container">
    <div class="table">

      <div class="table-row">

        <!-- category thumbnails: 3, 2, 1 -->
        <div class="table-cell">

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="category-page-thumbnail col-6 col-lg-4">
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
