<?php

function core_scripts() {

    $theme_data = wp_get_theme();
    $theme_version = $theme_data->Version;

    //-------------------------------------------------//
    // Register --- Scripts
    //-------------------------------------------------//

    wp_deregister_script('jquery');

    $dir = get_template_directory_uri() . "/assets";
    $bwr = get_template_directory_uri() . "/assets/components";
    
    wp_register_script('jquery'               , $bwr . '/jquery/dist/jquery.min.js', $theme_version);
    //wp_register_script('vendor.script'      , $bwr . '/vendor.script/vendor.script.min.js', array('jquery'), $theme_version);

    wp_register_script('core'                 , $dir . '/js/core.js', array('jquery'), $theme_version);
    //wp_register_script('core.min'           , $dir . '/build/core.min.js', array('jquery'), $theme_version);

    //-------------------------------------------------//
    // Enqueue - Scripts
    //-------------------------------------------------//
    wp_enqueue_script('jquery');

}

add_action('wp_enqueue_scripts', 'core_scripts');