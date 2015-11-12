<?php

// Custom taxonomies


/*
// Example: Themes
function ct_theme() {

	$labels = array(
		'name'                       => _x( 'Themes', 'Themes', 'text_domain' ),
		'singular_name'              => _x( 'Theme', 'Theme', 'text_domain' ),
		'menu_name'                  => __( 'Themes', 'text_domain' ),
		'all_items'                  => __( 'All themes', 'text_domain' ),
		'parent_item'                => __( 'Parent theme', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent theme:', 'text_domain' ),
		'new_item_name'              => __( 'New theme Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New theme', 'text_domain' ),
		'edit_item'                  => __( 'Edit theme', 'text_domain' ),
		'update_item'                => __( 'Update theme', 'text_domain' ),
		'view_item'                  => __( 'View theme', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate themes with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove themes', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular themes', 'text_domain' ),
		'search_items'               => __( 'Search themes', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
	);

	$args = array(
		'labels'                     => $labels,
		'capabilities' => array(
			'manage_terms' => '',
			'edit_terms' => '',
			'delete_terms' => '',
			'assign_terms' => 'edit_posts'
		),	// defines the control over the taxonomy. Recommended to use ACF custom taxonomy though.
		'hierarchical'               => true, // On = Checkboxes, Off = List
		'public'                     => true
	);

	register_taxonomy( 'theme', array( 'custom-post-type-slug-1', 'custom-post-type-slug-2' ), $args );
}
*/