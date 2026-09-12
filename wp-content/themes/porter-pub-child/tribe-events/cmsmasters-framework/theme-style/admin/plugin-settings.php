<?php 
/**
 * @package 	WordPress
 * @subpackage 	Porter Pub
 * @version 	1.0.0
 * 
 * Tribe Events Admin Settings
 * Created by CMSMasters
 * 
 */


/* General Settings */
function porter_pub_tribe_events_options_general_fields($options, $tab) {
	$new_options = array();
	
	if ($tab == 'content') {
		foreach($options as $option) {
			if ($option['id'] == 'porter-pub_search_layout') {
				$new_options[] = $option;
				
				$new_options[] = array( 
					'section' => 'content_section', 
					'id' => 'porter-pub' . '_events_layout', 
					'title' => esc_html__('Events Calendar Layout Type', 'porter-pub'), 
					'desc' => '', 
					'type' => 'radio_img', 
					'std' => 'fullwidth', 
					'choices' => array( 
						esc_html__('Right Sidebar', 'porter-pub') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
						esc_html__('Left Sidebar', 'porter-pub') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
						esc_html__('Full Width', 'porter-pub') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
					) 
				);
			} else {
				$new_options[] = $option;
			}
		}
	} else {
		$new_options = $options;
	}
	
	
	return $new_options;
}

add_filter('cmsmasters_options_general_fields_filter', 'porter_pub_tribe_events_options_general_fields', 10, 2);

