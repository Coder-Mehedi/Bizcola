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