<?php
/**
 * @package 	WordPress
 * @subpackage 	Porter Pub Child
 * @version		1.0.0
 * 
 * Child Theme Functions File
 * Created by CMSMasters
 * 
 */


function porter_pub_child_enqueue_styles() {
    wp_enqueue_style('porter-pub-child-style', get_stylesheet_uri(), array(), '1.0.0', 'screen, print');
    wp_enqueue_style( 'bar-style', get_stylesheet_directory_uri() . '/assets/css/bar.css');
    wp_enqueue_script( 'bar-scripts', get_stylesheet_directory_uri() . '/assets/js/bar.js', array('jquery','slick-scripts'));
    wp_enqueue_style( 'slick-style', get_stylesheet_directory_uri() . '/assets/css/slick.css');
    wp_enqueue_script( 'slick-scripts', get_stylesheet_directory_uri() . '/assets/js/slick.min.js', array('jquery'));
}

add_action('wp_enqueue_scripts', 'porter_pub_child_enqueue_styles', 11);



// Add Shortcode
function beer_slider_shortcode() {
    ob_start();
    include dirname(__FILE__) . '/template-parts/beer-slider.php';
    return ob_get_clean();
}
add_shortcode( 'beer_slider', 'beer_slider_shortcode' );



// Add Shortcode
function event_slider_shortcode() {
    ob_start();
    include dirname(__FILE__) . '/template-parts/event-slider.php';
    return ob_get_clean();
}
add_shortcode( 'event_slider', 'event_slider_shortcode' );

// Add Shortcode
function sport_event_slider_shortcode() {
    ob_start();
    include dirname(__FILE__) . '/template-parts/sport-event-slider.php';
    return ob_get_clean();
}
add_shortcode( 'sport_event_slider', 'sport_event_slider_shortcode' );



/**
 * Change number of products that are displayed per page (shop page)
 */
add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );

function new_loop_shop_per_page( $cols ) {
  // $cols contains the current number of products per page based on the value stored on Options -> Reading
  // Return the number of products you wanna show per page.
  $cols = 50;
  return $cols;
}
add_filter('wp_generate_attachment_metadata', function ($metadata, $attachment_id) {
    $mime = get_post_mime_type($attachment_id);
    if (!in_array($mime, ['image/jpeg', 'image/png'])) return $metadata;

    $upload_dir = wp_upload_dir();
    $base_dir = $upload_dir['basedir'] . '/' . dirname($metadata['file']);
    $base_file = pathinfo($metadata['file'], PATHINFO_FILENAME);

    // Original WebP
    $original_webp = $base_file . '.webp';
    if (file_exists($base_dir . '/' . $original_webp)) {
        $metadata['webp'] = [
            'file' => $original_webp,
            'width' => $metadata['width'],
            'height' => $metadata['height'],
            'mime-type' => 'image/webp',
        ];
    }

    // Resized WebPs
    foreach ($metadata['sizes'] as $size => $info) {
        $webp_name = pathinfo($info['file'], PATHINFO_FILENAME) . '.webp';
        if (file_exists($base_dir . '/' . $webp_name)) {
            $metadata['sizes'][$size . '_webp'] = [
                'file' => $webp_name,
                'width' => $info['width'],
                'height' => $info['height'],
                'mime-type' => 'image/webp',
            ];
        }
    }

    return $metadata;
}, 10, 2);

