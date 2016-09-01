<?php 
/**
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 *
 * @package WordPress
 * @subpackage Bacardi theme
 * @since Bacardi theme 1.0
 */

if(!defined('THEME_OPT')){
	define('THEME_OPT', 'bacardi');
}

/*includes*/

if(file_exists(get_template_directory().'/inc/theme_supports.php'))
	require_once get_template_directory().'/inc/theme_supports.php';

if(file_exists(get_template_directory().'/inc/redux/loader.php'))
	require_once get_template_directory().'/inc/redux/loader.php';

function bc_load_scripts(){

	
	wp_dequeue_script( 'select2-js' );
	wp_deregister_script("select2-js");

	wp_register_script('bc-bootstrap', get_template_directory_uri().'/js/lib/bootstrap.min.js', array('jquery'), time(), true);
	wp_enqueue_script('bc-bootstrap');
	
	wp_enqueue_style('style', get_template_directory_uri().'/css/style.min.css', array(), time(), false);

}

add_action('wp_enqueue_scripts', 'bc_load_scripts');

function bc_load_admin_scripts(){

	wp_dequeue_style('select2-css');
	wp_dequeue_script( 'select2-js' );
	wp_deregister_script("select2-js");
	wp_register_script('tinymce-redux-options', includes_url()."js/tinymce/tinymce.min.js", array('jquery'), time());
	wp_register_script('select2-js',  "//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js", array('jquery'), time());
	// wp_register_script('admin_select_ajax', get_stylesheet_directory_uri()."/js/admin.js", array('jquery', 'redux-select2-ajax'));

}

add_action('admin_enqueue_scripts', 'bc_load_admin_scripts');


if(!function_exists('bc_admin_options_script')){
	
	function bc_admin_options_script(){

		wp_dequeue_style('select2-css');
		wp_enqueue_script('select2-js');
		wp_enqueue_script('tinymce-redux-options');
		// wp_enqueue_script('redux-select2-ajax');
		// wp_enqueue_script('admin_select_ajax');
		wp_enqueue_style('select2_v4', '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css');

	}

	add_action("admin_print_scripts-toplevel_page_theme_options", 'bc_admin_options_script');
}

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
