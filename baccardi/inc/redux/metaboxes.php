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


	return $metaboxes;
  }
  add_action("redux/metaboxes/{$redux_opt_name}/boxes", 'redux_add_metaboxes');
endif;

