<?php 

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
	array( 'description' => __( 'widget for follow us sidebar', 'bizcola' ), ) 
	);
}
 
// Creating widget front-end
 
public function widget( $args, $instance ) {
	get_template_part( 'templates/popular_post_sidebar' );
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
?>
<!-- <p>
	<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
	<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p> -->
<?php 
}
     
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
	$instance = array();
	$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
	return $instance;
}
} // Class popular_post_widget ends here