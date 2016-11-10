<?php

 // this file is for:
  //  - enqueue theme stylesheets and scripts. see wp_enqueue_scripts.
  //  - enable theme features such as sidebars, navigation menus, post thumbnails, post formats, custom headers, custom backgrounds and others.
  //  - define functions used in several template files of your theme.
  //  - set up an options menu, giving site owners options for colors, styles, and other aspects of your theme.


// these functions add theme support for following:
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );


// this function makes WP recognise our menu
function register_theme_menus() {
  register_nav_menus(
    array(
      'primary-menu' => __( 'Primary Menu' ),
      'site-header-logo-link' => __( 'Site Header Logo Link' ),
      'social-media-menu' => __( 'Social Media Menu' )
    )
  );
}
add_action( 'init', 'register_theme_menus' );


// shows categories box on media editing page, meaning that you can attach categories to images
function wptp_add_categories_to_attachments() {
  register_taxonomy_for_object_type( 'category', 'attachment' );
}
add_action( 'init' , 'wptp_add_categories_to_attachments' );

// ===========================================================================
// function search_filter($query) {
// if ( !is_admin() && $query->is_main_query() ) {
//   if ($query->is_category() ) {
//     $query->set('post_type', array( 'post', 'attachments' ) );
//   }
// }
// echo "test";
// }
// add_action('pre_get_posts','search_filter');


function attachment_search( $query ) {
    if ( $query->is_search() ) {
       $query->set( 'post_type', array( 'post', 'attachment' ) );
       $query->set( 'post_status', array( 'publish', 'inherit' ) );
    }

   return $query;
}

echo "test";

add_filter( 'pre_get_posts', 'attachment_search' );

// ===========================================================================


 // this function loads the style (css) files
function em_theme_styles() {
  wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/css/normalize.css' );
  wp_enqueue_style( 'AdabiCondensedLight_font', '//db.onlinewebfonts.com/c/15898c1b4ff12cded84f74a011b62a91?family=Abadi+MT+Condensed+Light' );
  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'em_theme_styles' );


// this function loads the scripts (js), order is important
function em_theme_js() {
  wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/app.js', array('jquery'), '', true) ;
  // wp_enqueue_script( 'modernizr_js', get_template_directory_uri() . '/js/modernizr.js', '', '', false) ;
  // wp_enqueue_script( 'name_here', get_template_directory_uri() . '/path_to_file', array('of', 'dependencies'), 'set_version',  appear_in_footer_BOOLEAN);
}
add_action( 'wp_enqueue_scripts', 'em_theme_js' );
// we're saying, wordpress,when its time for you to enqueue these scripts,enqueue them from here
