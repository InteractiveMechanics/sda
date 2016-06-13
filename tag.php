<?php get_header(); ?>


	<?php 
		
		$cover_image = get_field('cover_image');
	?>


	


	<main role="main" class="tag-page">
		
		
		<div class="jumbotron-container clearfix">
      		<div class="container">
        		<div class="row jumbotron blog-jumbotron" style="background-image: url('<?php echo $cover_image; ?>');">
        		</div>
      		</div>
    	</div> <!-- /jumbotron -->

		
		<div class="container">
			<div class="row indented-container">
		
				<h2 class="tag-page-heading"><?php _e( 'Blog Post Tag: ', 'html5blank' ); echo single_tag_title('', false); ?></h2>
							
				<?php get_template_part('loop'); ?>
			</div>
			
			<div class="row indented-container">
		
				<h5 class="tag-cloud-heading">Explore Tags:</h5> 
				<?php wp_tag_cloud('format=list'); ?></h5>
			
			</div>
			
			
			
			<div class="row pagination-container">
 
				<?php get_template_part('pagination'); ?>
				
			</div>

				
		</div>
		
	</main>


<?php get_footer(); ?>
