<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Surface_Design_Association_2016
 * @since SDA 2016 1.0
  */

get_header(); ?>


 	
 <main class="blog-page">
    <div class="jumbotron-container clearfix">
      <div class="container">
        <div class="row jumbotron blog-jumbotron" style="background-image: url('<?php the_field("cover_image", get_option("page_for_posts")); ?>');">
        </div>
      </div>
    </div> <!-- /jumbotron -->


		<?php if ( have_posts() ): ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part('content-blog', get_post_format()); ?>
			<?php endwhile; ?>
		<?php endif; ?>
	
	
	<!-- pagination goes here -->
	<?php if ( have_posts() ): ?>
	<div class="container">
      <div class='row pagination-container'>
	  	<?php wp_pagenavi(); ?>
	  </div>
    </div>
    <?php endif; ?>	

	


</main>



<?php get_footer(); ?>
