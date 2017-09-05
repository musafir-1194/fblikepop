<?php
/*
Plugin Name: FB POP
Plugin URI: http://www.finagotechnologies.com/wordpress/plugins
Description: This is a light weighted plugin for fb pop up. 
Version: 1.0
Author: Sagar Panwar
Author URI: http://www.finagotechnologies.com/team/sagar
License: Free
*/

	register_activation_hook(__FILE__, 'fbpop_install');
	function fbpop_install(){
		global $wp_version;
		
		if( version_compare($wp_version, '3.5', '<') ){
			wp_die( 'This plugin requires Wordpress version 3.5 or higher.' );		
		}
	}	



	register_deactivation_hook(__FILE__, 'fbpop_deactivate()');
	function fbpop_deactivate(){
		
	}

?>
