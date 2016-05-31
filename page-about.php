<?php
/**
 * Template Name: About
 *
 * @package WordPress
 * @subpackage Surface_Design_Association_2016
 * @since SDA 2016 1.0
 */

get_header(); ?>

  <?php /* The loop */ ?>
  <?php while ( have_posts() ) : the_post();
	  $page_heading = get_field('page_heading');
	  $page_description = get_field('page_description');
	  $cover_image = get_field('cover_image');
	  $page_body = get_field('page_body');

  ?>
    
  <main>

  <div class="jumbotron-container clearfix">
    <div class="container">
      <div class="row jumbotron about-jumbotron" style="background-image:url('<?php echo $cover_image; ?>');">
      </div>
    </div>
  </div> <!-- /jumbotron-container -->
    
  <section class="page-heading-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-9 indented-container">
          <h2 class="section-heading"><?php echo $page_heading; ?></h2>
          <p class="page-heading-text"><?php echo $page_description; ?></p>
        </div>
      </div>
    </div>
  </section>
  
  <section class="history-section">
    <div class="container">
      <div class="row">
        	<?php echo $page_body; ?>
        </div>
      </div>
    </div>
  </section>


  </main>
  <?php endwhile; ?>

 <?php get_footer(); ?>