<?php 
/**
 * @package 	WordPress
 * @subpackage 	Porter Pub
 * @version 	1.2.1
 * 
 * Admin Panel Element Options
 * Created by CMSMasters
 * 
 */


function porter_pub_options_element_tabs() {
	$tabs = array();
	
	$tabs['sidebar'] = esc_attr__('Sidebars', 'porter-pub');
	
	if (class_exists('Cmsmasters_Content_Composer')) {
		$tabs['icon'] = esc_attr__('Social Icons', 'porter-pub');
	}
	
	$tabs['lightbox'] = esc_attr__('Lightbox', 'porter-pub');
	$tabs['sitemap'] = esc_attr__('Sitemap', 'porter-pub');
	$tabs['error'] = esc_attr__('404', 'porter-pub');
	$tabs['code'] = esc_attr__('Custom Codes', 'porter-pub');
	
	if (class_exists('Cmsmasters_Form_Builder')) {
		$tabs['recaptcha'] = esc_attr__('reCAPTCHA', 'porter-pub');
	}
	
	return apply_filters('cmsmasters_options_element_tabs_filter', $tabs);
}


function porter_pub_options_element_sections() {
	$tab = porter_pub_get_the_tab();
	
	switch ($tab) {
	case 'sidebar':
		$sections = array();
		
		$sections['sidebar_section'] = esc_attr__('Custom Sidebars', 'porter-pub');
		
		break;
	case 'icon':
		$sections = array();
		
		$sections['icon_section'] = esc_attr__('Social Icons', 'porter-pub');
		
		break;
	case 'lightbox':
		$sections = array();
		
		$sections['lightbox_section'] = esc_attr__('Theme Lightbox Options', 'porter-pub');
		
		break;
	case 'sitemap':
		$sections = array();
		
		$sections['sitemap_section'] = esc_attr__('Sitemap Page Options', 'porter-pub');
		
		break;
	case 'error':
		$sections = array();
		
		$sections['error_section'] = esc_attr__('404 Error Page Options', 'porter-pub');
		
		break;
	case 'code':
		$sections = array();
		
		$sections['code_section'] = esc_attr__('Custom Codes', 'porter-pub');
		
		break;
	case 'recaptcha':
		$sections = array();
		
		$sections['recaptcha_section'] = esc_attr__('Form Builder Plugin reCAPTCHA Keys', 'porter-pub');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return apply_filters('cmsmasters_options_element_sections_filter', $sections, $tab);	
} 


function porter_pub_options_element_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = porter_pub_get_the_tab();
	}
	
	
	$options = array();
	
	
	$defaults = porter_pub_settings_element_defaults();
	
	
	switch ($tab) {
	case 'sidebar':
		$options[] = array( 
			'section' => 'sidebar_section', 
			'id' => 'porter-pub' . '_sidebar', 
			'title' => esc_html__('Custom Sidebars', 'porter-pub'), 
			'desc' => '', 
			'type' => 'sidebar', 
			'std' => $defaults[$tab]['porter-pub' . '_sidebar'] 
		);
		
		break;
	case 'icon':
		$options[] = array( 
			'section' => 'icon_section', 
			'id' => 'porter-pub' . '_social_icons', 
			'title' => esc_html__('Social Icons', 'porter-pub'), 
			'desc' => '', 
			'type' => 'social', 
			'std' => $defaults[$tab]['porter-pub' . '_social_icons'] 
		);
		
		break;
	case 'lightbox':
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'porter-pub' . '_ilightbox_skin', 
			'title' => esc_html__('Skin', 'porter-pub'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['porter-pub' . '_ilightbox_skin'], 
			'choices' => array( 
				esc_html__('Dark', 'porter-pub') . '|dark', 
				esc_html__('Light', 'porter-pub') . '|light', 
				esc_html__('Mac', 'porter-pub') . '|mac', 
				esc_html__('Metro Black', 'porter-pub') . '|metro-black', 
				esc_html__('Metro White', 'porter-pub') . '|metro-white', 
				esc_html__('Parade', 'porter-pub') . '|parade', 
				esc_html__('Smooth', 'porter-pub') . '|smooth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'porter-pub' . '_ilightbox_path', 
			'title' => esc_html__('Path', 'porter-pub'), 
			'desc' => esc_html__('Sets path for switching windows', 'porter-pub'), 
			'type' => 'radio', 
			'std' => $defaults[$tab]['porter-pub' . '_ilightbox_path'], 
			'choices' => array( 
				esc_html__('Vertical', 'porter-pub') . '|vertical', 
				esc_html__('Horizontal', 'porter-pub') . '|horizontal' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'porter-pub' . '_ilightbox_infinite', 
			'title' => esc_html__('Infinite', 'porter-pub'), 
			'desc' => esc_html__('Sets the ability to infinite the group', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_ilightbox_infinite'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'porter-pub' . '_ilightbox_aspect_ratio', 
			'title' => esc_html__('Keep Aspect Ratio', 'porter-pub'), 
			'desc' => esc_html__('Sets the resizing method used to keep aspect ratio within the viewport', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_ilightbox_aspect_ratio'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'porter-pub' . '_ilightbox_mobile_optimizer', 
			'title' => esc_html__('Mobile Optimizer', 'porter-pub'), 
			'desc' => esc_html__('Make lightboxes optimized for giving better experience with mobile devices', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_ilightbox_mobile_optimizer'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'porter-pub' . '_ilightbox_max_scale', 
			'title' => esc_html__('Max Scale', 'porter-pub'), 
			'desc' => esc_html__('Sets the maximum viewport scale of the content', 'porter-pub'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['porter-pub' . '_ilightbox_max_scale'], 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'porter-pub' . '_ilightbox_min_scale', 
			'title' => esc_html__('Min Scale', 'porter-pub'), 
			'desc' => esc_html__('Sets the minimum viewport scale of the content', 'porter-pub'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['porter-pub' . '_ilightbox_min_scale'], 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'porter-pub' . '_ilightbox_inner_toolbar', 
			'title' => esc_html__('Inner Toolbar', 'porter-pub'), 
			'desc' => esc_html__('Bring buttons into windows, or let them be over the overlay', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_ilightbox_inner_toolbar'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'porter-pub' . '_ilightbox_smart_recognition', 
			'title' => esc_html__('Smart Recognition', 'porter-pub'), 
			'desc' => esc_html__('Sets content auto recognize from web pages', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_ilightbox_smart_recognition'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'porter-pub' . '_ilightbox_fullscreen_one_slide', 
			'title' => esc_html__('Fullscreen One Slide', 'porter-pub'), 
			'desc' => esc_html__('Decide to fullscreen only one slide or hole gallery the fullscreen mode', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_ilightbox_fullscreen_one_slide'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'porter-pub' . '_ilightbox_fullscreen_viewport', 
			'title' => esc_html__('Fullscreen Viewport', 'porter-pub'), 
			'desc' => esc_html__('Sets the resizing method used to fit content within the fullscreen mode', 'porter-pub'), 
			'type' => 'select', 
			'std' => $defaults[$tab]['porter-pub' . '_ilightbox_fullscreen_viewport'], 
			'choices' => array( 
				esc_html__('Center', 'porter-pub') . '|center', 
				esc_html__('Fit', 'porter-pub') . '|fit', 
				esc_html__('Fill', 'porter-pub') . '|fill', 
				esc_html__('Stretch', 'porter-pub') . '|stretch' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'porter-pub' . '_ilightbox_controls_toolbar', 
			'title' => esc_html__('Toolbar Controls', 'porter-pub'), 
			'desc' => esc_html__('Sets buttons be available or not', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_ilightbox_controls_toolbar'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'porter-pub' . '_ilightbox_controls_arrows', 
			'title' => esc_html__('Arrow Controls', 'porter-pub'), 
			'desc' => esc_html__('Enable the arrow buttons', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_ilightbox_controls_arrows'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'porter-pub' . '_ilightbox_controls_fullscreen', 
			'title' => esc_html__('Fullscreen Controls', 'porter-pub'), 
			'desc' => esc_html__('Sets the fullscreen button', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_ilightbox_controls_fullscreen'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'porter-pub' . '_ilightbox_controls_thumbnail', 
			'title' => esc_html__('Thumbnails Controls', 'porter-pub'), 
			'desc' => esc_html__('Sets the thumbnail navigation', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_ilightbox_controls_thumbnail'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'porter-pub' . '_ilightbox_controls_keyboard', 
			'title' => esc_html__('Keyboard Controls', 'porter-pub'), 
			'desc' => esc_html__('Sets the keyboard navigation', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_ilightbox_controls_keyboard'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'porter-pub' . '_ilightbox_controls_mousewheel', 
			'title' => esc_html__('Mouse Wheel Controls', 'porter-pub'), 
			'desc' => esc_html__('Sets the mousewheel navigation', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_ilightbox_controls_mousewheel'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'porter-pub' . '_ilightbox_controls_swipe', 
			'title' => esc_html__('Swipe Controls', 'porter-pub'), 
			'desc' => esc_html__('Sets the swipe navigation', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_ilightbox_controls_swipe'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'porter-pub' . '_ilightbox_controls_slideshow', 
			'title' => esc_html__('Slideshow Controls', 'porter-pub'), 
			'desc' => esc_html__('Enable the slideshow feature and button', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_ilightbox_controls_slideshow'] 
		);
		
		break;
	case 'sitemap':
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'porter-pub' . '_sitemap_nav', 
			'title' => esc_html__('Website Pages', 'porter-pub'), 
			'desc' => esc_html__('show', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_sitemap_nav'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'porter-pub' . '_sitemap_categs', 
			'title' => esc_html__('Blog Archives by Categories', 'porter-pub'), 
			'desc' => esc_html__('show', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_sitemap_categs'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'porter-pub' . '_sitemap_tags', 
			'title' => esc_html__('Blog Archives by Tags', 'porter-pub'), 
			'desc' => esc_html__('show', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_sitemap_tags'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'porter-pub' . '_sitemap_month', 
			'title' => esc_html__('Blog Archives by Month', 'porter-pub'), 
			'desc' => esc_html__('show', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_sitemap_month'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'porter-pub' . '_sitemap_pj_categs', 
			'title' => esc_html__('Portfolio Archives by Categories', 'porter-pub'), 
			'desc' => esc_html__('show', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_sitemap_pj_categs'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'porter-pub' . '_sitemap_pj_tags', 
			'title' => esc_html__('Portfolio Archives by Tags', 'porter-pub'), 
			'desc' => esc_html__('show', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_sitemap_pj_tags'] 
		);
		
		break;
	case 'error':
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'porter-pub' . '_error_color', 
			'title' => esc_html__('Text Color', 'porter-pub'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['porter-pub' . '_error_color'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'porter-pub' . '_error_bg_color', 
			'title' => esc_html__('Background Color', 'porter-pub'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['porter-pub' . '_error_bg_color'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'porter-pub' . '_error_bg_img_enable', 
			'title' => esc_html__('Background Image Visibility', 'porter-pub'), 
			'desc' => esc_html__('show', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_error_bg_img_enable'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'porter-pub' . '_error_bg_image', 
			'title' => esc_html__('Background Image', 'porter-pub'), 
			'desc' => esc_html__('Choose your custom error page background image.', 'porter-pub'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['porter-pub' . '_error_bg_image'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'porter-pub' . '_error_bg_rep', 
			'title' => esc_html__('Background Repeat', 'porter-pub'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['porter-pub' . '_error_bg_rep'], 
			'choices' => array( 
				esc_html__('No Repeat', 'porter-pub') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'porter-pub') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'porter-pub') . '|repeat-y', 
				esc_html__('Repeat', 'porter-pub') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'porter-pub' . '_error_bg_pos', 
			'title' => esc_html__('Background Position', 'porter-pub'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['porter-pub' . '_error_bg_pos'], 
			'choices' => array( 
				esc_html__('Top Left', 'porter-pub') . '|top left', 
				esc_html__('Top Center', 'porter-pub') . '|top center', 
				esc_html__('Top Right', 'porter-pub') . '|top right', 
				esc_html__('Center Left', 'porter-pub') . '|center left', 
				esc_html__('Center Center', 'porter-pub') . '|center center', 
				esc_html__('Center Right', 'porter-pub') . '|center right', 
				esc_html__('Bottom Left', 'porter-pub') . '|bottom left', 
				esc_html__('Bottom Center', 'porter-pub') . '|bottom center', 
				esc_html__('Bottom Right', 'porter-pub') . '|bottom right' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'porter-pub' . '_error_bg_att', 
			'title' => esc_html__('Background Attachment', 'porter-pub'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['porter-pub' . '_error_bg_att'], 
			'choices' => array( 
				esc_html__('Scroll', 'porter-pub') . '|scroll', 
				esc_html__('Fixed', 'porter-pub') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'porter-pub' . '_error_bg_size', 
			'title' => esc_html__('Background Size', 'porter-pub'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['porter-pub' . '_error_bg_size'], 
			'choices' => array( 
				esc_html__('Auto', 'porter-pub') . '|auto', 
				esc_html__('Cover', 'porter-pub') . '|cover', 
				esc_html__('Contain', 'porter-pub') . '|contain' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'porter-pub' . '_error_search', 
			'title' => esc_html__('Search Line', 'porter-pub'), 
			'desc' => esc_html__('show', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_error_search'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'porter-pub' . '_error_sitemap_button', 
			'title' => esc_html__('Sitemap Button', 'porter-pub'), 
			'desc' => esc_html__('show', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_error_sitemap_button'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'porter-pub' . '_error_sitemap_link', 
			'title' => esc_html__('Sitemap Page URL', 'porter-pub'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['porter-pub' . '_error_sitemap_link'], 
			'class' => '' 
		);
		
		break;
	case 'code':
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'porter-pub' . '_custom_css', 
			'title' => esc_html__('Custom CSS', 'porter-pub'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['porter-pub' . '_custom_css'], 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'porter-pub' . '_custom_js', 
			'title' => esc_html__('Custom JavaScript', 'porter-pub'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['porter-pub' . '_custom_js'], 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'porter-pub' . '_gmap_api_key', 
			'title' => esc_html__('Google Maps API key', 'porter-pub'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['porter-pub' . '_gmap_api_key'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'porter-pub' . '_twitter_access_data', 
			'title' => esc_html__('Twitter Access Data', 'porter-pub'), 
			'desc' => sprintf(
				/* translators: Twitter access data. %s: Link to twitter access data generator */
				esc_html__( 'Generate %s and paste access data to fields.', 'porter-pub' ),
				'<a href="' . esc_url( 'https://api.cmsmasters.net/wp-json/cmsmasters-api/v1/twitter-request-token' ) . '" target="_blank">' .
					esc_html__( 'twitter access data', 'porter-pub' ) .
				'</a>'
			), 
			'type' => 'multi-text', 
			'std' => $defaults[$tab]['porter-pub' . '_twitter_access_data'], 
			'class' => 'regular-text', 
			'choices' => array( 
				esc_html__('Consumer Key', 'porter-pub') . '|consumer_key', 
				esc_html__('Consumer Secret', 'porter-pub') . '|consumer_secret', 
				esc_html__('Access Token', 'porter-pub') . '|access_token', 
				esc_html__('Access Token Secret', 'porter-pub') . '|access_token_secret' 
			) 
		);
		
		break;
	case 'recaptcha':
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => 'porter-pub' . '_recaptcha_public_key', 
			'title' => esc_html__('reCAPTCHA Public Key', 'porter-pub'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['porter-pub' . '_recaptcha_public_key'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => 'porter-pub' . '_recaptcha_private_key', 
			'title' => esc_html__('reCAPTCHA Private Key', 'porter-pub'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['porter-pub' . '_recaptcha_private_key'], 
			'class' => '' 
		);
		
		break;
	}
	
	return apply_filters('cmsmasters_options_element_fields_filter', $options, $tab);	
}

