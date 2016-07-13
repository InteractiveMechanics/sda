<article id="post-<?php the_ID(); ?>" class="post-entry">
	
    <section class="page-heading-section single-post">
	    
      <div class="container"> 
        <div class="row">
	        <div class="col-sm-8 indented-container-left">
	       <h2 class="blog-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
	       	<h5 class="blog-byline"><span class="blog-author"><?php the_author(); ?></span><span class='blog-byline-divider'> / </span>
            <span class="blog-date"></span><?php the_date(); ?></h5> 
	        </div>
        </div>
      </div>
      
      <div class="blog-body">
      	<div class="container">
        	<div class="row">
				<div class="col-sm-8 indented-container-left">
					<?php the_excerpt() ?>
					<a href="<?php the_permalink(); ?>" class="read-more"> Read More &raquo;</a></p>
				</div>
				
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="col-sm-2 indented-container-right blog-image">
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				    <?php the_post_thumbnail('thumbnail', array( 'class' => 'single-post-img' )); ?>
    				</a>
					</div>
				
				<?php endif; ?>
				
			</div>
      	</div>
      </div>
      
 </article>