<?php get_header(); ?>


	<main class="single-post-page">

	<?php 
		
		$cover_image = get_field('cover_image');
	?>
	
	

    
	<?php while ( have_posts() ) : the_post(); ?>
	
		<div class="jumbotron-container clearfix">
      		<div class="container">
        		<div class="row jumbotron blog-jumbotron" style="background-image: url('<?php echo $cover_image; ?>');">
        		</div>
      		</div>
    	</div> <!-- /jumbotron -->

			<?php get_template_part('content', get_post_format()); ?>
			
			
			<?php comments_template(); ?>
			
	
			 <section class="related-articles">
			 	<div class="container">
			 		<div class="row indented-container">
			 			<!--<h2>Related Articles</h2> -->
			 			
							<?php
							//for use in the loop, list 5 post titles related to first tag on current post
							$tags = wp_get_post_tags($post->ID);
							if ($tags) {
							echo '<h2 class="related-articles-heading">Related Blog Articles</h2><ul class="related-articles-list">';
							$first_tag = $tags[0]->term_id;
							$first_tag_name = $tags[0]->name;
							$args=array(
							'tag__in' => array($first_tag),
							'post__not_in' => array($post->ID),
							'posts_per_page'=>3,
							'ignore_sticky_posts'=>1 // 'caller_get_posts'
							);
							$my_query = new WP_Query($args);
							if( $my_query->have_posts() ) {
							while ($my_query->have_posts()) : $my_query->the_post(); ?>
							<li class="single-related-article">
								<?php 
								if ( has_post_thumbnail() && !empty( has_post_thumbnail()) ) {
								$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), thumbnail, false, '' );
								?>
								<a href="<?php the_permalink() ?>" class="related-posts-link" rel="bookmark"  title="Permanent Link to <?php the_title_attribute(); ?>" ><div class="related-articles-thumbnail" style="background-image: url('<?php echo $src[0]; ?>')"></div>
								<?php 																
								
								} else {
								?>
								<a href="<?php the_permalink() ?>" class="related-posts-link" rel="bookmark"  title="Permanent Link to <?php the_title_attribute(); ?>" >
								<?php 	
								echo '<div class="no-thumbnail"><p class="no-thumbnail-msg">No Thumbnail Available</p></div>';
								}
								?>
								
								<div class="related-posts-overlay">
									<div class="related-posts-title-container">
										<h5 class="related-posts-tag"><?php echo $first_tag_name; ?></h5>
										<p class="related-posts-title"><?php the_title(); ?></p>
									</div>
								</div>
							</a>
							</li>
							
							<?php
							endwhile;
							} else {
								echo '<h3>No related blog articles yet.</h3>';
							}
							wp_reset_query();
							}
							?>

			 		</div>
	   			</div>
    		</section>

			
			
	<?php endwhile; ?>
	</main>
	
<?php get_footer(); ?>
