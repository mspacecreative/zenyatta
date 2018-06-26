<?php
/*
 * Plugin Name: Zen Forward FAQs
 * Plugin URI: http://mspacecreative.com
 * Description: Accordion style menu, slides up and down
 * Version: 1.0
 * Author: Matt Cyr
 * Author URI: http://mspacecreative.com
 */
 
 function faqs() {
     ob_start();
     	include(plugin_dir_path( __FILE__ ) . 'includes/faqs_layout.php');
     return ob_get_clean();
 }
 
add_shortcode( 'faqs', 'faqs' );