<?php
  /*
    Template Name: About Page
  */

// the page template. used when an individual page is queried.
get_header(); ?>

  <div class="about-container">

    <div class="about-column">
      <img src="<?= get_template_directory_uri()?>/assets/aboutpage-images/em-self-portrait--750px.png" />
    </div>

    <div class="about-column">

      <p>Emily is from Brussels and writes bios for herself in the third person cos it
       looks way more professional. She went to London to do a foundation degree in
       art &amp; design, instantly hated it, so decided to do a BA in Russian instead and
       spent a year living in a commune in the middle of the Russian forest.</p>

      <p>She graduated with a First from University College London in 2014, and now
      works full-time in an office and draws in her spare time. </p>

      <p>In 2016 Emily’s comic
      <a href="/index.php?p=123">'Bloodlust &amp; Bonnets’</a> was shortlisted for the prestigious
      Observer/Jonathan Cape Graphic Short Story Prize.</p>

      <p>If you&#39;d like to buy a print or card, get in touch at:
        <a href="mailto:info@emilymcgovern.com">info@emilymcgovern.com</a>
      </p>

    </div>

  </div>

<?php get_footer(); ?>
