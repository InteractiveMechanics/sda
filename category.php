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
		
				<h2 class="tag-page-heading"><?php _e( 'Blog Post Tag: ', 'html5blank' ); echo single_cat_title(); ?></h2>
							
				<?php get_template_part('loop'); ?>
			</div>
			
			<div class="row indented-container">
		
				<h5 class="tag-cloud-heading">Explore Categories:</h5> 
				<?php $args = array(
					'title_li'           => __( '' ),
				); ?>

				
				<ul class="cat-list">
				<?php wp_list_categories($args); ?>
				</ul>
			
			</div>
			
			
			
			<div class="row pagination-container">
 
				<?php get_template_part('pagination'); ?>
				
			</div>

				
		</div>

		
	</main>


<?php get_footer(); ?>
