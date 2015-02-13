<?php
/**
 * Register and Widgetize Sidebars
 *
 * Calling register_sidebar() multiple times to register a number of sidebars
 * is preferable to using register_sidebars() to create a bunch in one go,
 * because it allows you to assign a unique name to each sidebar
 * (eg: “Right Sidebar”, “Left Sidebar”). Although these names only appear
 * in the admin interface it is a best practice to name each sidebar specifically,
 * giving the administrative user some idea as to the context for which
 * each sidebar will be used.
 *
 * @package 	 Wordpress
 * @subpackage Lethean
 * @since      1.0.0
*/
function lethean_widgets_init() {

	register_sidebar( array(
		'name' 					=> __( 'Lateral Nav Sidebar', lethean_theme_info( 'TextDomain' ) ), // Sidebar name (default is localized 'Sidebar' and numeric ID).
		'id' 						=> 'lateral-nav-sidebar', // Sidebar id - Must be all in lowercase, with no spaces (default is a numeric auto-incremented ID).
		'description' 	=> sprintf( __( 'lateral Nav Sidebar of the %s Theme', lethean_theme_info( 'TextDomain' ) ), lethean_theme_info( 'Name' ) ), // Text description of what/where the sidebar is. Shown on widget management screen. (default: empty)
		'class' 				=> '', // CSS class anem to assign to widget HTML (Default: empty)
		'before_widget' => '<li id="%1$s" class="affinity4-navigation %2$s">', // HTML to be placed before every widget (default: <li id="%1$n">) Uses sprintf for variable substitution
		'after_widget' 	=> '</li>', // HTML to be placed after every widget
	) );

}
add_action( 'widgets_init', 'lethean_widgets_init' );

