<?php

// Register and load the widget
function follow_us_load_widget() {
    register_widget( 'follow_us_widget' );
}
add_action( 'widgets_init', 'follow_us_load_widget' );
 
// Creating the widget 
class follow_us_widget extends WP_Widget {
 
	function __construct() {
	parent::__construct(
	 
	// Base ID of your widget
	'follow_us_widget', 
	 
	// Widget name will appear in UI
	__('Follow us sidebar', 'bizcola'), 
	 
	// Widget description
	array( 'description' => __( 'widget for follow us sidebar', 'bizcola' ), ) 
	);
}
 
// Creating widget front-end
 
public function widget( $args, $instance ) {
	$title = apply_filters( 'widget_title', $instance['title'] );
	 
	// before and after widget arguments are defined by themes
	echo $args['before_widget'];
	if ( ! empty( $title ) )
	echo $args['before_title'] . $title . $args['after_title'];
	 
	// This is where you run the code and display the output
	echo __( 'Hello, World!', 'bizcola' );
	echo $args['after_widget'];
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
} // Class follow_us_widget ends here