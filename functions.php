<?php
function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.css', array(), '5.0.0');
    wp_enqueue_style( 'child-understrap-google-fonts', 'https://fonts.googleapis.com/css?family=Amatic+SC:700|Lora:400,700', array());
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), '0.1.0', true );
}
add_filter( 'tiled_gallery_content_width', 'wpsites_custom_tiled_gallery_width' );
/**
 * @author    Brad Dalton
 * @example   http://wpsites.net/
 * @copyright 2014 WP Sites
 */
function wpsites_custom_tiled_gallery_width($width){
    $tiled_gallery_content_width = $width;
    $width = 760;
    return $width;
}

if ( ! isset( $content_width ) ) {
    $content_width = 1200;
}
