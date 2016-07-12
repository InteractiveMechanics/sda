<?php
/**
 * The template for the homepage
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */

get_header(); ?>

<?php /* The loop */ ?>
<?php while ( have_posts() ) : the_post();
	$cover_image = get_field('cover_image');
	$page_heading = get_field('page_heading');
	$spotlight_heading = get_field('spotlight_heading'); // SDA at a glance	
?>



<main>
    <div class="jumbotron-container-homepage clearfix">
      <div class="container">
	      
	     <?php
		     $rows = get_field('cover_images');
		     if($rows) $i=0; {
			    shuffle($rows);
			     
			    foreach($rows as $row) {
					$i++; if ($i ==2) break;
					$cover_image = $row['cover_image'];
					?> 
			   
	      
        <div class="row jumbotron homepage-jumbotron" style="background-image: url('<?php echo $cover_image; ?>');">
	        <?php
		         
		        }
		     }
		     
		     ?>
		        
	        
	        
          <div class="col-sm-9 headline-container">
           <h1 class="headline"><?php echo $page_heading; ?></h1>
          </div>
        </div>
      </div>
    </div> <!-- /jumbotron -->

	<div class="container">
		<div class="row">
		    <div class="homepage-slider">
			    
			    <!-- ACF REPEATER STARTS -->
			    <?php if ( have_rows('homepage_slider') ): ?>
			    <?php while ( have_rows('homepage_slider') ): the_row();
				    $slider_link = get_sub_field('slider_link');
				    $slider_img = get_sub_field('slider_img');
				    $slider_heading = get_sub_field('slider_heading');
				    $slider_subheading = get_sub_field('slider_subheading');
				?>
		        <div class="single-slider">
		          <a href="<?php echo $slider_link; ?>" class="single-slider-link">
		            <div class="single-slider-img" style="background-image: url('<?php echo $slider_img; ?>')"></div>
		            <h4 class="single-slider-subheading"><?php echo $slider_subheading; ?></h4>
		            <h3 class="single-slider-heading"><?php echo $slider_heading; ?></h3>
		          </a>
		        </div>
		        <?php endwhile; ?>
		        <?php endif; ?>
		        <!-- END ACF REPEATER -->
		
		    </div>
		</div>
	</div>

    <div class="glance-section">
      <div class="container">
        <div class="row">

          
          	<h2 class="glance-heading"><?php echo $spotlight_heading; ?></h2>
          

          <div class="glance-subsection">
           
	            
	          <!-- START ACF REPEATER -->
	          
	          <?php if ( have_rows('spotlight_section') ): ?>
	          <?php while ( have_rows('spotlight_section') ): the_row(); 
		          $spotlight_subheading = get_sub_field('spotlight_subheading');
		          $spotlight_text = get_sub_field('spotlight_text');
		          $spotlight_button = get_sub_field('spotlight_button');
		          $spotlight_link = get_sub_field('spotlight_link');
		      ?>
		      <div class="col-sm-4 glance-block">
                <h4 class="glance-subheading"><?php echo $spotlight_subheading; ?></h4>
                <div class="glance-text"><?php echo $spotlight_text; ?></div>
                <a href="<?php echo $spotlight_link; ?>" role="button" class="glance-button"><?php echo $spotlight_button; ?><span class="glance-arrow"></span></a>
              </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <!-- END ACF REPEATER -->
            
           
           </div>
        </div>
      </div>
    </div>

    <div class="social-section">
      <div class="container">
        <div class="row">
        <div class="social-flex-container">
          <h2 class="social-heading">SDA Social</h2>
          <div class="social-icon-section hidden-xs">
            <ul class="social-list">
              <li class="social-icon-container">
                <a href="https://twitter.com/surface_design" class="social-link">
                  <svg version="1.1" class="social-icon" id="twitter-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               viewBox="0 0 106 84.7" enable-background="new 0 0 106 84.7" xml:space="preserve">
                <path d="M98.5,12.9c-3.4,1.5-7,2.5-10.8,3c3.9-2.3,6.9-6,8.3-10.4c-3.6,2.2-7.7,3.7-12,4.6c-3.4-3.7-8.3-6-13.8-6
              c-10.4,0-18.9,8.5-18.9,18.9c0,1.5,0.2,2.9,0.5,4.3C36.1,26.5,22.2,19,12.9,7.5c-1.6,2.8-2.6,6-2.6,9.5c0,6.5,3.3,12.3,8.4,15.7
              c-3.1-0.1-6-0.9-8.5-2.4c0,0.1,0,0.2,0,0.2c0,9.1,6.5,16.8,15.1,18.5c-1.6,0.4-3.2,0.7-5,0.7c-1.2,0-2.4-0.1-3.6-0.3
              c2.4,7.5,9.4,13,17.6,13.1C28,67.6,19.9,70.6,11,70.6c-1.5,0-3-0.1-4.5-0.3c8.4,5.4,18.3,8.5,28.9,8.5c34.7,0,53.7-28.8,53.7-53.7
              c0-0.8,0-1.6-0.1-2.4C92.8,20,96,16.7,98.5,12.9z"/>
                </svg>
                </a>
              </li>
              <li class="social-icon-container">
                <a href="https://www.instagram.com/surface_design/">
                 <svg version="1.1" id="instagram-icon" class="social-icon"xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
