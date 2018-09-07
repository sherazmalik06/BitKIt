<?php
/*
 Plugin Name: B Plugin
 Plugin URI: http://bitbytes.io
 Description: Plugin with auto-updates from external URL/Repository using Github
 Author: BitBytes
 Version: 1.0
 */

// Load the auto-update class
add_action( 'init', 'activate' );
function activate()
{

	$plugin_current_version = '1.0';
	$plugin_remote_path = 'https://github.com/sherazmalik06/BitKIt/blob/master/plugins.json';
	$plugin_slug = plugin_basename( __FILE__ );
	$license_user = 'user';
	$license_key = 'abcd';
	//new WP_AutoUpdate ( $plugin_current_version, $plugin_remote_path, $plugin_slug, $license_user, $license_key );
}