<?php
/** Step 2 (from text above). */
add_action( 'wp_enqueue_scripts', 'load_dashicons_front_end' );
function load_dashicons_front_end() {
  wp_enqueue_style( 'dashicons' );
}
add_action( 'admin_menu', 'sp_code_option_admin' );
function sp_code_option_admin() {
  $mslug="sp_code_home_slug";
  // add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
  add_menu_page(
        __( 'Code home', 'textdomain' ),
        __( 'Code Home','textdomain' ),
        'manage_options',
        $mslug,
        'sp_code_option_home',
        'dashicons-admin-settings',
        3
  );
  add_submenu_page( $mslug, 'Demo Content', 'Demo Content','manage_options','sp_code_demo_slug', 'sp_code_demo_content');

}

function sp_code_option_home() {
   //use require 
     echo 'Option Page';
}

function sp_code_demo_content() {
   //use require 
     echo 'Demo Content';
}
