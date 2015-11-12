<?php

// Functions used throught the theme

/**
 * Improves the WordPress caption shortcode with HTML5 figure & figcaption, microdata & wai-aria attributes
 *
 * Author: @joostkiens
 * Licensed under the MIT license
 *
 * @param  string $val     Empty
 * @param  array  $attr    Shortcode attributes
 * @param  string $content Shortcode content
 * @return string          Shortcode output
 */
function my_img_caption_shortcode_filter( $val, $attr, $content = null ) {
  extract( shortcode_atts( array(
  	'id'      => '',
		'align'   => 'aligncenter',
		'width'   => '',
		'caption' => ''
	), $attr ) );
	
	// No caption, no dice...
	if ( 1 > (int) $width || empty( $caption ) )
		return $val;
 
	if ( $id )
		$id = esc_attr( $id );
     
	// Add itemprop="contentURL" to image - Ugly hack
	$content = str_replace('<img', '<img itemprop="contentURL"', $content);
	return '<figure id="' . $id . '" aria-describedby="figcaption_' . $id . '" class="wp-caption ' . esc_attr($align) . '" itemscope itemtype="http://schema.org/ImageObject" style="width: ' . (0 + (int) $width) . 'px">' . do_shortcode( $content ) . '<figcaption id="figcaption_'. $id . '" class="wp-caption-text" itemprop="description">' . $caption . '</figcaption></figure>';
}
add_filter( 'img_caption_shortcode', 'my_img_caption_shortcode_filter', 10, 3 );


// Customise what shows on the sidebar
function customise_sidebar() { 
	// Custom hide posts and stuff
	//remove_menu_page( 'index.php' ); // Dashboard
	//remove_menu_page('edit.php'); // Posts
	//remove_menu_page( 'edit-comments.php' ); //Comments

	// Hide stuff for specific roles
	if(current_user_can('role-slug')) {
        // remove_menu_page( 'edit.php?post_type=custom-post-type-slug' );
	}

	// Remove custom metaboxes for taxonomies (do this if using ACF taxonomy field, one per taxonomy and CPT)
	//remove_meta_box( 'custom-taxonomy-slugdiv', 'custom-post-type-slug', 'side' );   
} 
add_action('admin_menu', 'customise_sidebar');


// Customise dashboard
function customise_dashboard() {
	// Hide all this, mainly if not using posts
	// remove_meta_box('dashboard_activity', 'dashboard', 'normal');  
    // remove_meta_box('dashboard_quick_press', 'dashboard', 'core');  
    // remove_meta_box('dashboard_recent_drafts', 'dashboard', 'core');  
	// remove_meta_box('dashboard_recent_comments', 'dashboard', 'core'); 
}
add_action('wp_dashboard_setup', 'customise_dashboard');

