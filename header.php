<!DOCTYPE html>

<html>

<head>
  <title><?php wp_title(); ?></title>
  <!-- swtiches title text to wp_title() function. Enables WP to display name of page it's on -->

  <?php wp_head(); ?>
  <!-- tells wp that we're about to be at end of head tag
        - if there's anything plugin or theme wants to output to this area, this is where is should be done
        - e.g. your scripts!  -->
</head>


<body>
  <div class="page-container">

    <!--  site header -->
  <header>
    <div class="header row">
        <div class="logo-container col-12">
          <a href="em-static-home.html"><img src="assets/graphics/em-logo.svg" /></a>
        </div>
    </div>

    <!-- navigation & social links-->
    <div class="nav-bar row">

      <!-- navigation -->

      <?php
        $defaults = array(
          'container' => false,
          'theme_location' => 'primary-menu', //tells wp where that menu lives
          'menu_class' => 'nav col-5'
        );

        wp_nav_menu( $defaults );
      ?>

      <!-- <div class="nav col-5">
        <ul>
          <li><a href="#em-static-about.html">About</a></li>
          <li><a href="#em-static-shop.html">Shop</a></li>
        </ul>
      </div> -->

      <!-- social media links -->
      <div class="social-links col-7">
        <div class="soc-link-GEN">

          <a href="https://twitter.com/emilyscartoons" title="keywords-here" target="blank">
            <img class="soc-link-icon" src="assets/graphics/twitter-icon.svg" />
          </a>

          <a href="https://en-gb.facebook.com/backgroundslytherin/" title="keywords-here" target="blank">
            <img class="soc-link-icon" src="assets/graphics/fb-icon.svg" />
          </a>

          <a href="http://emilyscartoons.tumblr.com/" title="keywords-here" target="blank">
            <img class="soc-link-icon" src="assets/graphics/tumblr-icon.svg" target="blank" />
          </a>

          <a href="https://www.instagram.com/emilyscartoons/" title="keywords-here" target="blank">
            <img class="soc-link-icon" src="assets/graphics/ig-icon.svg" />
          </a>

        </div>
      </div>

    </div>
  </header>
