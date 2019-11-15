<?php 

function bizcola_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bizcola' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'bizcola' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s footer-menu">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );

	// register_sidebar( array(
	// 	'name'          => esc_html__( 'Footer Two', 'bizcola' ),
	// 	'id'            => 'footer-2',
	// 	'description'   => esc_html__( 'Add widgets here.', 'bizcola' ),
	// 	'before_widget' => '<div id="%1$s" class="widget %2$s footer-menu-2">',
	// 	'after_widget'  => '</div>',
	// 	'before_title'  => '<h5 class="widget-title">',
	// 	'after_title'   => '</h5>',
	// ) );

	// register_sidebar( array(
	// 	'name'          => esc_html__( 'Footer Three', 'bizcola' ),
	// 	'id'            => 'footer-3',
	// 	'description'   => esc_html__( 'Add widgets here.', 'bizcola' ),
	// 	'before_widget' => '<div id="%1$s" class="widget %2$s footer-menu-2">',
	// 	'after_widget'  => '</div>',
	// 	'before_title'  => '<h5 class="widget-title">',
	// 	'after_title'   => '</h5>',
	// ) );

	// register_sidebar( array(
	// 	'name'          => esc_html__( 'Footer Four', 'bizcola' ),
	// 	'id'            => 'footer-4',
	// 	'description'   => esc_html__( 'Add widgets here.', 'bizcola' ),
	// 	'before_widget' => '<div id="%1$s" class="widget %2$s footer-menu-2">',
	// 	'after_widget'  => '</div>',
	// 	'before_title'  => '<h5 class="widget-title">',
	// 	'after_title'   => '</h5>',
	// ) );

}
add_action( 'widgets_init', 'bizcola_widgets_init' );