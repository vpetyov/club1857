<?php
/**
 * Plugin Name: WP Migrate Connection Timeout
 */

add_action(
    'http_api_curl',
    static function ($handle, $request, $url) {
        if ('dev.club1857.com' !== wp_parse_url($url, PHP_URL_HOST)) {
            return;
        }

        curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 120);
    },
    PHP_INT_MAX,
    3
);