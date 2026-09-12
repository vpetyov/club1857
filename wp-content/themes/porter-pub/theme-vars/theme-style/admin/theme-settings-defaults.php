<?php 
/**
 * @package 	WordPress
 * @subpackage 	Porter Pub
 * @version		1.2.1
 * 
 * Theme Settings Defaults
 * Created by CMSMasters
 * 
 */


/* Theme Settings General Default Values */
if (!function_exists('porter_pub_settings_general_defaults')) {

function porter_pub_settings_general_defaults($id = false) {
	$settings = array( 
		'general' => array( 
			'porter-pub' . '_theme_layout' => 			'liquid', 
			'porter-pub' . '_logo_type' => 			'image', 
			'porter-pub' . '_logo_url' => 				'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo.png', 
			'porter-pub' . '_logo_url_retina' => 		'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo_retina.png', 
			'porter-pub' . '_logo_title' => 			get_bloginfo('name') ? get_bloginfo('name') : 'Porter Pub', 
			'porter-pub' . '_logo_subtitle' => 		'', 
			'porter-pub' . '_logo_custom_color' => 	0, 
			'porter-pub' . '_logo_title_color' => 		'', 
			'porter-pub' . '_logo_subtitle_color' => 	'' 
		), 
		'bg' => array( 
			'porter-pub' . '_bg_col' => 			'#ffffff', 
			'porter-pub' . '_bg_img_enable' => 	0, 
			'porter-pub' . '_bg_img' => 			'', 
			'porter-pub' . '_bg_rep' => 			'no-repeat', 
			'porter-pub' . '_bg_pos' => 			'top center', 
			'porter-pub' . '_bg_att' => 			'scroll', 
			'porter-pub' . '_bg_size' => 			'cover' 
		), 
		'header' => array( 
			'porter-pub' . '_fixed_header' => 					1, 
			'porter-pub' . '_header_overlaps' => 				1, 
			'porter-pub' . '_header_top_line' => 				0, 
			'porter-pub' . '_header_top_height' => 			'40', 
			'porter-pub' . '_header_top_line_short_info' => 	'', 
			'porter-pub' . '_header_top_line_add_cont' => 		'social', 
			'porter-pub' . '_header_styles' => 				'default', 
			'porter-pub' . '_header_mid_height' => 			'174', 
			'porter-pub' . '_header_bot_height' => 			'68', 
			'porter-pub' . '_header_search' => 				0, 
			'porter-pub' . '_header_add_cont' => 				'social', 
			'porter-pub' . '_header_add_cont_cust_html' => 	'', 
			'porter-pub' . '_woocommerce_cart_dropdown' => 	0 
		), 
		'content' => array( 
			'porter-pub' . '_layout' => 					'r_sidebar', 
			'porter-pub' . '_archives_layout' => 			'r_sidebar', 
			'porter-pub' . '_search_layout' => 				'r_sidebar', 
			'porter-pub' . '_other_layout' => 				'r_sidebar', 
			'porter-pub' . '_heading_alignment' => 			'center', 
			'porter-pub' . '_heading_scheme' => 			'default', 
			'porter-pub' . '_heading_bg_image_enable' => 	1, 
			'porter-pub' . '_heading_bg_image' => 			'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/headline_bg.jpg', 
			'porter-pub' . '_heading_bg_repeat' => 			'no-repeat', 
			'porter-pub' . '_heading_bg_attachment' => 		'scroll', 
			'porter-pub' . '_heading_bg_size' => 			'cover', 
			'porter-pub' . '_heading_bg_color' => 			'', 
			'porter-pub' . '_heading_height' => 			'416', 
			'porter-pub' . '_breadcrumbs' => 				1, 
			'porter-pub' . '_bottom_scheme' => 				'footer', 
			'porter-pub' . '_bottom_sidebar' => 			0, 
			'porter-pub' . '_bottom_sidebar_layout' => 		'14141414' 
		), 
		'footer' => array( 
			'porter-pub' . '_footer_scheme' => 				'footer', 
			'porter-pub' . '_footer_type' => 					'default', 
			'porter-pub' . '_footer_additional_content' => 	'social', 
			'porter-pub' . '_footer_logo' => 					1, 
			'porter-pub' . '_footer_logo_url' => 				'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo_footer.png', 
			'porter-pub' . '_footer_logo_url_retina' => 		'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo_footer_retina.png', 
			'porter-pub' . '_footer_nav' => 					0, 
			'porter-pub' . '_footer_social' => 				1, 
			'porter-pub' . '_footer_html' => 					'', 
			'porter-pub' . '_footer_copyright' => 				'Porter Pub' . ' &copy; ' . date('Y') . ' / ' . esc_html__('All Rights Reserved', 'porter-pub') 
		) 
	);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



/* Theme Settings Fonts Default Values */
if (!function_exists('porter_pub_settings_font_defaults')) {

function porter_pub_settings_font_defaults($id = false) {
	$settings = array( 
		'content' => array( 
			'porter-pub' . '_content_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Graduate', 
				'font_size' => 			'15', 
				'line_height' => 		'26', 
				'font_weight' => 		'400', 
				'font_style' => 		'normal' 
			) 
		), 
		'link' => array( 
			'porter-pub' . '_link_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Graduate', 
				'font_size' => 			'15', 
				'line_height' => 		'26', 
				'font_weight' => 		'400', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'porter-pub' . '_link_hover_decoration' => 	'none' 
		), 
		'nav' => array( 
			'porter-pub' . '_nav_title_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Oswald:300,400,700', 
				'font_size' => 			'18', 
				'line_height' => 		'28', 
				'font_weight' => 		'700', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase' 
			), 
			'porter-pub' . '_nav_dropdown_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Graduate', 
				'font_size' => 			'15', 
				'line_height' => 		'24', 
				'font_weight' => 		'400', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none' 
			) 
		), 
		'heading' => array( 
			'porter-pub' . '_h1_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Yeseva+One', 
				'font_size' => 			'40', 
				'line_height' => 		'52', 
				'font_weight' => 		'400', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'porter-pub' . '_h2_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Oswald:300,400,700', 
				'font_size' => 			'22', 
				'line_height' => 		'30', 
				'font_weight' => 		'700', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase', 
				'text_decoration' => 	'none' 
			), 
			'porter-pub' . '_h3_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Oswald:300,400,700', 
				'font_size' => 			'18', 
				'line_height' => 		'26', 
				'font_weight' => 		'700', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase', 
				'text_decoration' => 	'none' 
			), 
			'porter-pub' . '_h4_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Oswald:300,400,700', 
				'font_size' => 			'16', 
				'line_height' => 		'24', 
				'font_weight' => 		'700', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase', 
				'text_decoration' => 	'none' 
			), 
			'porter-pub' . '_h5_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Graduate', 
				'font_size' => 			'15', 
				'line_height' => 		'22', 
				'font_weight' => 		'400', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'porter-pub' . '_h6_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Graduate', 
				'font_size' => 			'14', 
				'line_height' => 		'20', 
				'font_weight' => 		'400', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			) 
		), 
		'other' => array( 
			'porter-pub' . '_button_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Oswald:300,400,700', 
				'font_size' => 			'15', 
				'line_height' => 		'50', 
				'font_weight' => 		'700', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase' 
			), 
			'porter-pub' . '_small_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Graduate', 
				'font_size' => 			'13', 
				'line_height' => 		'24', 
				'font_weight' => 		'400', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none' 
			), 
			'porter-pub' . '_input_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Graduate', 
				'font_size' => 			'15', 
				'line_height' => 		'26', 
				'font_weight' => 		'500', 
				'font_style' => 		'normal' 
			), 
			'porter-pub' . '_quote_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Graduate', 
				'font_size' => 			'18', 
				'line_height' => 		'32', 
				'font_weight' => 		'400', 
				'font_style' => 		'normal' 
			) 
		),
		'google' => array( 
			'porter-pub' . '_google_web_fonts' => array( 
				'Titillium+Web:300,300italic,400,400italic,600,600italic,700,700italic|Titillium Web', 
				'Roboto:300,300italic,400,400italic,500,500italic,700,700italic|Roboto', 
				'Roboto+Condensed:400,400italic,700,700italic|Roboto Condensed', 
				'Open+Sans:300,300italic,400,400italic,700,700italic|Open Sans', 
				'Open+Sans+Condensed:300,300italic,700|Open Sans Condensed', 
				'Droid+Sans:400,700|Droid Sans', 
				'Droid+Serif:400,400italic,700,700italic|Droid Serif', 
				'PT+Sans:400,400italic,700,700italic|PT Sans', 
				'PT+Sans+Caption:400,700|PT Sans Caption', 
				'PT+Sans+Narrow:400,700|PT Sans Narrow', 
				'PT+Serif:400,400italic,700,700italic|PT Serif', 
				'Ubuntu:400,400italic,700,700italic|Ubuntu', 
				'Ubuntu+Condensed|Ubuntu Condensed', 
				'Headland+One|Headland One', 
				'Source+Sans+Pro:300,300italic,400,400italic,700,700italic|Source Sans Pro', 
				'Lato:400,400italic,700,700italic|Lato', 
				'Cuprum:400,400italic,700,700italic|Cuprum', 
				'Oswald:300,400,700|Oswald', 
				'Yanone+Kaffeesatz:300,400,700|Yanone Kaffeesatz', 
				'Lobster|Lobster', 
				'Lobster+Two:400,400italic,700,700italic|Lobster Two', 
				'Questrial|Questrial', 
				'Raleway:300,400,500,600,700|Raleway', 
				'Dosis:300,400,500,700|Dosis', 
				'Cutive+Mono|Cutive Mono', 
				'Quicksand:300,400,700|Quicksand', 
				'Montserrat:400,700|Montserrat', 
				'Cookie|Cookie',
				'Yeseva+One|Yeseva One',
				'Graduate|Graduate'
			) 
		)  
	);
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



