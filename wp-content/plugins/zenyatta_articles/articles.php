<?php
/*
 * Plugin Name: Zen Forward Articles
 * Plugin URI: http://mspacecreative.com
 * Description: Accordion style menu, slides up and down
 * Version: 1.0
 * Author: Matt Cyr
 * Author URI: http://mspacecreative.com
 */
 
 function articles() {
     ob_start();
     	include(plugin_dir_path( __FILE__ ) . 'includes/articles_layout.php');
     return ob_get_clean();
 }
 
 function accordion_styles() {
 	wp_enqueue_style( 'accordioncss', plugin_dir_url( __FILE__ ) . 'css/accordion.css', array(), null );
 	wp_enqueue_style('accordioncss');
 	wp_enqueue_script( 'accordion-script', plugin_dir_url( __FILE__ ) . 'js/accordion.js', array( 'jquery' ), '1.0', true );
 	wp_enqueue_script('accordion-script');
 }
 
 add_shortcode( 'articles', 'articles' );
add_action( 'wp_enqueue_scripts', 'accordion_styles' );