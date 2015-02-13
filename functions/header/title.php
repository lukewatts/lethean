<?php
/**
 * Create a nicely formatted and more specific title element text for output
 * in head of document, based on current view.
 *
 * @package    Wordpress
 * @subpackage Lethean
 * @since      1.0.0
 *
 * @param  string $title Default title text for current view.
 * @param  string $sep   Optional separator.
 * @return string        The filtered title.
 */
function lethean_wp_title( $title, $sep ) {
	
	global $paged, $page;

	if ( is_feed() ) {
		return $title;
	}

	// Add the site name.
	$title .= get_bloginfo( 'name', 'display' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );

	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $site_description";
	}

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 ) {
		$title = "$title $sep " . sprintf( __( 'Page %s', lethean_theme_info( 'TextDomain' ) ), max( $paged, $page ) );
	}

	return $title;

}
add_filter( 'wp_title', 'lethean_wp_title', 10, 2 );