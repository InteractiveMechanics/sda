<?php
/**
 * Template Name: News
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
  	?>


	 <main>
     <div class="jumbotron-container clearfix">
      <div class="container">
        <div class="row jumbotron news-jumbotron" style="background-image: url('<?php echo $cover_image; ?>')">
        </div>
      </div>
    </div> <!-- /jumbotron -->

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

  <section class="news-section">
    <div class="container">
	    
	    <!-- ACF REPEATER STARTS -->
		<?php if( have_rows('news_item') ): ?>
		<?php while( have_rows('news_item') ): the_row();
			$news_image = get_sub_field('news_image');
			$news_date = get_sub_field('news_date'); 
			$news_headline = get_sub_field('news_headline');
			$news_release = get_sub_field('news_release');
			$news_calendar = get_sub_field('news_calendar');	
		?>
		<div class="row indented-container news-item">
        <div class="col-sm-5">
          <div class="news-img" style="background-image: url('<?php echo $news_image; ?>');"></div>
        </div>
        <div class="col-sm-7">
          <h5 class="news-date"><?php echo $news_date; ?></h5>
          <h3><?php echo $news_headline; ?></h3>
          <p class="news-release"><a href="<?php echo $news_release; ?>">Download the Press Release</a></p>
          
          <?php if ( $news_calendar ): ?>          
          <p class="news-calendar">
          <span class="hidden-xs hidden-sm"> / </span><a href="<?php echo $news_calendar; ?>">View the Event</a>
          <?php endif; ?>
          </p>
        </div>
      </div>
      
      <?php endwhile; ?>
	  <?php endif; ?>
	  <!-- END ACF REPEATER -->

      
    </div>
  </section> 

		
	</main>
	
	<?php endwhile; ?>


<?php get_footer(); ?>
