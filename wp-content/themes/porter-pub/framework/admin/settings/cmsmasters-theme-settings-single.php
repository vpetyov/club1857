<?php 
/**
 * @package 	WordPress
 * @subpackage 	Porter Pub
 * @version		1.0.3
 * 
 * Admin Panel Post, Project, Profile Settings
 * Created by CMSMasters
 * 
 */


function porter_pub_options_single_tabs() {
	$tabs = array();
	
	
	$tabs['post'] = esc_attr__('Post', 'porter-pub');
	
	if (CMSMASTERS_PROJECT_COMPATIBLE && class_exists('Cmsmasters_Projects')) {
		$tabs['project'] = esc_attr__('Project', 'porter-pub');
	}
	
	if (CMSMASTERS_PROFILE_COMPATIBLE && class_exists('Cmsmasters_Profiles')) {
		$tabs['profile'] = esc_attr__('Profile', 'porter-pub');
	}
	
	
	return apply_filters('cmsmasters_options_single_tabs_filter', $tabs);
}


function porter_pub_options_single_sections() {
	$tab = porter_pub_get_the_tab();
	
	
	switch ($tab) {
	case 'post':
		$sections = array();
		
		$sections['post_section'] = esc_attr__('Blog Post Options', 'porter-pub');
		
		
		break;
	case 'project':
		$sections = array();
		
		$sections['project_section'] = esc_attr__('Portfolio Project Options', 'porter-pub');
		
		
		break;
	case 'profile':
		$sections = array();
		
		$sections['profile_section'] = esc_attr__('Person Block Profile Options', 'porter-pub');
		
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	
	return apply_filters('cmsmasters_options_single_sections_filter', $sections, $tab);
} 


function porter_pub_options_single_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = porter_pub_get_the_tab();
	}
	
	
	$options = array();
	
	
	$defaults = porter_pub_settings_single_defaults();
	
	
	switch ($tab) {
	case 'post':
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'porter-pub' . '_blog_post_layout', 
			'title' => esc_html__('Layout Type', 'porter-pub'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['porter-pub' . '_blog_post_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'porter-pub') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'porter-pub') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'porter-pub') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'porter-pub' . '_blog_post_title', 
			'title' => esc_html__('Post Title', 'porter-pub'), 
			'desc' => esc_html__('show', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_blog_post_title'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'porter-pub' . '_blog_post_date', 
			'title' => esc_html__('Post Date', 'porter-pub'), 
			'desc' => esc_html__('show', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_blog_post_date'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'porter-pub' . '_blog_post_cat', 
			'title' => esc_html__('Post Categories', 'porter-pub'), 
			'desc' => esc_html__('show', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_blog_post_cat'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'porter-pub' . '_blog_post_author', 
			'title' => esc_html__('Post Author', 'porter-pub'), 
			'desc' => esc_html__('show', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_blog_post_author'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'porter-pub' . '_blog_post_comment', 
			'title' => esc_html__('Post Comments', 'porter-pub'), 
			'desc' => esc_html__('show', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_blog_post_comment'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'porter-pub' . '_blog_post_tag', 
			'title' => esc_html__('Post Tags', 'porter-pub'), 
			'desc' => esc_html__('show', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_blog_post_tag'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'porter-pub' . '_blog_post_like', 
			'title' => esc_html__('Post Likes', 'porter-pub'), 
			'desc' => esc_html__('show', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_blog_post_like'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'porter-pub' . '_blog_post_nav_box', 
			'title' => esc_html__('Posts Navigation Box', 'porter-pub'), 
			'desc' => esc_html__('show', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_blog_post_nav_box'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'porter-pub' . '_blog_post_nav_order_cat', 
			'title' => esc_html__('Posts Navigation Order by Category', 'porter-pub'), 
			'desc' => esc_html__('enable', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_blog_post_nav_order_cat'] 
		);
		
		if (class_exists('Cmsmasters_Content_Composer')) {
			$options[] = array( 
				'section' => 'post_section', 
				'id' => 'porter-pub' . '_blog_post_share_box', 
				'title' => esc_html__('Sharing Box', 'porter-pub'), 
				'desc' => esc_html__('show', 'porter-pub'), 
				'type' => 'checkbox', 
				'std' => $defaults[$tab]['porter-pub' . '_blog_post_share_box'] 
			);
		}
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'porter-pub' . '_blog_post_author_box', 
			'title' => esc_html__('About Author Box', 'porter-pub'), 
			'desc' => esc_html__('show', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_blog_post_author_box'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'porter-pub' . '_blog_more_posts_box', 
			'title' => esc_html__('More Posts Box', 'porter-pub'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['porter-pub' . '_blog_more_posts_box'], 
			'choices' => array( 
				esc_html__('Show Related Posts', 'porter-pub') . '|related', 
				esc_html__('Show Popular Posts', 'porter-pub') . '|popular', 
				esc_html__('Show Recent Posts', 'porter-pub') . '|recent', 
				esc_html__('Hide More Posts Box', 'porter-pub') . '|hide' 
			) 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'porter-pub' . '_blog_more_posts_count', 
			'title' => esc_html__('More Posts Box Items Number', 'porter-pub'), 
			'desc' => esc_html__('posts', 'porter-pub'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['porter-pub' . '_blog_more_posts_count'], 
			'min' => '2', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'porter-pub' . '_blog_more_posts_pause', 
			'title' => esc_html__('More Posts Slider Pause Time', 'porter-pub'), 
			'desc' => esc_html__("in seconds, if '0' - autoslide disabled", 'porter-pub'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['porter-pub' . '_blog_more_posts_pause'], 
			'min' => '0', 
			'max' => '20' 
		);
		
		
		break;
	case 'project':
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'porter-pub' . '_portfolio_project_title', 
			'title' => esc_html__('Project Title', 'porter-pub'), 
			'desc' => esc_html__('show', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_portfolio_project_title'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'porter-pub' . '_portfolio_project_details_title', 
			'title' => esc_html__('Project Details Title', 'porter-pub'), 
			'desc' => esc_html__('Enter a project details block title', 'porter-pub'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['porter-pub' . '_portfolio_project_details_title'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'porter-pub' . '_portfolio_project_date', 
			'title' => esc_html__('Project Date', 'porter-pub'), 
			'desc' => esc_html__('show', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_portfolio_project_date'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'porter-pub' . '_portfolio_project_cat', 
			'title' => esc_html__('Project Categories', 'porter-pub'), 
			'desc' => esc_html__('show', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_portfolio_project_cat'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'porter-pub' . '_portfolio_project_author', 
			'title' => esc_html__('Project Author', 'porter-pub'), 
			'desc' => esc_html__('show', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_portfolio_project_author'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'porter-pub' . '_portfolio_project_comment', 
			'title' => esc_html__('Project Comments', 'porter-pub'), 
			'desc' => esc_html__('show', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_portfolio_project_comment'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'porter-pub' . '_portfolio_project_tag', 
			'title' => esc_html__('Project Tags', 'porter-pub'), 
			'desc' => esc_html__('show', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_portfolio_project_tag'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'porter-pub' . '_portfolio_project_like', 
			'title' => esc_html__('Project Likes', 'porter-pub'), 
			'desc' => esc_html__('show', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_portfolio_project_like'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'porter-pub' . '_portfolio_project_link', 
			'title' => esc_html__('Project Link', 'porter-pub'), 
			'desc' => esc_html__('show', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_portfolio_project_link'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'porter-pub' . '_portfolio_project_share_box', 
			'title' => esc_html__('Sharing Box', 'porter-pub'), 
			'desc' => esc_html__('show', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_portfolio_project_share_box'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'porter-pub' . '_portfolio_project_nav_box', 
			'title' => esc_html__('Projects Navigation Box', 'porter-pub'), 
			'desc' => esc_html__('show', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_portfolio_project_nav_box'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'porter-pub' . '_portfolio_project_nav_order_cat', 
			'title' => esc_html__('Projects Navigation Order by Category', 'porter-pub'), 
			'desc' => esc_html__('enable', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_portfolio_project_nav_order_cat'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'porter-pub' . '_portfolio_project_author_box', 
			'title' => esc_html__('About Author Box', 'porter-pub'), 
			'desc' => esc_html__('show', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_portfolio_project_author_box'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'porter-pub' . '_portfolio_more_projects_box', 
			'title' => esc_html__('More Projects Box', 'porter-pub'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['porter-pub' . '_portfolio_more_projects_box'], 
			'choices' => array( 
				esc_html__('Show Related Projects', 'porter-pub') . '|related', 
				esc_html__('Show Popular Projects', 'porter-pub') . '|popular', 
				esc_html__('Show Recent Projects', 'porter-pub') . '|recent', 
				esc_html__('Hide More Projects Box', 'porter-pub') . '|hide' 
			) 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'porter-pub' . '_portfolio_more_projects_count', 
			'title' => esc_html__('More Projects Box Items Number', 'porter-pub'), 
			'desc' => esc_html__('projects', 'porter-pub'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['porter-pub' . '_portfolio_more_projects_count'], 
			'min' => '2', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'porter-pub' . '_portfolio_more_projects_pause', 
			'title' => esc_html__('More Projects Slider Pause Time', 'porter-pub'), 
			'desc' => esc_html__("in seconds, if '0' - autoslide disabled", 'porter-pub'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['porter-pub' . '_portfolio_more_projects_pause'], 
			'min' => '0', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'porter-pub' . '_portfolio_project_slug', 
			'title' => esc_html__('Project Slug', 'porter-pub'), 
			'desc' => esc_html__('Enter a page slug that should be used for your projects single item', 'porter-pub'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['porter-pub' . '_portfolio_project_slug'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'porter-pub' . '_portfolio_pj_categs_slug', 
			'title' => esc_html__('Project Categories Slug', 'porter-pub'), 
			'desc' => esc_html__('Enter page slug that should be used on projects categories archive page', 'porter-pub'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['porter-pub' . '_portfolio_pj_categs_slug'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'porter-pub' . '_portfolio_pj_tags_slug', 
			'title' => esc_html__('Project Tags Slug', 'porter-pub'), 
			'desc' => esc_html__('Enter page slug that should be used on projects tags archive page', 'porter-pub'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['porter-pub' . '_portfolio_pj_tags_slug'], 
			'class' => '' 
		);
		
		
		break;
	case 'profile':
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'porter-pub' . '_profile_post_title', 
			'title' => esc_html__('Profile Title', 'porter-pub'), 
			'desc' => esc_html__('show', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_profile_post_title'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'porter-pub' . '_profile_post_details_title', 
			'title' => esc_html__('Profile Details Title', 'porter-pub'), 
			'desc' => esc_html__('Enter a profile details block title', 'porter-pub'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['porter-pub' . '_profile_post_details_title'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'porter-pub' . '_profile_post_cat', 
			'title' => esc_html__('Profile Categories', 'porter-pub'), 
			'desc' => esc_html__('show', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_profile_post_cat'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'porter-pub' . '_profile_post_comment', 
			'title' => esc_html__('Profile Comments', 'porter-pub'), 
			'desc' => esc_html__('show', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_profile_post_comment'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'porter-pub' . '_profile_post_like', 
			'title' => esc_html__('Profile Likes', 'porter-pub'), 
			'desc' => esc_html__('show', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_profile_post_like'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'porter-pub' . '_profile_post_nav_box', 
			'title' => esc_html__('Profiles Navigation Box', 'porter-pub'), 
			'desc' => esc_html__('show', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_profile_post_nav_box'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'porter-pub' . '_profile_post_nav_order_cat', 
			'title' => esc_html__('Profiles Navigation Order by Category', 'porter-pub'), 
			'desc' => esc_html__('enable', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_profile_post_nav_order_cat'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'porter-pub' . '_profile_post_share_box', 
			'title' => esc_html__('Sharing Box', 'porter-pub'), 
			'desc' => esc_html__('show', 'porter-pub'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['porter-pub' . '_profile_post_share_box'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'porter-pub' . '_profile_post_slug', 
			'title' => esc_html__('Profile Slug', 'porter-pub'), 
			'desc' => esc_html__('Enter a page slug that should be used for your profiles single item', 'porter-pub'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['porter-pub' . '_profile_post_slug'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'porter-pub' . '_profile_pl_categs_slug', 
			'title' => esc_html__('Profile Categories Slug', 'porter-pub'), 
			'desc' => esc_html__('Enter page slug that should be used on profiles categories archive page', 'porter-pub'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['porter-pub' . '_profile_pl_categs_slug'], 
			'class' => '' 
		);
		
		
		break;
	}
	
	
	return apply_filters('cmsmasters_options_single_fields_filter', $options, $tab);
}

