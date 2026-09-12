<?php
/**
 * @package 	WordPress
 * @subpackage 	Porter Pub
 * @version 	1.0.0
 * 
 * Theme Content Composer Functions
 * Created by CMSMasters
 * 
 */


/* Register JS Scripts */
function porter_pub_theme_register_c_c_scripts() {
	global $pagenow;
	
	
	if ( 
		$pagenow == 'post-new.php' || 
		($pagenow == 'post.php' && isset($_GET['post']) && get_post_type($_GET['post']) != 'attachment') 
	) {
		wp_enqueue_script('porter-pub-composer-shortcodes-extend', get_template_directory_uri() . '/theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-c-c/js/cmsmasters-c-c-theme-extend.js', array('cmsmasters_composer_shortcodes_js'), '1.0.0', true);
		
		wp_localize_script('porter-pub-composer-shortcodes-extend', 'cmsmasters_theme_shortcodes', array( 
			/* Client */
			'client_field_logo_overlay_title' => 			esc_attr__('Logo Overlay', 'porter-pub'), 
			'client_field_logo_overlay_descr' => 			esc_attr__('Choose this client logo overlay', 'porter-pub'), 
			/* Pricing Table */
			'pricing_offer_field_best_offer_bd_title' => 	esc_attr__('Best Offer Title Color', 'porter-pub'), 
			'pricing_offer_field_best_offer_bd_descr' => 	esc_attr__('Choose title color for this pricing table best offer', 'porter-pub'),
			/* Post Slider */
			'post_slider_field_slides_control_title' => 	esc_attr__('Slider Pagination', 'porter-pub'),
			/* Menu Shortcode */
			'menu_title' => 								esc_attr__('Menu', 'porter-pub'),
			'menu_item_title' =>							esc_attr__('Menu Item', 'porter-pub'),
			'menu_offers_title' => 							esc_attr__('Menu offers', 'porter-pub'),
			'menu_offers_descr' => 							esc_attr__('Here you can add, edit, remove or sort menu offers', 'porter-pub'),
			'menu_item_title_descr' => 						esc_attr__('Enter this menu offer title', 'porter-pub'),
			'menu_item_price_title' => 						esc_attr__('Price', 'porter-pub'),
			'menu_item_price_descr' => 						esc_attr__('Enter this menu offer price', 'porter-pub'),
			'menu_item_currency_title' => 					esc_attr__('Currency', 'porter-pub'),
			'menu_item_currency_descr' => 					esc_attr__('Enter this menu offer currency', 'porter-pub'),
			'menu_item_features_title' => 					esc_attr__('Ingredients', 'porter-pub'),
			'menu_item_features_descr' => 					esc_attr__('Add menu offer ingredients', 'porter-pub'),
			'menu_item_best_offer_title' => 				esc_attr__('Best Offer', 'porter-pub'),
			'menu_item_best_offer_descr' => 				esc_attr__('If checked, this menu offer will be highlighted', 'porter-pub'),
			'menu_item_best_feature_title' => 				esc_attr__('Best Offer Recommendation', 'porter-pub'),
			'menu_item_best_feature_descr' => 				esc_attr__('Enter this menu offer Recommendation', 'porter-pub'),
			'menu_item_best_offer_bg_feature_title' => 		esc_attr__('Best Offer Recommendation Background Color', 'porter-pub'),
			'menu_item_best_offer_bg_feature_descr' => 		esc_attr__('Choose background Recommendation color for this menu best offer', 'porter-pub'),
			'menu_item_best_offer_txt_feature_title' => 	esc_attr__('Best Offer Recommendation Text Color', 'porter-pub'),
			'menu_item_best_offer_txt_feature_descr' => 	esc_attr__('Choose text Recommendation color for this menu best offer', 'porter-pub'),
			'menu_item_best_offer_bg_title' => 				esc_attr__('Best Offer Background Color', 'porter-pub'),
			'menu_item_best_offer_bg_descr' => 				esc_attr__('Choose background color for this menu best offer', 'porter-pub'),
			'menu_item_best_offer_txt_title' => 			esc_attr__('Best Offer Text Color', 'porter-pub'),
			'menu_item_best_offer_txt_descr' => 			esc_attr__('Choose text color for this menu best offer', 'porter-pub')
		));
	}
}

add_action('admin_enqueue_scripts', 'porter_pub_theme_register_c_c_scripts');


// Counters Shortcode Attributes Filter
add_filter('cmsmasters_client_atts_filter', 'cmsmasters_client_atts');

function cmsmasters_client_atts() {
	return array( 
		'shortcode_id' => 	'', 
		'logo' => 			'', 
		'logo_overlay' => 	'', 
		'link' => 			'', 
		'target' => 		'blank', 
		'classes' => 		'' 
	);
}


// Posts Slider Shortcode Attributes Filter
add_filter('cmsmasters_posts_slider_atts_filter', 'cmsmasters_posts_slider_atts');

function cmsmasters_posts_slider_atts() {
	return array( 
		'shortcode_id' => 			'', 
		'orderby' => 				'', 
		'order' => 					'', 
		'post_type' => 				'', 
		'blog_categories' => 		'', 
		'portfolio_categories' => 	'', 
		'columns' => 				'', 
		'count' => 					'', 
		'slides_control' => 		'', 
		'pause' => 					'', 
		'speed' => 					'', 
		'blog_metadata' => 			'', 
		'portfolio_metadata' => 	'', 
		'animation' => 				'', 
		'animation_delay' => 		'', 
		'classes' => 				'' 
	);
}