<path d="M76.3,50.5c0,14.4-11.6,26-26,26c-14.4,0-26-11.6-26-26c0-1.7,0.2-3.4,0.5-5H7.3V80c0,7.4,6,13.4,13.4,13.4h59.1
  c7.4,0,13.4-6,13.4-13.4V45.5H75.8C76.1,47.1,76.3,48.8,76.3,50.5z M79.9,7.5H20.7c-7.4,0-13.4,6-13.4,13.4v14.6h21.8
  c4.7-6.7,12.5-11,21.2-11c8.8,0,16.5,4.3,21.2,11h21.8V20.9C93.3,13.5,87.3,7.5,79.9,7.5z M86.4,24.1c0,1.3-1.1,2.4-2.4,2.4h-7.2
  c-1.3,0-2.4-1.1-2.4-2.4v-7.2c0-1.3,1.1-2.4,2.4-2.4H84c1.3,0,2.4,1.1,2.4,2.4V24.1z M66.3,50.5c0-8.8-7.2-16-16-16
  c-8.8,0-16,7.2-16,16s7.2,16,16,16C59.1,66.5,66.3,59.3,66.3,50.5z"/>
</svg>
                </a>
              </li>
              <li class="social-icon-container">
                <a href="https://www.facebook.com/Surface.Design.Association">
                  <svg version="1.1" id="fb-icon" class="social-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
<path d="M75.2,21.1H60.9c-1.7,0-3.6,2.2-3.6,5.2v10.3h17.9v14.7H57.3v44.1H40.5V51.3H25.2V36.6h15.3V28c0-12.4,8.6-22.5,20.4-22.5
  h14.3V21.1z"/>
</svg>

                </a>
              </li>
               <li class="social-icon-container">
                <a href="https://www.pinterest.com/Surface_Design/">
                 <svg version="1.1" id="pinterest-icon" class="social-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
<path d="M42.2,66.1c-2.6,13.8-5.8,27-15.3,33.9c-2.9-20.8,4.3-36.4,7.7-53c-5.7-9.6,0.7-29.1,12.8-24.3c14.9,5.9-12.9,35.9,5.8,39.6
  c19.5,3.9,27.4-33.8,15.3-46C51-1.4,17.7,15.9,21.8,41.2c1,6.2,7.4,8.1,2.6,16.6c-11.2-2.5-14.5-11.3-14.1-23
  C11,15.6,27.6,2.2,44.2,0.3C65.2-2,84.9,8,87.6,27.8c3.1,22.3-9.5,46.5-31.9,44.7C49.6,72.1,47,69,42.2,66.1z"/>
</svg>
                </a>
              </li>
            </ul>
          </div>
        </div>
        </div>
        
        <div class="row grid-container">
	      <div class="grid" id="social-feed">
            <div class="grid-item grid-item--large grid-item--large-01"><div class="twitter-wrapper"></div></div>
            <div class="grid-item grid-item--large grid-item--large-02"><div class="twitter-wrapper"></div></div>
            <div class="grid-item grid-item--large grid-item--large-03 hidden-xs"><div class="twitter-wrapper"></div></div>
            <div class="grid-item grid-item--large grid-item--large-04 hidden-xs"><div class="twitter-wrapper"></div></div>
          </div>
        </div>
	       
        
        

        </div>
      </div>
    </div>


  </main>
<?php endwhile; ?>


<?php get_footer(); ?>