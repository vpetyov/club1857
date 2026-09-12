<?php 
/**
 * @package 	WordPress
 * @subpackage 	Porter Pub
 * @version		1.0.0
 * 
 * Admin Panel Fonts Options
 * Created by CMSMasters
 * 
 */


function porter_pub_options_font_tabs() {
	$tabs = array();
	
	$tabs['content'] = esc_attr__('Content', 'porter-pub');
	$tabs['link'] = esc_attr__('Links', 'porter-pub');
	$tabs['nav'] = esc_attr__('Navigation', 'porter-pub');
	$tabs['heading'] = esc_attr__('Heading', 'porter-pub');
	$tabs['other'] = esc_attr__('Other', 'porter-pub');
	$tabs['google'] = esc_attr__('Google Fonts', 'porter-pub');
	
	return apply_filters('cmsmasters_options_font_tabs_filter', $tabs);
}


function porter_pub_options_font_sections() {
	$tab = porter_pub_get_the_tab();
	
	switch ($tab) {
	case 'content':
		$sections = array();
		
		$sections['content_section'] = esc_html__('Content Font Options', 'porter-pub');
		
		break;
	case 'link':
		$sections = array();
		
		$sections['link_section'] = esc_html__('Links Font Options', 'porter-pub');
		
		break;
	case 'nav':
		$sections = array();
		
		$sections['nav_section'] = esc_html__('Navigation Font Options', 'porter-pub');
		
		break;
	case 'heading':
		$sections = array();
		
		$sections['heading_section'] = esc_html__('Headings Font Options', 'porter-pub');
		
		break;
	case 'other':
		$sections = array();
		
		$sections['other_section'] = esc_html__('Other Fonts Options', 'porter-pub');
		
		break;
	case 'google':
		$sections = array();
		
		$sections['google_section'] = esc_html__('Serving Google Fonts from CDN', 'porter-pub');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return apply_filters('cmsmasters_options_font_sections_filter', $sections, $tab);
} 


function porter_pub_options_font_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = porter_pub_get_the_tab();
	}
	
	
	$options = array();
	
	
	$defaults = porter_pub_settings_font_defaults();
	
	
	switch ($tab) {
	case 'content':
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'porter-pub' . '_content_font', 
			'title' => esc_html__('Main Content Font', 'porter-pub'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['porter-pub' . '_content_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	case 'link':
		$options[] = array( 
			'section' => 'link_section', 
			'id' => 'porter-pub' . '_link_font', 
			'title' => esc_html__('Links Font', 'porter-pub'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['porter-pub' . '_link_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'link_section', 
			'id' => 'porter-pub' . '_link_hover_decoration', 
			'title' => esc_html__('Links Hover Text Decoration', 'porter-pub'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['porter-pub' . '_link_hover_decoration'], 
			'choices' => porter_pub_text_decoration_list() 
		);
		
		break;
	case 'nav':
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => 'porter-pub' . '_nav_title_font', 
			'title' => esc_html__('Navigation Title Font', 'porter-pub'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['porter-pub' . '_nav_title_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => 'porter-pub' . '_nav_dropdown_font', 
			'title' => esc_html__('Navigation Dropdown Font', 'porter-pub'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['porter-pub' . '_nav_dropdown_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		break;
	case 'heading':
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'porter-pub' . '_h1_font', 
			'title' => esc_html__('H1 Tag Font', 'porter-pub'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['porter-pub' . '_h1_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'porter-pub' . '_h2_font', 
			'title' => esc_html__('H2 Tag Font', 'porter-pub'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['porter-pub' . '_h2_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'porter-pub' . '_h3_font', 
			'title' => esc_html__('H3 Tag Font', 'porter-pub'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['porter-pub' . '_h3_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'porter-pub' . '_h4_font', 
			'title' => esc_html__('H4 Tag Font', 'porter-pub'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['porter-pub' . '_h4_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'porter-pub' . '_h5_font', 
			'title' => esc_html__('H5 Tag Font', 'porter-pub'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['porter-pub' . '_h5_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'porter-pub' . '_h6_font', 
			'title' => esc_html__('H6 Tag Font', 'porter-pub'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['porter-pub' . '_h6_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		break;
	case 'other':
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'porter-pub' . '_button_font', 
			'title' => esc_html__('Button Font', 'porter-pub'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['porter-pub' . '_button_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'porter-pub' . '_small_font', 
			'title' => esc_html__('Small Tag Font', 'porter-pub'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['porter-pub' . '_small_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'porter-pub' . '_input_font', 
			'title' => esc_html__('Text Fields Font', 'porter-pub'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['porter-pub' . '_input_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'porter-pub' . '_quote_font', 
			'title' => esc_html__('Blockquote Font', 'porter-pub'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['porter-pub' . '_quote_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	case 'google':
		$options[] = array( 
			'section' => 'google_section', 
			'id' => 'porter-pub' . '_google_web_fonts', 
			'title' => esc_html__('Google Fonts', 'porter-pub'), 
			'desc' => '', 
			'type' => 'google_web_fonts', 
			'std' => $defaults[$tab]['porter-pub' . '_google_web_fonts'] 
		);
		
		$options[] = array( 
			'section' => 'google_section', 
			'id' => 'porter-pub' . '_google_web_fonts_subset', 
			'title' => esc_html__('Google Fonts Subset', 'porter-pub'), 
			'desc' => '', 
			'type' => 'select_multiple', 
			'std' => '', 
			'choices' => array( 
				esc_html__('Latin Extended', 'porter-pub') . '|' . 'latin-ext', 
				esc_html__('Arabic', 'porter-pub') . '|' . 'arabic', 
				esc_html__('Cyrillic', 'porter-pub') . '|' . 'cyrillic', 
				esc_html__('Cyrillic Extended', 'porter-pub') . '|' . 'cyrillic-ext', 
				esc_html__('Greek', 'porter-pub') . '|' . 'greek', 
				esc_html__('Greek Extended', 'porter-pub') . '|' . 'greek-ext', 
				esc_html__('Vietnamese', 'porter-pub') . '|' . 'vietnamese', 
				esc_html__('Japanese', 'porter-pub') . '|' . 'japanese', 
				esc_html__('Korean', 'porter-pub') . '|' . 'korean', 
				esc_html__('Thai', 'porter-pub') . '|' . 'thai', 
				esc_html__('Bengali', 'porter-pub') . '|' . 'bengali', 
				esc_html__('Devanagari', 'porter-pub') . '|' . 'devanagari', 
				esc_html__('Gujarati', 'porter-pub') . '|' . 'gujarati', 
				esc_html__('Gurmukhi', 'porter-pub') . '|' . 'gurmukhi', 
				esc_html__('Hebrew', 'porter-pub') . '|' . 'hebrew', 
				esc_html__('Kannada', 'porter-pub') . '|' . 'kannada', 
				esc_html__('Khmer', 'porter-pub') . '|' . 'khmer', 
				esc_html__('Malayalam', 'porter-pub') . '|' . 'malayalam', 
				esc_html__('Myanmar', 'porter-pub') . '|' . 'myanmar', 
				esc_html__('Oriya', 'porter-pub') . '|' . 'oriya', 
				esc_html__('Sinhala', 'porter-pub') . '|' . 'sinhala', 
				esc_html__('Tamil', 'porter-pub') . '|' . 'tamil', 
				esc_html__('Telugu', 'porter-pub') . '|' . 'telugu' 
			) 
		);
		
		break;
	}
	
	return apply_filters('cmsmasters_options_font_fields_filter', $options, $tab);	
}

