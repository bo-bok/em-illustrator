<?php
  /*
    Template Name: Shop Page
  */

get_header(); ?>

<div class="row shop-blurb-container">
  <div class="col-xs-sm">

    <div class="shop-blurb-header">
      Justo Nullam Tortor Nibh
    </div>

    <div class="shop-blurb-text">
    Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec sed odio dui.
    </div>

  </div>
</div>

<div class="row">
  <div class="col-xs-12 col-md-6">
    <div class="shop-info-container">

      <div class="shop-info-row">
        <div class="shop-info-cell">
          <img class="shop-page-image" src="<?= get_template_directory_uri()?>/assets/shop-page-images/shop-etsy.jpg" />
        </div>
      </div>

      <div class="shop-info-row">
        <div class="shop-info-cell">
          <div class="shop-info-text">
            <p> - Fusce &amp; dapibus, tellus-accursus commodo, tortor mauris </p>
            <p> - Pellentesque, Mattis Sit </p>
            <p> - Integer posuere erat a ante venenatis dapibus posuere </p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="col-xs-12 col-md-6">
    <div class="shop-info-container">

      <div class="shop-info-row">
        <div class="shop-info-cell">
          <img class="shop-page-image" src="<?= get_template_directory_uri()?>/assets/shop-page-images/shop-soc6.jpg" />
        </div>
      </div>

      <div class="shop-info-row">
        <div class="shop-info-cell">
          <div class="shop-info-text">
            <p> - Donec sed odio dui. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. </p>
            <p> - Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit </p>
          </div>
        </div>
      </div>

    </div>

  </div>
</div>

<?php get_footer(); ?>
