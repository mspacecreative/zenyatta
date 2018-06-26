<?php
/*
 * Plugin Name: Press Releases
 * Plugin URI: http://mspacecreative.com
 * Description: Show a list of press releases
 * Version: 1.0
 * Author: Matt Cyr
 * Author URI: http://mspacecreative.com
 */
 
 function press_releases() {
 	ob_start();
 		include(plugin_dir_path( __FILE__ ) . 'includes/press_release.php');
 	return ob_get_clean();
 }
 
 add_shortcode( 'press_releases', 'press_releases' );