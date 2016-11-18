<?php
  /*
    Template Name: About Page
  */
?>

<?php
// the page template. used when an individual page is queried.
get_header(); ?>

<!-- <div class="about-page-container"> -->
  <div class="row">

    <div class="col-md-6 image-box-container">
      <div class="left-box-about-image">
        <img class="about-portrait-image" src="<?= get_template_directory_uri()?>/assets/aboutpage-images/em-self-portrait--750px.png" />
      </div>
    </div>

    <div class="col-md-6">
      <div class="table-cell right-box-about-text">
        <div class="about-text">

          <p>Emily is from Brussels and writes bios for herself in the third person cos it
           looks way more professional. She went to London to do a foundation degree in
           art &amp; design, instantly hated it, so decided to do a BA in Russian instead and
           spent a year living in a commune in the middle of the Russian forest.</p>

          <p>She graduated with a First from University College London in 2014, and now
          works full-time in an office and draws in her spare time.</p>

          <p>If you&#39;d like to buy a print or card, get in touch at: info@emilymcgovern.com</p>

        </div>
      </div>
    </div>

  </div>
<!-- </div> -->

<?php get_footer(); ?>
