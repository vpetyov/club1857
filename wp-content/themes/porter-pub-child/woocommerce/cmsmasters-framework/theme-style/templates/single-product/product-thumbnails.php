<?php
/**
 * @cmsmasters_package 	Porter Pub
 * @cmsmasters_version 	1.0.4
 */


// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

global $product;

$attachment_ids = $product->get_gallery_image_ids();

if ( $attachment_ids && $product->get_image_id() ) {
	echo '<div class="thumbnails cmsmasters_product_thumbs">';
		
		foreach ( $attachment_ids as $attachment_id ) {
			$flexslider        = (bool) apply_filters( 'woocommerce_single_product_flexslider_enabled', get_theme_support( 'wc-product-gallery-slider' ) );
			$gallery_thumbnail = wc_get_image_size( 'gallery_thumbnail' );
			$thumbnail_size    = apply_filters( 'woocommerce_gallery_thumbnail_size', array( $gallery_thumbnail['width'], $gallery_thumbnail['height'] ) );
			$main_image        = false;
			$full_size         = apply_filters( 'woocommerce_gallery_full_size', apply_filters( 'woocommerce_product_thumbnails_large_size', 'full' ) );
			$image_size        = apply_filters( 'woocommerce_gallery_image_size', $flexslider || $main_image ? 'woocommerce_single': $full_size );
			$thumbnail_src     = wp_get_attachment_image_src( $attachment_id, $thumbnail_size );
			$full_src          = wp_get_attachment_image_src( $attachment_id, $full_size );
			$custom_src        = wp_get_attachment_image_src( $attachment_id, '500px' );
			$image             = wp_get_attachment_image( $attachment_id, $image_size, false, array(
				'title'                   => get_post_field( 'post_title', $attachment_id ),
				'data-caption'            => get_post_field( 'post_excerpt', $attachment_id ),
				'data-src'                => $full_src[0],
				'data-large_image'        => $full_src[0],
				'data-large_image_width'  => $full_src[1],
				'data-large_image_height' => $full_src[2],
			) );
			
			
			echo '<a data-image="' . esc_url($custom_src [0] ) . '" class="cmsmasters_product_thumb custom-thumbnail-product">' . $image . '</a>';
		}
		
	echo '</div>';
}
