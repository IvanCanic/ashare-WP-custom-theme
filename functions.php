<?php

function ashareScriptManager() {

    global $ashare_ver_num; // define global variable for the version number
    $ashare_ver_num = mt_rand();

    wp_enqueue_style( 'montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;900&display=swap', array(), $ashare_ver_num );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/vendor/css/all.css', array(), $ashare_ver_num);
    wp_enqueue_style( 'ashare-css', get_template_directory_uri() . '/assets/css/main.css', array(), $ashare_ver_num);
    wp_enqueue_style( 'default-css', get_template_directory_uri() . '/style.css', array(), $ashare_ver_num);

    wp_enqueue_script( 'ashare-js', get_template_directory_uri(  ) . '/assets/js/main.js', array(), $ashare_ver_num, true );
}

add_action( 'wp_enqueue_scripts', 'ashareScriptManager');

function ashareSmallParts() {

    add_theme_support('post-thumbnails');
    add_theme_support('widgets');
    add_theme_support('title-tag');
    add_theme_support( 'automatic-feed-links' );

    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    ); 
    add_theme_support( 'custom-logo', $defaults );

    $headerArgs = array(
        'default-image'      => '',
        'default-text-color' => '000',
        //'width'              => 1000,
        //'height'             => 250,
        'flex-width'         => true,
        'flex-height'        => true,
    );
    add_theme_support( 'custom-header', $headerArgs );

    if ( ! isset( $content_width ) ) {
        $content_width = 600;
    }

    add_editor_style();

    add_theme_support( 'custom-background',
        [
            'default-color' => 'ffffff',
            'default-image' => '',
            'default-repeat' => 'no-repeat',
        ]
    );

}

add_action( 'after_setup_theme', 'ashareSmallParts');

function ashareMenus() {
    register_nav_menus( array(
        'primary-menu' => __('Primary Menu', 'ashare')
    ));
}

add_action('init', 'ashareMenus');

function ashareSidebar() {
    register_sidebar( array(
        'name' => __('Ashare Sidebar Widget', 'ashare'),
        'id' => 'ashare-sidebar', 
        'before_title' => '<h3 class="main__sidebar-title">',
        'after_title' => '</h3>'
    ));
}

add_action( 'widgets_init', 'ashareSidebar');

// Loading Social Icon Customizer
require_once( __DIR__ . '/inc/customizer-social-icons.php');

// Loading Theme Template Helpers Functions
require_once( __DIR__ . '/inc/ashare-template-tags.php');

function ashare_sanitize_url($ar) {

    return esc_url($ar) ;
    
}