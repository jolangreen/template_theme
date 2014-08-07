<?php
/*
Plugin Name: Mandatory Field
Plugin URI: http://wiki.geekwithme.com/mand_fields
Description: This is a plugin withch will help you to make few textbox mandatory like Meta tags or title 
Version: 1.6.2
Author: Ketan Mujumdar
Author URI: http://geekwithme.com
License: GPL2
*/

include_once('mandatory-plugin-option-page.php');
include_once('mandatory-plugin-admin.php');

//add_filter( 'wp_insert_post_data' , 'mand_fields');

add_action('publish_post', 'mand_fields');

add_action('admin_head-post.php', 'mand_plugin_notice');

add_action('admin_menu', 'mand_option_menu');

add_action('wp_ajax_check-fields', 'js_check');

wp_enqueue_script( 'ajax-script', plugins_url().'/mandatory-fields/js/mandatory_check.js', array('jquery'), 1.0 ); // jQuery will be included automaticall
//This will create a global variable for javascript ajax call
wp_localize_script( 'ajax-script', 'ajax_object', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) ); // setting ajaxurl




function mand_option_menu() {
	//create new top-level menu
	add_options_page('Mandatory Settings', 'Mandatory Settings', 'manage_options', 'mand_setting_option', 'mand_setting_option');
	//call register settings function
	add_action( 'admin_init', 'register_mand_settings' );
}


function register_mand_settings() {
	//register settings
	register_setting( 'mand-settings-group', 'element_1' );
	register_setting( 'mand-settings-group', 'element_2' );
	register_setting( 'mand-settings-group', 'element_3' );		
	register_setting( 'mand-settings-group', 'element_4' );
	register_setting( 'mand-settings-group', 'element_5' );	
	register_setting('mand-settings-group','check_featured_image');
	register_setting('mand-settings-group','mand_message_custom');
	register_setting('mand-settings-group','check_categories');
}


?>
