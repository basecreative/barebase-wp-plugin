<?php

// Custom post types

/*
// Example: Resources
function cpt_resource() {

    $labels = array( 
        'name' => _x( 'Resources', 'resource' ),
        'singular_name' => _x( 'Resource', 'resource' ),
        'add_new' => _x( 'Add new', 'resource' ),
        'add_new_item' => _x( 'Add new resource', 'resource' ),
        'edit_item' => _x( 'Edit resource', 'resource' ),
        'new_item' => _x( 'New resource', 'resource' ),
        'view_item' => _x( 'View resource', 'resource' ),
        'search_items' => _x( 'Search resources', 'resource' ),
        'not_found' => _x( 'No resources found', 'resource' ),
        'not_found_in_trash' => _x( 'No resources found in Trash', 'resource' ),
        'parent_item_colon' => _x( 'Parent resource:', 'resource' ),
        'menu_name' => _x( 'Resources', 'resource' ),
    );

    $args = array( 
        'labels' => $labels,
	    'menu_icon' => 'dashicons-layout', // Pick an icon from https://developer.wordpress.org/resource/dashicons/
        'hierarchical' => false,
        'description' => 'Different resources. For example text, video, pdf, podcast and webinar.',
        'supports' => array( 'title', 'editor' ),
        'taxonomies' => array( 'theme', 'topic', 'type' ), // Related taxonomies
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'resource', $args );
}
*/