<?php

// front-page.php template controls the home page

get_header(); ?>

<!-- gallery grid system  -->
<div class="row">
  <div class="col-12 col-bkg">

    <div class="table-container">
      <div class="table">

        <div class="table-row">

          <!-- Background Slytherin -->
          <div class="table-cell">
            <?php
              // Get the ID of a given category
              $category_id = get_cat_ID( 'My Life As a Background Slytherin' );
              // Get the URL of this category
              $category_link = get_category_link( $category_id );
            ?>

            <!-- Print a link to this category -->
            <a href="<?php echo esc_url( $category_link ); ?>" title="My Life As a Background Slytherin">
              <img class="homepage-image" src="<?= get_template_directory_uri()?>/assets/homepage-images/1-slytherin-600x600px.png" />
            </a>
          </div>

          <!-- Published Work -->
          <div class="table-cell">
            <?php
              $category_id = get_cat_ID( 'Published Work' );
              $category_link = get_category_link( $category_id );
            ?>

            <a href="<?php echo esc_url( $category_link ); ?>" title="Published Work">
              <img class="homepage-image" src="<?= get_template_directory_uri()?>/assets/homepage-images/2-published-work-600x600px.png" />
            </a>
          </div>

        </div>

        <div class="table-row">

          <!-- Cards & Comics -->
          <div class="table-cell">
            <?php
              $category_id = get_cat_ID( 'Cards + Comics' );
              $category_link = get_category_link( $category_id );
            ?>

            <a href="<?php echo esc_url( $category_link ); ?>" title="Cards and Comics">
              <img class="homepage-image" src="<?= get_template_directory_uri()?>/assets/homepage-images/3-cards-comics-600x600px.png" />
            </a>
          </div>

          <!-- Illustrations -->
          <div class="table-cell">
            <?php
              $category_id = get_cat_ID( 'Illustrations' );
              $category_link = get_category_link( $category_id );
            ?>

            <a href="<?php echo esc_url( $category_link ); ?>" title="Cards and Comics">
              <img class="homepage-image" src="<?= get_template_directory_uri()?>/assets/homepage-images/4-illustrations-600x600px.png" />
            </a>
          </div>

        </div>

      </div>
    </div>

  </div>
</div>

<?php get_footer(); ?>
