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

          <div class="logo-container col-sm-12">
            <a href="<?php echo esc_url(home_url("/"))?>">
              <img class="em-header-logo"
              src="<?= get_template_directory_uri()?>/assets/graphics/em-logo.svg" alt="<?php echo esc_attr(get_bloginfo( 'name' )) ?>"/></a>
          </div>

        <div class="line-break-header col-sm-12">
           <hr />
         </div>

      </div>


      <!-- navigation & social links row-->
      <div class="nav-bar row">

        <!-- Displays primary navigation -->
        <?php
          $defaults = array(
            'container' => false,
            'theme_location' => 'primary-menu', //tells wp where menu lives
            'menu_class' => 'nav col-sm-5 col-md-7'
          );

          wp_nav_menu( $defaults );
        ?>


        <!-- social media links -->
        <div class="social-links col-sm-7 col-md-5">

            <div class="table-social-links">

              <div class="table-row-social-links">

                <!-- Background Slytherin -->
                <div class="table-cell-social-links">
                  <a href="https://twitter.com/emilyscartoons" target="blank"
                    title="keywords-here">
                      <img class="soc-link-icon"
                        src="<?= get_template_directory_uri() ?>/assets/graphics/twitter-icon.svg" /></a>
                </div>

                <div class="table-cell-social-links">
                  <a href="https://en-gb.facebook.com/backgroundslytherin/" target="blank"
                    title="keywords-here">
                      <img class="soc-link-icon"
                        src="<?= get_template_directory_uri() ?>/assets/graphics/fb-icon.svg" /></a>
                </div>

                <div class="table-cell-social-links">
                  <a href="http://emilyscartoons.tumblr.com/" target="blank"
                    title="keywords-here">
                      <img class="soc-link-icon"
                      src="<?= get_template_directory_uri() ?>/assets/graphics/tumblr-icon.svg" /></a>
                </div>

                <div class="table-cell-social-links">
                  <a href="https://www.instagram.com/emilyscartoons/" target="blank"
                   title="keywords-here">
                    <img class="soc-link-icon"
                      src="<?= get_template_directory_uri() ?>/assets/graphics/ig-icon.svg" /></a>
                </div>

              </div>

            </div>

          </div>

      </div>

    </header>

<div id="content">
