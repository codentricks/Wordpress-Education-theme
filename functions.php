<?php
/**
 * Worpdress Education Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package sp_worpdress_education_theme
 * @since 1.0.0
 */
 
 if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Define Constants
define( 'SPWET_THEME_VERSION', '1.0.0' );
define( 'SPWET_THEME_SETTINGS', 'Theme Settings' );
define( 'SPWET_THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'SPWET_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );

// includes file
require_once SPWET_THEME_DIR . 'core/loadfiles.php';
require_once SPWET_THEME_DIR . 'core/options.php';
require_once SPWET_THEME_DIR . 'templates/customizer/default.php';
