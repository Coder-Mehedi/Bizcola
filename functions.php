<?php

function bizcola_enqueue_scripts() {

	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css', array(), '1.0' );

	wp_enqueue_style( 'all', get_template_directory_uri() . '/assets/css/all.min.css', array(), '1.0' );

	wp_enqueue_style( 'owl.carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.0' );

	wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/assets/css/fancybox.min.css', array(), '1.0' );

	wp_enqueue_style( 'sm-clean', get_template_directory_uri() . '/assets/css/sm-clean.css', array(), '1.0' );

	wp_enqueue_style( 'sm-core', get_template_directory_uri() . '/assets/css/sm-core.css', array(), '1.0' );

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0' );

	wp_enqueue_style( 'default', get_template_directory_uri() . '/assets/css/default.css', array(), '1.0' );

	wp_enqueue_style( 'bizcola-style', get_stylesheet_uri() );

	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0' );


	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0', true );

	wp_enqueue_script( 'owl.carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0', true );

	wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/assets/js/fancybox.min.js', array('jquery'), '1.0', true );

	wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), '1.0', true );

	wp_enqueue_script( 'imagesloaded.pkgd', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', array('jquery'), '1.0', true );

	wp_enqueue_script( 'isotope.pkgd', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array('jquery'), '1.0', true );

	wp_enqueue_script( 'smartmenus', get_template_directory_uri() . '/assets/js/smartmenus.min.js', array('jquery'), '1.0', true );

	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true );

	
}
add_action( 'wp_enqueue_scripts', 'bizcola_enqueue_scripts' );

if ( ! function_exists( 'bizcola_theme_setup' ) ) :

	function bizcola_theme_setup() {

		load_theme_textdomain( 'bizcola', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );


		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'bizcola' ),
			'menu-2' => esc_html__( 'Footer One', 'bizcola' ),
			'menu-3' => esc_html__( 'Footer Two', 'bizcola' ),
			'menu-4' => esc_html__( 'Footer Three', 'bizcola' ),
			'menu-5' => esc_html__( 'Footer Four', 'bizcola' ),
		) );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'bizcola_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

	}
endif;
add_action( 'after_setup_theme', 'bizcola_theme_setup' );



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


}

function bizcola_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer One', 'bizcola' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'bizcola' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s footer-menu">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Two', 'bizcola' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'bizcola' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s footer-menu-2">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Three', 'bizcola' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'bizcola' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s footer-menu-2">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Four', 'bizcola' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add widgets here.', 'bizcola' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s footer-menu-2">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );

}
add_action( 'widgets_init', 'bizcola_widgets_init' );

include_once 'include/css_hook.php';