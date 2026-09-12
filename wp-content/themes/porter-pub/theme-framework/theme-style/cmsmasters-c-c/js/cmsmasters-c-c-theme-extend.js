/**
 * @package 	WordPress
 * @subpackage 	Porter Pub
 * @version		1.0.0
 * 
 * Theme Content Composer Schortcodes Extend
 * Created by CMSMasters
 * 
 */



/**
 * Сlient Extend
 */

var cmsmasters_client_new_fields = {};


for (var id in cmsmastersMultipleShortcodes.cmsmasters_client.fields) {
	if (id === 'link') {
		cmsmasters_client_new_fields['logo_overlay'] = { 
			type : 			'upload', 
			title : 		cmsmasters_theme_shortcodes.client_field_logo_overlay_title, 
			descr : 		cmsmasters_theme_shortcodes.client_field_logo_overlay_descr, 
			def : 			'', 
			required : 		true, 
			width : 		'half', 
			frame : 		'post', 
			library : 		'image', 
			multiple : 		false, 
			description : 	false, 
			caption : 		false, 
			align : 		false, 
			link : 			false, 
			size : 			false 
		};
		
		
		cmsmasters_client_new_fields[id] = cmsmastersMultipleShortcodes.cmsmasters_client.fields[id];
	} else {
		cmsmasters_client_new_fields[id] = cmsmastersMultipleShortcodes.cmsmasters_client.fields[id];
	}
}


cmsmastersMultipleShortcodes.cmsmasters_client.fields = cmsmasters_client_new_fields;



/**
 * Stats Extend
 */

