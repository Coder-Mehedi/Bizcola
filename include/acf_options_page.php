<?php 

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Options',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Our Services Section Settings',
		'menu_title'	=> 'Customize Section Title & Description',
		'parent_slug'	=> 'edit.php?post_type=our_service',
	));

	acf_add_options_page(array(
		'page_title' 	=> 'Clients And Reviews',
		'menu_title'	=> 'Clients And Reviews',
		'menu_slug' 	=> 'client',
		'capability'	=> 'edit_posts',
		'icon_url' => 'dashicons-universal-access',
		'autoload' => true,
		'redirect'		=> true
	));

	acf_add_options_page(array(
		'page_title' 	=> 'Team Members',
		'menu_title'	=> 'Team Members',
		'menu_slug' 	=> 'team-members',
		'capability'	=> 'edit_posts',
		'icon_url' => 'dashicons-admin-users'
	));

	// acf_add_options_page(array(
	// 	'page_title' 	=> 'Recent Projects',
	// 	'menu_title'	=> 'Recent Projects',
	// 	'menu_slug' 	=> 'recent-projects',
	// 	'capability'	=> 'edit_posts',
	// 	'icon_url' => 'dashicons-schedule'
	// ));

	acf_add_options_page(array(
		'page_title' 	=> 'Contact Info',
		'menu_title'	=> 'Contact Info',
		'menu_slug' 	=> 'contact-info',
		'capability'	=> 'edit_posts',
		'icon_url' 		=> 'dashicons-phone'
	));

}