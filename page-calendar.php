<?php
/**
 * Template Name: Calendar
 *
 * @package WordPress
 * @subpackage Surface_Design_Association_2016
 * @since SDA 2016 1.0
 */

get_header(); ?>

<!--
 <?php 
	  $page_heading = get_field('page_heading');
	  $page_description = get_field('page_description');
	  $cover_image = get_field('cover_image');
?>
-->


<main>

 <div class="jumbotron-container clearfix">
    <div class="container">
      <div class="row jumbotron about-jumbotron">
      </div>
    </div>
  </div> <!-- /jumbotron-container -->
    
  <section class="page-heading-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-9 indented-container">
          <h2 class="section-heading">Calendar</h2>
          <p class="page-heading-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
      </div>
    </div>
  </section>




<div id="tribe-events-pg-template">
	<?php tribe_events_before_html(); ?>
	<?php tribe_get_view(); ?>
	<?php tribe_events_after_html(); ?>
</div> <!-- #tribe-events-pg-template -->
  
</main>

 <?php get_footer(); ?>