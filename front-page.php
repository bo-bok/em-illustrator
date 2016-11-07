<!-- The front page template. -->
<!-- see fton-page.php if php loop is needed -->

<?php get_header(); ?>


<!-- gallery grid system  -->
<div class="row">
  <div class="col-12 col-bkg">

    <div class="table-container">

      <div class="table-row">
        <div class="table-cell right-align">
          <a href=""><img class="homepage-image" src="assets/homepage-images/1-slytherin-600x600px.png" /></a>
        </div>
        <div class="table-cell left-align">
          <a href=""><img class="homepage-image" src="assets/homepage-images/2-published-work-600x600px.png" /></a>
        </div>
      </div>

      <div class="table-row">
        <div class="table-cell right-align">
          <a href=""><img class="homepage-image" src="assets/homepage-images/3-cards-comics-600x600px.png" /></a>
        </div>
        <div class="table-cell left-align">
          <a href=""><img class="homepage-image" src="assets/homepage-images/3-cards-comics-600x600px.png" /></a>
        </div>
      </div>

    </div>

  </div>
</div>

<!-- gallery grid system  -->
<!-- <div class="row">
  <div class="col-12 col-bkg">

    <div class="table-container">

      <div class="table-row">
        <div class="table-cell right-align">
          <a href="<?php the_permalink(); ?>"><img class="homepage-image" src="<?php the_post_thumbnail(); ?>" /></a>
        </div>
        <div class="table-cell left-align">
          <a href="<?php the_permalink(); ?>"><img class="homepage-image" src="<?php the_post_thumbnail(); ?>" /></a>
        </div>
      </div>

      <div class="table-row">
        <div class="table-cell right-align">
          <a href="<?php the_permalink(); ?>"><img class="homepage-image" src="<?php the_post_thumbnail(); ?>" /></a>
        </div>
        <div class="table-cell left-align">
          <a href="<?php the_permalink(); ?>"><img class="homepage-image" src="<?php the_post_thumbnail(); ?>" /></a>
        </div>
      </div>

    </div>

  </div>
</div> -->

<?php get_footer(); ?>
