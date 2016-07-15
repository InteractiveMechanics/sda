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
	    'standardFields' => array('First Name', 'Last Name', 'City', 'State', 'Province', 'Country', 'URL', 'Twitter Page', 'Facebook Page', 'Account Login Name', 'Membership Expiration Date'),
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

		<section class="author-bio-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 author-container-left">
					<p><?php echo $curauth->user_description; ?><p>

					
				</div>
				<div class="col-sm-4 author-container-right">
                    <?php $authordata=get_userdata(get_query_var( 'author' )); if(function_exists('get_avatar')) { echo get_avatar( get_the_author_id(), 70, "#646464" ); } ?>

					<?php if ( get_the_author_meta('user_email')) : ?>
						
						<?php echo get_avatar(get_the_author_meta('user_email'), 350); ?>

                    <?php endif; ?>
                    <?php if ($result['searchResults'][0]['URL']) : ?>

						<a href="<?php echo $result['searchResults'][0]['URL']; ?>">
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
						
						$args = array( 
							'post_type' => 'sda_member_image', 
							'posts_per_page' => 7,
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
