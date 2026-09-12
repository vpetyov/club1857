/**
 * @package 	WordPress
 * @subpackage 	Porter Pub
 * @version		1.0.0
 * 
 * Theme Admin Settings Toggles Scripts
 * Created by CMSMasters
 * 
 */


(function ($) { 
	"use strict";
	
	/* General 'Header' Tab Fields Load */
	if ($('input[name*="' + cmsmasters_theme_settings.shortname + '_header_styles"]:checked').val() === 'default') {
		$('#' + cmsmasters_theme_settings.shortname + '_header_add_cont_cust_html').parents('tr').show();
	}
	
	
	if ($('input[name*="' + cmsmasters_theme_settings.shortname + '_header_styles"]:checked').val() === 'c_nav') {
		$('#' + cmsmasters_theme_settings.shortname + '_header_add_cont_cust_html').parents('tr').hide();
	}
	
	
	if ($('input[name*="' + cmsmasters_theme_settings.shortname + '_header_add_cont"]:checked').val() !== 'cust_html') {
		$('#' + cmsmasters_theme_settings.shortname + '_header_add_cont_cust_html').parents('tr').hide();
	}
	
	if ($('input[name*="' + cmsmasters_theme_settings.shortname + '_header_styles"]:checked').val() === 'default') {
		$('#' + cmsmasters_theme_settings.shortname + '_header_add_cont_cust_html').parents('tr').show();
	}
	
	
	/* General 'Header' Tab Fields Change */
	$('input[name*="' + cmsmasters_theme_settings.shortname + '_header_styles"]').on('change', function () {
		if ($('input[name*="' + cmsmasters_theme_settings.shortname + '_header_styles"]:checked').val() === 'default') {
			$('#' + cmsmasters_theme_settings.shortname + '_header_add_cont_cust_html').parents('tr').show();
		}
	} );
	
	$('input[name*="' + cmsmasters_theme_settings.shortname + '_header_styles"]').on('change', function () { 
		if ($('input[name*="' + cmsmasters_theme_settings.shortname + '_header_styles"]:checked').val() === 'default') {
			$('#' + cmsmasters_theme_settings.shortname + '_header_add_cont_cust_html').parents('tr').show();
		} else if ($('input[name*="' + cmsmasters_theme_settings.shortname + '_header_styles"]:checked').val() === 'c_nav') {
			$('#' + cmsmasters_theme_settings.shortname + '_header_add_cont_cust_html').parents('tr').hide();
		} else {
			if ($('input[name*="' + cmsmasters_theme_settings.shortname + '_header_add_cont"]:checked').val() === 'cust_html') {
				$('#' + cmsmasters_theme_settings.shortname + '_header_add_cont_cust_html').parents('tr').show();
			} else {
				$('#' + cmsmasters_theme_settings.shortname + '_header_add_cont_cust_html').parents('tr').hide();
			}
		}
	} );
	
	
	
	/* General 'Footer' Tab Fields Load */
	if ($('input[name*="' + cmsmasters_theme_settings.shortname + '_footer_type"]:checked').val() !== 'small') {
		$('#' + cmsmasters_theme_settings.shortname + '_footer_bg_image_enable').parents('tr').show();
		
		
		if ($('#' + cmsmasters_theme_settings.shortname + '_footer_bg_image_enable').is(':not(:checked)')) {
			$('#' + cmsmasters_theme_settings.shortname + '_footer_bg_image').parents('tr').hide();
			$('label[for="' + cmsmasters_theme_settings.shortname + '_footer_bg_repeat"]').parents('tr').hide();
			$('label[for="' + cmsmasters_theme_settings.shortname + '_footer_bg_pos"]').parents('tr').hide();
			$('label[for="' + cmsmasters_theme_settings.shortname + '_footer_bg_attachment"]').parents('tr').hide();
			$('label[for="' + cmsmasters_theme_settings.shortname + '_footer_bg_size"]').parents('tr').hide();
		}
	} else {
		$('#' + cmsmasters_theme_settings.shortname + '_footer_bg_image_enable').parents('tr').hide();
		$('#' + cmsmasters_theme_settings.shortname + '_footer_bg_image').parents('tr').hide();
		$('label[for="' + cmsmasters_theme_settings.shortname + '_footer_bg_repeat"]').parents('tr').hide();
		$('label[for="' + cmsmasters_theme_settings.shortname + '_footer_bg_pos"]').parents('tr').hide();
		$('label[for="' + cmsmasters_theme_settings.shortname + '_footer_bg_attachment"]').parents('tr').hide();
		$('label[for="' + cmsmasters_theme_settings.shortname + '_footer_bg_size"]').parents('tr').hide();
	}
	
	
	/* General 'Footer' Tab Fields Change */
	$('input[name*="' + cmsmasters_theme_settings.shortname + '_footer_type"]').on('change', function () { 
		if ($('input[name*="' + cmsmasters_theme_settings.shortname + '_footer_type"]:checked').val() === 'small') {
			$('#' + cmsmasters_theme_settings.shortname + '_footer_bg_image_enable').parents('tr').hide();
			$('#' + cmsmasters_theme_settings.shortname + '_footer_bg_image').parents('tr').hide();
			$('label[for="' + cmsmasters_theme_settings.shortname + '_footer_bg_repeat"]').parents('tr').hide();
			$('label[for="' + cmsmasters_theme_settings.shortname + '_footer_bg_pos"]').parents('tr').hide();
			$('label[for="' + cmsmasters_theme_settings.shortname + '_footer_bg_attachment"]').parents('tr').hide();
			$('label[for="' + cmsmasters_theme_settings.shortname + '_footer_bg_size"]').parents('tr').hide();
		} else {
			$('#' + cmsmasters_theme_settings.shortname + '_footer_bg_image_enable').parents('tr').show();
			$('#' + cmsmasters_theme_settings.shortname + '_footer_bg_image').parents('tr').show();
			$('label[for="' + cmsmasters_theme_settings.shortname + '_footer_bg_repeat"]').parents('tr').show();
			$('label[for="' + cmsmasters_theme_settings.shortname + '_footer_bg_pos"]').parents('tr').show();
			$('label[for="' + cmsmasters_theme_settings.shortname + '_footer_bg_attachment"]').parents('tr').show();
			$('label[for="' + cmsmasters_theme_settings.shortname + '_footer_bg_size"]').parents('tr').show();
			
			
			if ($('#' + cmsmasters_theme_settings.shortname + '_footer_bg_image_enable').is(':not(:checked)')) {
				$('#' + cmsmasters_theme_settings.shortname + '_footer_bg_image').parents('tr').hide();
				$('label[for="' + cmsmasters_theme_settings.shortname + '_footer_bg_repeat"]').parents('tr').hide();
				$('label[for="' + cmsmasters_theme_settings.shortname + '_footer_bg_pos"]').parents('tr').hide();
				$('label[for="' + cmsmasters_theme_settings.shortname + '_footer_bg_attachment"]').parents('tr').hide();
				$('label[for="' + cmsmasters_theme_settings.shortname + '_footer_bg_size"]').parents('tr').hide();
			}
		}
	} );
	
	
	/* General 'Footer' Tab Fields Load */
	if ($('#' + cmsmasters_theme_settings.shortname + '_footer_bg_image_enable').is(':not(:checked)')) {
		$('#' + cmsmasters_theme_settings.shortname + '_footer_bg_image').parents('tr').hide();
		$('label[for="' + cmsmasters_theme_settings.shortname + '_footer_bg_repeat"]').parents('tr').hide();
		$('label[for="' + cmsmasters_theme_settings.shortname + '_footer_bg_pos"]').parents('tr').hide();
		$('label[for="' + cmsmasters_theme_settings.shortname + '_footer_bg_attachment"]').parents('tr').hide();
		$('label[for="' + cmsmasters_theme_settings.shortname + '_footer_bg_size"]').parents('tr').hide();
	}
	
	/* General 'Footer' Tab Fields Change */
	$('#' + cmsmasters_theme_settings.shortname + '_footer_bg_image_enable').on('change', function () { 
		if ($('#' + cmsmasters_theme_settings.shortname + '_footer_bg_image_enable').is(':checked')) {
			$('#' + cmsmasters_theme_settings.shortname + '_footer_bg_image').parents('tr').show();
			$('label[for="' + cmsmasters_theme_settings.shortname + '_footer_bg_repeat"]').parents('tr').show();
			$('label[for="' + cmsmasters_theme_settings.shortname + '_footer_bg_pos"]').parents('tr').show();
			$('label[for="' + cmsmasters_theme_settings.shortname + '_footer_bg_attachment"]').parents('tr').show();
			$('label[for="' + cmsmasters_theme_settings.shortname + '_footer_bg_size"]').parents('tr').show();
		} else {
			$('#' + cmsmasters_theme_settings.shortname + '_footer_bg_image').parents('tr').hide();
			$('label[for="' + cmsmasters_theme_settings.shortname + '_footer_bg_repeat"]').parents('tr').hide();
			$('label[for="' + cmsmasters_theme_settings.shortname + '_footer_bg_pos"]').parents('tr').hide();
			$('label[for="' + cmsmasters_theme_settings.shortname + '_footer_bg_attachment"]').parents('tr').hide();
			$('label[for="' + cmsmasters_theme_settings.shortname + '_footer_bg_size"]').parents('tr').hide();
		}
	} );
} )(jQuery);

