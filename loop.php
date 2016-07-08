<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<div class="blog-loop">
	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<!-- post thumbnail -->
		
		
			<div class="col-sm-2 no-left-padding">
				
				
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="loop-link">
					<?php 
								if ( has_post_thumbnail() ) {	
								the_post_thumbnail(array(150, 150));
								
								} else {
								echo '<div class="no-thumbnail-loop"><p class="no-thumbnail-msg">No Thumbnail Available</p></div>';
								}
					?>
				
				</a>
			</div>
		
		
		<!-- /post thumbnail -->

		<!-- post title -->
		<div class="col-sm-8 loop-body">
			<h3 class="loop-title">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h3>
			<!-- /post title -->
	
			<!-- post details -->
			<h5>
				<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
				<span class='blog-byline-divider'> / </span>
				<span class="author"><?php _e( '', '' ); ?> <?php the_author_posts_link(); ?></span>
			</h5>
			<!-- /post details -->
			
	
			<?php the_excerpt(); ?>
			<a href="<?php the_permalink(); ?>" class="read-more"> Read More &raquo;</a></p>
		</div>
	</article>
	</div> <!-- /blog-loop -->
	
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h3 class="text-muted"><?php _e( 'Sorry, nothing to display.', '' ); ?></h3>
	</article>
	<!-- /article -->

<?php endif; ?>
