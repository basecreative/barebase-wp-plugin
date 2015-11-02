<?php
/*
Plugin Name: ADEPT plugin
Description: Site specific code ADEPT - Queen Mary's University
Version: 1.0
Author: Base Creative
Author URI: http://basecreative.co.uk
*/

add_action( 'init', 'barebase_wp_plugin_init' );


include_once('lib/settings.php');
include_once('lib/functions.php');
include_once('lib/custom-posts.php');
include_once('lib/custom-taxonomies.php');

include_once('lib/acf.php');


// Launched on init
function barebase_wp_plugin_init() {
	// Here's where the magic happens
}