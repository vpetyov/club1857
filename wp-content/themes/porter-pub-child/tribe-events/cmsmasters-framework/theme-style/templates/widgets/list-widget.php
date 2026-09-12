<?php
/**
 * @cmsmasters_package 	Porter Pub
 * @cmsmasters_version 	1.0.0
 */

$events_label_plural = tribe_get_event_label_plural();
$events_label_plural_lowercase = tribe_get_event_label_plural_lowercase();

$posts = tribe_get_list_widget_events();

// Check if any event posts are found.
if ( $posts ) : ?>

	<ol class="hfeed vcalendar">
		<?php
		// Setup the post data for each event.
		foreach ( $posts as $post ) :
			setup_postdata( $post );
			?>
			<li class="tribe-events-list-widget-events <?php tribe_events_event_classes() ?>">
				<?php
				if (
					tribe( 'tec.featured_events' )->is_featured( get_the_ID() )
					&& get_post_thumbnail_id( $post )
				) {
					/**
					 * Fire an action before the list widget featured image
					 */
					do_action( 'tribe_events_list_widget_before_the_event_image' );

					/**
					 * Allow the default post thumbnail size to be filtered
					 *
					 * @param $size
					 */
					$thumbnail_size = apply_filters( 'tribe_events_list_widget_thumbnail_size', 'cmsmasters-small-thumb' );
					?>
					<div class="tribe-event-image">
						<?php the_post_thumbnail( $thumbnail_size ); ?>
					</div>
					<?php

					/**
					 * Fire an action after the list widget featured image
					 */
					do_action( 'tribe_events_list_widget_after_the_event_image' );
				}
				?>
				<div class="tribe-events-list-widget-content-wrap">
					<?php do_action( 'tribe_events_list_widget_before_the_event_title' ); ?>
					<!-- Event Title -->
					<h4 class="entry-title summary">
						<a href="<?php echo esc_url( tribe_get_event_link() ); ?>" rel="bookmark"><?php the_title(); ?></a>
					</h4>

					<?php do_action( 'tribe_events_list_widget_after_the_event_title' ); ?>
					<!-- Event Time -->

					<?php do_action( 'tribe_events_list_widget_before_the_meta' ) ?>

					<div class="cmsmasters_widget_event_info">
						<div class="duration cmsmasters_theme_icon_time">
							<?php echo tribe_events_event_schedule_details(); ?>
						</div>
					</div>

					<?php do_action( 'tribe_events_list_widget_after_the_meta' ) ?>
				</div>
			</li>
		<?php
		endforeach;
		?>
	</ol><!-- .tribe-list-widget -->

	<p class="tribe-events-widget-link">
		<a href="<?php echo esc_url( tribe_get_events_link() ); ?>" rel="bookmark"><?php printf( esc_html__( 'View All %s', 'porter-pub' ), $events_label_plural ); ?></a>
	</p>

<?php
// No events were found.
else : ?>
	<p><?php printf( esc_html__( 'There are no upcoming %s at this time.', 'porter-pub' ), $events_label_plural_lowercase ); ?></p>
<?php
endif;