function browser_supports_webp()
{
	// Check for the HTTP Accept header
	if (isset($_SERVER['HTTP_ACCEPT']) && strpos($_SERVER['HTTP_ACCEPT'], 'image/webp') !== false) {
		return true;
	}

	// Check for a custom header sent with AJAX requests
	if (isset($_SERVER['HTTP_X_WEBP_SUPPORTED']) && $_SERVER['HTTP_X_WEBP_SUPPORTED'] === 'true') {
		return true;
	}

	$ua = $_SERVER['HTTP_USER_AGENT'] ?? '';
	// Check for known browsers with WebP support
	if (preg_match('/Chrome\/|Firefox\/|Edge\/|Opera\//i', $ua)) {
		return true;
	}

	// Safari supports WebP from version 14 onwards
	if (preg_match('/Version\/(1[4-9]|[2-9][0-9])\..*Safari\//i', $ua)) {
		return true;
	}
	// Check for WebP support on Android browsers
	if (preg_match('/Android/i', $ua)) {
		// Android Chrome & Opera support WebP
		if (preg_match('/Chrome\/(2[5-9][0-9]|[3-9][0-9]{2})/i', $ua) || preg_match('/Opera\//i', $ua)) {
			return true;
		}
	}

	// Check for mobile-specific browsers like Mobile Safari (iOS 14+)
	if (preg_match('/Mobile.*Safari\//i', $ua)) {
		if (preg_match('/Version\/(1[4-9]|[2-9][0-9])\..*Safari\//i', $ua)) {
			return true;
		}
	}

	return false;
}

function convert_to_webp($url)
{
	 // If the URL already ends in .webp, return it as is
    if (strpos($url, '.webp') !== false) {
        return $url;
    }
	$webp_url = $url . '.webp';
	$file_path = str_replace(home_url('/'), ABSPATH, $webp_url);

	if (file_exists($file_path)) {
		return $webp_url;
	}
	return $url;
}

function replace_images_with_webp($content)
{
	if (browser_supports_webp()) {
		// Replace src and srcset attributes
		$content = preg_replace_callback('/(src|srcset|data-src|data-large_image|background-image):?\s*url\(["\']?([^"\')]+\.(?:png|jpe?g))["\']?\)/i', function ($matches) {
			return $matches[1] . '="' . convert_to_webp($matches[2]) . '"';
		}, $content);
	}
	return $content;
}
add_filter('the_content', 'replace_images_with_webp');
add_filter('the_exert', 'replace_images_with_webp');
// Apply WebP conversion to WooCommerce short description (excerpt)
add_filter('woocommerce_short_description', 'replace_images_with_webp');

add_filter('post_thumbnail_html', 'replace_images_with_webp');
add_filter('wp_get_attachment_image_attributes', function ($attr) {
	if (browser_supports_webp()) {
		if (isset($attr['src'])) {
			$attr['src'] = convert_to_webp($attr['src']);
		}
		if (isset($attr['srcset'])) {
			$srcset = explode(',', $attr['srcset']);
			foreach ($srcset as &$src) {
				if (strpos($src, '.webp') === false) { // ✅ Skip already converted images
                    $src = preg_replace_callback('/([^ ]+\.(?:png|jpe?g))/', function ($matches) {
                        return convert_to_webp($matches[1]);
                    }, $src);
                }
			}
			$attr['srcset'] = implode(',', $srcset);
		}
	}

	return $attr;
}, 100, 1);
// Apply WebP conversion to AJAX responses
add_action('wp_ajax_nopriv_load_more_products', 'ajax_webp_support');
add_action('wp_ajax_load_more_products', 'ajax_webp_support');

