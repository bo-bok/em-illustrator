<?php
  /*
    Template Name: Shop Page
  */

get_header(); ?>

<div class="row test-row">
  <div class="col-xs-sm">
    Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec sed odio dui.
  </div>
</div>

<div class="row test-row">
  <div class="col-xs-12 col-md-6 test-col">
    <div class="shop-table">

      <div class="shop-table-row">
        <div class="shop-table-cell">
          <img class="homepage-image" src="<?= get_template_directory_uri()?>/assets/homepage-images/4-illustrations-600x600px.png" />
        </div>
      </div>

      <div class="shop-table-row">
        <div class="shop-table-cell">
          Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec sed odio dui. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Donec ullamcorper nulla non metus auctor fringilla.
        </div>
      </div>

    </div>
  </div>

  <div class="col-xs-12 col-md-6 test-col">
    <div class="shop-table">

      <div class="shop-table-row">
        <div class="shop-table-cell">
          <img class="homepage-image" src="<?= get_template_directory_uri()?>/assets/homepage-images/3-cards-comics-600x600px.png" />
        </div>
      </div>

      <div class="shop-table-row">
        <div class="shop-table-cell">
          Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec sed odio dui. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Donec ullamcorper nulla non metus auctor fringilla.
        </div>
      </div>

    </div>

  </div>
</div>

<?php get_footer(); ?>
