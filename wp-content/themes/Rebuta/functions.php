<?php 
/**
 * Theme Functions
 * 
 * @package Aquila
 * 
 */

function rebuta_enqueue_scripts()
{
    wp_register_style('stylesheet' , get_stylesheet_uri() , [] , filemtime( get_template_directory(). '/style.css' ));
    wp_register_style('bootstrap-style' , get_template_directory_uri() . '/assets/src/libraries/css/bootstrap.min.css' , [] , false);

    wp_register_script('main-script' , get_template_directory_uri() . '/assets/main.js' , [] , filemtime( get_template_directory(). '/assets/main.js') , true);

    wp_register_script('bootstrap-script' , get_template_directory_uri() . '/assets/src/libraries/js/bootstrap.bundle.min.js' , ['jquery'] , false);

    wp_enqueue_style('stylesheet');
    wp_enqueue_style('bootstrap-style');

    wp_enqueue_script('main-script');
    wp_enqueue_script('bootstrap-script');
}

add_action('wp_enqueue_scripts' , 'rebuta_enqueue_scripts');