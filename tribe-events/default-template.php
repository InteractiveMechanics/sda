<?php
/**
 * Default Events Template
 * This file is the basic wrapper template for all the views if 'Default Events Template'
 * is selected in Events -> Settings -> Template -> Events Template.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/default-template.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

get_header();
?>

 <div class="jumbotron-container clearfix">
    <div class="container">
      <div class="row jumbotron about-jumbotron" style="background-image:url('<?php the_field("calendar_cover_image", "option"); ?>');">
      </div>
    </div>
  </div> <!-- /jumbotron-container -->
    
  <section class="page-heading-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-9 indented-container">
          <h2 class="section-heading"><?php the_field('calendar_page_heading', 'option'); ?></h2>
          <p class="page-heading-text"><?php the_field('calendar_page_description', 'option'); ?></p>
        </div>
      </div>
    </div>
  </section>
  



<div id="tribe-events-pg-template">
	<?php tribe_events_before_html(); ?>
	<?php tribe_get_view(); ?>
	<?php tribe_events_after_html(); ?>
</div> <!-- #tribe-events-pg-template -->
<?php
get_footer();
