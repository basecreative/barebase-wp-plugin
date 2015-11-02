<?php

function my_acf_json_save_point( $path ) {
    // update path
    $path = plugin_dir_path( __FILE__ ).'/acf';
    
    // return
    return $path;
}

function my_acf_json_load_point( $paths ) {
    // remove original path (optional)
    unset($paths[0]);
    
    // append path
    $paths[] = plugin_dir_path( __FILE__ ).'/acf';
    
    // return
    return $paths;
}


// Advanced custom fields plugin configuration
if($settings->acf->save) add_filter('acf/settings/save_json', 'my_acf_json_save_point');
if($settings->acf->load) add_filter('acf/settings/load_json', 'my_acf_json_load_point');

// Show ACF in the admin area
if(!$settings->acf->show_admin) add_filter('acf/settings/show_admin', '__return_false');
