<?php

// Register and load the widget
function recent_post_load_widget() {
    register_widget( 'recent_post_widget' );
}
add_action( 'widgets_init', 'recent_post_load_widget' );
 
// Creating the widget 
class recent_post_widget extends WP_Widget {
 
	function __construct() {
		parent::__construct(
		 
		// Base ID of your widget
		'recent_post_widget', 
		 
		// Widget name will appear in UI
		__('Recent Post Sidebar', 'bizcola'), 
		 
		// Widget description
		array( 'description' => __( 'widget for recent post sidebar', 'bizcola' ), ) 
		);
	}
 
	// Creating widget front-end
	 
	public function widget( $args, $instance ) {
		get_template_part( 'templates/recent_post_template' );
	}
	         
	// Widget Backend 
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		else {
			$title = __( 'New title', 'bizcola' );
		}
		// Widget admin form
	
	}
	     
	// Updating widget replacing old instances with new
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}
} // Class recent_post_widget ends here