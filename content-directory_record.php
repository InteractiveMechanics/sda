<?php
	$record_website = get_field('record_website');
	$record_name = get_field('record_name');
	$record_city = get_field('record_city');
	$record_state = get_field('record_state');
	$record_country = get_field('record_country');
	$record_media = get_field('record_media');
	
	
?>

<tr>
    <td><a href="<?php echo $record_website; ?>"><?php echo $record_name; ?></a></td>
    <td><?php echo $record_city; ?>, <?php echo $record_state; ?> <?php echo $record_country; ?></td>
               
    <!-- ACF NESTED SUBFIELD STARTS -->  
    <td>
	    
	    
	    <?php if ( have_rows('record_media') ): ?>
	        
	        <ul class="directory-special-field-list">
				
				<?php while( have_rows('record_media') ): the_row(); ?>    
	             
	            	<li class="directory-special-field"><?php the_sub_field('medium'); ?></li>
	            
	            <?php endwhile; ?>
	                
	        </ul>
	    
	    <?php endif; ?>
               
    </td>
    <!-- END ACF NESTED SUBFIELD -->
               
    
    <td>
	    
	    <ul class="social-list">
		    		    
		    <?php if ( get_field('twitter') ): ?>
                
                <li class="social-icon-container">   
                    <a href="https://twitter.com/<?php the_field('twitter'); ?>" class="social-link">
                    	
                    	<svg version="1.1" class="social-icon" id="twitter-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	                     viewBox="0 0 106 84.7" enable-background="new 0 0 106 84.7" xml:space="preserve">
	                      <path d="M98.5,12.9c-3.4,1.5-7,2.5-10.8,3c3.9-2.3,6.9-6,8.3-10.4c-3.6,2.2-7.7,3.7-12,4.6c-3.4-3.7-8.3-6-13.8-6
	                    c-10.4,0-18.9,8.5-18.9,18.9c0,1.5,0.2,2.9,0.5,4.3C36.1,26.5,22.2,19,12.9,7.5c-1.6,2.8-2.6,6-2.6,9.5c0,6.5,3.3,12.3,8.4,15.7
	                    c-3.1-0.1-6-0.9-8.5-2.4c0,0.1,0,0.2,0,0.2c0,9.1,6.5,16.8,15.1,18.5c-1.6,0.4-3.2,0.7-5,0.7c-1.2,0-2.4-0.1-3.6-0.3
	                    c2.4,7.5,9.4,13,17.6,13.1C28,67.6,19.9,70.6,11,70.6c-1.5,0-3-0.1-4.5-0.3c8.4,5.4,18.3,8.5,28.9,8.5c34.7,0,53.7-28.8,53.7-53.7
	                    c0-0.8,0-1.6-0.1-2.4C92.8,20,96,16.7,98.5,12.9z"/>
	                    
						</svg>
                    </a>
                
                </li>
            <?php endif; ?>
                    
			<?php if ( get_field('instagram') ): ?>
			                
                <li class="social-icon-container">
                    
                    <a href="https://www.instagram.com/<?php the_field('instagram'); ?>">
                        
                        <svg version="1.1" id="instagram-icon" class="social-icon"xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                        <path d="M76.3,50.5c0,14.4-11.6,26-26,26c-14.4,0-26-11.6-26-26c0-1.7,0.2-3.4,0.5-5H7.3V80c0,7.4,6,13.4,13.4,13.4h59.1
                        c7.4,0,13.4-6,13.4-13.4V45.5H75.8C76.1,47.1,76.3,48.8,76.3,50.5z M79.9,7.5H20.7c-7.4,0-13.4,6-13.4,13.4v14.6h21.8
                        c4.7-6.7,12.5-11,21.2-11c8.8,0,16.5,4.3,21.2,11h21.8V20.9C93.3,13.5,87.3,7.5,79.9,7.5z M86.4,24.1c0,1.3-1.1,2.4-2.4,2.4h-7.2
                        c-1.3,0-2.4-1.1-2.4-2.4v-7.2c0-1.3,1.1-2.4,2.4-2.4H84c1.3,0,2.4,1.1,2.4,2.4V24.1z M66.3,50.5c0-8.8-7.2-16-16-16
                        c-8.8,0-16,7.2-16,16s7.2,16,16,16C59.1,66.5,66.3,59.3,66.3,50.5z"/>
                        </svg>
                    </a>
                    
                </li>
                
			<?php endif; ?>
			
					
			<?php if ( get_field('facebook') ): ?>
                    
                <li class="social-icon-container">
                    <a href="https://www.facebook.com/<?php the_field('facebook'); ?>">
	                    
                    	<svg version="1.1" id="fb-icon" class="social-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" 						y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
						<path d="M75.2,21.1H60.9c-1.7,0-3.6,2.2-3.6,5.2v10.3h17.9v14.7H57.3v44.1H40.5V51.3H25.2V36.6h15.3V28c0-12.4,8.6-22.5,20.4-22.5
						h14.3V21.1z"/>
						</svg>

                   
                    </a>
                
                </li>
                   
			<?php endif; ?>
					
			<?php if ( get_field('pinterest') ): ?>
			
                <li class="social-icon-container">
                    
                 	<a href="https://www.pinterest.com/<?php the_field('pinterest'); ?>">
                        
                        <svg version="1.1" id="pinterest-icon" class="social-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 						x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
						<path d="M42.2,66.1c-2.6,13.8-5.8,27-15.3,33.9c-2.9-20.8,4.3-36.4,7.7-53c-5.7-9.6,0.7-29.1,12.8-24.3c14.9,5.9-12.9,35.9,5.8,39.6
						  c19.5,3.9,27.4-33.8,15.3-46C51-1.4,17.7,15.9,21.8,41.2c1,6.2,7.4,8.1,2.6,16.6c-11.2-2.5-14.5-11.3-14.1-23
						  C11,15.6,27.6,2.2,44.2,0.3C65.2-2,84.9,8,87.6,27.8c3.1,22.3-9.5,46.5-31.9,44.7C49.6,72.1,47,69,42.2,66.1z"/>
						</svg>
                        
                    </a>
                </li>
            
			<?php endif; ?>	
        
        </ul>
    
    </td>
            
</tr>


