<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Baccardi theme
 * @since Baccardi theme 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header id="bc_header">
    
    <!-- ******************* The Navbar Area ******************* -->
    <div class="nav-top">
        <div class="container">
            <nav class="navbar ">
			  	<div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    	<div class="navbar-header">
				      	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#primary-menu" aria-expanded="false">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
				      	</button>
				     	<a class="navbar-brand logo" style="background-image: url(<?=get_template_directory_uri()?>/bacardi-logo.png)" href="<?=home_url()?>">
				     	 
				     	</a>
				    </div>

				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="primary-menu">
				      <?php wp_nav_menu(
			                            array(
			                                'theme_location' => 'primary',
			                                'menu_class' => 'cat-menu nav navbar-nav',
			                                'fallback_cb' => '',
			                                'desc_depth' => 1,				                                
			                                // 'walker' => new fastpaleo_walker()
			                            )
				                       ); ?>
				    </div><!-- /.navbar-collapse -->
			  	</div><!-- /.container-fluid -->
			</nav>
                       
        </div>
    </div>
   
</header>