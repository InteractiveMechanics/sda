<?php get_header(); ?>




	<main role="main" class="error-page">
		
		
		
		
		<!-- section -->
		
			
			<div class="container">
				<div class="row indented-container">
					<div class="col-sm-9">

				<!-- article -->
						<article id="post-404">
			
								<h1><?php _e( '404: Page not found', 'html5blank' ); ?></h1>
								
								<div class="error-page-message">
									<h3>Oops!  We can't find the page you're looking for.</h3>
								</div>
								
								<p>
									<a href="<?php echo home_url(); ?>"><?php _e( "You might like to try going back to the home page.", 'sda_theme' ); ?></a>
								</p>
			
						</article>
						<!-- /article -->
					</div>
				</div>
			</div>
	</main>


<?php get_footer(); ?>