function ajax_webp_support() {
    ob_start(); // Start output buffering
    // Your WooCommerce product loop here
    $response = ob_get_clean();
    echo replace_images_with_webp($response);
    wp_die(); // End AJAX call
}
add_filter('woocommerce_single_product_image_thumbnail_html', function ($html, $attachment_id) {
    if (browser_supports_webp()) {
        // Replace image src
        $html = preg_replace_callback('/src=["\']([^"\']+\.(?:png|jpe?g))["\']/', function ($matches) {
            return 'src="' . convert_to_webp($matches[1]) . '"';
        }, $html);

        // Replace srcset
        $html = preg_replace_callback('/srcset=["\']([^"\']+)["\']/', function ($matches) {
            $srcset = explode(',', $matches[1]);
            foreach ($srcset as &$src) {
                if (strpos($src, '.webp') === false) { // ✅ Skip already converted images
                    $src = preg_replace_callback('/([^ ]+\.(?:png|jpe?g))/', function ($matches) {
                        return convert_to_webp($matches[1]);
                    }, $src);
                }
            }
            return 'srcset="' . implode(',', $srcset) . '"';
        }, $html);
		 // Replace data-thumb
		 $html = preg_replace_callback('/data-thumb=["\']([^"\']+\.(?:png|jpe?g))["\']/', function ($matches) {
            return 'data-thumb="' . convert_to_webp($matches[1]) . '"';
        }, $html);

        // Replace href (for product images in links)
        $html = preg_replace_callback('/href=["\']([^"\']+\.(?:png|jpe?g))["\']/', function ($matches) {
            return 'href="' . convert_to_webp($matches[1]) . '"';
        }, $html);
    }
    return $html;
}, 10, 2);
add_action('admin_init', function () {
    if (!current_user_can('manage_options')) return;
    if (!isset($_GET['run_webp_sync'])) return;

    ob_start(); // start output buffering early!

    $batch_size = 25;
    $paged = isset($_GET['webp_page']) ? intval($_GET['webp_page']) : 1;

    $attachments = get_posts([
        'post_type'      => 'attachment',
        'post_mime_type' => ['image/jpeg', 'image/png'],
        'post_status'    => 'inherit',
        'posts_per_page' => $batch_size,
        'paged'          => $paged,
    ]);

    if (empty($attachments)) {
        echo "<h2>✅ Done! All images have been processed.</h2>";
        ob_end_flush(); // end output buffer
        return;
    }

    foreach ($attachments as $attachment) {
        $meta = wp_get_attachment_metadata($attachment->ID);

        if (!isset($meta['file']) || !isset($meta['sizes'])) {
            echo "⚠️ Skipped ID {$attachment->ID} — no metadata.<br>";
            continue;
        }

        $base_dir = wp_upload_dir()['basedir'] . '/' . dirname($meta['file']);
        $base_file = pathinfo($meta['file'], PATHINFO_FILENAME);
        $webp_added = 0;

        // Check and force WebP creation even if metadata exists
        $original_webp_filename = pathinfo($base_file, PATHINFO_FILENAME) . '.' . pathinfo($meta['file'], PATHINFO_EXTENSION) . '.webp';
        $original_webp_path = $base_dir . '/' . $original_webp_filename;

        if (file_exists($original_webp_path) && (empty($meta['webp']) || !isset($meta['webp']))) {
            $meta['webp'] = [
                'file'      => $original_webp_filename,
                'width'     => $meta['width'],
                'height'    => $meta['height'],
                'mime-type' => 'image/webp'
            ];
            $webp_added++;
        }

        // Resized WebPs
        foreach ($meta['sizes'] as $size => $info) {
            $resized_webp_filename = pathinfo($info['file'], PATHINFO_FILENAME) . '.' . pathinfo($info['file'], PATHINFO_EXTENSION) . '.webp';
            $resized_webp_path = $base_dir . '/' . $resized_webp_filename;
            $webp_key = $size . '_webp';
			echo "Processing ID {$attachment->ID} — {$resized_webp_path} size {$webp_key}...<br>";
            if (file_exists($resized_webp_path) && (empty($meta['sizes'][$webp_key]) || !isset($meta['sizes'][$webp_key]))) {
                $meta['sizes'][$webp_key] = [
                    'file'      => $resized_webp_filename,
                    'width'     => $info['width'],
                    'height'    => $info['height'],
                    'mime-type' => 'image/webp'
                ];
                $webp_added++;
            }
        }

        if ($webp_added > 0) {
            wp_update_attachment_metadata($attachment->ID, $meta);
            echo "✅ ID {$attachment->ID} — added {$webp_added} WebP entries.<br>";

            // Trigger offload after adding WebP
            if (function_exists('as3cf_offload_attachment')) {
                // Offload the media to S3 (or your provider)
                as3cf_offload_attachment($attachment->ID);
                echo "✅ ID {$attachment->ID} — offloaded to S3.<br>";
            } else {
                echo "⚠️ Offload function not available.<br>";
            }
        } else {
            echo "⏭️ ID {$attachment->ID} — WebP already registered.<br>";
        }
    }

    // Output then redirect
    $next_page = $paged + 1;
    echo "<p>⏳ Redirecting to next batch (#{$next_page})...</p>";

    ob_end_flush(); // finish output buffering cleanly

    // Let browser display the message, then redirect
    echo "<script>setTimeout(function() {
        window.location.href = '" . admin_url("tools.php?run_webp_sync=1&webp_page={$next_page}") . "';
    }, 2000);</script>";

    exit;
});

