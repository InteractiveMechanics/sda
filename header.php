<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Surface_Design_Association_2016
 * @since SDA_2016 1.0
 */
 ?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">		
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title( '|', true, 'right' ); ?> Surface Design Association</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		
		
		<!-- stylesheets -->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css"/>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.css">
		 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css">
		<link rel="stylesheet" href="<?php printThemePath(); ?>/style.css">
		<link rel="stylesheet" href="<?php printThemePath(); ?>/css/main.css">
		
		<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
		<![endif]-->
		<?php wp_head(); ?>
		
	</head>
	<body> 
		<header>
			<nav class="navbar navbar-default">
			    <div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php printThemePath(); ?>/img/sda_logo.svg" alt="Surface Design Association logo"><h1 class="navbar-brand-text">Surface Design <br><span class="accented-text">Association</span></h1></a>
			    </div>


		    <!-- Collect the nav links, forms, and other content for toggling -->
		   
			<?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
				'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav navbar-right',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        	?>
        	
        	<?php
            wp_nav_menu( array(
                'menu'              => 'secondary',
                'theme_location'    => 'secondary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'nav navbar-nav navbar-right',
				'container_id'      => '',
                'menu_class'        => 'subnav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        	?>

        	
        	
		   
		  </div><!-- /.container-fluid -->
		  </nav>


		</header>
		<!-- /header -->
