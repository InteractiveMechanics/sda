<?php get_header(); ?>




	<main role="main" class="error-page">
		
		
		
		
		<!-- section -->
		
			
			<div class="container">
				<div class="row indented-container">
					<div class="col-sm-9">

				<!-- article -->
				
						<?php
							$requery = $wpdb->get_results($wp_query->request);
							
							if(count($requery) == 1 && $requery[0]->post_status == 'private'){ ?>
							    <!--we have a single post and it is private -->
							      
							    <h1>Surface Design Association</h1>
							    <h2>Digital Journal</h2>
							    	
							    <div class="error-page-message">
											
											<h3>Access to the Digital Journal is a benefit of SDA Membership.</h3>
								</div>
							    
                                http://www.surfacedesign.org/wp-login.php?redirect_to= http%3A%2F%2Fwww.surfacedesign.org%2Fwp-admin%2F&reauth=1

							    <p>
								    <a href="https://www.z2systems.com/np/oauth/auth?response_type=code&client_id=BqHB5N7Py0Sd7fxglMDRi%2FEkSR%2BS4Oe5CixTEBlNalVvrjXqb1HoEFMVoNvxN%2Bwtr6zCkfnU%2FZ%2FXJJmUe4kcpw%3D%3D&redirect_uri=http%3A%2F%2Fwww.surfacedesign.org%2Fwp-login.php?redirect_to=http%3A%2F%2Fwww.surfacedesign.org%2Fjournal%2Fdigital-journal/"><?php _e( "SDA Member Login", 'sda_theme' ); ?></a>
							    </p>
							    
							    <p>
								    Not Yet An SDA Member? <a href="https://surfacedesign.z2systems.com/np/clients/surfacedesign/survey.jsp?surveyId=1&"><?php _e( "Join SDA today for access to the Digital Journal.", 'sda_theme' ); ?></a>
							    </p>
							    
							    
							    
							    
							    
							    
							<?php }else{ ?>
								<article id="post-404">
					
									<h1><?php _e( '404: Page not found', 'sda_theme' ); ?></h1>
										
									<div class="error-page-message">
											
											<h3>Oops!  We can't find the page you're looking for.</h3>
									</div>
										
									<p>
											<a href="<?php echo home_url(); ?>"><?php _e( "You might like to try going back to the home page.", 'sda_theme' ); ?></a>
									</p>
					
								</article>
								<!-- /article -->
								
							
							<?php } ?>
					</div>
				</div>
			</div>
	</main>


<?php get_footer(); ?>
