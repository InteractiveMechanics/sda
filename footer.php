			<!-- footer -->
			<footer>
			
				 <!--  <div class="subfooter"> -->
    <div class="container">
        <div class="row subfooter subfooter-flex-container" style="background-image:url('<?php the_field("subfooter_image", "option"); ?>');">
	     	
		 		<h4 class="subfooter-text"><?php the_field('subfooter_slogan', 'option'); ?></h4>
		 		<div class="subfooter-btn-container">
		 			<a href="<?php the_field('button_1_link', 'option'); ?>" role="button" class="subfooter-btn hidden-md hidden-sm hidden-xs"><?php the_field('button_1_text', 'option'); ?><span class="subfooter-arrow"></span></a>
		 			<a href="https://surfacedesign.z2systems.com/np/clients/surfacedesign/membershipJoin.jsp" role="button" class="subfooter-btn visible-md visible-sm visible-xs">Join SDA<span class="subfooter-arrow"></span></a>
		 			<a href="<?php the_field('button_2_link', 'option'); ?>" role="button" class="subfooter-btn hidden-md hidden-sm hidden-xs"><?php the_field('button_2_text', 'option'); ?><span class="subfooter-arrow"></span></a>
          		</div>
	     	
        </div>
    </div>
   <!--  </div> -->
    
    <!-- <div class="footer-main"> -->
      <div class="container">
        <div class="row footer-main">

          <div class="col-sm-12 col-md-4 footer-logo-section">
            <div class="col-md-4 col-sm-2 float-left">
              <a href="index.html">
                <img src="<?php printThemePath(); ?>/img/sda_logo.svg" alt="Surface Design Association logo" class="footer-logo">
              </a>
            </div>
            <div class="col-sm-10 col-md-8 footer-logo-text-container">
              <h4 class="footer-logo-text">Surface Design Association</h4>
              <p class="copyright">Copyright &copy; 2016. All images and information copyright their respective artistic and organization members.</p>
              <h5><a href="<?php the_field('terms_and_conditions', 'option'); ?>" class="footer-link">Terms &amp; Conditions</a></h5>
              <h5><a href="<?php the_field('privacy_policy', 'option'); ?>" class="footer-link">Privacy Policy</a></h5>
              <h5><a href="<?php the_field('contact_sda', 'option'); ?>" class="footer-link">Contact SDA</a></h5>
            </div>
          </div>
          <div class="col-sm-8 footer-sponsor-section hidden-xs hidden-sm">
            <h4 class="sponsor-heading">Our Partners &amp; Sponsors</h4>
            <div class="sponsor-block-container">
	            
	            <!-- ACF REPEATER STARTS -->
	            <?php if ( have_rows('sponsor_ad', 'option') ): ?>
					<?php while ( have_rows('sponsor_ad', 'option') ): the_row(); 
						$ad_image = get_sub_field('ad_image','option');

					?>
					
						<div class="sponsor-block" style="background-image: url('<?php echo $ad_image; ?>')"></div>
				
					<?php endwhile; ?>
				<?php endif; ?>
     
            </div>
          </div> <!-- /.footer-sponsor-section -->
        
        </div>
      </div>
    <!-- </div> --> <!-- /.footer-main -->




				
			</footer>
			<!-- /footer -->

			<?php wp_footer(); ?>
		
			<!-- scripts -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		  <script src="https://npmcdn.com/masonry-layout@4.0/dist/masonry.pkgd.min.js"></script>
		  <script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script>
		  <script src="https://npmcdn.com/isotope-layout@3.0/dist/isotope.pkgd.min.js"></script>
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
		  <script src="<?php printThemePath(); ?>/js/twitterFetcher.js"></script>
		  <script src="<?php printThemePath(); ?>/js/twitter-feed.js"></script>
		  <script src="<?php printThemePath(); ?>/js/lib/lightgallery/lightgallery-all.min.js"></script>
		  <script type="text/javascript" src="<?php printThemePath(); ?>/js/instafeed.min.js"></script>
		  <script src="<?php printThemePath(); ?>/js/main.js"></script>

	</body>
</html>
