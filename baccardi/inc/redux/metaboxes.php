<?php

// INCLUDE THIS BEFORE you load your ReduxFramework object config file.


// You may replace $redux_opt_name with a string if you wish. If you do so, change loader.php
// as well as all the instances below.
$redux_opt_name = THEME_OPT;

if ( !function_exists( "redux_add_metaboxes" ) ):
	function redux_add_metaboxes($metaboxes) {
	
	$page_options = array();

	$metaSection = array(
		'title' => 'Enable Sidebar',
		'icon_class'    => 'icon-large',
		'icon'          => 'el-icon-list-alt',
		'fields' => array(
			array(
				'id'       => 'enable_sidebar',
			    'type'     => 'switch', 
			    'title'    => __('Enable Sidebar', 'bacardi'),				    
				'default'  => true
			),
		)
	);
	
	$page_options[] = $metaSection;

	$metaboxes[] = array(
		'id'            => 'page-options',
		'title'         => __( 'Page options', THEME_OPT ),
		'post_types'    => array( 'page' ),
		'position'      => 'normal', 
		'priority'      => 'high', 
		'sidebar'       => 0,  
		'sections'      => $page_options,
	);

	$post_options = array();

	$metaSection = array(
		'title' => 'Related Posts',
		'icon_class'    => 'icon-large',
		'icon'          => 'el-icon-list-alt',
		'fields' => array(
			array(
				'id'	=> 'related_posts',
				'type'	=> 'select_ajax',
				'data'	=> ('page'),
				'multi'	=> true,
				'title'	=> 'Related Posts'
			)		
		)
	);

	$post_options[] = $metaSection;

	$metaboxes[] = array(
		'id'            => 'post-options',
		'title'         => __( 'Related Posts', THEME_OPT ),
		'post_types'    => array( 'post' ),
		'position'      => 'normal', 
		'priority'      => 'high', 
		'sidebar'       => 0,  
		'sections'      => $post_options,
	);

	$page_title_options = array();

	$metaSection = array(
		'title' => 'Page Title Options',
		'icon_class'    => 'icon-large',
		'icon'          => 'el-icon-list-alt',
		'fields' => array(
			array(
				'id'       => 'enable_page_title',
			    'type'     => 'switch', 
			    'title'    => __('Enable Page Title', THEME_OPT),				    
				'default'  => true
			),
			array(
				'id'       => 'page_title_image',
			    'type'     => 'media', 
			    'title'    => __('Page Title Background', THEME_OPT)			 
			),
			array(
				'id'       => 'page_title_head',
			    'type'     => 'text', 
			    'class'	   => 'form-control',
			    'title'    => __('Page Title', THEME_OPT)			 
			),
			array(
			    'id'        => 'enable_overlay',
			    'type'      => 'color_rgba',
			    'title'     => 'Background Color Picker',
			    'subtitle'  => 'Set color and alpha channel',
			    'desc'      => 'The caption of this button may be changed to whatever you like!'
			)
		)
	);

	$page_title_options[] = $metaSection;

	$metaboxes[] = array(
		'id'            => 'page_title_options',
		'title'         => __( 'Page Title Options', THEME_OPT ),
		'post_types'    => array( 'post', 'page' ),
		'position'      => 'side', 
		'priority'      => 'low', 
		'sidebar'       => 0,  
		'sections'      => $page_title_options,
	);


	return $metaboxes;
  }
  add_action("redux/metaboxes/{$redux_opt_name}/boxes", 'redux_add_metaboxes');
endif;

