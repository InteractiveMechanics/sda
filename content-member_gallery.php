




<article id="post-<?php the_ID(); ?>" class="post-entry member-gallery-post">
	 <?php 

			$posts = get_field('gallery_item');

		if( $posts ): ?>

	
    <div class="container">
      <div class="row indented-container">
	    
		<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) 
			$gallery_image = get_field('gallery_image');
			$image_materials = get_field('image_materials');
			$image_dimensions = get_field('image_dimensions');
			
		?>
		<div id="caption-<?php the_ID(); ?>" style="display:none">
			<a class="caption-link" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><h4><?php the_author(); ?></h4></a>
			<p class="caption-title"><?php echo the_field('image_title'); ?>, <span class="caption-year"><?php the_field('image_year'); ?></span></p>
			<p>
				<?php if ($image_materials): 
					echo '<span class="caption-comma">' . $image_materials . '</span>';
				?>
				<? endif; ?>
				<?php if ($image_dimensions):
					echo '<span class="caption-comma">' . $image_dimensions . '</span>';
				?>
				<? endif; ?>
			</p>
   		</div>
	    <div class="col-sm-6 col-md-3 lightgallery member-gallery-img-container">
		    <a href="<?php the_field('gallery_image'); ?>" class="artwork-container artwork" data-sub-html="#caption-<?php the_ID(); ?>">
			    <div class="member-gallery-img" style="background-image: url('<?php echo $gallery_image; ?>')">   
			    </div>
	     	</a>
		 	<div class="gallery-img-caption">
		        
				<a class="caption-link" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
						
					<p class="caption-name"><?php the_author(); ?></p>
			            
					<p class="caption-title"><?php echo the_field('image_title'); ?>, <span class="caption-year"><?php the_field('image_year'); ?></span></p>
				</a>
	       
	       	</div>
	       	
	       	
	    </div>
	    	<?php endforeach; ?>

	    
	    
	    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
	    
	    <?php endif; ?>
			

	    
	    
	    
	    
	    <!-- ACF REPEATER STARTS -->  
<!--
	    <?php if ( have_rows('gallery_item') ): ?>
	    <?php while ( have_rows('gallery_item') ): the_row();
		    	$gallery_image = get_sub_field('gallery_image');
		    	$gallery_artist = get_sub_field('gallery_artist');
		    	$gallery_link = get_sub_field('gallery_link');
		    	$gallery_title = get_sub_field('gallery_title');
		    	$gallery_year = get_sub_field('gallery_year');
		?>  
        <div class="col-sm-3 lightgallery">
	     	<a href="<?php echo $gallery_image; ?>" class="artwork-container artwork"> 
				<img src="<?php echo $gallery_image; ?>">
	     	</a>
	          	
	        <div class="gallery-img-caption">
		        
			    <a href="<?php echo $gallery_link; ?>" class="caption-link" href="">
					<p class="caption-name"><?php echo $gallery_artist; ?></p>
		            
					<p class="caption-title"><?php echo $gallery_title; ?>, <span class="caption-year"><?php echo $gallery_year; ?></span></p>
			    </a>
	        </div>
        </div>
        
		<?php endwhile; ?>
		<?php endif; ?>
-->
		<!-- END ACF REPEATER -->
<!--

		</div>
	</div>
-->
    
          
 </article>