// WP Color Picker Palettes
if (!function_exists('cmsmasters_color_picker_palettes')) {

function cmsmasters_color_picker_palettes() {
	$palettes = array( 
		'#483b36', 
		'#392d28', 
		'#a2774b', 
		'#392d28', 
		'#edebe7', 
		'#ffffff', 
		'#404231', 
		'#24292f' 
	);
	
	
	return $palettes;
}

}



// Theme Settings Color Schemes Default Colors
if (!function_exists('porter_pub_color_schemes_defaults')) {

function porter_pub_color_schemes_defaults($id = false) {
	$settings = array( 
		'default' => array( // content default color scheme
			'color' => 		'#54453f', 
			'link' => 		'#392d28', 
			'hover' => 		'#a2774b', 
			'heading' => 	'#392d28', 
			'bg' => 		'#edebe7', 
			'alternate' => 	'rgba(255,255,255,0.4)', 
			'border' => 	'rgba(36,41,47,0.18)', 
			'secondary' => 	'#24292f' 
		), 
		'header' => array( // Header color scheme
			'mid_color' => 		'rgba(255,255,255,0.6)', 
			'mid_link' => 		'#ffffff', 
			'mid_hover' => 		'rgba(255,255,255,0.7)', 
			'mid_bg' => 		'rgba(255,255,255,0)', 
			'mid_bg_scroll' => 	'#24292f', 
			'mid_border' => 	'rgba(255,255,255,0)', 
			'bot_color' => 		'rgba(255,255,255,0.6)', 
			'bot_link' => 		'rgba(255,255,255,0.7)', 
			'bot_hover' => 		'#ffffff', 
			'bot_bg' => 		'rgba(255,255,255,0)', 
			'bot_bg_scroll' => 	'#24292f', 
			'bot_border' => 	'rgba(255,255,255,0.3)' 
		), 
		'navigation' => array( // Navigation color scheme
			'title_link' => 			'#ffffff', 
			'title_link_hover' => 		'rgba(255,255,255,0.75)', 
			'title_link_current' => 	'#ffffff', 
			'title_link_subtitle' => 	'rgba(255,255,255,0.6)', 
			'title_link_bg' => 			'rgba(255,255,255,0)', 
			'title_link_bg_hover' => 	'rgba(255,255,255,0)', 
			'title_link_bg_current' => 	'rgba(255,255,255,0)', 
			'title_link_border' => 		'rgba(255,255,255,0)', 
			'dropdown_text' => 			'rgba(255,255,255,0.3)', 
			'dropdown_bg' => 			'#2d3238', 
			'dropdown_border' => 		'#2d3238', 
			'dropdown_link' => 			'rgba(255,255,255,0.7)', 
			'dropdown_link_hover' => 	'#ffffff', 
			'dropdown_link_subtitle' => 'rgba(255,255,255,0.3)', 
			'dropdown_link_highlight' => 'rgba(255,255,255,0)', 
			'dropdown_link_border' => 	'#2d3238' 
		), 
		'header_top' => array( // Header Top color scheme
			'color' => 					'rgba(255,255,255,0.3)', 
			'link' => 					'rgba(255,255,255,0.6)', 
			'hover' => 					'#ffffff', 
			'bg' => 					'#24292f', 
			'border' => 				'rgba(255,255,255,0.1)', 
			'title_link' => 			'rgba(255,255,255,0.6)', 
			'title_link_hover' => 		'#ffffff', 
			'title_link_bg' => 			'#24292f', 
			'title_link_bg_hover' => 	'#24292f', 
			'title_link_border' => 		'#24292f', 
			'dropdown_bg' => 			'#2d3238', 
			'dropdown_border' => 		'#2d3238', 
			'dropdown_link' => 			'rgba(255,255,255,0.5)', 
			'dropdown_link_hover' => 	'#ffffff', 
			'dropdown_link_highlight' => '#a2774b', 
			'dropdown_link_border' => 	'#2d3238' 
		), 
		'footer' => array( // Footer color scheme
			'color' => 		'#5c524e', 
			'link' => 		'#6e6664', 
			'hover' => 		'#ffffff', 
			'heading' => 	'#ffffff', 
			'bg' => 		'#24292f', 
			'alternate' => 	'rgba(255,255,255,0.04)', 
			'border' => 	'rgba(255,255,255,0.15)', 
			'secondary' => 	'#24292f' 
		), 
		'first' => array( // custom color scheme 1
			'color' => 		'#ffffff', 
			'link' => 		'#392d28', 
			'hover' => 		'#ffffff', 
			'heading' => 	'#ffffff', 
			'bg' => 		'#edebe7', 
			'alternate' => 	'rgba(255,255,255,0.4)', 
			'border' => 	'rgba(36,41,47,0.18)', 
			'secondary' => 	'#ffffff' 
		), 
		'second' => array( // custom color scheme 2
			'color' => 		'#fffefe', 
			'link' => 		'#525458', 
			'hover' => 		'#a2774b', 
			'heading' => 	'#392d28', 
			'bg' => 		'#edebe7', 
			'alternate' => 	'rgba(255,255,255,0.1)', 
			'border' => 	'#525458', 
			'secondary' => 	'#24292f' 
		), 
		'third' => array( // custom color scheme 3
			'color' => 		'#483b36', 
			'link' => 		'#392d28', 
			'hover' => 		'#a2774b', 
			'heading' => 	'#392d28', 
			'bg' => 		'#edebe7', 
			'alternate' => 	'rgba(255,255,255,0.4)', 
			'border' => 	'rgba(36,41,47,0.18)', 
			'secondary' => 	'#edebe7'
		) 
	);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



// Theme Settings Elements Default Values
if (!function_exists('porter_pub_settings_element_defaults')) {

function porter_pub_settings_element_defaults($id = false) {
	$settings = array( 
		'sidebar' => array( 
			'porter-pub' . '_sidebar' => 	'' 
		), 
		'icon' => array( 
			'porter-pub' . '_social_icons' => array( 
				'cmsmasters-icon-facebook-1|#|' . esc_html__('Facebook', 'porter-pub') . '|true||', 
				'cmsmasters-icon-gplus-1|#|' . esc_html__('Google+', 'porter-pub') . '|true||', 
				'cmsmasters-icon-instagram|#|' . esc_html__('Instagram', 'porter-pub') . '|true||', 
				'cmsmasters-icon-twitter|#|' . esc_html__('Twitter', 'porter-pub') . '|true||', 
				'cmsmasters-icon-youtube-play|#|' . esc_html__('YouTube', 'porter-pub') . '|true||' 
			) 
		), 
		'lightbox' => array( 
			'porter-pub' . '_ilightbox_skin' => 					'dark', 
			'porter-pub' . '_ilightbox_path' => 					'vertical', 
			'porter-pub' . '_ilightbox_infinite' => 				0, 
			'porter-pub' . '_ilightbox_aspect_ratio' => 			1, 
			'porter-pub' . '_ilightbox_mobile_optimizer' => 		1, 
			'porter-pub' . '_ilightbox_max_scale' => 				1, 
			'porter-pub' . '_ilightbox_min_scale' => 				0.2, 
			'porter-pub' . '_ilightbox_inner_toolbar' => 			0, 
			'porter-pub' . '_ilightbox_smart_recognition' => 		0, 
			'porter-pub' . '_ilightbox_fullscreen_one_slide' => 	0, 
			'porter-pub' . '_ilightbox_fullscreen_viewport' => 	'center', 
			'porter-pub' . '_ilightbox_controls_toolbar' => 		1, 
			'porter-pub' . '_ilightbox_controls_arrows' => 		0, 
			'porter-pub' . '_ilightbox_controls_fullscreen' => 	1, 
			'porter-pub' . '_ilightbox_controls_thumbnail' => 		1, 
			'porter-pub' . '_ilightbox_controls_keyboard' => 		1, 
			'porter-pub' . '_ilightbox_controls_mousewheel' => 	1, 
			'porter-pub' . '_ilightbox_controls_swipe' => 			1, 
			'porter-pub' . '_ilightbox_controls_slideshow' => 		0 
		), 
		'sitemap' => array( 
			'porter-pub' . '_sitemap_nav' => 			1, 
			'porter-pub' . '_sitemap_categs' => 		1, 
			'porter-pub' . '_sitemap_tags' => 			1, 
			'porter-pub' . '_sitemap_month' => 		1, 
			'porter-pub' . '_sitemap_pj_categs' => 	1, 
			'porter-pub' . '_sitemap_pj_tags' => 		1 
		), 
		'error' => array( 
			'porter-pub' . '_error_color' => 				'#313131', 
			'porter-pub' . '_error_bg_color' => 			'#ffffff', 
			'porter-pub' . '_error_bg_img_enable' => 		0, 
			'porter-pub' . '_error_bg_image' => 			'', 
			'porter-pub' . '_error_bg_rep' => 				'no-repeat', 
			'porter-pub' . '_error_bg_pos' => 				'top center', 
			'porter-pub' . '_error_bg_att' => 				'scroll', 
			'porter-pub' . '_error_bg_size' => 			'cover', 
			'porter-pub' . '_error_search' => 				1, 
			'porter-pub' . '_error_sitemap_button' =>		1, 
			'porter-pub' . '_error_sitemap_link' => 		'' 
		), 
		'code' => array( 
			'porter-pub' . '_custom_css' => 			'', 
			'porter-pub' . '_custom_js' => 			'', 
			'porter-pub' . '_gmap_api_key' => 			'', 
			'porter-pub' . '_twitter_access_data' => array(), 
		), 
		'recaptcha' => array( 
			'porter-pub' . '_recaptcha_public_key' => 		'', 
			'porter-pub' . '_recaptcha_private_key' => 	'' 
		) 
	);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



// Theme Settings Single Posts Default Values
if (!function_exists('porter_pub_settings_single_defaults')) {

function porter_pub_settings_single_defaults($id = false) {
	$settings = array( 
		'post' => array( 
			'porter-pub' . '_blog_post_layout' => 			'fullwidth', 
			'porter-pub' . '_blog_post_title' => 			1, 
			'porter-pub' . '_blog_post_date' => 			1, 
			'porter-pub' . '_blog_post_cat' => 			1, 
			'porter-pub' . '_blog_post_author' => 			1, 
			'porter-pub' . '_blog_post_comment' => 		1, 
			'porter-pub' . '_blog_post_tag' => 			1, 
			'porter-pub' . '_blog_post_like' => 			1, 
			'porter-pub' . '_blog_post_nav_box' => 		1, 
			'porter-pub' . '_blog_post_nav_order_cat' => 	0, 
			'porter-pub' . '_blog_post_share_box' => 		1, 
			'porter-pub' . '_blog_post_author_box' => 		1, 
			'porter-pub' . '_blog_more_posts_box' => 		'popular', 
			'porter-pub' . '_blog_more_posts_count' => 	'3', 
			'porter-pub' . '_blog_more_posts_pause' => 	'5' 
		), 
		'project' => array( 
			'porter-pub' . '_portfolio_project_title' => 			1, 
			'porter-pub' . '_portfolio_project_details_title' => 	esc_html__('Project details', 'porter-pub'), 
			'porter-pub' . '_portfolio_project_date' => 			1, 
			'porter-pub' . '_portfolio_project_cat' => 			1, 
			'porter-pub' . '_portfolio_project_author' => 			1, 
			'porter-pub' . '_portfolio_project_comment' => 		0, 
			'porter-pub' . '_portfolio_project_tag' => 			0, 
			'porter-pub' . '_portfolio_project_like' => 			1, 
			'porter-pub' . '_portfolio_project_link' => 			0, 
			'porter-pub' . '_portfolio_project_share_box' => 		1, 
			'porter-pub' . '_portfolio_project_nav_box' => 		1, 
			'porter-pub' . '_portfolio_project_nav_order_cat' => 	0, 
			'porter-pub' . '_portfolio_project_author_box' => 		1, 
			'porter-pub' . '_portfolio_more_projects_box' => 		'popular', 
			'porter-pub' . '_portfolio_more_projects_count' => 	'4', 
			'porter-pub' . '_portfolio_more_projects_pause' => 	'5', 
			'porter-pub' . '_portfolio_project_slug' => 			'project', 
			'porter-pub' . '_portfolio_pj_categs_slug' => 			'pj-categs', 
			'porter-pub' . '_portfolio_pj_tags_slug' => 			'pj-tags' 
		), 
		'profile' => array( 
			'porter-pub' . '_profile_post_title' => 			1, 
			'porter-pub' . '_profile_post_details_title' => 	esc_html__('Profile details', 'porter-pub'), 
			'porter-pub' . '_profile_post_cat' => 				1, 
			'porter-pub' . '_profile_post_comment' => 			1, 
			'porter-pub' . '_profile_post_like' => 			1, 
			'porter-pub' . '_profile_post_nav_box' => 			1, 
			'porter-pub' . '_profile_post_nav_order_cat' => 	0, 
			'porter-pub' . '_profile_post_share_box' => 		1, 
			'porter-pub' . '_profile_post_slug' => 			'profile', 
			'porter-pub' . '_profile_pl_categs_slug' => 		'pl-categs' 
		) 
	);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



/* Project Puzzle Proportion */
if (!function_exists('porter_pub_project_puzzle_proportion')) {

function porter_pub_project_puzzle_proportion() {
	return 1;
}

}



/* Project Puzzle Proportion */
if (!function_exists('porter_pub_project_puzzle_large_gar_parameters')) {

function porter_pub_project_puzzle_large_gar_parameters() {
	$parameter = array ( 
		'container_width' 		=> 1160, 
		'bottomStaticPadding' 	=> 2.6 
	);
	
	
	return $parameter;
}

}



/* Theme Image Thumbnails Size */
if (!function_exists('porter_pub_get_image_thumbnail_list')) {

function porter_pub_get_image_thumbnail_list() {
	$list = array( 
		'cmsmasters-small-thumb' => array( 
			'width' => 		75, 
			'height' => 	75, 
			'crop' => 		true 
		), 
		'cmsmasters-square-thumb' => array( 
			'width' => 		300, 
			'height' => 	300, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Square', 'porter-pub') 
		), 
		'cmsmasters-blog-masonry-thumb' => array( 
			'width' => 		580, 
			'height' => 	403, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Masonry Blog', 'porter-pub') 
		), 
		'cmsmasters-project-thumb' => array( 
			'width' => 		580, 
			'height' => 	580, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Project', 'porter-pub') 
		), 
		'cmsmasters-project-masonry-thumb' => array( 
			'width' => 		580, 
			'height' => 	9999, 
			'title' => 		esc_attr__('Masonry Project', 'porter-pub') 
		), 
		'post-thumbnail' => array( 
			'width' => 		860, 
			'height' => 	575, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Featured', 'porter-pub') 
		), 
		'cmsmasters-masonry-thumb' => array( 
			'width' => 		860, 
			'height' => 	9999, 
			'title' => 		esc_attr__('Masonry', 'porter-pub') 
		), 
		'cmsmasters-full-thumb' => array( 
			'width' => 		1160, 
			'height' => 	770, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Full', 'porter-pub') 
		), 
		'cmsmasters-project-full-thumb' => array( 
			'width' => 		1160, 
			'height' => 	820, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Project Full', 'porter-pub') 
		), 
		'cmsmasters-full-masonry-thumb' => array( 
			'width' => 		1160, 
			'height' => 	9999, 
			'title' => 		esc_attr__('Masonry Full', 'porter-pub') 
		) 
	);
	
	
	return $list;
}

}



/* Project Post Type Registration Rename */
if (!function_exists('porter_pub_project_labels')) {

function porter_pub_project_labels() {
	return array( 
		'name' => 					esc_html__('Projects', 'porter-pub'), 
		'singular_name' => 			esc_html__('Project', 'porter-pub'), 
		'menu_name' => 				esc_html__('Projects', 'porter-pub'), 
		'all_items' => 				esc_html__('All Projects', 'porter-pub'), 
		'add_new' => 				esc_html__('Add New', 'porter-pub'), 
		'add_new_item' => 			esc_html__('Add New Project', 'porter-pub'), 
		'edit_item' => 				esc_html__('Edit Project', 'porter-pub'), 
		'new_item' => 				esc_html__('New Project', 'porter-pub'), 
		'view_item' => 				esc_html__('View Project', 'porter-pub'), 
		'search_items' => 			esc_html__('Search Projects', 'porter-pub'), 
		'not_found' => 				esc_html__('No projects found', 'porter-pub'), 
		'not_found_in_trash' => 	esc_html__('No projects found in Trash', 'porter-pub') 
	);
}

}

// add_filter('cmsmasters_project_labels_filter', 'porter_pub_project_labels');


if (!function_exists('porter_pub_pj_categs_labels')) {

function porter_pub_pj_categs_labels() {
	return array( 
		'name' => 					esc_html__('Project Categories', 'porter-pub'), 
		'singular_name' => 			esc_html__('Project Category', 'porter-pub') 
	);
}

}

// add_filter('cmsmasters_pj_categs_labels_filter', 'porter_pub_pj_categs_labels');


if (!function_exists('porter_pub_pj_tags_labels')) {

function porter_pub_pj_tags_labels() {
	return array( 
		'name' => 					esc_html__('Project Tags', 'porter-pub'), 
		'singular_name' => 			esc_html__('Project Tag', 'porter-pub') 
	);
}

}

// add_filter('cmsmasters_pj_tags_labels_filter', 'porter_pub_pj_tags_labels');



/* Profile Post Type Registration Rename */
if (!function_exists('porter_pub_profile_labels')) {

function porter_pub_profile_labels() {
	return array( 
		'name' => 					esc_html__('Profiles', 'porter-pub'), 
		'singular_name' => 			esc_html__('Profiles', 'porter-pub'), 
		'menu_name' => 				esc_html__('Profiles', 'porter-pub'), 
		'all_items' => 				esc_html__('All Profiles', 'porter-pub'), 
		'add_new' => 				esc_html__('Add New', 'porter-pub'), 
		'add_new_item' => 			esc_html__('Add New Profile', 'porter-pub'), 
		'edit_item' => 				esc_html__('Edit Profile', 'porter-pub'), 
		'new_item' => 				esc_html__('New Profile', 'porter-pub'), 
		'view_item' => 				esc_html__('View Profile', 'porter-pub'), 
		'search_items' => 			esc_html__('Search Profiles', 'porter-pub'), 
		'not_found' => 				esc_html__('No Profiles found', 'porter-pub'), 
		'not_found_in_trash' => 	esc_html__('No Profiles found in Trash', 'porter-pub') 
	);
}

}

// add_filter('cmsmasters_profile_labels_filter', 'porter_pub_profile_labels');


if (!function_exists('porter_pub_pl_categs_labels')) {

function porter_pub_pl_categs_labels() {
	return array( 
		'name' => 					esc_html__('Profile Categories', 'porter-pub'), 
		'singular_name' => 			esc_html__('Profile Category', 'porter-pub') 
	);
}

}

// add_filter('cmsmasters_pl_categs_labels_filter', 'porter_pub_pl_categs_labels');

