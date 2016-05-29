<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<div class="blog-loop">
	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<!-- post thumbnail -->
		
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<div class="col-sm-4 no-left-padding">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(array(325, 325)); // Declare pixel size you need inside the array ?>
				</a>
			</div>
		<?php endif; ?>
		
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
				<span class="author"><?php _e( 'Published by', '' ); ?> <?php the_author_posts_link(); ?></span>
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
		<h2><?php _e( 'Sorry, nothing to display.', '' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
