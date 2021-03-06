<?php
/**
 * Base Install Custom Post Type - Portfolio
 *
 * @package Base_Install
 */

/*
 * Custom post type for Portfolio Items
 */
function baseinstall_portfolio_post_type() {
// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Portfolio', 'Post Type General Name', 'baseinstall' ),
		'singular_name'       => _x( 'Portfolio', 'Post Type Singular Name', 'baseinstall' ),
		'menu_name'           => __( 'Portfolio', 'baseinstall' ),
		'parent_item_colon'   => __( 'Parent Portfolio Item', 'baseinstall' ),
		'all_items'           => __( 'All Portfolio Items', 'baseinstall' ),
		'view_item'           => __( 'View Portfolio Item', 'baseinstall' ),
		'add_new_item'        => __( 'Add New Portfolio Item', 'baseinstall' ),
		'add_new'             => __( 'Add New', 'baseinstall' ),
		'edit_item'           => __( 'Edit Portfolio Item', 'baseinstall' ),
		'update_item'         => __( 'Update Portfolio Item', 'baseinstall' ),
		'search_items'        => __( 'Search Portfolio Items', 'baseinstall' ),
		'not_found'           => __( 'Not Found', 'baseinstall' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'baseinstall' ),
	);

	$args = array(
		'label'               => __( 'portfolio', 'baseinstall' ),
		'description'         => __( 'Listing of Portfolio', 'baseinstall' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'taxonomies'		  => array( 'types', 'category', 'post_tag'),
        'menu_icon'           => 'dashicons-images-alt2',
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'Portfolio', $args );
}
add_action( 'init', 'baseinstall_portfolio_post_type', 0 );

// these taxonomies are used for the portfolio filtering on the front page
register_taxonomy( "portfolio-categories", 
	array( 	"portfolio" ), 
	array( 	"hierarchical" => true,
			"labels" => array('name'=>"Creative Fields",'add_new_item'=>"Add New Field"), 
			"singular_label" => __( "Field" ), 
			"rewrite" => array( 'slug' => 'fields', // This controls the base slug that will display before each term 
			                    'with_front' => false)
		 ) 
);
