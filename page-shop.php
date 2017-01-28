<?php
  /*
    Template Name: Shop Page
  */

get_header(); ?>

<div class="row shop-blurb-container">
  <div class="col-xs-sm">

    <div class="shop-blurb-header">
      Why two separate shops?
    </div>

    <div class="shop-blurb-text">
      I run my Easy print shop personally - packaging &amp; posting the items myself. Society6 is a website that provides made-to-order items that I don’t have the resources to make right now, such as mugs, t-shirts and phone cases (but they take a bigger cut of the profits). So choose a shop based on what you are looking for!
    </div>

  </div>
</div>

<div class="row">
  <div class="col-xs-12 col-md-6">
    <div class="shop-info-container">

      <div class="shop-info-row">
        <div class="shop-info-cell">

          <a href="https://www.etsy.com/uk/shop/emilyscartoons" target="blank">
            <img class="shop-page-image" src="<?= get_template_directory_uri()?>/assets/shop-page-images/shop-etsy.jpg" /></a>

        </div>
      </div>


      <div class="shop-info-row">
        <div class="shop-info-cell">
          <div class="shop-info-text">
            <p> - High quality signed &amp; numbered A4 prints and greeting cards </p>
            <p> - Handmade cards </p>
            <p> - Each package includes a handwritten, personalised thank you note from me! </p>
            <p> - COMING SOON: Commissions! You can ask me to draw a personalised card or picture </p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="col-xs-12 col-md-6">
    <div class="shop-info-container">

      <div class="shop-info-row">
        <div class="shop-info-cell">

          <a href="https://society6.com/emilyscartoons" target="blank">
            <img class="shop-page-image" src="<?= get_template_directory_uri()?>/assets/shop-page-images/shop-soc6.jpg" /></a>

        </div>
      </div>

      <div class="shop-info-row">
        <div class="shop-info-cell">
          <div class="shop-info-text">
            <p> - Wide variety of items including mugs, t-shirts, notebooks and more </p>
            <p> - Wide variety of items including mugs, t-shirts, notebooks and more </p>
            <p> - Several different designs available for all items </p>
            <p> - But - items are not made or sent by me, so no personalised or signed items here</p>


          </div>
        </div>
      </div>

    </div>

  </div>
</div>

<?php get_footer(); ?>
