<?php
/**
 * Plugin Name: Demo plugin
 * Plugin URI: https://github.com/waved-nl/demo-plugin-wp
 * Description: This is a demo plugin
 * Version: 0.2.0
 * Author: Waved
 * Author URI: https://waved.nl
 * License: GPL2
 */

if( ! class_exists( 'Smashing_Updater' ) ){
	include_once( plugin_dir_path( __FILE__ ) . 'updater.php' );
}

// error_log test
error_log('test');

$updater = new Smashing_Updater( __FILE__ );
$updater->set_username( 'waved-nl' );
$updater->set_repository( 'demo-plugin-wp' );
$updater->initialize();