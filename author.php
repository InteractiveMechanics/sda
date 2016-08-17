<?php 
    require_once('neon.php');
    get_header(); 
	
    $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
	$neon = new Neon();
	
	$keys = array(
	  'orgId'=>'surfacedesign', 
	  'apiKey'=>'494f48e09c0f7818cc1511b7cefdf813'
	); 
	$neon->login($keys);
	
	$search = array( 
	  'method' => 'account/listAccounts',
	  'criteria' => array(
		  array('Account Login Name', 'EQUAL', $author_name)
	  ),
	  'columns' => array(
	    'standardFields' => array('Account ID', 'First Name', 'Last Name', 'City', 'State', 'Province', 'Country', 'URL', 'Twitter Page', 'Facebook Page', 'Account Login Name', 'Membership Expiration Date'),
        'customFields' => array(125),
	  ),
	  'page' => array(
	    'currentPage' => 1,
	    'pageSize' => 20,
	    'sortColumn' => 'Last Name',
	    'sortDirection' => 'ASC',
	  ),
    );
        
    $result = $neon->search($search);
    $neon->go( array( 'method' => 'common/logout' ) );

    function checkRemoteFile($url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        // don't download content
        curl_setopt($ch, CURLOPT_NOBODY, 1);
        curl_setopt($ch, CURLOPT_FAILONERROR, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        if(curl_exec($ch)!==FALSE) {
            return true;
        } else {
            return false;
        }
        curl_close($ch);
    }
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
						<h1 class="section-heading"><?php echo $result['searchResults'][0]['First Name'] . ' ' . $result['searchResults'][0]['Last Name']; ?></h1>
		        	</div>
		      	</div>
		    </div>
	 	</section>

        <?php if ($curauth->user_description): ?>
		<section class="author-bio-section">
		<div class="container">
			<div class="row">
                
    				<div class="col-sm-6 author-container-left">
    					<p><?php echo $curauth->user_description; ?><p>
    				</div>
    				<div class="col-sm-4 author-container-right">
                        <?php 
                            $iurl = 'https://surfacedesign.z2systems.com/neon/resource/surfacedesign/images/account/' . $result['searchResults'][0]['Account ID'] . '/0_large.jpg';
                            
                            if (checkRemoteFile($iurl)) {
                                echo '<img src="' . $iurl . '" />';
                            }
                        ?>
    
                        <?php if ($result['searchResults'][0]['URL']) : ?>
    
    						<a href="//<?php echo $result['searchResults'][0]['URL']; ?>">
    							<h5 class="author-url">Visit Website</h5>
    						</a>
    						
    					<?php endif; ?>
    			
    				</div>
                
			</div>
		</div>
		</section>
        <?php endif; ?>
		
		<section class="author-gallery-section">
		<div class="container">
			<div class="row indented-container">
				<div class="artwork-container">
					<?php 
						
						$args = array( 
							'post_type' => array( 'sda_member_image', 'sda_premium_image' ), 
							'posts_per_page' => 10,
							'author' => $curauth->ID,
						);
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
