<?php
/**
 * @package 	WordPress
 * @subpackage 	Porter Pub
 * @version 	1.0.0
 * 
 * Tribe Events Fonts Rules
 * Created by CMSMasters
 * 
 */


function porter_pub_tribe_events_fonts($custom_css) {
	$cmsmasters_option = porter_pub_get_global_options();
	
	
	$custom_css .= "
/***************** Start Tribe Events Font Styles ******************/

	/* Start Content Font */
	.tribe-mini-calendar tbody, 
	.tribe-mini-calendar tbody a,
	.tribe-this-week-events-widget .tribe-events-page-title {
		font-family:" . porter_pub_get_google_font($cmsmasters_option['porter-pub' . '_content_font_google_font']) . $cmsmasters_option['porter-pub' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['porter-pub' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['porter-pub' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['porter-pub' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['porter-pub' . '_content_font_font_style'] . ";
	}
	
	.tribe-mini-calendar tbody,
	.tribe-mini-calendar tbody a {
		font-size:" . ((int) $cmsmasters_option['porter-pub' . '_content_font_font_size'] - 1) . "px;
	}
	/* Finish Content Font */
	
	
	/* Start Link Font */
	/* Finish Link Font */
	
	
	/* Start H1 Font */
	.tribe-events-page-title,
	.cmsmasters_single_event .tribe-events-single-event-title,
	.tribe-events-organizer .cmsmasters_events_organizer_header_left .entry-title,
	.tribe-events-venue .cmsmasters_events_venue_header_left .entry-title,
	.tribe-events-countdown-widget .tribe-countdown-time {
		font-family:" . porter_pub_get_google_font($cmsmasters_option['porter-pub' . '_h1_font_google_font']) . $cmsmasters_option['porter-pub' . '_h1_font_system_font'] . ";
		font-size:" . $cmsmasters_option['porter-pub' . '_h1_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['porter-pub' . '_h1_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['porter-pub' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['porter-pub' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['porter-pub' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['porter-pub' . '_h1_font_text_decoration'] . ";
	}
	/* Finish H1 Font */
	
	
	/* Start H2 Font */
	.tribe-events-list .tribe-events-list-event-title,
	.tribe-events-list .tribe-events-list-event-title a,
	.tribe-events-photo .tribe-events-list-event-title,
	.tribe-events-photo .tribe-events-list-event-title a,
	.tribe-mobile-day .tribe-mobile-day-date {
		font-family:" . porter_pub_get_google_font($cmsmasters_option['porter-pub' . '_h2_font_google_font']) . $cmsmasters_option['porter-pub' . '_h2_font_system_font'] . ";
		font-size:" . $cmsmasters_option['porter-pub' . '_h2_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['porter-pub' . '_h2_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['porter-pub' . '_h2_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['porter-pub' . '_h2_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['porter-pub' . '_h2_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['porter-pub' . '_h2_font_text_decoration'] . ";
	}
	/* Finish H2 Font */
	
	
	/* Start H3 Font */
	/* Finish H3 Font */
	
	
	/* Start H4 Font */
	.tribe-this-week-events-widget .tribe-this-week-widget-header-date {
		font-family:" . porter_pub_get_google_font($cmsmasters_option['porter-pub' . '_h4_font_google_font']) . $cmsmasters_option['porter-pub' . '_h4_font_system_font'] . ";
		font-size:" . $cmsmasters_option['porter-pub' . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['porter-pub' . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['porter-pub' . '_h4_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['porter-pub' . '_h4_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['porter-pub' . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['porter-pub' . '_h4_font_text_decoration'] . ";
	}
	/* Finish H4 Font */
	
	
	/* Start H5 Font */
	#tribe-bar-views .tribe-bar-views-list li,
	#tribe-bar-views .tribe-bar-views-list li a,
	#tribe-events-content > .tribe-events-button,
	.tribe-events-tooltip .entry-title,
	.tribe-mini-calendar [id*=tribe-mini-calendar-month],
	.tribe-this-week-events-widget .tribe-events-viewmore a,
	#tribe-events-content > .tribe-events-button,
	.tribe-events-widget-link a {
		font-family:" . porter_pub_get_google_font($cmsmasters_option['porter-pub' . '_h5_font_google_font']) . $cmsmasters_option['porter-pub' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['porter-pub' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['porter-pub' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['porter-pub' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['porter-pub' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['porter-pub' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['porter-pub' . '_h5_font_text_decoration'] . ";
	}
	/* Finish H5 Font */
	
	
	/* Start H6 Font */
	.tribe-bar-filters-inner > div label,
	.tribe-events-sub-nav li a,
	#tribe-bar-views .button,
	.tribe-events-list .tribe-events-list-separator-month,
	.tribe-events-list .tribe-events-day-time-slot > h5,
	.tribe-events-list .tribe-events-read-more,
	.tribe-events-list .tribe-events-event-meta,
	.tribe-events-list .tribe-events-event-meta a,
	.tribe-events-photo .tribe-events-event-meta,
	.tribe-events-photo .tribe-events-event-meta a,
	table.tribe-events-calendar tbody td .tribe-events-viewmore a,
	.tribe-events-tooltip .duration,
	.tribe-events-grid .tribe-grid-header span,
	.tribe-events-grid .column.first,
	.tribe-events-grid .tribe-week-grid-hours,
	.cmsmasters_single_event .tribe-events-schedule,
	.cmsmasters_single_event .tribe-events-schedule a,
	.cmsmasters_single_event_meta .cmsmasters_event_meta_info_item_title,
	ul.tribe-related-events .tribe-related-events-title,
	ul.tribe-related-events .tribe-related-events-title a,
	.tribe-events-organizer .tribe-events-event-meta,
	.tribe-events-organizer .tribe-events-event-meta a,
	.tribe-events-venue .tribe-events-event-meta,
	.tribe-events-venue .tribe-events-event-meta a,
	.widget .vcalendar .cmsmasters_widget_event_info,
	.widget .vcalendar .cmsmasters_widget_event_info a,
	.widget .vcalendar .cmsmasters_widget_event_venue_info_loc .tribe-events-organizer *,
	.tribe-mini-calendar thead th,
	.tribe_mini_calendar_widget .tribe-mini-calendar-list-wrapper .cmsmasters_widget_event_info,
	.tribe_mini_calendar_widget .tribe-mini-calendar-list-wrapper .cmsmasters_widget_event_info a,
	.tribe-mini-calendar-list-wrapper .cmsmasters_widget_event_venue_info_loc .tribe-events-organizer *,
	.tribe-events-countdown-widget .tribe-countdown-time span,
	.tribe-events-venue-widget .tribe-venue-widget-venue-name a,
	.tribe-events-venue-widget .vcalendar .cmsmasters_widget_event_info,
	.tribe-events-venue-widget .vcalendar .cmsmasters_widget_event_info a,
	.tribe-this-week-events-widget .tribe-this-week-event .duration,
	.tribe-this-week-events-widget .tribe-this-week-event .tribe-venue,
	.tribe-mobile-day .tribe-events-event-schedule-details, 
	.tribe-mobile-day .tribe-event-schedule-details {
		font-family:" . porter_pub_get_google_font($cmsmasters_option['porter-pub' . '_h6_font_google_font']) . $cmsmasters_option['porter-pub' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['porter-pub' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['porter-pub' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['porter-pub' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['porter-pub' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['porter-pub' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['porter-pub' . '_h6_font_text_decoration'] . ";
	}
	
	.cmsmasters_row .tribe-events-countdown-widget .tribe-countdown-time span {
		font-size:" . $cmsmasters_option['porter-pub' . '_h6_font_font_size'] . "px;
	}
	
	.tribe-events-tooltip .duration,
	.tribe-events-countdown-widget .tribe-countdown-time span {
		font-size:" . ((int) $cmsmasters_option['porter-pub' . '_h6_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['porter-pub' . '_h6_font_line_height'] - 2) . "px;
	}
	
	.tribe-events-grid .column.first,
	.tribe-events-grid .tribe-week-grid-hours {
		font-size:" . ((int) $cmsmasters_option['porter-pub' . '_h6_font_font_size'] - 4) . "px;
		line-height:" . ((int) $cmsmasters_option['porter-pub' . '_h6_font_line_height'] - 2) . "px;
	}
	
	.cmsmasters_single_event_meta .cmsmasters_event_meta_info_item_title {
		margin-top:" . ($cmsmasters_option['porter-pub' . '_content_font_line_height'] - $cmsmasters_option['porter-pub' . '_h6_font_line_height']) / 2 . "px;
		margin-bottom:" . ($cmsmasters_option['porter-pub' . '_content_font_line_height'] - $cmsmasters_option['porter-pub' . '_h6_font_line_height']) / 2 . "px;
	}
	/* Finish H6 Font */
	
	
	/* Start Button Font */
	/* Finish Button Font */
	
	
	/* Start Small Text Font */
	table.tribe-events-calendar tbody td div[id*=tribe-events-daynum-],
	table.tribe-events-calendar tbody td div[id*=tribe-events-daynum-] a {
		font-family:" . porter_pub_get_google_font($cmsmasters_option['porter-pub' . '_small_font_google_font']) . $cmsmasters_option['porter-pub' . '_small_font_system_font'] . ";
		font-size:" . $cmsmasters_option['porter-pub' . '_small_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['porter-pub' . '_small_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['porter-pub' . '_small_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['porter-pub' . '_small_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['porter-pub' . '_small_font_text_transform'] . ";
	}
	
	table.tribe-events-calendar tbody td div[id*=tribe-events-daynum-],
	table.tribe-events-calendar tbody td div[id*=tribe-events-daynum-] a {
		font-size:" . ((int) $cmsmasters_option['porter-pub' . '_small_font_font_size'] + 1) . "px;
	}
	/* Finish Small Text Font */

/***************** Finish Tribe Events Font Styles ******************/

";
	
	
	return $custom_css;
}

add_filter('porter_pub_theme_fonts_filter', 'porter_pub_tribe_events_fonts');

