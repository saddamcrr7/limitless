<?php 

// -------------------------------------
// Load the stylesheet
// -------------------------------------

function limitless_load_stylesheet(){
    wp_enqueue_style('limitless-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'limitless_load_stylesheet');

//----------------------------------------------------------------------------------
// Setup the theme
//----------------------------------------------------------------------------------

function limitless_theme_setup(){
    add_theme_support( 'post-thumbnails' );
}
add_action('after_setup_theme', 'limitless_theme_setup');