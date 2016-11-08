<!DOCTYPE html>

<html>

  <head>
    <title><?php wp_title(); ?></title>
    <!-- switches title text to wp_title() function. Enables WP to display
         name of page it's on -->

    <?php wp_head(); ?>
    <!-- tells wp that we're about to be at end of head tag
          - if there's anything plugin or theme wants to output to this area,
           this is where is should be done - e.g. your scripts!  -->
  </head>


  <body <?php body_class(); ?>>
    <div class="page-container">

      <!--  SITE HEADER -->
      <!-- ================================================================ -->
      <header>
        <div class="header row">
            <div class="logo-container col-12">
              <!-- <a href="em-static-home.html"><img src="assets/graphics/em-logo.svg" /></a> -->


              <?php
                $defaults = array(
                  'container' => false,
                  'theme_location' => 'site-header-logo-link', //tells wp where that menu lives
                  'menu_class' => 'logo-img col-12'
                );

                wp_nav_menu( $defaults );
              ?>

            </div>
        </div>


        <!-- navigation & social links row-->
        <div class="nav-bar row">

          <!-- Displays primary navigation -->
          <?php
            $defaults = array(
              'container' => false,
              'theme_location' => 'primary-menu', //tells wp where menu lives
              'menu_class' => 'nav col-5'
            );

            wp_nav_menu( $defaults );
          ?>


          <!-- social media links -->
          <div class="social-links col-7">

              <a href="https://twitter.com/emilyscartoons" title="keywords-here" target="blank">
                <img class="soc-link-icon" src="<?= get_template_directory_uri()?>/assets/graphics/twitter-icon.svg" />
              </a>

              <a href="https://en-gb.facebook.com/backgroundslytherin/" title="keywords-here" target="blank">
                <img class="soc-link-icon" src="<?= get_template_directory_uri()?>/assets/graphics/fb-icon.svg" />
              </a>

              <a href="http://emilyscartoons.tumblr.com/" title="keywords-here" target="blank">
                <img class="soc-link-icon" src="<?= get_template_directory_uri()?>/assets/graphics/tumblr-icon.svg" target="blank" />
              </a>

              <a href="https://www.instagram.com/emilyscartoons/" title="keywords-here" target="blank">
                <img class="soc-link-icon" src="<?= get_template_directory_uri()?>/assets/graphics/ig-icon.svg" />
              </a>

          </div>

        </div>
      </header>
