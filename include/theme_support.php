<?php 

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