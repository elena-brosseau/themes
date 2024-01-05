<?php

function load_css() {
    
    wp_register_style('styles', get_template_directory_uri() . '/styles/styles.css', array(), time(), 'all');
    wp_enqueue_style('styles');
}

add_action('wp_enqueue_scripts', 'load_css');

function load_js() {

    wp_enqueue_script('jquery');
    wp_register_script('scripts', get_template_directory_uri() . '/scripts/scripts.js', 'jquery', false, true);
    wp_enqueue_script('scripts');
}

add_action('wp_enqueue_scripts', 'load_js');

function add_google_fonts() {    
    
    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Lobster&display=swap', false );    
}        
    
add_action( 'wp_enqueue_scripts', 'add_google_fonts' );


//Theme Options
add_theme_support('menus');

//Menus
register_nav_menus(

    array(
        'top-menu' => 'Header Menu',
        'bottom-menu' => 'Footer Menu'
    )
);

