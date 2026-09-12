<?php

function enqueue_parent_styles() {
    wp_enqueue_script('jquery-3.7.1', 'https://code.jquery.com/jquery-3.7.1.min.js');
    wp_enqueue_script('slick-slider-js', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), null, true);
    wp_enqueue_style('slick-slider-css', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/assets/css/main.css');
    wp_enqueue_style('main2-css', get_stylesheet_directory_uri() . '/assets/css/main2.css');
 }
 
 add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' ); 
 
 function beer_slider_shortcode() {
    ob_start();
    include dirname(__FILE__) . '/template-parts/beer-slider.php';
    return ob_get_clean();
}
add_shortcode( 'beer_slider', 'beer_slider_shortcode' );

@ini_set( 'upload_max_size' , '16M' );

/**
 * Shortcode to display the event excerpt.
 *
 * Usage: [event_excerpt]
 */
function custom_event_excerpt_shortcode() {
    // Ensure we are in an event post context
    if ( function_exists('get_post_type') && 'tribe_events' !== get_post_type() ) {
        return '';
    }

    if ( function_exists('tribe_events_get_the_excerpt') ) {
        return tribe_events_get_the_excerpt();
    }

    return '';
}
add_shortcode( 'event_excerpt', 'custom_event_excerpt_shortcode' );