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

// Keep The Events Calendar and WordPress on the Classic Editor for events.
add_filter( 'tribe_events_blocks_editor_is_on', '__return_false' );
add_filter( 'tribe_editor_should_load_blocks', '__return_false', 200 );

function club1857_use_classic_editor_for_events( $use_block_editor, $post_type ) {
    if ( 'tribe_events' === $post_type ) {
        return false;
    }

    return $use_block_editor;
}
add_filter( 'use_block_editor_for_post_type', 'club1857_use_classic_editor_for_events', 20, 2 );
 
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

/**
 * Extract text from an event's description blocks, skipping media and event details.
 */
function club1857_event_description_text( $blocks ) {
    $parts = array();
    $text_blocks = array(
        null,
        'core/paragraph',
        'core/heading',
        'core/list',
        'core/list-item',
        'core/quote',
        'core/pullquote',
        'core/freeform',
        'core/preformatted',
        'core/verse',
    );

    foreach ( $blocks as $block ) {
        $name = $block['blockName'];
        if ( null !== $name && 0 === strpos( $name, 'tribe/' ) ) {
            continue;
        }

        if ( ! empty( $block['innerBlocks'] ) ) {
            $nested_text = club1857_event_description_text( $block['innerBlocks'] );
            if ( '' !== $nested_text ) {
                $parts[] = $nested_text;
            }
            continue;
        }

        if ( ! in_array( $name, $text_blocks, true ) ) {
            continue;
        }

        $html = preg_replace( '#<figure\b[^>]*>.*?</figure>#is', '', $block['innerHTML'] );
        $html = preg_replace( '#<br\s*/?>|</(?:p|div|h[1-6]|li|blockquote)>#i', "\n", $html );
        $text = trim( wp_strip_all_tags( strip_shortcodes( $html ) ) );

        if ( '' !== $text ) {
            $parts[] = $text;
        }
    }

    return implode( "\n\n", $parts );
}

/**
 * Display only the text description of the current event.
 *
 * Usage: [event_description]
 */
function club1857_event_description_shortcode() {
    $event_id = get_the_ID();

    if ( ! $event_id || 'tribe_events' !== get_post_type( $event_id ) ) {
        $event_id = get_queried_object_id();
    }

    if ( ! $event_id || 'tribe_events' !== get_post_type( $event_id ) ) {
        return '';
    }

    $event = get_post( $event_id );
    if ( ! $event || post_password_required( $event ) || '' === trim( $event->post_content ) ) {
        return '';
    }

    $description = club1857_event_description_text( parse_blocks( $event->post_content ) );

    return '' === $description ? '' : wpautop( esc_html( $description ) );
}
add_shortcode( 'event_description', 'club1857_event_description_shortcode' );
