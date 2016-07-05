<?php get_header(); ?>

	


	<main role="main">
		<!-- section -->
		
		<div class="jumbotron-container clearfix">
	    <div class="container">
	      <div class="row jumbotron about-jumbotron" style="background-image:url('<?php the_field("search_results_cover_image", "option"); ?>');">
	      </div>
	    </div>
	  </div> <!-- /jumbotron-container -->
    
	  <section class="page-heading-section">
	    <div class="container">
	      <div class="row">
	        <div class="col-sm-9 indented-container">
	          <h2 class="section-heading"><?php the_field('search_results_page_heading', 'option'); ?></h2>
	          <p class="page-heading-text"><?php the_field('search_results_page_description', 'option'); ?></p>
	        </div>
	      </div>
	    </div>
	  </section>
	
	

		
		
		<section class="history-section">
			<div class="container">
				<div class="row indented-container">

					<h2><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h2>
		
					<?php get_template_part('loop'); ?>
				</div>
				<div class='row pagination-container'>
						<?php wp_pagenavi(); ?>
					</div>
				</div>
			</div>
			
			
			
			
			
		
		</section>

	</main>



<?php get_footer(); ?>
