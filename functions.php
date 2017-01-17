<?php

// add theme support for menus:
add_theme_support( 'menus' );
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );

// set custom image sizes
add_image_size( 'category-thumb', 500, 500, true );
add_image_size( 'sgl-image', 1000, 99999);
add_image_size( 'about-portrait-img', 700, 700);

// this function makes WP recognise our menu(s)
function register_theme_menus() {
  register_nav_menus(
    array(
      'primary-menu' => __( 'Primary Menu' ),
    )
  );
}
add_action( 'init', 'register_theme_menus' );


// shows categories box on media editing page, meaning that you can attach categories to images
function wptp_add_categories_to_attachments() {
  register_taxonomy_for_object_type( 'category', 'attachment' );
}
add_action( 'init' , 'wptp_add_categories_to_attachments' );

function show_all_in_category($query) {
  if ( !is_admin() && $query->is_main_query() ) {
    if ($query->is_category()) {
      $query->set('posts_per_page', -1);
    }
  }
}

add_action('pre_get_posts','show_all_in_category');



 // this function loads the style (css) files
function em_theme_styles() {
  wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/css/normalize.css' );
  wp_enqueue_style( 'responsiveGrid_css', get_template_directory_uri() . '/responsive-grid.css');
  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'shop_css', get_template_directory_uri() . '/shop.css' );
}
add_action( 'wp_enqueue_scripts', 'em_theme_styles' );


// this function loads the scripts (js)
function em_theme_js() {
  wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/app.js', array('jquery'), '', true) ;
}
add_action( 'wp_enqueue_scripts', 'em_theme_js' );
