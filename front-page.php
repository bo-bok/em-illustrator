<?php get_header(); ?>

<!-- gallery grid system  -->
<div class="row">
  <div class="col-12 col-bkg">

    <div class="table-container-1">
    <div class="table">

      <div class="table-row">
        <div class="table-cell">
          <a href=""><img class="homepage-image" src="<?= get_template_directory_uri()?>/assets/homepage-images/1-slytherin-600x600px.png" /></a>
        </div>

        <div class="table-cell">
          <a href=""><img class="homepage-image" src="<?= get_template_directory_uri()?>/assets/homepage-images/2-published-work-600x600px.png" /></a>
        </div>
      </div>

      <div class="table-row">
        <div class="table-cell">
          <a href=""><img class="homepage-image" src="<?= get_template_directory_uri()?>/assets/homepage-images/3-cards-comics-600x600px.png" /></a>
        </div>
        <div class="table-cell">
          <a href=""><img class="homepage-image" src="<?= get_template_directory_uri()?>/assets/homepage-images/3-cards-comics-600x600px.png" /></a>
        </div>
      </div>

    </div>
  </div>

  </div>
</div>

<!-- use plugin to add image to category - wp term images -->
<?php get_footer(); ?>
