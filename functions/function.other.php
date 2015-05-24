<?php

// Add sizes here
add_theme_support('post-thumbnails');
set_post_thumbnail_size(600, 600, 'true');
//add_image_size('slider', 1200, 700, 'true');

//Register Menu
function register_my_menu() {
  register_nav_menu('primary-menu', __('Primary Menu'));
  //register_nav_menu('portfolio-menu', __('Portfolio Menu'));
}
add_action('init', 'register_my_menu');

// All other functions

//Exceprt length
function custom_excerpt_length($length) {
  return 50;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);

//Page excerpt
function my_add_excerpts_to_pages() {
  add_post_type_support('page', 'excerpt');
}
add_action('init', 'my_add_excerpts_to_pages');

// Add custom posts to search
function tgm_cpt_search( $query ) {
  if ( $query->is_search )
      $query->set( 'post_type', array( 'project' ) );
  return $query;
};
add_filter( 'pre_get_posts', 'tgm_cpt_search' );
