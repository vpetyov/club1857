<?php
/**
 * @package 	WordPress
 * @subpackage 	Porter Pub
 * @version 	1.0.8
 *
 * CMSMasters WooCommerce Admin Settings
 * Created by CMSMasters
 *
 */


/* Single Settings */
function porter_pub_woocommerce_options_general_fields($options, $tab) {
	$defaults = porter_pub_settings_general_defaults();

	if ($tab == 'header') {
		$options[] = array(
			'section' => 'header_section',
			'id' => 'porter-pub' . '_woocommerce_cart_dropdown',
			'title' => esc_html__('Disable WooCommerce Cart', 'porter-pub'),
			'desc' => '', 
			'type' => 'checkbox',
			'std' => $defaults[$tab]['porter-pub' . '_woocommerce_cart_dropdown']
		);
	}

	return $options;
}

add_filter('cmsmasters_options_general_fields_filter', 'porter_pub_woocommerce_options_general_fields', 10, 2);

