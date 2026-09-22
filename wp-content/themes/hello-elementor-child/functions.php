<?php

function enqueue_parent_styles() {
    if ( is_admin() ) {
        return;
    }
    wp_enqueue_script(
        'club1857-custom-js',
        get_stylesheet_directory_uri() . '/assets/js/custom.js',
        array('jquery'),
        filemtime(get_stylesheet_directory() . '/assets/js/custom.js'),
        true
    );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    // wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/assets/css/main.css');
    // wp_enqueue_style('main2-css', get_stylesheet_directory_uri() . '/assets/css/main2.css');
 }

 add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function club1857_enqueue_styles() {
    wp_enqueue_style(
        'club1857-css',
        get_stylesheet_directory_uri() . '/assets/css/club1857.css',
        array('parent-style'),
        filemtime(get_stylesheet_directory() . '/assets/css/club1857.css')
    );
}

add_action( 'wp_enqueue_scripts', 'club1857_enqueue_styles', 999 );
 
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
 * Usage: [event_excerpt] or [event_excerpt words="30"]
 */
function custom_event_excerpt_shortcode( $atts ) {
    // Ensure we are in an event post context
    if ( function_exists('get_post_type') && 'tribe_events' !== get_post_type() ) {
        return '';
    }

    if ( function_exists('tribe_events_get_the_excerpt') ) {
        $atts = shortcode_atts(
            array(
                'words' => 20,
            ),
            $atts,
            'event_excerpt'
        );

        $word_limit = max( 1, absint( $atts['words'] ) );
        $excerpt    = wp_strip_all_tags( tribe_events_get_the_excerpt(), true );

        return esc_html( wp_trim_words( $excerpt, $word_limit, '…' ) );
    }

    return '';
}
add_shortcode( 'event_excerpt', 'custom_event_excerpt_shortcode' );
