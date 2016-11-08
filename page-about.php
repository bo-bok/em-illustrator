<?php
  /*
    Template Name: About Page
  */
?>

<?php
// the page template. used when an individual page is queried.
get_header(); ?>

<!-- <section class="row">
  <div class="small-12 columns text-center">
    <div class="leader">
      <h1>about page.php</h1>

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
      <?php endwhile; else : ?>

        <p><?php _e( 'Sorry, no posts matched your criteria.', 'treehouse-portfolio' ); ?></p>

      <?php endif; ?>

    </div>
  </div>
</section> -->


<!--  PAGE BODY
============================================================= -->
    <!-- gallery grid system  -->
    <div class="row">
      <div class="col-12 col-bkg">

        <div class="table-container">
          <div class="table">

            <div class="table-row">

              <div class="table-cell left-box-about-image">
                <img class="about-portrait-image" src="assets/aboutpage-images/em-self-portrait.png" />
              </div>

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
        </div>

      </div>
    </div>


<?php get_footer(); ?>
