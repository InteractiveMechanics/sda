<?php
/**
 * Template Name: Boardstaff
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
	  $letter1_heading = get_field('letter1_heading');
	  $letter1_title = get_field('letter1_title');
	  $letter1_img = get_field('letter1_img');
	  $letter1_body = get_field('letter1_body');
	  $letter2_heading = get_field('letter2_heading');
	  $letter2_title = get_field('letter2_title');
	  $letter2_img = get_field('letter2_img');
	  $letter2_body = get_field('letter2_body'); 
	  

  ?>
    
  <main>

   <div class="jumbotron-container clearfix">
      <div class="container">
        <div class="row jumbotron directory-jumbotron" style="background-image: url('<?php echo $cover_image; ?>');">
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

	<!-- ACF REPEATER STARTS -->
	<?php if ( have_rows('boardstaff_section') ): ?>
	<?php while ( have_rows('boardstaff_section') ): the_row();
		$section_heading = get_sub_field('section_heading');
	?>
   <section class="boardstaff-section">
     <div class="container">
      <div class="row indented-container">
        <div class="col-sm-12">
	        
	      
          <h2 class="boardstaff-subheading"><?php echo $section_heading; ?></h2>
        </div>
        
        
        <!-- ACF NESTED SUBFIELD STARTS -->
        <?php if ( have_rows('boardstaff_listing') ): ?>
        <?php while ( have_rows('boardstaff_listing') ): the_row();
	    	$listing_img = get_sub_field('listing_img');
	    	$listing_name = get_sub_field('listing_name');
	    	$listing_position = get_sub_field('listing_position');
	    ?>
        
        
        <div class="col-sm-3">
<!--           <div class="boardstaff-sm-img" style="background-image: url('<?php echo $listing_img; ?>');"> -->
	          <img class="boardstaff-sm-img" src="<?php echo $listing_img; ?>" alt="photo of <?php echo $listing_name; ?>">
<!--           </div> -->
          <div class="boardstaff-caption">
            <h3 class="boardstaff-name"><?php echo $listing_name; ?></h3>
            <p class="boardstaff-position"><?php echo $listing_position; ?></p>
          </div>
        </div>
		
		<?php endwhile; ?>
		<?php endif; ?>
		<!-- ACF NESTED SUBFIELD END -->
      
        
      </div>
     </div>
   </section>
   
   <?php endwhile; ?>
   <?php endif; ?>
   <!-- END ACF REPEATER -->

   

  
  </main>
  <?php endwhile; ?>

 <?php get_footer(); ?>