<?php 

function cptui_register_my_cpts() {

	/**
	 * Post Type: Our Services.
	 */

	$labels = [
		"name" => __( "Our Services", "bizcola" ),
		"singular_name" => __( "Our Service", "bizcola" ),
		"add_new" => __( "Add New Service", "bizcola" ),
	];

	$args = [
		"label" => __( "Our Services", "bizcola" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "our_service", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-screenoptions",
		"supports" => [ "title", "editor", "thumbnail" ],
	];

	register_post_type( "our_service", $args );

	/**
	 * Post Type: Portfolio.
	 */

	$labels = [
		"name" => __( "Portfolio", "bizcola" ),
		"singular_name" => __( "Portfolio", "bizcola" ),
	];

	$args = [
		"label" => __( "Portfolio", "bizcola" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "portfolio", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-menu-alt",
		"supports" => [ "title" ],
	];

	register_post_type( "portfolio", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
