<?php
/**
 * @package 	WordPress
 * @subpackage 	Porter Pub
 * @version 	1.1.3
 * 
 * Theme Primary Color Schemes Rules
 * Created by CMSMasters
 * 
 */


function porter_pub_theme_colors_primary() {
	$cmsmasters_option = porter_pub_get_global_options();
	
	
	$cmsmasters_color_schemes = cmsmasters_color_schemes_list();
	
	
	$custom_css = "/**
 * @package 	WordPress
 * @subpackage 	Porter Pub
 * @version 	1.1.3
 * 
 * Theme Primary Color Schemes Rules
 * Created by CMSMasters
 * 
 */

";
	
	
	foreach ($cmsmasters_color_schemes as $scheme => $title) {
		$rule = (($scheme != 'default') ? "html .cmsmasters_color_scheme_{$scheme} " : '');
		
		
		$custom_css .= "
/***************** Start {$title} Color Scheme Rules ******************/

	/* Start Main Content Font Color */
	" . (($scheme == 'default') ? "body," : '') . "
	" . (($scheme != 'default') ? ".cmsmasters_color_scheme_{$scheme}," : '') . "
	{$rule}.subpage_nav strong, 
	{$rule}.cmsmasters_twitter_wrap .twr_icon {
		" . cmsmasters_color_css('color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_color']) . "
	}
	
	{$rule}input::-webkit-input-placeholder {
		color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['porter-pub' . '_' . $scheme . '_color']) . ", .5);
	}
	
	{$rule}input:-moz-placeholder {
		color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['porter-pub' . '_' . $scheme . '_color']) . ", .5);
	}
	
	{$rule}.bottom_bg input::-webkit-input-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_color']) . "
	}
	
	{$rule}.bottom_bg input:-moz-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_color']) . "
	}
	
	
	{$rule}input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	{$rule}textarea,
	{$rule}select,
	{$rule}option {
		color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['porter-pub' . '_' . $scheme . '_color']) . ", .5);
	}
	
	{$rule}.bottom_bg input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	{$rule}.bottom_bg textarea,
	{$rule}.bottom_bg select,
	{$rule}.bottom_bg option {
		" . cmsmasters_color_css('color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_color']) . "
	}
	
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	" . (($scheme == 'footer') ? ".footer .social_wrap a," : '') . "
	{$rule}a,
	{$rule}.color_2,
	{$rule}.cmsmasters_likes a,
	{$rule}.cmsmasters_comments a,
	{$rule}.cmsmasters_likes a:hover,
	{$rule}.cmsmasters_comments a:hover,
	{$rule}.cmsmasters_notitle_link:hover,
	{$rule}.cmsmasters_icon_wrap a .cmsmasters_simple_icon,
	{$rule}.cmsmasters_slider_post .cmsmasters_slider_post_date,
	{$rule}.cmsmasters_wrap_more_items.cmsmasters_loading:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_top:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_heading_left .icon_box_heading:before,
	{$rule}.bypostauthor > .comment-body .alignleft:before,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > a:hover,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > a:hover,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > a:hover,
	{$rule}.cmsmasters_attach_img .cmsmasters_attach_img_edit a,
	{$rule}.cmsmasters_attach_img .cmsmasters_attach_img_meta a,
	{$rule}.search_bar_wrap .search_button button,
	{$rule}.cmsmasters_posts_slider .cmsmasters_slider_post_category,
	{$rule}.cmsmasters_posts_slider .cmsmasters_slider_post_category a:hover,
	{$rule}.cmsmasters_posts_slider .cmsmasters_slider_post_author a:hover,
	{$rule}.cmsmasters_post_default .cmsmasters_post_cont_info .cmsmasters_post_category a:hover,
	{$rule}.cmsmasters_post_default .cmsmasters_post_cont_info .cmsmasters_post_author a:hover,
	{$rule}.error_cont .error_button_wrap a:hover,
	{$rule}.cmsmasters_content_slider .owl-buttons > div,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li a,
	{$rule}.cmsmasters_project_puzzle .cmsmasters_project_category a:hover,
	{$rule}.cmsmasters_open_project .owl-buttons > div > span > span:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_link']) . "
	}
	
	" . (($scheme == 'default') ? "#slide_top," : '') . "
	" . (($scheme == 'default') ? "mark," : '') . "
	" . (($scheme != 'default') ? ".cmsmasters_color_scheme_{$scheme} mark," : '') . "
	{$rule}.img_placeholder_small,
	{$rule}.img_placeholder,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_top:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left_top:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left:before,
	{$rule}.cmsmasters_clients_slider_wrap.enable_arrow_control .owl-buttons > div > span:before, 
	{$rule}.cmsmasters_clients_slider_wrap.enable_arrow_control .owl-buttons > div > span:after,
	{$rule}.cmsmasters_stats.stats_mode_bars .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner,
	{$rule}.cmsmasters_profile_horizontal .cmsmasters_img_wrap.no_image > span,
	{$rule}.cmsmasters_profile_vertical .cmsmasters_img_wrap.no_image > span,
	{$rule}.post_nav > span > span:before,
	{$rule}.post_nav > span > span:after,
	{$rule}.cmsmasters_button,
	{$rule}.button,
	{$rule}input[type=submit],
	{$rule}input[type=button],
	{$rule}button,
	{$rule}.cmsmasters_project_grid .cmsmasters_open_post_link,
	{$rule}.cmsmasters_project_grid .cmsmasters_open_post_link:hover,
	{$rule}.cmsmasters_project_puzzle .cmsmasters_open_post_link,
	{$rule}.cmsmasters_project_puzzle .cmsmasters_open_post_link:hover,
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers > span:before,
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers > span:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_header_search_form {
		background-color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['porter-pub' . '_' . $scheme . '_link']) . ", .9);
	}
	
	{$rule}input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]):focus,
	{$rule}textarea:focus,
	{$rule}select:focus,
	{$rule}.post_nav {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_menu_item .menu_feature_list_wrap {
		border-color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['porter-pub' . '_' . $scheme . '_link']) . ", .3);
	}
	
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	" . (($scheme == 'footer') ? ".footer .social_wrap a:hover," : '') . "
	{$rule}a:hover,
	{$rule}h1 a:hover,
	{$rule}h2 a:hover,
	{$rule}h3 a:hover,
	{$rule}h4 a:hover,
	{$rule}h5 a:hover,
	{$rule}h6 a:hover,
	{$rule}.subpage_nav, 
	{$rule}.cmsmasters_notitle_link,
	{$rule}.search_bar_wrap .search_button button:hover,
	{$rule}.cmsmasters_likes a:hover:before,
	{$rule}.cmsmasters_likes a.active:before,
	{$rule}.cmsmasters_comments a:hover:before,
	{$rule}.cmsmasters_comments a.active:before,
	{$rule}.cmsmasters_pricing_table .feature_list li a, 
	{$rule}a.cmsmasters_cat_color:hover,
	{$rule}.cmsmasters_icon_wrap a:hover .cmsmasters_simple_icon,
	{$rule}.cmsmasters_quotes_slider .cmsmasters_quote_subtitle,
	{$rule}.cmsmasters_quotes_grid .cmsmasters_quote_subtitle,
	{$rule}.cmsmasters_quotes_slider .cmsmasters_quote_site,
	{$rule}.cmsmasters_quotes_slider .cmsmasters_quote_site a,
	{$rule}.cmsmasters_quotes_grid .cmsmasters_quote_site,
	{$rule}.cmsmasters_quotes_grid .cmsmasters_quote_site a, 
	{$rule}.cmsmasters_pricing_table .pricing_title,
	{$rule}.cmsmasters_attach_img .cmsmasters_attach_img_edit a:hover,
	{$rule}.cmsmasters_attach_img .cmsmasters_attach_img_meta a:hover,
	{$rule}.cmsmasters_content_slider .owl-buttons > div:hover,
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_list_item a:before,
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_list_item a:hover,
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_list_item.current_tab a,
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_list_item.current_tab a:hover,
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_title a:hover,
	{$rule}.cmsmasters_toggles .current_toggle .cmsmasters_toggle_title a,
	{$rule}.cmsmasters_profile_horizontal .cmsmasters_profile_header .cmsmasters_profile_subtitle,
	{$rule}.cmsmasters_profile_vertical .cmsmasters_profile_header .cmsmasters_profile_subtitle,
	{$rule}.cmsmasters_profile_vertical .profile_social_icons_list a,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li a:hover,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li.current a,
	{$rule}.cmsmasters_project_puzzle .cmsmasters_project_category a,
	{$rule}.cmsmasters_archive_type .cmsmasters_archive_item_type,
	{$rule}.cmsmasters_open_project .owl-buttons > div:hover > span > span:before,
	{$rule}.widget_recent_entries .post-date,
	{$rule}.cmsmasters_posts_slider .cmsmasters_slider_post_category a,
	{$rule}.cmsmasters_posts_slider .cmsmasters_slider_post_author a,
	{$rule}.cmsmasters_wrap_pagination .page-numbers.current,
	{$rule}.cmsmasters_post_default .cmsmasters_post_cont_info .cmsmasters_post_category a,
	{$rule}.cmsmasters_post_default .cmsmasters_post_cont_info .cmsmasters_post_author a,
	{$rule}.subpage_nav > span,
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tabs_list_item.current_tab a,
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tabs_list_item a:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_hover']) . "
	}
	
	" . (($scheme == 'default') ? "#slide_top:hover," : '') . " 
	{$rule}.cmsmasters_clients_slider_wrap.enable_arrow_control .owl-buttons > div:hover > span:before, 
	{$rule}.cmsmasters_clients_slider_wrap.enable_arrow_control .owl-buttons > div:hover > span:after,
	{$rule}.post_nav > span a:hover + span:before,
	{$rule}.post_nav > span a:hover + span:after,
	{$rule}.cmsmasters_button:hover,
	{$rule}.button:hover,
	{$rule}input[type=submit]:hover,
	{$rule}input[type=button]:hover,
	{$rule}button:hover,
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers:hover > span:before,
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers:hover > span:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_hover']) . "
	}
	/* Finish Highlight Color */
	
	
	/* Start Headings Color */
	{$rule}h1,
	{$rule}h2,
	{$rule}h3,
	{$rule}h4,
	{$rule}h5,
	{$rule}h6,
	{$rule}h1 a,
	{$rule}h2 a,
	{$rule}h3 a,
	{$rule}h4 a,
	{$rule}h5 a,
	{$rule}h6 a,
	{$rule}fieldset legend,
	{$rule}blockquote,
	{$rule}blockquote footer,
	{$rule}table tfoot th,
	{$rule}table tfoot td,
	{$rule}table caption,
	{$rule}.cmsmasters_dropcap.type1,
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap,
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_title,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > a,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > a,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > ul li a:before,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > a,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > ul li a:before,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_archive > li a:before,
	{$rule}.cmsmasters_stats .cmsmasters_stat_title,
	{$rule}.cmsmasters_stats .cmsmasters_stat_counter_wrap,
	{$rule}.cmsmasters_stats .cmsmasters_stat_inner:before,
	{$rule}.cmsmasters_notice .notice_close,
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_title a,
	{$rule}.cmsmasters_twitter_wrap .published,
	{$rule}.cmsmasters_quotes_slider .cmsmasters_quote_content,
	{$rule}.cmsmasters_quotes_slider .cmsmasters_quote_site a:hover,
	{$rule}.cmsmasters_quotes_grid .cmsmasters_quote_content,
	{$rule}.cmsmasters_quotes_grid .cmsmasters_quote_site a:hover,
	{$rule}.cmsmasters_profile_vertical .profile_social_icons_list a:hover,
	{$rule}.cmsmasters_open_profile .profile_details_item_title,
	{$rule}.cmsmasters_open_profile .profile_features_item_title,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but,
	{$rule}.cmsmasters_post_timeline .cmsmasters_post_date span,
	{$rule}.cmsmasters_open_project .project_details_item_title,
	{$rule}.cmsmasters_open_project .project_features_item_title,
	{$rule}#wp-calendar thead th,
	{$rule}.cmsmasters_menu_item .cmsmasters_menu_price_wrap, 
	{$rule}.cmsmasters_menu_item .menu_title,
	{$rule}.widget_custom_contact_info_entries span,
	{$rule}.widget_custom_twitter_entries .tweet_time {
		" . cmsmasters_color_css('color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}.cmsmasters_icon_list_items .cmsmasters_icon_list_item .cmsmasters_icon_list_icon,
	{$rule}form .formError .formErrorContent,
	{$rule}.cmsmasters_hover_slider .cmsmasters_hover_slider_thumbs a:before,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but:before,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_heading']) . "
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	" . (($scheme == 'default') ? ".headline_outer *," : '') . "
	" . (($scheme == 'default') ? ".headline_outer a:hover," : '') . "
	" . (($scheme == 'default') ? "#slide_top," : '') . "
	{$rule}mark,
	{$rule}.img_placeholder_small,
	{$rule}.img_placeholder,
	{$rule}form .formError .formErrorContent,
	{$rule}table thead th,
	{$rule}.cmsmasters_button,
	{$rule}.button,
	{$rule}input[type=submit],
	{$rule}input[type=button],
	{$rule}button,
	{$rule}.cmsmasters_button:hover,
	{$rule}.button:hover,
	{$rule}input[type=submit]:hover,
	{$rule}input[type=button]:hover,
	{$rule}button:hover,
	{$rule}.cmsmasters_dropcap.type2,
	{$rule}.cmsmasters_pricing_table .cmsmasters_price_wrap,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left_top:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_top:before,
	{$rule}.cmsmasters_header_search_form .cmsmasters_header_search_form_close,
	{$rule}.cmsmasters_header_search_form input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	{$rule}.cmsmasters_header_search_form button,
	{$rule}.error_cont .error_button_wrap a,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_icon_wrap,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_bg .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:before,
	{$rule}.cmsmasters_notice .notice_close:hover,
	{$rule}.cmsmasters_slider_project .cmsmasters_slider_project_cont_wrap_inner *,
	{$rule}.cmsmasters_profile_horizontal .cmsmasters_img_social_wrap .profile_social_icons_list a,
	{$rule}.cmsmasters_profile_horizontal .cmsmasters_img_wrap.no_image > span,
	{$rule}.cmsmasters_profile_vertical .cmsmasters_img_wrap.no_image > span {
		" . cmsmasters_color_css('color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_header_search_form button:hover,
	{$rule}.cmsmasters_slider_project .cmsmasters_likes a:hover:before,
	{$rule}.cmsmasters_slider_project .cmsmasters_likes a.active:before,
	{$rule}.cmsmasters_slider_project .cmsmasters_comments a:hover:before,
	{$rule}.cmsmasters_slider_project .cmsmasters_comments a.active:before,
	{$rule}.cmsmasters_slider_project .cmsmasters_slider_project_category a:hover, 
	{$rule}.cmsmasters_slider_project .cmsmasters_slider_project_header .cmsmasters_slider_project_title a:hover {
		color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['porter-pub' . '_' . $scheme . '_bg']) . ", .7);
	}
	
	{$rule}.cmsmasters_header_search_form input::-webkit-input-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_header_search_form input:-moz-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_bg']) . "
	}
	
	" . (($scheme == 'default') ? "body," : '') . "
	" . (($scheme != 'default') ? ".cmsmasters_color_scheme_{$scheme}," : '') . "
	" . (($scheme == 'default') ? ".middle_inner," : '') . "
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=checkbox] + span.wpcf7-list-item-label:before,
	{$rule}.cmsmasters-form-builder .check_parent input[type=checkbox] + label:before,
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=radio] + span.wpcf7-list-item-label:before,
	{$rule}.cmsmasters-form-builder .check_parent input[type=radio] + label:before,
	{$rule}input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	{$rule}textarea,
	{$rule}option,
	{$rule}select,
	{$rule}.error_cont .error_button_wrap a:hover,
	{$rule}.cmsmasters_clients_item span,
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner,
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner:before,
	{$rule}.cmsmasters_content_slider .owl-buttons > div,
	{$rule}.cmsmasters_notice .notice_close,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li a,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li a:hover,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but:hover,
	{$rule}.cmsmasters_project_grid .cmsmasters_project_footer,
	{$rule}.cmsmasters_project_puzzle .project_inner_cont,
	{$rule}.cmsmasters_open_project .owl-buttons > div,
	{$rule}#wp-calendar thead th,
	{$rule}.widget_custom_popular_projects_entries .cmsmasters_slider_project .cmsmasters_slider_project_title,
	{$rule}.widget_custom_latest_projects_entries .cmsmasters_slider_project .cmsmasters_slider_project_title {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_header_search_form input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	{$rule}.cmsmasters_header_search_form input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]):focus {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_bg']) . "
	}
	/* Finish Main Background Color */
	
	
	/* Start Alternate Background Color */
	{$rule}.cmsmasters_pricing_table .cmsmasters_period, 
	{$rule}.cmsmasters_pricing_table .feature_list li a:hover,
	{$rule}.cmsmasters_pricing_table .feature_list li {
		" . cmsmasters_color_css('color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}fieldset,
	{$rule}fieldset legend,	
	{$rule}input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	{$rule}textarea,
	{$rule}select,
	{$rule}.cmsmasters_featured_block,
	{$rule}.gallery .gallery-item .wp-caption-text,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_top,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left,
	{$rule}.gallery-item .gallery-icon,
	{$rule}.cmsmasters_stats.stats_mode_bars .cmsmasters_stat_wrap:before,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_border .cmsmasters_icon_list_item .cmsmasters_icon_list_icon,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_icon {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.cmsmasters_pricing_table .feature_list li,
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_alternate']) . "
	}
	
	/* Finish Alternate Background Color */
	
	
	/* Start Borders Color */
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li:before,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category:before,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_archive:before,
	{$rule}ul li:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_border']) . "
	}
	
	" . (($scheme == 'footer') ? ".cmsmasters_footer_default .footer_copyright" : '') . "
	{$rule}.cmsmasters_attach_img .cmsmasters_attach_img_info, 
	{$rule}input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	{$rule}textarea,
	{$rule}select,
	{$rule}option,
	{$rule}hr,
	{$rule}table td,
	{$rule}table th,
	{$rule}.wp-caption,
	{$rule}.cmsmasters_divider,
	{$rule}.cmsmasters_widget_divider,
	{$rule}.cmsmasters_img.with_caption,
	{$rule}.cmsmasters_icon_wrap .cmsmasters_simple_icon, 
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_top,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_bg .cmsmasters_icon_list_icon:after,
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=checkbox] + span.wpcf7-list-item-label:before, 
	{$rule}.cmsmasters-form-builder .check_parent input[type=checkbox] + label:before, 
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=radio] + span.wpcf7-list-item-label:before, 
	{$rule}.cmsmasters-form-builder .check_parent input[type=radio] + label:before,
	{$rule}.error_cont .error_button_wrap a:hover,
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner:before,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_border .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:after,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_icon:after,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_icon_list_type_block .cmsmasters_icon_list_item,
	{$rule}.cmsmasters_gallery .cmsmasters_gallery_item.cmsmasters_caption figure,
	{$rule}.cmsmasters_notice,
	{$rule}.cmsmasters_notice .notice_close,
	{$rule}.cmsmasters_tabs.tabs_mode_tab .cmsmasters_tabs_list_item,
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_wrap,
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_wrap,
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item_inner,
	{$rule}.cmsmasters_open_profile .profile_details_item,
	{$rule}.cmsmasters_open_profile .profile_features_item,
	{$rule}.cmsmasters_wrap_pagination,
	{$rule}.cmsmasters_wrap_items_loader,
	{$rule}.cmsmasters_open_project .project_details_item,
	{$rule}.cmsmasters_open_project .project_features_item,
	{$rule}.widget_custom_contact_info_entries > span,
	{$rule}.widget_nav_menu ul li a,
	{$rule}.widget_custom_twitter_entries ul li,
	{$rule}.bottom_bg .bottom_inner {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_border']) . "
	}
	/* Finish Borders Color */
	
	
	/* Start Secondary Color */
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner:before,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_border .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:before,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_icon:before,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but:hover,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but.current,
	{$rule}.widget_custom_twitter_entries .tweet_time:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_secondary']) . "
	}
	
	{$rule}.cmsmasters_menu_item .menu_feature_list {
		color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['porter-pub' . '_' . $scheme . '_secondary']) . ", .6);
	}
	
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=checkbox] + span.wpcf7-list-item-label:after, 
	{$rule}.cmsmasters-form-builder .check_parent input[type=checkbox] + label:after, 
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=radio] + span.wpcf7-list-item-label:after,
	{$rule}.cmsmasters-form-builder .check_parent input[type=radio] + label:after,
	{$rule}table thead th,
	{$rule}.cmsmasters_dropcap.type2,
	{$rule}.error_cont .error_button_wrap a,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_item:hover .cmsmasters_icon_list_icon,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_bg .cmsmasters_icon_list_item .cmsmasters_icon_list_icon,
	{$rule}.cmsmasters_notice .notice_close:hover,
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item_inner,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but:hover:before,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but:hover:after,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but.current:before,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but.current:after,
	{$rule}.owl-pagination .owl-page,
	{$rule}.owl-pagination .owl-page:hover,
	{$rule}.owl-pagination .owl-page.active {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_secondary']) . "
	}
	
	{$rule}.cmsmasters_profile_horizontal .cmsmasters_img_social_wrap .profile_social_icons {
		background-color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['porter-pub' . '_' . $scheme . '_secondary']) . ", .9);
	}
	
	{$rule}table thead th,
	{$rule}.error_cont .error_button_wrap a,
	{$rule}.cmsmasters_notice .notice_close:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_secondary']) . "
	}
	
	{$rule}.cmsmasters_slider_project .cmsmasters_slider_project_outer:before {
		background: -moz-linear-gradient(top, rgba(" . cmsmasters_color2rgb($cmsmasters_option['porter-pub' . '_' . $scheme . '_secondary']) . ", 0) 50%, rgba(" . cmsmasters_color2rgb($cmsmasters_option['porter-pub' . '_' . $scheme . '_secondary']) . ", 0.98) 99%, rgba(" . cmsmasters_color2rgb($cmsmasters_option['porter-pub' . '_' . $scheme . '_secondary']) . ", 1) 100%);
		background: -webkit-linear-gradient(top, rgba(" . cmsmasters_color2rgb($cmsmasters_option['porter-pub' . '_' . $scheme . '_secondary']) . ", 0) 50%,rgba(" . cmsmasters_color2rgb($cmsmasters_option['porter-pub' . '_' . $scheme . '_secondary']) . ", 0.98) 99%,rgba(" . cmsmasters_color2rgb($cmsmasters_option['porter-pub' . '_' . $scheme . '_secondary']) . ", 1) 100%);
		background: linear-gradient(to bottom, rgba(" . cmsmasters_color2rgb($cmsmasters_option['porter-pub' . '_' . $scheme . '_secondary']) . ", 0) 50%,rgba(" . cmsmasters_color2rgb($cmsmasters_option['porter-pub' . '_' . $scheme . '_secondary']) . ", 0.98) 99%,rgba(" . cmsmasters_color2rgb($cmsmasters_option['porter-pub' . '_' . $scheme . '_secondary']) . ", 1) 100%);
	}
	/* Finish Secondary Color */
	
	
	/* Start Custom Rules */
	{$rule}::selection {
		" . cmsmasters_color_css('background', $cmsmasters_option['porter-pub' . '_' . $scheme . '_secondary']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_bg']) . ";
	}
	
	{$rule}::-moz-selection {
		" . cmsmasters_color_css('background', $cmsmasters_option['porter-pub' . '_' . $scheme . '_secondary']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_bg']) . "
	}
	";
	
	
	if ($scheme != 'default') {
		$custom_css .= "
		.cmsmasters_color_scheme_{$scheme}.cmsmasters_row_top_zigzag:before, 
		.cmsmasters_color_scheme_{$scheme}.cmsmasters_row_bot_zigzag:after {
			background-image: -webkit-linear-gradient(135deg, " . $cmsmasters_option['porter-pub' . '_' . $scheme . '_bg'] . " 25%, transparent 25%), 
					-webkit-linear-gradient(45deg, " . $cmsmasters_option['porter-pub' . '_' . $scheme . '_bg'] . " 25%, transparent 25%);
			background-image: -moz-linear-gradient(135deg, " . $cmsmasters_option['porter-pub' . '_' . $scheme . '_bg'] . " 25%, transparent 25%), 
					-moz-linear-gradient(45deg, " . $cmsmasters_option['porter-pub' . '_' . $scheme . '_bg'] . " 25%, transparent 25%);
			background-image: -ms-linear-gradient(135deg, " . $cmsmasters_option['porter-pub' . '_' . $scheme . '_bg'] . " 25%, transparent 25%), 
					-ms-linear-gradient(45deg, " . $cmsmasters_option['porter-pub' . '_' . $scheme . '_bg'] . " 25%, transparent 25%);
			background-image: -o-linear-gradient(135deg, " . $cmsmasters_option['porter-pub' . '_' . $scheme . '_bg'] . " 25%, transparent 25%), 
					-o-linear-gradient(45deg, " . $cmsmasters_option['porter-pub' . '_' . $scheme . '_bg'] . " 25%, transparent 25%);
			background-image: linear-gradient(315deg, " . $cmsmasters_option['porter-pub' . '_' . $scheme . '_bg'] . " 25%, transparent 25%), 
					linear-gradient(45deg, " . $cmsmasters_option['porter-pub' . '_' . $scheme . '_bg'] . " 25%, transparent 25%);
		}
		";
	}
	
	
	$custom_css .= "
	/* Finish Custom Rules */

/***************** Finish {$title} Color Scheme Rules ******************/


/***************** Start {$title} Button Color Scheme Rules ******************/
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_hover:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_bg']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_left, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_right, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_top, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_bottom, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_vert, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_hor, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_diag {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_left:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_right:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_top:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_bottom:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_vert:hover, 
	{$rule}.cmsmasters_button.cm.sms_but_bg_expand_hor:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_diag:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_left:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_right:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_top:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_bottom:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_vert:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_hor:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_diag:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_link']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_shadow {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_shadow:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_bg']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_dark_bg, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_light_bg, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_divider {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_dark_bg:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_light_bg:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_divider:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_divider:after {
		" . cmsmasters_color_css('border-right-color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:hover:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:hover:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_link']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_slide_left, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_slide_right {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_slide_left:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_slide_right:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_bg']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_left, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_right, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_top, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_bottom {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_left:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_right:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_top:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_bottom:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_bg']) . "
	}

/***************** Finish {$title} Button Color Scheme Rules ******************/


";
	}
	
	
	return apply_filters('porter_pub_theme_colors_primary_filter', $custom_css);
}

