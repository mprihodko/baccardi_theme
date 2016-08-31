<?php 
/**
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 *
 * @package WordPress
 * @subpackage Baccardi theme
 * @since Baccardi theme 1.0
 */

/*includes*/

if(file_exists(get_template_directory().'/inc/theme_supports.php'))
	require_once get_template_directory().'/inc/theme_supports.php';

function bc_load_scripts(){

	wp_register_script('bc-bootstrap', get_template_directory_uri().'/js/lib/bootstrap.min.js', array('jquery'), time(), true);
	wp_enqueue_script('bc-bootstrap');
	wp_enqueue_style('bc-bootstrap', get_template_directory_uri().'/css/style.min.css', array(), time(), false);
	wp_enqueue_style('style', get_template_directory_uri().'/css/style.min.css', array(), time(), false);

}

add_action('wp_enqueue_scripts', 'bc_load_scripts');





ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
