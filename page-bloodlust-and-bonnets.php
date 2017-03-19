<?php
  /*
    Template Name: Bloodlust and Bonnets Page
  */

get_header(); ?>

<div class="BB-title row">
  <div class="col-xs-12">
    <h1 class="BB-title-text"><?php wp_title('', true,''); ?></h1>
  </div>
</div>


<div class="BB-description row">
  <div class="col-xs-12">
    I originally wrote Bloodlust &amp; Bonnets in 2015 as a self-contained short story. In 2016 it was nominated for the Jonathan Cape/Graphica Short Story prize, and I’m now developing it into a webcomic series hosted on Webtoons and my Tumblr blog.
  </div>
</div>

<div class="BB-comic-full row">
  <div class="col-xs-12">
      <img class="BB-img" src="<?= get_template_directory_uri()?>/assets/bloodlust/bloodlustAndBonnets-progressive-1000px.jpg" />
  </div>
</div>

<div class="webtoons-link-container row">
  <div class="col-xs-12">
    <a class="webtoons-link" href="http://www.webtoons.com/en/challenge/bloodlust-bonnets/list?title_no=66172">To read the next chapter click here . . .</a>
  </div>
</div>

<?php get_footer(); ?>
