<?php

/**
 * Se activa cuando el plugin va a ser desinstalado
 *
 * @link       https://jontmarz.netlify.app
 * @since      1.0.0
 *
 * @package    Jetcode
 */

 if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}


global $wpdb;
$table_name = $wpdb->prefix . 'jetcode-plugin';
$sql = "DROP TABLE IF EXISTS $table_name";
$wpdb->query($sql);
