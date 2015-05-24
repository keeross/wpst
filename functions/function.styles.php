<?php

function core_styles() {

    $theme_data = wp_get_theme();
    $theme_version = $theme_data->Version;

    //-------------------------------------------------//
    // Register --- Styles
    //-------------------------------------------------//

    $dir = get_template_directory_uri() . "/assets";
    $bwr = get_template_directory_uri() . "/assets/components";
    
    wp_register_style('style'               , get_stylesheet_uri(), false, $theme_version);
    //wp_register_style('vendor.style'      , $bwr . '/vendor.script/vendor.style.min.css', false, $theme_version);

    wp_register_style('core'                , $dir . '/styles/css/core.css', false, $theme_version);
    //wp_register_script('core.min'         , $dir . '/build/core.min.css', false, $theme_version);

    //-------------------------------------------------//
    // Enqueue - Styles
    //-------------------------------------------------//
    wp_enqueue_style('core');

}

add_action('wp_enqueue_styles', 'core_styles');