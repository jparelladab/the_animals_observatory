<?php
/* Bones Custom Post Type Example
This page walks you through creating
a custom post type and taxonomies. You
can edit this one or copy the following code
to create another one.

I put this in a separate file so as to
keep it organized. I find it easier to edit
and change things if they are concentrated
in their own file.

Developed by: Eddie Machado
URL: http://themble.com/bones/
*/

// Flush rewrite rules for custom post types
add_action( 'after_switch_theme', 'bones_flush_rewrite_rules' );

// Flush your rewrite rules
function bones_flush_rewrite_rules() {
	flush_rewrite_rules();
}

/**
 * Change post object labels
 */
function webtheanimalobservatory_post_object_label() {
	global $wp_post_types;

	$wp_post_types['post']->label = __( 'Product', 'theanimalobservatory' );

	$labels = &$wp_post_types['post']->labels;
	$labels->name = __( 'Products', 'theanimalobservatory' );
	$labels->singular_name = __( 'Product', 'theanimalobservatory' );
	$labels->add_new = _x( 'Add new', 'Product', 'theanimalobservatory' );
	$labels->add_new_item = __( 'Add New Product', 'theanimalobservatory' );
	$labels->edit_item = __( 'Edit Product', 'theanimalobservatory' );
	$labels->new_item = __( 'New Product', 'theanimalobservatory' );
	$labels->view_item = __( 'View Product', 'theanimalobservatory' );
	$labels->view_items = __( 'View Products', 'theanimalobservatory' );
	$labels->search_items = __( 'Search Products', 'theanimalobservatory' );
	$labels->menu_name = __( 'Products', 'theanimalobservatory' );
	$labels->items_list = __( 'Products lists', 'theanimalobservatory' );
	$labels->not_found = __( 'No Products found', 'theanimalobservatory' );
	$labels->not_found_in_trash = __( 'No Products found in Trash', 'theanimalobservatory' );
	$labels->all_items = __( 'All Products', 'theanimalobservatory' );
	$labels->name_admin_bar = __( 'Product', 'theanimalobservatory' );
}

add_action( 'init', 'webtheanimalobservatory_post_object_label' );



function revcon_change_cat_object() {
    global $wp_taxonomies;
    $labels = &$wp_taxonomies['category']->labels;
    $labels->name = 'Collections';
    $labels->singular_name = 'Collection';
    $labels->add_new = 'Add Collection';
    $labels->add_new_item = 'Add Collection';
    $labels->edit_item = 'Edit Collection';
    $labels->new_item = 'Collection';
    $labels->view_item = 'View Collection';
    $labels->search_items = 'Search Collections';
    $labels->not_found = 'No Collections found';
    $labels->not_found_in_trash = 'No Collections found in Trash';
    $labels->all_items = 'All Collections';
    $labels->menu_name = 'Collection';
    $labels->name_admin_bar = 'Collection';
}
add_action( 'init', 'revcon_change_cat_object' );

add_action( 'init', 'my_register_post_tags' );

function my_register_post_tags() {
    register_taxonomy( 'post_tag', array( 'tags' ) );
}


?>
