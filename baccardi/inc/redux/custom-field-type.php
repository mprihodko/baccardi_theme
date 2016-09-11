<?php 
/**
 *  
 *
 *  Add custom field types in redux
 *
 * @package Bacardi theme 
 */


if(!function_exists('bc_add_custom_redux_field')){

	function bc_add_custom_redux_field_number(){
		return __DIR__.'inc/redux/ReduxFramework/ReduxCore/inc/fields/number';
	}

	apply_filters('redux/'.THEME_OPT.'/field/class/number', 'bc_add_custom_redux_field_number', 'number');

}


if(!function_exists('bc_add_custom_redux_field')){

	function bc_add_custom_redux_field(){
		return __DIR__.'inc/redux/ReduxFramework/ReduxCore/inc/fields/select_ajax';
	}

	apply_filters('redux/'.THEME_OPT.'/field/class/select_ajax', 'bc_add_custom_redux_field', 'select_ajax');

}

 



/* AJAX callback for custom redux field */
if(!function_exists('_bc_redux_load_data')){

	add_action("wp_ajax__bc_redux_load_data", '_bc_redux_load_data');
	add_action("wp_ajax_nopriv_bc_redux_load_data", '_bc_redux_load_data'); 

	function _bc_redux_load_data(){

		global $wpdb;

		$post_type = $_GET['type'];
		// if(isset($_GET['post']))
		// 	$post_type = $_GET['type'];
		$query = $wpdb->get_results("SELECT `ID`, `post_title` FROM ".$wpdb->posts." WHERE `post_type`='".$post_type."' AND `post_title` LIKE '".$_GET['q']."%' LIMIT 0, 20");
		$data = array();
		if(is_array($query)){
			foreach ($query as $key => $value) {
				$data[$key]['id']=$value->ID;
				$data[$key]['text']=$value->post_title;

			}
		}
		echo json_encode($data);
		die;
	}

}