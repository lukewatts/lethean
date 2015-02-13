<?php

/**
 * Register the menus used by Noesis
 *
 * @link http://codex.wordpress.org/Navigation_Menus
 * @link http://codex.wordpress.org/Function_Reference/register_nav_menus
 *
 * @package 	 Wordpress
 * @subpackage Lethean
 * @since      1.0.0
 */
function lethean_register_nav_menus() {

	/**
	 * Register Nav Menu
	 *
	 * Registers a single custom navigation menu in the new custom menu editor
	 * of WordPress 3.0. This allows for creation of custom menus in the dashboard
	 * for use in your theme.
	 *
	 * @link codex.wordpress.org/Function_Reference/register_nav_menu
	 *
	 * @param $location (string) (required) Menu location identifier, like a slug.
	 * @param $description (string) (required) Menu description - for identifying the menu in the dashboard.
	 * @since 1.0.0
	 */
	register_nav_menu( 'lateral-nav', __( 'Lateral Nav' ) );
	register_nav_menu( 'top-nav', __( 'Top Nav' ) );

}
add_action( 'init', 'lethean_register_nav_menus' );