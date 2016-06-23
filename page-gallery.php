<?php
/**
 * Template Name: Gallery
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
        <div class="row jumbotron gallery-jumbotron" style="background-image: url('<?php echo $cover_image; ?>'); ?>">
        </div>
      </div>
    </div> <!-- /jumbotron -->

    <section class="gallery-heading-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-9 indented-container">
          <h2 class="section-heading"><?php echo $page_heading; ?></h2>
          <p class="page-heading-text"><?php echo $page_description; ?></p>
        </div>
      </div>
    </div>
  </section>

  <section>
	  
	  
    <div class="container">
      <div class="row indented-container">
	      
	    		
	    
	    <!-- ACF REPEATER STARTS -->  
	    <?php if ( have_rows('gallery-item') ): ?>
	    <?php while ( have_rows('gallery-item') ): the_row();
		    	$gallery_image = get_sub_field('gallery_image');
		    	$gallery_artist = get_sub_field('gallery_artist');
		    	$gallery_link = get_sub_field('gallery_link');
		    	$gallery_title = get_sub_field('gallery_title');
		    	$gallery_year = get_sub_field('gallery_year');
		    	
		    			    	
		    	
		?>  
        <div class="col-sm-3 lightgallery">
	     	<a href="<?php echo $gallery_image; ?>"  
	          <div class="gallery-sm-img" style="background-image: url('<?php echo $gallery_image; ?>');"></div>
	          <div class="gallery-img-caption">
	            <p class="caption-name"><a href="<?php echo $gallery_link; ?>" class="caption-link" href=""><?php echo $gallery_artist; ?></a></p>
	            <p class="caption-title"><?php echo $gallery_title; ?><span class="caption-year"><?php echo $gallery_year; ?></span></p>
	          </div>
        	</a>
        </div>
        
		<?php endwhile; 
			
				
		?>
		<?php endif; ?>
		<!-- END ACF REPEATER -->
       
        


      </div>
    </div>
    
    
  </section>

  

  </main>
  <?php endwhile; ?>

 <?php get_footer(); ?>