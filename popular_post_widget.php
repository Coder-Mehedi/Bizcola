<?php 

function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);



// Register and load the widget
function popular_post_load_widget() {
    register_widget( 'popular_post_widget' );
}
add_action( 'widgets_init', 'popular_post_load_widget' );
 
// Creating the widget 
class popular_post_widget extends WP_Widget {
 
	function __construct() {
	parent::__construct(
	 
	// Base ID of your widget
	'popular_post_widget', 
	 
	// Widget name will appear in UI
	__('Popular Post Sidebar', 'bizcola'), 
	 
	// Widget description
	array( 'description' => __( 'widget for popular posts sidebar', 'bizcola' ), ) 
	);
	}
 
// Creating widget front-end
 
	public function widget( $args, $instance ) {
		get_template_part( 'templates/popular_post_template' );
	}
	         
	// Widget Backend 
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		else {
			$title = __( 'New title', 'bizcola' );
		}
	}
     
	// Updating widget replacing old instances with new
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}
} // Class popular_post_widget ends here