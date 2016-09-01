<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Bacardi theme
 * @since Bacardi theme 1.0
 */

global $bacardi;
$logo = (isset($bacardi['header_logo']['url'])? $bacardi['header_logo']['url'] : '');
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
	   <div class="nav-bottom">
	        <div class="container">
	            <nav class="navbar" role="navigation">
				  
				    <!-- Brand and toggle get grouped for better mobile display -->
				    	<div class="navbar-header">
					      	<a class="navbar-brand logo" style="background-image: url('<?=$logo?>'); <?=($logo)? 'text-indent: -9999em;' : ''?>" href="<?=home_url()?>">Bacardi</a>
			                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#primary-menu" aria-expanded="false">		                     
			                    <i class="fa fa-times" aria-hidden="true"></i>
			                </button>				      
					    </div>

					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse pull-right" id="primary-menu">
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
				  
				</nav>
	                       
	        </div>
	    </div>
	   
	</header>
	<div class="wrapper" id="wrapper-index">
	        
		<div id="content" class="container">

	        <div class="row">

	        	 <div id="primary" class="<?php if ( is_active_sidebar( 'sidebar-bacardi' ) ) : ?>col-md-9<?php else : ?>col-md-12<?php endif; ?> content-area">