var cmsmasters_stats_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_stats.fields) {
	if (id === 'type') {
		delete cmsmastersShortcodes.cmsmasters_stats.fields[id];
	} else if (id === 'count') {
		cmsmastersShortcodes.cmsmasters_stats.fields[id]['depend'] = 'mode:circles';
		
		
		cmsmasters_stats_new_fields[id] = cmsmastersShortcodes.cmsmasters_stats.fields[id];
	} else {
		cmsmasters_stats_new_fields[id] = cmsmastersShortcodes.cmsmasters_stats.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_stats.fields = cmsmasters_stats_new_fields;



/**
 * Pricing Table Extend
 */

var cmsmasters_pricing_table_item_new_fields = {};


for (var id in cmsmastersMultipleShortcodes.cmsmasters_pricing_table_item.fields) {
	if (id === 'best_text_color') {
		cmsmastersMultipleShortcodes.cmsmasters_pricing_table_item.fields[id]['title'] = cmsmasters_theme_shortcodes.pricing_offer_field_best_offer_bd_title;
		cmsmastersMultipleShortcodes.cmsmasters_pricing_table_item.fields[id]['descr'] = cmsmasters_theme_shortcodes.pricing_offer_field_best_offer_bd_descr;
		
		cmsmasters_pricing_table_item_new_fields[id] = cmsmastersMultipleShortcodes.cmsmasters_pricing_table_item.fields[id];
	} else {
		cmsmasters_pricing_table_item_new_fields[id] = cmsmastersMultipleShortcodes.cmsmasters_pricing_table_item.fields[id];
	}
}


cmsmastersMultipleShortcodes.cmsmasters_pricing_table_item.fields = cmsmasters_pricing_table_item_new_fields;



/**
 * Posts Slider Extend
 */

var cmsmasters_posts_slider_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_posts_slider.fields) {
	if (id === 'amount') {
		delete cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	} else if (id === 'columns') {
		delete cmsmastersShortcodes.cmsmasters_posts_slider.fields[id]['depend'];
		
		
		cmsmasters_posts_slider_new_fields[id] = cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	} else if (id === 'portfolio_metadata') {
		delete cmsmastersShortcodes.cmsmasters_posts_slider.fields[id]['choises']['excerpt'];
		
		
		cmsmasters_posts_slider_new_fields[id] = cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	} else if (id === 'pause') {
		cmsmasters_posts_slider_new_fields['slides_control'] = { 
			type : 		'checkbox', 
			title : 	cmsmasters_theme_shortcodes.post_slider_field_slides_control_title, 
			descr : 	'', 
			def : 		'true', 
			required : 	false, 
			width : 	'half', 
			choises : { 
						'true' : 	cmsmasters_shortcodes.choice_enable 
			}
		};
		
		
		cmsmasters_posts_slider_new_fields[id] = cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	} else {
		cmsmasters_posts_slider_new_fields[id] = cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_posts_slider.fields = cmsmasters_posts_slider_new_fields;



/**
 * Blog Extend
 */

var cmsmasters_blog_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_blog.fields) {
	if (id === 'filter_text') {
		delete cmsmastersShortcodes.cmsmasters_blog.fields[id];
	} else {
		cmsmasters_blog_new_fields[id] = cmsmastersShortcodes.cmsmasters_blog.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_blog.fields = cmsmasters_blog_new_fields;



/**
 * Portfolio Extend
 */

var cmsmasters_portfolio_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_portfolio.fields) {
	if (id === 'filter_text') {
		delete cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
	} else {
		cmsmasters_portfolio_new_fields[id] = cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_portfolio.fields = cmsmasters_portfolio_new_fields;



/**
 * Menu
 */
 
var cmsmastersShortcodes_new_shortcode = {};


for (var id in cmsmastersShortcodes) {
	if (id === 'cmsmasters_notice') {
		cmsmastersShortcodes_new_shortcode['cmsmasters_menu_items'] = { 
			title : 	cmsmasters_theme_shortcodes.menu_title, 
			icon : 		'admin-icon-menu', 
			pair : 		true, 
			content : 	'offers', 
			visual : 	false, 
			multiple : 	true, 
			def : 		'[cmsmasters_menu_item shortcode_id="' + get_uniq_ID() + '" currency="$" price="99"]' + cmsmasters_shortcodes.title + '[/cmsmasters_menu_item]', 
			fields : { 
				// Shortcode ID
				shortcode_id : { 
					type : 		'hidden', 
					title : 	'', 
					descr : 	'', 
					def : 		'', 
					required : 	true, 
					width : 	'full' 
				}, 
				// Offers
				offers : { 
					type : 		'multiple', 
					title : 	cmsmasters_theme_shortcodes.menu_offers_title, 
					descr : 	cmsmasters_theme_shortcodes.menu_offers_descr, 
					def : 		'[cmsmasters_menu_item shortcode_id="' + get_uniq_ID() + '" currency="$" price="99"]' + cmsmasters_shortcodes.title + '[/cmsmasters_menu_item]', 
					required : 	true, 
					width : 	'half' 
				}, 
				// CSS3 Animation
				animation : { 
					type : 		'select', 
					title : 	cmsmasters_shortcodes.animation_title, 
					descr : 	cmsmasters_shortcodes.animation_descr + " <br /><span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_shortcodes.animation_descr_note + "</span>", 
					def : 		'', 
					required : 	false, 
					width : 	'half', 
					choises : 	get_animations() 
				}, 
				// Animation Delay
				animation_delay : { 
					type : 		'input', 
					title : 	cmsmasters_shortcodes.animation_delay_title, 
					descr : 	cmsmasters_shortcodes.animation_delay_descr + " <br /><span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_shortcodes.animation_delay_descr_note + "</span>", 
					def : 		'0', 
					required : 	false, 
					width : 	'number', 
					min : 		'0', 
					step : 		'50' 
				}, 
				// Additional Classes
				classes : { 
					type : 		'input', 
					title : 	cmsmasters_shortcodes.classes_title, 
					descr : 	cmsmasters_shortcodes.classes_descr, 
					def : 		'', 
					required : 	false, 
					width : 	'half' 
				} 
			} 
		};
		
		
		cmsmastersShortcodes_new_shortcode[id] = cmsmastersShortcodes[id];
	} else {
		cmsmastersShortcodes_new_shortcode[id] = cmsmastersShortcodes[id];
	}
}


cmsmastersShortcodes = cmsmastersShortcodes_new_shortcode;

/**
 * Menu Item
 */
 
var cmsmastersMultipleShortcodes_new_shortcode = {};


for (var id in cmsmastersMultipleShortcodes) {
	if (id === 'cmsmasters_video') {
		cmsmastersMultipleShortcodes_new_shortcode['cmsmasters_menu_item'] = { 
			title : 	cmsmasters_theme_shortcodes.menu_item_title, 
			pair : 		true, 
			content : 	'title', 
			visual : 	'<span class="cmsmasters_multiple_text">{{ data.title }} &nbsp; {{ data.currency }}{{ data.price }}</span>', 
			def : 		"", 
			fields : { 
				// Shortcode ID
				shortcode_id : { 
					type : 		'hidden', 
					title : 	'', 
					descr : 	'', 
					def : 		'', 
					required : 	true, 
					width : 	'full' 
				}, 
				// Title
				title : { 
					type : 		'input', 
					title : 	cmsmasters_shortcodes.title, 
					descr : 	cmsmasters_theme_shortcodes.menu_item_title_descr, 
					def : 		'', 
					required : 	true, 
					width : 	'half' 
				}, 
				// Price
				price : { 
					type : 		'input', 
					title : 	cmsmasters_theme_shortcodes.menu_item_price_title, 
					descr : 	cmsmasters_theme_shortcodes.menu_item_price_descr, 
					def : 		'', 
					required : 	true, 
					width : 	'small' 
				}, 
				// Currency
				currency : { 
					type : 		'input', 
					title : 	cmsmasters_theme_shortcodes.menu_item_currency_title, 
					descr : 	cmsmasters_theme_shortcodes.menu_item_currency_descr, 
					def : 		'', 
					required : 	true, 
					width : 	'small' 
				},  
				// Features
				features : { 
					type : 		'link', 
					title : 	cmsmasters_theme_shortcodes.menu_item_features_title, 
					descr : 	cmsmasters_theme_shortcodes.menu_item_features_descr, 
					def : 		"", 
					required : 	false, 
					width : 	'full' 
				}, 
				// Best Offer
				best : { 
					type : 		'checkbox', 
					title : 	cmsmasters_theme_shortcodes.menu_item_best_offer_title, 
					descr : 	cmsmasters_theme_shortcodes.menu_item_best_offer_descr, 
					def : 		'', 
					required : 	false, 
					width : 	'half', 
					choises : { 
								'true' : 	cmsmasters_shortcodes.choice_enable
					} 
				},
				// Best offer Color
				best_bg_color : { 
					type : 		'rgba', 
					title : 	cmsmasters_theme_shortcodes.menu_item_best_offer_bg_title, 
					descr : 	cmsmasters_theme_shortcodes.menu_item_best_offer_bg_descr + "<br /><span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_shortcodes.clear_color_note + "</span>", 
					def : 		'', 
					required : 	false, 
					width : 	'half', 
					depend : 	'best:true' 
				}, 
				// Best offer Text Color
				best_text_color : { 
					type : 		'rgba', 
					title : 	cmsmasters_theme_shortcodes.menu_item_best_offer_txt_title, 
					descr : 	cmsmasters_theme_shortcodes.menu_item_best_offer_txt_descr + "<br /><span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_shortcodes.clear_color_note + "</span>", 
					def : 		'', 
					required : 	false, 
					width : 	'half', 
					depend : 	'best:true' 
				},  
				// Best Offer Text
				best_recommend : { 
					type : 		'input', 
					title : 	cmsmasters_theme_shortcodes.menu_item_best_feature_title, 
					descr : 	cmsmasters_theme_shortcodes.menu_item_best_feature_descr, 
					def : 		'', 
					required : 	false, 
					width : 	'small', 
					depend : 	'best:true' 
				},  
				// Best offer Recommendation Color
				best_bg_recommend_color : { 
					type : 		'rgba', 
					title : 	cmsmasters_theme_shortcodes.menu_item_best_offer_bg_feature_title, 
					descr : 	cmsmasters_theme_shortcodes.menu_item_best_offer_bg_feature_descr + "<br /><span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_shortcodes.clear_color_note + "</span>", 
					def : 		'', 
					required : 	false, 
					width : 	'half', 
					depend : 	'best:true' 
				}, 
				// Best offer Text Recommendation Color
				best_text_recommend_color : { 
					type : 		'rgba', 
					title : 	cmsmasters_theme_shortcodes.menu_item_best_offer_txt_feature_title, 
					descr : 	cmsmasters_theme_shortcodes.menu_item_best_offer_txt_feature_descr + "<br /><span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_shortcodes.clear_color_note + "</span>", 
					def : 		'', 
					required : 	false, 
					width : 	'half', 
					depend : 	'best:true' 
				}, 
				// CSS3 Animation
				animation : { 
					type : 		'select', 
					title : 	cmsmasters_shortcodes.animation_title, 
					descr : 	cmsmasters_shortcodes.animation_descr + " <br /><span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_shortcodes.animation_descr_note + "</span>", 
					def : 		'', 
					required : 	false, 
					width : 	'half', 
					choises : 	get_animations() 
				}, 
				// Animation Delay
				animation_delay : { 
					type : 		'input', 
					title : 	cmsmasters_shortcodes.animation_delay_title, 
					descr : 	cmsmasters_shortcodes.animation_delay_descr + " <br /><span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_shortcodes.animation_delay_descr_note + "</span>", 
					def : 		'0', 
					required : 	false, 
					width : 	'number', 
					min : 		'0', 
					step : 		'50' 
				}, 
				// Additional Classes
				classes : { 
					type : 		'input', 
					title : 	cmsmasters_shortcodes.classes_title, 
					descr : 	cmsmasters_shortcodes.classes_descr, 
					def : 		'', 
					required : 	false, 
					width : 	'half' 
				} 
			} 
		};
		
		
		cmsmastersMultipleShortcodes_new_shortcode[id] = cmsmastersMultipleShortcodes[id];
	} else {
		cmsmastersMultipleShortcodes_new_shortcode[id] = cmsmastersMultipleShortcodes[id];
	}
}


cmsmastersMultipleShortcodes = cmsmastersMultipleShortcodes_new_shortcode;