add_filter('woocommerce_get_price_html', 'custom_static_price_display', 10, 2);

function custom_static_price_display($price, $product) {
    $product_price_bgn = floatval($product->get_price());
    $product_price_eur = $product_price_bgn / 1.95583;

    $formatted_bgn = number_format($product_price_bgn, 2) . ' лв.';
    $formatted_eur = number_format($product_price_eur, 2) . ' €';

    return '<span class="amount">' . $formatted_bgn . ' / ' . $formatted_eur . '</span>';
}

add_filter('woocommerce_widget_cart_item_quantity', 'custom_minicart_price_display', 10, 3);

function custom_minicart_price_display($html, $cart_item, $cart_item_key) {
    $price_bgn = floatval($cart_item['data']->get_price());
    $price_eur = $price_bgn / 1.95583;

    $formatted_bgn = number_format($price_bgn, 2) . ' лв.';
    $formatted_eur = number_format($price_eur, 2) . ' €';

    return sprintf('%s × <span class="amount">%s / %s</span>', $cart_item['quantity'], $formatted_bgn, $formatted_eur);
}
add_filter('woocommerce_cart_item_price', 'custom_cart_item_price_display', 10, 3);
add_filter('woocommerce_cart_item_subtotal', 'custom_cart_item_price_display', 10, 3);

function custom_cart_item_price_display($price_html, $cart_item, $cart_item_key) {
    $price_bgn = floatval($cart_item['data']->get_price());
    $price_eur = $price_bgn / 1.95583;

    $formatted_bgn = number_format($price_bgn, 2) . ' лв.';
    $formatted_eur = number_format($price_eur, 2) . ' €';

    return '<span class="amount">' . $formatted_bgn . ' / ' . $formatted_eur . '</span>';
}




add_action('woocommerce_widget_shopping_cart_total', function () {
    $bgn = WC()->cart->get_cart_subtotal();
    $value = WC()->cart->get_cart_contents_total();
    $eur = number_format($value / 1.95583, 2) . ' €';

    echo '<p class="woocommerce-mini-cart__total total">';
    echo '<strong>' . __('Междинна сума:', 'woocommerce') . '</strong> ';
    echo '<span class="woocommerce-Price-amount amount">' . $bgn . ' / ' . $eur . '</span>';
    echo '</p>';
},9999);



add_filter('wc_price', 'add_eur_to_price_html', 10, 3);

function add_eur_to_price_html($formatted_price, $price, $args) {
    // $price is the raw float number

    // Convert BGN to EUR
    $price_eur = $price / 1.95583;

    // Format EUR price - you can tweak decimals and symbol here
    $formatted_eur = number_format($price_eur, 2) . ' €';

    // Return BGN price + EUR price
    return $formatted_price . ' / ' . $formatted_eur;
}
add_filter( 'tribe_events_views_v2_view_latest-past_repository_args', function( $args ) {
    $args['posts_per_page'] = 10; // change to your desired amount
    return $args;
}, 10, 1 );


// /* Disable specified plugins in development environment */
// if (defined('WP_HOME') && WP_HOME === 'https://club1857.test') {
//     $plugins = array(
//         //'google-site-kit/google-site-kit.php',
//         //'pixelyoursite/pixelyoursite.php',
//         'wordfence/wordfence.php',
//         //'wp-rocket/wp-rocket.php',
//         //'redis-cache/redis-cache.php',
//         //'wp-mail-smtp/wp_mail_smtp.php',
//         // 'wp-rocket-compat-wc-order-clean-cache/wp-rocket-compat-wc-order-clean-cache.php',
//         //'duracelltomi-google-tag-manager/duracelltomi-google-tag-manager-for-wordpress.php'
//     );
//     require_once(ABSPATH . 'wp-admin/includes/plugin.php');
//     deactivate_plugins($plugins);
// }


