<?php 
/**
 * @package 	WordPress
 * @subpackage 	Porter Pub
 * @version		1.0.0
 * 
 * Theme Admin Settings
 * Created by CMSMasters
 * 
 */


/* Color Settings */
function porter_pub_theme_options_color_fields($options, $tab) {
	$defaults = porter_pub_color_schemes_defaults();
	
	
	if ($tab != 'header' && $tab != 'navigation' && $tab != 'header_top') {
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'porter-pub' . '_' . $tab . '_secondary', 
			'title' => esc_html__('Secondary Color', 'porter-pub'), 
			'desc' => esc_html__('Secondary color for some elements', 'porter-pub'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['secondary'] : $defaults['default']['secondary'] 
		);
	}
	
	
	return $options;
}

add_filter('cmsmasters_options_color_fields_filter', 'porter_pub_theme_options_color_fields', 10, 2);


/* General Settings */
function porter_pub_theme_options_general_fields($options, $tab) {
	if ($tab == 'footer') {
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'porter-pub' . '_footer_bg_image_enable', 
			'title' => esc_html__('Footer Background Image Visibility by Default', 'porter-pub'), 
			'desc' => esc_html__('show', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'porter-pub' . '_footer_bg_image', 
			'title' => esc_html__('Footer Background Image by Default', 'porter-pub'), 
			'desc' => esc_html__('Choose your footer background image by default.', 'porter-pub'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/footer_bg.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'porter-pub' . '_footer_bg_repeat', 
			'title' => esc_html__('Footer Background Repeat by Default', 'porter-pub'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'repeat', 
			'choices' => array( 
				esc_html__('No Repeat', 'porter-pub') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'porter-pub') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'porter-pub') . '|repeat-y', 
				esc_html__('Repeat', 'porter-pub') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'porter-pub' . '_footer_bg_pos', 
			'title' => esc_html__('Background Position', 'porter-pub'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => 'top center', 
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
			'section' => 'footer_section', 
			'id' => 'porter-pub' . '_footer_bg_attachment', 
			'title' => esc_html__('Footer Background Attachment by Default', 'porter-pub'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'scroll', 
			'choices' => array( 
				esc_html__('Scroll', 'porter-pub') . '|scroll', 
				esc_html__('Fixed', 'porter-pub') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'porter-pub' . '_footer_bg_size', 
			'title' => esc_html__('Footer Background Size by Default', 'porter-pub'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'auto', 
			'choices' => array( 
				esc_html__('Auto', 'porter-pub') . '|auto', 
				esc_html__('Cover', 'porter-pub') . '|cover', 
				esc_html__('Contain', 'porter-pub') . '|contain' 
			) 
		);
	}
	
	
	return $options;
}

add_filter('cmsmasters_options_general_fields_filter', 'porter_pub_theme_options_general_fields', 10, 2);



