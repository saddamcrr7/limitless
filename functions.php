<?php 

// -------------------------------------
// Load the stylesheet
// -------------------------------------

function limitless_load_scripts(){
    wp_enqueue_style('limitless-style', get_stylesheet_uri());
    wp_enqueue_script('main', trailingslashit(get_template_directory_uri()) . 'js/functions.js',
  array('jquery'));
}
add_action('wp_enqueue_scripts', 'limitless_load_scripts');

//----------------------------------------------------------------------------------
// Setup the theme
//----------------------------------------------------------------------------------

function limitless_theme_setup(){
    add_theme_support( 'post-thumbnails' );
     add_theme_support( 'custom-logo', array(
         'height'      => 100,
         'width'       => 400,
         'flex-height' => true,
         'flex-width'  => true,
         'header-text' => array('site-title', 'site-description'),
     ) );
     add_theme_support('title-tag');
     register_nav_menus( array(
            'primary'  => __('Primary Menu', 'limitless'),
            'footer'   => __('Footer Menu', 'limitless')
     ));
}
add_action('after_setup_theme', 'limitless_theme_setup');

// ------------------------------------------------------------------------------
// Allow the site title to display in customize preview when logo is removed
// ------------------------------------------------------------------------------
function limitless_logo_refresh($wp_customize){
    $wp_customize ->get_setting( 'custom_logo' )->transport = 'refresh';
}
add_action('customize_register', 'limitless_logo_refresh', 20);