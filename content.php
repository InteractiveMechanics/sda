<article id="post-<?php the_ID(); ?>" class="post-entry">
	
    <div class="container clearfix single-post-heading">
      <div class="row indented-container">
        <h2 class="post-title"><?php the_title(); ?></h2>
        <h5 class="blog-byline"><span class="blog-author"></span><?php the_author(); ?><span class='blog-byline-divider'> / </span> <span class="blog-date"><?php the_date(); ?></span></h5>
      </div>
    </div>
    
    
    <div class="single-post-container">
    <div class="container">
      <div class="row indented-container-left">
        <div class="col-sm-10 single-post-body">
	        
	        
	        <?php the_content() ?>
	        
	        
	  	</div> <!-- /col-sm-9 -->
      </div> <!-- /row -->
      
       <div class="row indented-container-left">
        <div class="col-sm-9 tag-container">
	      <?php the_tags('<h5 class="tag-before">Tags: </h5><span class="single-tag">', ' </span>, <span class="single-tag">','</span>'); ?>
        </div>
      </div>
    </div> <!-- /single-post-container -->


    
          
 </article>