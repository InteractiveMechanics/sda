<?php get_header(); ?>

<?php 
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>


	<main>
		<!-- section -->
		
		<div class="jumbotron-container clearfix">
			<div class="container">
				<div class="row jumbotron about-jumbotron">
      			</div>
    		</div>
  		</div> <!-- /jumbotron-container -->
    
  		<section class="page-heading-section">
		    <div class="container">
		      	<div class="row">
		        	<div class="col-sm-9 indented-container">
						<h1 class="section-heading"><?php echo get_the_author(); ?></h1>
		        	</div>
		      	</div>
		    </div>
	 	</section>

		<section class="author-bio-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 author-container-left">
					<?php if ( get_the_author_meta('description')): ?> 
						<?php echo wpautop( get_the_author_meta('description') ); ?>			
					<?php else : ?>
						<p><?php _e( 'No biography available for this member', 'sda_theme' ); ?></p>
					<?php endif; ?>

					
				</div>
				<div class="col-sm-4 author-container-right">
			
					<?php if ( get_the_author_meta('user_email')) : ?>
						
						<?php echo get_avatar(get_the_author_meta('user_email'), 350); ?>
						<a href="<?php get_the_author_meta('user_url'); ?>">
							<h5 class="author-url">Visit Website</h5>
						</a>
						
					<?php endif; ?>
			
				</div>
			</div>
		</div>
		</section>
		
		<section class="author-gallery-section">
		<div class="container">
			<div class="row indented-container">
				<div class="artwork-container">
					<?php 
						$args = array( 'post_type' => 'sda_member_image', 'posts_per_page' => 10 );
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();
						  get_template_part('content-member_image', get_post_format()); 
						endwhile;
					?>
				</div>
			</div>
		</div>

	</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
