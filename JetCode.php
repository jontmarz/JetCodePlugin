<?php
/* 
*   Plugin Name: JetCode
*   Plugin URI: https://jontmarz.netlify.app/
*   Description: Custom features in this Website
*   Version: 1.0
*   Author: Jon Tmarz
*   Author URI: https://jontmarz.netlify.app/
*   License: GPL2
*/

if ( ! defined( 'WPINC' ) ) {
	die;
}
global $wpdb;

define( 'JT_REALPATH_BASENAME_PLUGIN', dirname( plugin_basename( __FILE__ ) ) . '/' );
define( 'JT_PLUGIN_DIR_PATH', plugin_dir_path( __FILE__ ) );
define( 'JT_PLUGIN_DIR_URL', plugin_dir_url( __FILE__ ) );
define( 'JT_TABLE', "{$wpdb->prefix}jetcode_data" );

// imports

// include JT_PLUGIN_DIR_PATH . '/includes/assets/';
// include JT_PLUGIN_DIR_PATH . '/includes/classes/';
// include JT_PLUGIN_DIR_PATH . '/includes/functions/';

// End imports

function enqueue_scripts() {
    $allowed_pages = [];

    if( isset($_GET['page']) && in_array($_GET['page'], $allowed_pages) ) :
        // wp_enqueue_style('my-admin_styles', JT_PLUGIN_DIR_URL . 'css/admin/main.css', array(), '1.0.0');
    endif;
	
    wp_enqueue_style('my-admin_styles', JT_PLUGIN_DIR_URL . 'css/admin/main.css', array(), '1.0.0');
}

add_action('admin_enqueue_scripts', 'enqueue_scripts');

function enqueue_scripts_pages() {
	$allowed_pages = [];
	
    /* if ( is_page($allowed_pages) ) :
        wp_register_script('slick-script', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '1.8.1', true);
        wp_enqueue_script('slick-script');
    endif; */
}

add_action('wp_enqueue_scripts', 'enqueue_scripts_pages');