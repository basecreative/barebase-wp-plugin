<?php

// Settings for ADEPT plugin
$settings = new StdClass();

// Set on TRUE if making changes to the configuration
$settings->dev = false;

$settings->acf->save = false; // Save every change made on ACF into this plugin
$settings->acf->load = true; // Load every ACF in this plugin into the system
$settings->acf->show_admin = false; // Set true when changing fields

// If developing, this must be ON
if($settings->dev) {
	$settings->acf->show_admin = true;
	$settings->acf->save = true;
}