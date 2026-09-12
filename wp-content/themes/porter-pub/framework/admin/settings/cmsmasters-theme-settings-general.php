<?php 
/**
 * @package 	WordPress
 * @subpackage 	Porter Pub
 * @version 	1.0.8
 * 
 * Admin Panel General Options
 * Created by CMSMasters
 * 
 */


function porter_pub_options_general_tabs() {
	$cmsmasters_option = porter_pub_get_global_options();
	
	$tabs = array();
	
	$tabs['general'] = esc_attr__('General', 'porter-pub');
	
	if ($cmsmasters_option['porter-pub' . '_theme_layout'] === 'boxed') {
		$tabs['bg'] = esc_attr__('Background', 'porter-pub');
	}
	
	if (CMSMASTERS_THEME_STYLE_COMPATIBILITY) {
		$tabs['theme_style'] = esc_attr__('Theme Style', 'porter-pub');
	}
	
	$tabs['header'] = esc_attr__('Header', 'porter-pub');
	$tabs['content'] = esc_attr__('Content', 'porter-pub');
	$tabs['footer'] = esc_attr__('Footer', 'porter-pub');
	
	return apply_filters('cmsmasters_options_general_tabs_filter', $tabs);
}


function porter_pub_options_general_sections() {
	$tab = porter_pub_get_the_tab();
	
	switch ($tab) {
	case 'general':
		$sections = array();
		
		$sections['general_section'] = esc_attr__('General Options', 'porter-pub');
		
		break;
	case 'bg':
		$sections = array();
		
		$sections['bg_section'] = esc_attr__('Background Options', 'porter-pub');
		
		break;
	case 'theme_style':
		$sections = array();
		
		$sections['theme_style_section'] = esc_attr__('Theme Design Style', 'porter-pub');
		
		break;
	case 'header':
		$sections = array();
		
		$sections['header_section'] = esc_attr__('Header Options', 'porter-pub');
		
		break;
	case 'content':
		$sections = array();
		
		$sections['content_section'] = esc_attr__('Content Options', 'porter-pub');
		
		break;
	case 'footer':
		$sections = array();
		
		$sections['footer_section'] = esc_attr__('Footer Options', 'porter-pub');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return apply_filters('cmsmasters_options_general_sections_filter', $sections, $tab);
} 


function porter_pub_options_general_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = porter_pub_get_the_tab();
	}
	
	$options = array();
	
	
	$defaults = porter_pub_settings_general_defaults();
	
	
	switch ($tab) {
	case 'general':
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'porter-pub' . '_theme_layout', 
			'title' => esc_html__('Theme Layout', 'porter-pub'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['porter-pub' . '_theme_layout'], 
			'choices' => array( 
				esc_html__('Liquid', 'porter-pub') . '|liquid', 
				esc_html__('Boxed', 'porter-pub') . '|boxed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'porter-pub' . '_logo_type', 
			'title' => esc_html__('Logo Type', 'porter-pub'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['porter-pub' . '_logo_type'], 
			'choices' => array( 
				esc_html__('Image', 'porter-pub') . '|image', 
				esc_html__('Text', 'porter-pub') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'porter-pub' . '_logo_url', 
			'title' => esc_html__('Logo Image', 'porter-pub'), 
			'desc' => esc_html__('Choose your website logo image.', 'porter-pub'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['porter-pub' . '_logo_url'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'porter-pub' . '_logo_url_retina', 
			'title' => esc_html__('Retina Logo Image', 'porter-pub'), 
			'desc' => esc_html__('Choose logo image for retina displays. Logo for Retina displays should be twice the size of the default one.', 'porter-pub'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['porter-pub' . '_logo_url_retina'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'porter-pub' . '_logo_title', 
			'title' => esc_html__('Logo Title', 'porter-pub'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['porter-pub' . '_logo_title'], 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'porter-pub' . '_logo_subtitle', 
			'title' => esc_html__('Logo Subtitle', 'porter-pub'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['porter-pub' . '_logo_subtitle'], 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'porter-pub' . '_logo_custom_color', 
			'title' => esc_html__('Custom Text Colors', 'porter-pub'), 
			'desc' => esc_html__('enable', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_logo_custom_color'] 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'porter-pub' . '_logo_title_color', 
			'title' => esc_html__('Logo Title Color', 'porter-pub'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['porter-pub' . '_logo_title_color'] 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'porter-pub' . '_logo_subtitle_color', 
			'title' => esc_html__('Logo Subtitle Color', 'porter-pub'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['porter-pub' . '_logo_subtitle_color'] 
		);
		
		break;
	case 'bg':
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'porter-pub' . '_bg_col', 
			'title' => esc_html__('Background Color', 'porter-pub'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => $defaults[$tab]['porter-pub' . '_bg_col'] 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'porter-pub' . '_bg_img_enable', 
			'title' => esc_html__('Background Image Visibility', 'porter-pub'), 
			'desc' => esc_html__('show', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_bg_img_enable'] 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'porter-pub' . '_bg_img', 
			'title' => esc_html__('Background Image', 'porter-pub'), 
			'desc' => esc_html__('Choose your custom website background image url.', 'porter-pub'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['porter-pub' . '_bg_img'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'porter-pub' . '_bg_rep', 
			'title' => esc_html__('Background Repeat', 'porter-pub'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['porter-pub' . '_bg_rep'], 
			'choices' => array( 
				esc_html__('No Repeat', 'porter-pub') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'porter-pub') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'porter-pub') . '|repeat-y', 
				esc_html__('Repeat', 'porter-pub') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'porter-pub' . '_bg_pos', 
			'title' => esc_html__('Background Position', 'porter-pub'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['porter-pub' . '_bg_pos'], 
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
			'section' => 'bg_section', 
			'id' => 'porter-pub' . '_bg_att', 
			'title' => esc_html__('Background Attachment', 'porter-pub'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['porter-pub' . '_bg_att'], 
			'choices' => array( 
				esc_html__('Scroll', 'porter-pub') . '|scroll', 
				esc_html__('Fixed', 'porter-pub') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'porter-pub' . '_bg_size', 
			'title' => esc_html__('Background Size', 'porter-pub'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['porter-pub' . '_bg_size'], 
			'choices' => array( 
				esc_html__('Auto', 'porter-pub') . '|auto', 
				esc_html__('Cover', 'porter-pub') . '|cover', 
				esc_html__('Contain', 'porter-pub') . '|contain' 
			) 
		);
		
		break;
	case 'theme_style':
		$options[] = array( 
			'section' => 'theme_style_section', 
			'id' => 'porter-pub' . '_theme_style', 
			'title' => esc_html__('Choose Theme Style', 'porter-pub'), 
			'desc' => '', 
			'type' => 'select_theme_style', 
			'std' => '', 
			'choices' => porter_pub_all_theme_styles() 
		);
		
		break;
	case 'header':
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'porter-pub' . '_fixed_header', 
			'title' => esc_html__('Fixed Header', 'porter-pub'), 
			'desc' => esc_html__('enable', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_fixed_header'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'porter-pub' . '_header_overlaps', 
			'title' => esc_html__('Header Overlaps Content by Default', 'porter-pub'), 
			'desc' => esc_html__('enable', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_header_overlaps'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'porter-pub' . '_header_top_line', 
			'title' => esc_html__('Top Line', 'porter-pub'), 
			'desc' => esc_html__('show', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_header_top_line'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'porter-pub' . '_header_top_height', 
			'title' => esc_html__('Top Height', 'porter-pub'), 
			'desc' => esc_html__('pixels', 'porter-pub'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['porter-pub' . '_header_top_height'], 
			'min' => '10' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'porter-pub' . '_header_top_line_short_info', 
			'title' => esc_html__('Top Short Info', 'porter-pub'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'porter-pub') . '</strong>', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['porter-pub' . '_header_top_line_short_info'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'porter-pub' . '_header_top_line_add_cont', 
			'title' => esc_html__('Top Additional Content', 'porter-pub'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['porter-pub' . '_header_top_line_add_cont'], 
			'choices' => array( 
				esc_html__('None', 'porter-pub') . '|none', 
				esc_html__('Top Line Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'porter-pub') . '|social', 
				esc_html__('Top Line Navigation (will be shown if set in Appearance - Menus tab)', 'porter-pub') . '|nav' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'porter-pub' . '_header_styles', 
			'title' => esc_html__('Header Styles', 'porter-pub'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['porter-pub' . '_header_styles'], 
			'choices' => array( 
				esc_html__('Default Style', 'porter-pub') . '|default', 
				esc_html__('Compact Style Left Navigation', 'porter-pub') . '|l_nav', 
				esc_html__('Compact Style Right Navigation', 'porter-pub') . '|r_nav', 
				esc_html__('Compact Style Center Navigation', 'porter-pub') . '|c_nav'
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'porter-pub' . '_header_mid_height', 
			'title' => esc_html__('Header Middle Height', 'porter-pub'), 
			'desc' => esc_html__('pixels', 'porter-pub'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['porter-pub' . '_header_mid_height'], 
			'min' => '40' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'porter-pub' . '_header_bot_height', 
			'title' => esc_html__('Header Bottom Height', 'porter-pub'), 
			'desc' => esc_html__('pixels', 'porter-pub'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['porter-pub' . '_header_bot_height'], 
			'min' => '20' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'porter-pub' . '_header_search', 
			'title' => esc_html__('Header Search', 'porter-pub'), 
			'desc' => esc_html__('show', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_header_search'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'porter-pub' . '_header_add_cont', 
			'title' => esc_html__('Header Additional Content', 'porter-pub'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['porter-pub' . '_header_add_cont'], 
			'choices' => array( 
				esc_html__('None', 'porter-pub') . '|none', 
				esc_html__('Header Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'porter-pub') . '|social', 
				esc_html__('Header Custom HTML', 'porter-pub') . '|cust_html' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'porter-pub' . '_header_add_cont_cust_html', 
			'title' => esc_html__('Header Custom HTML', 'porter-pub'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'porter-pub') . '</strong>', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['porter-pub' . '_header_add_cont_cust_html'], 
			'class' => '' 
		);
		
		break;
	case 'content':
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'porter-pub' . '_layout', 
			'title' => esc_html__('Layout Type by Default', 'porter-pub'), 
			'desc' => esc_html__('Choosing layout with a sidebar please make sure to add widgets to the Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'porter-pub'), 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['porter-pub' . '_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'porter-pub') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'porter-pub') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'porter-pub') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'porter-pub' . '_archives_layout', 
			'title' => esc_html__('Archives Layout Type', 'porter-pub'), 
			'desc' => esc_html__('Choosing layout with a sidebar please make sure to add widgets to the Archive Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'porter-pub'), 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['porter-pub' . '_archives_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'porter-pub') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'porter-pub') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'porter-pub') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'porter-pub' . '_search_layout', 
			'title' => esc_html__('Search Layout Type', 'porter-pub'), 
			'desc' => esc_html__('Choosing layout with a sidebar please make sure to add widgets to the Search Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'porter-pub'), 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['porter-pub' . '_search_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'porter-pub') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'porter-pub') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'porter-pub') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'porter-pub' . '_other_layout', 
			'title' => esc_html__('Other Layout Type', 'porter-pub'), 
			'desc' => esc_html__('Layout for pages of non-listed types. Choosing layout with a sidebar please make sure to add widgets to the Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'porter-pub'), 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['porter-pub' . '_other_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'porter-pub') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'porter-pub') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'porter-pub') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'porter-pub' . '_heading_alignment', 
			'title' => esc_html__('Heading Alignment by Default', 'porter-pub'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['porter-pub' . '_heading_alignment'], 
			'choices' => array( 
				esc_html__('Left', 'porter-pub') . '|left', 
				esc_html__('Right', 'porter-pub') . '|right', 
				esc_html__('Center', 'porter-pub') . '|center' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'porter-pub' . '_heading_scheme', 
			'title' => esc_html__('Heading Color Scheme by Default', 'porter-pub'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['porter-pub' . '_heading_scheme'], 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'porter-pub' . '_heading_bg_image_enable', 
			'title' => esc_html__('Heading Background Image Visibility by Default', 'porter-pub'), 
			'desc' => esc_html__('show', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_heading_bg_image_enable'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'porter-pub' . '_heading_bg_image', 
			'title' => esc_html__('Heading Background Image by Default', 'porter-pub'), 
			'desc' => esc_html__('Choose your custom heading background image by default.', 'porter-pub'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['porter-pub' . '_heading_bg_image'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'porter-pub' . '_heading_bg_repeat', 
			'title' => esc_html__('Heading Background Repeat by Default', 'porter-pub'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['porter-pub' . '_heading_bg_repeat'], 
			'choices' => array( 
				esc_html__('No Repeat', 'porter-pub') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'porter-pub') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'porter-pub') . '|repeat-y', 
				esc_html__('Repeat', 'porter-pub') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'porter-pub' . '_heading_bg_attachment', 
			'title' => esc_html__('Heading Background Attachment by Default', 'porter-pub'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['porter-pub' . '_heading_bg_attachment'], 
			'choices' => array( 
				esc_html__('Scroll', 'porter-pub') . '|scroll', 
				esc_html__('Fixed', 'porter-pub') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'porter-pub' . '_heading_bg_size', 
			'title' => esc_html__('Heading Background Size by Default', 'porter-pub'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['porter-pub' . '_heading_bg_size'], 
			'choices' => array( 
				esc_html__('Auto', 'porter-pub') . '|auto', 
				esc_html__('Cover', 'porter-pub') . '|cover', 
				esc_html__('Contain', 'porter-pub') . '|contain' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'porter-pub' . '_heading_bg_color', 
			'title' => esc_html__('Heading Background Color Overlay by Default', 'porter-pub'), 
			'desc' => '',  
			'type' => 'rgba', 
			'std' => $defaults[$tab]['porter-pub' . '_heading_bg_color'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'porter-pub' . '_heading_height', 
			'title' => esc_html__('Heading Height by Default', 'porter-pub'), 
			'desc' => esc_html__('pixels', 'porter-pub'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['porter-pub' . '_heading_height'], 
			'min' => '0' 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'porter-pub' . '_breadcrumbs', 
			'title' => esc_html__('Breadcrumbs Visibility by Default', 'porter-pub'), 
			'desc' => esc_html__('show', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_breadcrumbs'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'porter-pub' . '_bottom_scheme', 
			'title' => esc_html__('Bottom Color Scheme', 'porter-pub'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['porter-pub' . '_bottom_scheme'], 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'porter-pub' . '_bottom_sidebar', 
			'title' => esc_html__('Bottom Sidebar Visibility by Default', 'porter-pub'), 
			'desc' => esc_html__('show', 'porter-pub') . '<br><br>' . esc_html__('Please make sure to add widgets in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_bottom_sidebar'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'porter-pub' . '_bottom_sidebar_layout', 
			'title' => esc_html__('Bottom Sidebar Layout by Default', 'porter-pub'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['porter-pub' . '_bottom_sidebar_layout'], 
			'choices' => array( 
				'1/1|11', 
				'1/2 + 1/2|1212', 
				'1/3 + 2/3|1323', 
				'2/3 + 1/3|2313', 
				'1/4 + 3/4|1434', 
				'3/4 + 1/4|3414', 
				'1/3 + 1/3 + 1/3|131313', 
				'1/2 + 1/4 + 1/4|121414', 
				'1/4 + 1/2 + 1/4|141214', 
				'1/4 + 1/4 + 1/2|141412', 
				'1/4 + 1/4 + 1/4 + 1/4|14141414' 
			) 
		);
		
		break;
	case 'footer':
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'porter-pub' . '_footer_scheme', 
			'title' => esc_html__('Footer Color Scheme', 'porter-pub'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['porter-pub' . '_footer_scheme'], 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'porter-pub' . '_footer_type', 
			'title' => esc_html__('Footer Type', 'porter-pub'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['porter-pub' . '_footer_type'], 
			'choices' => array( 
				esc_html__('Default', 'porter-pub') . '|default', 
				esc_html__('Small', 'porter-pub') . '|small' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'porter-pub' . '_footer_additional_content', 
			'title' => esc_html__('Footer Additional Content', 'porter-pub'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['porter-pub' . '_footer_additional_content'], 
			'choices' => array( 
				esc_html__('None', 'porter-pub') . '|none', 
				esc_html__('Footer Navigation (will be shown if set in Appearance - Menus tab)', 'porter-pub') . '|nav', 
				esc_html__('Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'porter-pub') . '|social', 
				esc_html__('Custom HTML', 'porter-pub') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'porter-pub' . '_footer_logo', 
			'title' => esc_html__('Footer Logo', 'porter-pub'), 
			'desc' => esc_html__('show', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_footer_logo'] 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'porter-pub' . '_footer_logo_url', 
			'title' => esc_html__('Footer Logo', 'porter-pub'), 
			'desc' => esc_html__('Choose your website footer logo image.', 'porter-pub'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['porter-pub' . '_footer_logo_url'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'porter-pub' . '_footer_logo_url_retina', 
			'title' => esc_html__('Footer Logo for Retina', 'porter-pub'), 
			'desc' => esc_html__('Choose your website footer logo image for retina.', 'porter-pub'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['porter-pub' . '_footer_logo_url_retina'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'porter-pub' . '_footer_nav', 
			'title' => esc_html__('Footer Navigation', 'porter-pub'), 
			'desc' => esc_html__('show', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_footer_nav'] 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'porter-pub' . '_footer_social', 
			'title' => esc_html__('Footer Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'porter-pub'), 
			'desc' => esc_html__('show', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_footer_social'] 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'porter-pub' . '_footer_html', 
			'title' => esc_html__('Footer Custom HTML', 'porter-pub'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'porter-pub') . '</strong>', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['porter-pub' . '_footer_html'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'porter-pub' . '_footer_copyright', 
			'title' => esc_html__('Copyright Text', 'porter-pub'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['porter-pub' . '_footer_copyright'], 
			'class' => '' 
		);
		
		break;
	}
	
	return apply_filters('cmsmasters_options_general_fields_filter', $options, $tab);
}

