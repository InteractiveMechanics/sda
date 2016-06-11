<?php
/**
 * List View Single Event
 * This file contains one event in the list view
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/list/single-event.php
 *
 * @package TribeEventsCalendar
 *
 */
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

// Setup an array of venue details for use later in the template
$venue_details = tribe_get_venue_details();
$venue_city = tribe_get_city();
$venue_stateprovince = tribe_get_stateprovince();
$venue_country = tribe_get_country();
$categories = tribe_get_event_categories();


// Venue
$has_venue_address = ( ! empty( $venue_details['address'] ) ) ? ' location' : '';

// Organizer
$organizer = tribe_get_organizer();

?>


 <section>
    <div class="container">


		<div class="row news-item">
	        <div class="col-sm-4 calendar-left-container">
		          <?php if (has_post_thumbnail( $post->ID ) ): ?>
				  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
	  				 <div class="calendar-img" style="background-image: url('<?php echo $image[0]; ?>');"></div>
	  		      <?php endif; ?>
		          
	        </div>
        
	        <div class="col-sm-6 calendar-right-container">
	          <?php do_action( 'tribe_events_before_the_event_title' ) ?>
			  	<h3 class="tribe-events-list-event-title">
			  		<a class="tribe-event-url" href="<?php echo esc_url( tribe_get_event_link() ); ?>" title="<?php the_title_attribute() ?>" rel="bookmark">
			  			<?php the_title() ?>
					</a>
				</h3>
				<?php do_action( 'tribe_events_after_the_event_title' ) ?>
				<?php if ( $venue_details ) : ?>
				 <h5 class="news-date">
		          <?php echo tribe_events_event_schedule_details() ?> <span class="blog-byline-divider">/</span>
				  <?php echo $venue_city; ?>, 
				  <?php echo $venue_stateprovince; ?> 
				  <?php echo $venue_country; ?>
	          	  </h5>
	          	  <?php endif; ?>
	          	  <!-- Event Content -->
					<?php do_action( 'tribe_events_before_the_content' ) ?>
					<p class="tribe-events-list-event-description tribe-events-content">
						<?php echo tribe_events_get_the_excerpt( null, wp_kses_allowed_html( 'post' ) ); ?>
						<span class="find-out-more"><a href="<?php echo esc_url( tribe_get_event_link() ); ?>" class="tribe-events-read-more" rel="bookmark"><?php esc_html_e( 'Find out more', 'the-events-calendar' ) ?> &raquo;</a></span>
					</p><!-- .tribe-events-list-event-description -->
					<?php
					do_action( 'tribe_events_after_the_content' ); ?>
	
	
	          <?php echo $categories; ?>
	        </div>
		</div>
    </div>
 </section>

