<?php
/**
 * @package 	WordPress
 * @subpackage 	Porter Pub
 * @version 	1.0.0
 * 
 * Theme Content Composer Shortcodes
 * Created by CMSMasters
 * 
 */


 

function porter_pub_theme_shortcodes($shortcodes) {
	$shortcodes[] = 'cmsmasters_menu_items';
	
	$shortcodes[] = 'cmsmasters_menu_item';
	
	
	return $shortcodes;
}

add_filter('cmsmasters_custom_shortcodes_filter', 'porter_pub_theme_shortcodes');

 
/**
 * Menu
 */
	

function cmsmasters_menu_items($atts, $content = null) {
	extract(shortcode_atts(array( 
		'shortcode_id' => 		'', 
		'animation' => 			'', 
		'animation_delay' => 	'', 
		'classes' => 			'' 
	), $atts));
	
	
	$unique_id = $shortcode_id;
	
	$out = '';
	
	
	$out .= '<div id="cmsmasters_menu_shortcode_' . esc_attr($unique_id) . '" class="cmsmasters_menu' . 
	(($classes != '') ? ' ' . $classes : '') . 
	'"' . 
	(($animation != '') ? ' data-animation="' . $animation . '"' : '') . 
	(($animation != '' && $animation_delay != '') ? ' data-delay="' . $animation_delay . '"' : '') . 
	'>' . "\n" . 
		do_shortcode($content) . 
	'</div>' . "\n";
	
	
	return $out;
}


/**
 * Menu Item
 */
function cmsmasters_menu_item($atts, $content = null) {
	extract(shortcode_atts(array( 
		'shortcode_id' => 				'', 
		'price' => 						'100', 
		'currency' => 					'$', 
		'features' => 					'', 
		'best' => 						'', 
		'best_bg_color' => 				'', 
		'best_text_color' => 			'', 
		'best_recommend' => 			'', 
		'best_bg_recommend_color' => 	'', 
		'best_text_recommend_color' =>	'', 
		'animation' => 					'', 
		'animation_delay' => 			'', 
		'classes' => 					'' 
	), $atts));
	
	
	$feature_array = explode('||', $features);
	
	$unique_id = $shortcode_id;
	
	$style_menu = '';
	
	
	if ($best == 'true') {
		if ($best_bg_color != '') {
			$style_menu .= '#cmsmasters_menu_item_' . esc_attr($unique_id) . ' { ' . 
				"\n\t" . cmsmasters_color_css('background-color', $best_bg_color) . 
			"\n" . '} ' . "\n";
		}
		
		
		if ($best_text_color != '') {
			$style_menu .= '#cmsmasters_menu_item_' . esc_attr($unique_id) . ' .menu_title, ' . 
			'#cmsmasters_menu_item_' . esc_attr($unique_id) . ' .menu_title *, ' . 
			'#cmsmasters_menu_item_' . esc_attr($unique_id) . ' .cmsmasters_menu_price_wrap, ' . 
			'#cmsmasters_menu_item_' . esc_attr($unique_id) . ' .menu_feature_list li:before, ' . 
			'#cmsmasters_menu_item_' . esc_attr($unique_id) . ' .cmsmasters_menu_best_feature, ' . 
			'#cmsmasters_menu_item_' . esc_attr($unique_id) . ' .menu_feature_list * { ' . 
				"\n\t" . cmsmasters_color_css('color', $best_text_color) . 
			"\n" . '} ' . "\n" . 
			'#cmsmasters_menu_item_' . esc_attr($unique_id) . ' .menu_feature_list_wrap { ' . 
				"\n\t" . cmsmasters_color_css('border-top-color', $best_text_color) . 
			"\n" . '} ' . "\n";
		}
	}
	
	
	$menu_out = '<div id="cmsmasters_menu_item_' . esc_attr($unique_id) . '" class="cmsmasters_menu_item' . 
	(($best == 'true') ? ' menu_best' : '') . 
	(($classes != '') ? ' ' . $classes : '') . 
	'"' . 
	(($animation != '') ? ' data-animation="' . $animation . '"' : '') . 
	(($animation != '' && $animation_delay != '') ? ' data-delay="' . $animation_delay . '"' : '') . 
	'>' . "\n" . 
		'<div class="cmsmasters_menu_item_inner">' . "\n" . 
			'<div class="menu_title_wrap">' . "\n" . 
				'<div class="cmsmasters_menu_price_wrap">' . "\n" . 
					'<span class="cmsmasters_menu_currency">' . $currency . '</span>' . "\n" . 
					'<span class="cmsmasters_menu_price">' . $price . '</span>' . "\n" . 
				'</div>' . "\n" . 
				'<h5 class="menu_title">' . $content;
				
				if ($best == 'true' && $best_recommend != '') {
					$style_menu .= '#cmsmasters_menu_item_' . esc_attr($unique_id) . ' .cmsmasters_menu_best_feature { ' . 
						"\n\t" . cmsmasters_color_css('color', $best_text_recommend_color) . 
						"\n\t" . cmsmasters_color_css('background-color', $best_bg_recommend_color) . 
					"\n" . '} ' . "\n";
				
					$menu_out .= '<span class="cmsmasters_menu_best_feature">' . $best_recommend . '</span></h5>' . "\n";
				} else {
					$menu_out .= '</h5>' . "\n";
				}
			'</div>' . "\n";
			
			
			if (!empty($feature_array)) {
				$menu_out .= '<div class="menu_feature_list_wrap">' . "\n";
				
				
				if (!empty($feature_array)) {
					$menu_out .= '<ul class="menu_feature_list">' . "\n";
				}
				
				
				foreach ($feature_array as $feature) { 
					$feature_atts = explode('|', $feature);
					
					
					$feature_atts = preg_replace('/^title\{([^\}]*)\}/','$1', $feature_atts);
					
					$feature_atts = preg_replace('/^link\{([^\}]*)\}/','$1', $feature_atts);
					
					$feature_atts = preg_replace('/^icon\{([^\}]*)\}/','$1', $feature_atts);
					 
					$menu_out .= '<li>' . 
					((isset($feature_atts[2]) && $feature_atts[2] != '') ? '<span class="feature_icon ' . $feature_atts[2] . '">' : '') . 
					((isset($feature_atts[1]) && $feature_atts[1] != '') ? '<a href="' . esc_url($feature_atts[1]) . '" class="feature_link">' : '') . 
					$feature_atts[0] . 
					((isset($feature_atts[1]) && $feature_atts[1] != '') ? '</a>' : '') . 
					((isset($feature_atts[2]) && $feature_atts[2] != '') ? '</span>' : '') . 
					'</li>' . "\n";
				}
				
				
				if (!empty($feature_array)) { 
					$menu_out .= '</ul>' . "\n";
				}
				
				$menu_out .= '</div>' . "\n";
			}
		
		$menu_out .= '</div></div>' . "\n" . 
	'</div>' . "\n";
	
	$menu_out .= Cmsmasters_Shortcodes::cmsmasters_generate_front_css($style_menu);
	
	
	return $menu_out;
}