<?php

class LetheanSocialWidget extends WP_Widget {

	public function __construct() {

		$widget_args = array(
			'classname' => 'socials',
			'description' => sprintf( __( '%s Social Links Widget', lethean_theme_info( 'TextDomain' ) ), lethean_theme_info( 'Name' ) )
		);

		// Instantiate the parent is_object(var)
		parent::__construct( 'lethean-social-widget', 'Lethean Social Widget', $widget_args );
	}

	function widget( $args, $instance ) {
		extract( $args, EXTR_SKIP );
		$twitter = $instance['twitter'];
		$facebook = $instance['facebook'];
		$dribbble = $instance['dribbble'];
		$github = $instance['github'];
		echo $before_widget;
		echo '<a class="affinity4-img-replace affinity4-twitter" title="Twitter" href="https://twitter.com/' . $twitter . '" target="_blank">Twitter</a>';
		echo '<a class="affinity4-img-replace affinity4-facebook" title="Facebook" href="' . $facebook . '" target="_blank">Facebook</a>';
		echo '<a class="affinity4-img-replace affinity4-dribble" title="Dribble" href="' . $dribbble . '" target="_blank">Dribbble</a>';
		echo '<a class="affinity4-img-replace affinity4-github" title="Github" href="' . $github . '" target="_blank">Github</a>';
		echo $after_widget;
	}

	// We don't need to edit this
	// function update( $new_instance, $old_instance ) {
	// 	// Save widget options
	// }

	function form( $instance ) {
		// Output admin widget options form
		$this->create_input_field( 'Twitter Username (no @ symbol)', 'twitter', $instance );
		$this->create_input_field( 'Facebook Url', 'facebook', $instance );
		$this->create_input_field( 'Dribbble', 'dribbble', $instance );
		$this->create_input_field( 'Github', 'github', $instance );

	}

	function create_input_field( $label, $field_id, $instance ) {
		// Output admin widget options form
		echo '<p><label for="' . $this->get_field_id( $field_id ) . '">';
		echo $label . ': ';
		echo '</label><br />';
		echo '<input id="' . $this->get_field_id( $field_id ) . '" name="' . $this->get_field_name( $field_id ) . '" value="' . esc_attr( $instance[$field_id] ) . '"></p>';
	}
}

function lethean_register_widgets() {
	register_widget( 'LetheanSocialWidget' );
}

add_action( 'widgets_init', 'lethean_register_widgets' );