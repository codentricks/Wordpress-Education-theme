<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_action( 'get_footer', 'load_styles' );
function load_styles() {
    wp_enqueue_style( 'style', get_stylesheet_uri(), false );
    wp_enqueue_style( 'bootstrap', SPWET_THEME_DIR."css/bootstrap.min.css", false );
    wp_enqueue_style( 'main', SPWET_THEME_DIR."css/custom.css", false );

}
//loading Js file in footer also
add_action('wp_enqueue_scripts','load_js');
function load_js(){
  
    wp_register_script( 'Jquery','https://code.jquery.com/jquery-3.2.1.slim.min.js','','', true );
    wp_register_script( 'Bootstrap', SPWET_THEME_DIR.'js/bootstrap.min.js','','', true );
    wp_register_script( 'Main', SPWET_THEME_DIR."js/main.js",'','', true );
 // register js files
    wp_enqueue_script( 'Jquery' );
    wp_enqueue_script( 'Bootstrap' );
    wp_enqueue_script( 'Main' );

}
