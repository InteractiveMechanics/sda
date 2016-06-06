<?php
/**
 * Template Name: Galleries
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
		<?php if( have_rows('single_gallery') ): ?>
		<?php while( have_rows('single_gallery') ): the_row();
			$gallery_image = get_sub_field('gallery_image');
			$gallery_date = get_sub_field('gallery_date'); 
			$gallery_title = get_sub_field('gallery_title');
			$gallery_description = get_sub_field('gallery_description');
			$gallery_link = get_sub_field('gallery_link');
			$gallery_count = get_sub_field('gallery_count');
			
		?>
		<div class="row indented-container news-item">
        <div class="col-sm-5">
          <div class="news-img" style="background-image: url('<?php echo $gallery_image; ?>');"></div>
        </div>
        <div class="col-sm-7">
          <h5 class="news-date"><?php echo $gallery_date; ?></h5>
          <h3><?php echo $gallery_title; ?></h3>
          <p><?php echo $gallery_description; ?></p>
          <p><a href="<?php echo $gallery_link; ?>">View the Gallery</a> (<?php echo $gallery_count; ?>  Images)</p>
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
