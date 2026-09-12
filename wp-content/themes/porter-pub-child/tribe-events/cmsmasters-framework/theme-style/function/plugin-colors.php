<?php
/**
 * @package 	WordPress
 * @subpackage 	Porter Pub
 * @version 	1.0.0
 * 
 * Tribe Events Colors Rules
 * Created by CMSMasters
 * 
 */


function porter_pub_tribe_events_colors($custom_css) {
	$cmsmasters_option = porter_pub_get_global_options();
	
	
	$cmsmasters_color_schemes = cmsmasters_color_schemes_list();
	
	
	foreach ($cmsmasters_color_schemes as $scheme => $title) {
		$rule = (($scheme != 'default') ? "html .cmsmasters_color_scheme_{$scheme} " : '');
		
		
		$custom_css .= "
/***************** Start {$title} Tribe Events Color Scheme Rules ******************/

	/* Start Main Content Font Color */
	{$rule}#tribe-bar-views .button,
	{$rule}#tribe-bar-views .button:hover,
	{$rule}table.tribe-events-calendar tbody td .tribe-events-month-event-title,
	{$rule}table.tribe-events-calendar tbody td .tribe-events-month-event-title a,
	{$rule}.tribe-events-organizer .tribe-events-event-meta a,
	{$rule}.tribe-events-venue .tribe-events-event-meta a,
	{$rule}.tribe-mini-calendar tbody a,
	{$rule}#tribe-bar-views .button,
	{$rule}.tribe-events-countdown-widget .tribe-countdown-time span,
	{$rule}.tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-colon,
	{$rule}.tribe-this-week-events-widget .tribe-events-page-title {
		" . cmsmasters_color_css('color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_color']) . "
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	{$rule}.tribe-events-grid .tribe-week-event .vevent .entry-title a,
	{$rule}.tribe-mini-calendar tbody a:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.tribe-events-grid .tribe-week-event .vevent .entry-title,
	{$rule}.tribe-events-grid .tribe-grid-body .tribe-event-featured.tribe-events-week-hourly-single {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_link']) . "
	}
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	{$rule}.tribe-events-back a:hover,
	{$rule}.tribe-events-cal-links a:hover,
	{$rule}#tribe-bar-views .tribe-bar-views-list li a:hover,
	{$rule}#tribe-bar-views .tribe-bar-views-list li.tribe-bar-active a,
	{$rule}#tribe-bar-views .tribe-bar-views-list li.tribe-bar-active a:hover,
	{$rule}.tribe-events-organizer .cmsmasters_events_organizer_header_right a:hover,
	{$rule}.tribe-events-organizer .tribe-events-event-meta a:hover,
	{$rule}.tribe-events-venue .cmsmasters_events_venue_header_right a:hover,
	{$rule}table.tribe-events-calendar tbody td.tribe-events-past .tribe-events-month-event-title a, 
	{$rule}.tribe-events-venue .tribe-events-event-meta a:hover,
	{$rule}.tribe-mini-calendar thead a,
	{$rule}#tribe-bar-views .tribe-bar-views-list li:hover,
	{$rule}#tribe-bar-views .tribe-bar-views-list li.tribe-bar-active,
	{$rule}.tribe-mini-calendar tbody .tribe-events-othermonth,
	{$rule}.tribe-mini-calendar tbody .tribe-events-othermonth a,
	{$rule}.datepicker.dropdown-menu thead th:hover, 
	{$rule}.event_hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}.datepicker.dropdown-menu thead th, 
	{$rule}.datepicker.dropdown-menu thead td, 
	{$rule}.datepicker.datepicker-dropdown table tr td span.active,
	{$rule}.datepicker.datepicker-dropdown table tr td span.active.active,
	{$rule}.datepicker.datepicker-dropdown table tr td span.active:active, 
	{$rule}.datepicker.datepicker-dropdown table tr td span.active:hover.active, 
	{$rule}.datepicker.datepicker-dropdown table tr td span.active:hover:active,
	{$rule}.tribe-events-grid .tribe-grid-body .tribe-event-featured.tribe-events-week-hourly-single:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_hover']) . "
	}
	/* Finish Highlight Color */
	
	
	/* Start Headings Color */
	{$rule}#tribe-bar-views .tribe-bar-views-list li,
	{$rule}#tribe-bar-views .tribe-bar-views-list li a,
	{$rule}.cmsmasters_single_event_meta .cmsmasters_event_meta_info_item_title,
	{$rule}.cmsmasters_single_event_meta dt,
	{$rule}.tribe-events-countdown-widget .tribe-countdown-time,
	{$rule}.tribe-events-notices {
		" . cmsmasters_color_css('color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}.tribe-mini-calendar thead,
	{$rule}.tribe-mini-calendar .tribe-mini-calendar-nav,
	{$rule}.tribe-mini-calendar tbody .tribe-mini-calendar-today a:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}.tribe-mini-calendar thead td,
	{$rule}.tribe-mini-calendar .tribe-mini-calendar-nav td {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_heading']) . "
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	{$rule}table.tribe-events-calendar thead th,
	{$rule}table.tribe-events-calendar tbody td.tribe-events-present div[id*=tribe-events-daynum-],
	{$rule}table.tribe-events-calendar tbody td.tribe-events-present div[id*=tribe-events-daynum-] a,
	{$rule}table.tribe-events-calendar tbody td.tribe-events-present div[id*=tribe-events-daynum-] a:hover,
	{$rule}.tribe-events-grid .tribe-grid-header a:hover span,
	{$rule}.tribe-events-grid .tribe-grid-header span,
	{$rule}.tribe-events-grid .tribe-week-event .vevent .entry-title a,
	{$rule}.tribe-events-grid .tribe-week-event:hover .vevent .entry-title a,
	{$rule}.tribe-mini-calendar thead,
	{$rule}.tribe-mini-calendar thead a:hover,
	{$rule}.tribe-this-week-events-widget .this-week-today .tribe-this-week-widget-header-date,
	{$rule}.event_bg {
		" . cmsmasters_color_css('color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}#tribe-bar-views .button,
	{$rule}#tribe-bar-views .button:hover,
	{$rule}#tribe-bar-views.tribe-bar-views-open .button,
	{$rule}table.tribe-events-calendar tbody td.tribe-events-othermonth div[id*=tribe-events-daynum-],
	{$rule}#tribe-events-content-wrapper #tribe-events-content table.tribe-events-calendar .type-tribe_events.tribe-event-featured,
	{$rule}.tribe-events-tooltip,
	{$rule}.tribe-events-grid .tribe-scroller,
	{$rule}.tribe-events-grid .tribe-week-grid-hours,
	{$rule}.widget.tribe-events-list-widget .tribe-event-featured,
	{$rule}.widget.tribe-events-adv-list-widget .tribe-event-featured .tribe-mini-calendar-event,
	{$rule}.widget .tribe-mini-calendar-list-wrapper .tribe-event-featured,
	{$rule}.tribe-mini-calendar,
	{$rule}.tribe-events-venue-widget .cmsmasters_tribe_venue_widget_name_inner,
	{$rule}.widget.tribe-events-venue-widget .tribe-event-featured,
	{$rule}.widget.tribe-this-week-events-widget .tribe-this-week-event,
	{$rule}.tribe-events-venue .tribe-events-list .tribe-events-loop .tribe-event-featured,
	{$rule}.tribe-events-organizer .tribe-events-list .tribe-events-loop .tribe-event-featured,
	{$rule}.tribe-events-grid .tribe-grid-body .tribe-event-featured.tribe-events-week-hourly-single,
	{$rule}#tribe-events-content-wrapper .tribe-events-list .tribe-events-loop .tribe-event-featured,
	{$rule}#tribe-events-content-wrapper .tribe-events-list #tribe-events-day.tribe-events-loop .tribe-event-featured,
	{$rule}#tribe-events-content-wrapper .type-tribe_events.tribe-events-photo-event.tribe-event-featured .tribe-events-photo-event-wrap,
	{$rule}#tribe-events-content-wrapper .type-tribe_events.tribe-events-photo-event.tribe-event-featured .tribe-events-photo-event-wrap:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.tribe-events-grid .tribe-grid-header a:hover,
	{$rule}.tribe-events-grid .tribe-grid-header .tribe-week-today {
		background-color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['porter-pub' . '_' . $scheme . '_bg']) . ", .1);
	}
	/* Finish Main Background Color */
	
	
	/* Start Alternate Background Color */
	{$rule}table.tribe-events-calendar tbody td div[id*=tribe-events-daynum-],
	{$rule}.tribe-events-venue-widget .tribe-venue-widget-venue,
	{$rule}.tribe-events-notices {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_alternate']) . "
	}
	/* Finish Alternate Background Color */
	
	
	/* Start Borders Color */
	{$rule}.tribe-events-single .post_nav:before,
	{$rule}.tribe-events-single .post_nav:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.tribe-events-list .tribe-events-list-separator-month,
	{$rule}.tribe-events-list .tribe-events-day-time-slot > h5,
	{$rule}table.tribe-events-calendar tbody td,
	{$rule}table.tribe-events-calendar tbody td div[id*=tribe-events-daynum-],
	{$rule}.tribe-events-tooltip,
	{$rule}.tribe-events-grid .tribe-scroller,
	{$rule}.tribe-events-grid .tribe-week-grid-block div,
	{$rule}.tribe-events-grid .tribe-grid-allday,
	{$rule}.tribe-events-grid .tribe-grid-content-wrap .column,
	{$rule}.tribe-events-grid .tribe-week-grid-hours div,
	{$rule}.cmsmasters_single_event_meta .cmsmasters_event_meta_info_item {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}table.tribe-events-calendar tbody td .tribe_events {
		border-color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['porter-pub' . '_' . $scheme . '_border']) . ", .3);
	}
	/* Finish Borders Color */
	
	
	/* Start Secondary Color */
	{$rule}.tribe-events-back,
	{$rule}.tribe-events-back a,
	{$rule}.tribe-events-cal-links,
	{$rule}.tribe-events-cal-links a,
	{$rule}.tribe-events-list .tribe-events-event-meta .author > div:before,
	{$rule}.tribe-events-photo .tribe-events-event-meta > div:before,
	{$rule}table.tribe-events-calendar tbody td .tribe-events-month-event-title a:hover,
	{$rule}table.tribe-events-calendar tbody td div[id*=tribe-events-daynum-] a:hover,
	{$rule}.cmsmasters_single_event .tribe-events-schedule > div:before,
	{$rule}.tribe-events-organizer .cmsmasters_events_organizer_header_right,
	{$rule}.tribe-events-organizer .cmsmasters_events_organizer_header_right a,
	{$rule}.tribe-events-venue .cmsmasters_events_venue_header_right,
	{$rule}.tribe-events-venue .cmsmasters_events_venue_header_right a,
	{$rule}.widget .vcalendar [class*=cmsmasters_theme_icon]:before,
	{$rule}.tribe-mini-calendar-list-wrapper [class*=cmsmasters_theme_icon]:before,
	{$rule}.tribe-mini-calendar tbody a:hover,
	{$rule}.tribe-mini-calendar tbody .tribe-events-present,
	{$rule}.tribe-mini-calendar tbody .tribe-events-present a,
	{$rule}.tribe-events-venue-widget .cmsmasters_tribe_venue_widget_name_inner:before,
	{$rule}.tribe-this-week-events-widget .tribe-this-week-widget-header-date,
	{$rule}.tribe-this-week-events-widget .tribe-this-week-event .duration:before,
	{$rule}.tribe-this-week-events-widget .tribe-this-week-event .tribe-venue:before,
	{$rule}.tribe-mobile-day .tribe-mobile-day-date {
		" . cmsmasters_color_css('color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_secondary']) . "
	}
	
	{$rule}table.tribe-events-calendar tbody td.tribe-events-present div[id*=tribe-events-daynum-],
	{$rule}table.tribe-events-calendar tbody td.tribe-events-present div[id*=tribe-events-daynum-] a,
	{$rule}.tribe-events-grid .tribe-grid-header,
	{$rule}.widget.tribe-this-week-events-widget .this-week-today .tribe-this-week-widget-header-date {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['porter-pub' . '_' . $scheme . '_secondary']) . "
	}
	/* Finish Secondary Color */

/***************** Finish {$title} Tribe Events Color Scheme Rules ******************/

";
	}
	
	
	return $custom_css;
}

add_filter('porter_pub_theme_colors_secondary_filter', 'porter_pub_tribe_events_colors');

