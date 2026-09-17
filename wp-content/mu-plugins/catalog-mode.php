<?php
/**
 * Plugin Name: WooCommerce Catalog Mode
 */

defined('ABSPATH') || exit;

add_filter('woocommerce_is_purchasable', '__return_false');
add_filter('woocommerce_variation_is_purchasable', '__return_false');
add_filter('woocommerce_loop_add_to_cart_link', '__return_empty_string');

add_action('wp', function () {
    remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);
});

add_action('template_redirect', function () {
    if (is_cart() || is_checkout()) {
        wp_safe_redirect(wc_get_page_permalink('shop'));
        exit;
    }
});
