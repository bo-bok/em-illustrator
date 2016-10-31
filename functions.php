<!-- // this file is for:
   - enqueue theme stylesheets and scripts. see wp_enqueue_scripts.
   - enable theme features such as sidebars, navigation menus, post thumbnails, post formats, custom headers, custom backgrounds and others.
   - define functions used in several template files of your theme.
   - set up an options menu, giving site owners options for colors, styles, and other aspects of your theme.
 -->

<?php

// these functions add theme support for x
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );


// this function makes WP recognise our menu
function register_theme_menus() {
  register_nav_menus(
    array(
      'primary-menu' => __( 'Primary Menu' )
    )
  );
}
add_action( 'init', 'register_theme_menus' );


 // this function loads the style (css) files
 function em_theme_styles() {
   wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/css/normalize.css' );
   wp_enqueue_style( 'AdabiCondensedLight_font', '//db.onlinewebfonts.com/c/15898c1b4ff12cded84f74a011b62a91?family=Abadi+MT+Condensed+Light' );
   wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );

 }
 add_action( 'wp_enqueue_scripts', 'em_theme_styles' );




// this function loads the scripts (js)
function em_theme_js() {
  wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/app.js', array('jquery'), '', true) ;
  // wp_enqueue_script( 'modernizr_js', get_template_directory_uri() . '/js/modernizr.js', '', '', false) ;
  // wp_enqueue_script( 'name_here', get_template_directory_uri() . '/path_to_file', array('of', 'dependencies'), 'set_version',  appear_in_footer_BOOLEAN);

  // order is important
}
add_action( 'wp_enqueue_scripts', 'em_theme_js' );
// we're saying, wordpress,when its time for you to enqueue these scripts,enqueue them from here






// END OF PHP BLOCK
?>
