<?php
if (! defined('WP_UNINSTALL_PLUGIN')) {
	exit;
}

global $wpdb;

// 1) Delete every option this plugin ever created
$options_to_delete = [
	'cnss-width',
	'cnss-height',
	'cnss-margin',
	'cnss-row-count',
	'cnss-vertical-horizontal',
	'cnss-text-align',
	'cnss-social-profile-links',
	'cnss-social-profile-type',
	'cnss-icon-bg-color',
	'cnss-icon-bg-hover-color',
	'cnss-icon-color',
	'cnss-icon-hover-color',
	'cnss-icon-shape',
	'cnss-icon-animation',
	'cnss-original-icon-color',
	'cnss-icon-name-show',
	'cnss-icon-name-font-color',
	'cnss-icon-name-font-size',
	'cnss-icon-floating-option'
];

foreach ($options_to_delete as $opt) {
	delete_option($opt);
}

// 2) Drop our custom tables
$wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}cn_social_icon");
$wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}cn_social_share_post");

// 3) If multisite, repeat for each blog
if (is_multisite()) {
	$sites = get_sites();
	foreach ($sites as $site) {
		switch_to_blog($site->blog_id);
		foreach ($options_to_delete as $opt) {
			delete_option($opt);
		}
		$wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}cn_social_icon");
		$wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}cn_social_share_post");
		restore_current_blog();
	}
}
