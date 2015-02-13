<?php

/**
 * Returns info from the current stylesheet
 * 
 * @param  $get (string) (required)  Options are "Name", "ThemeURI", "Description", "Author", "AuthorURI", "Version",
 *                                   "Template", "Status", "Tags", "TextDomain", "DomainPath"
 * @return $output (string)
 * @since  1.0.0
 */
function lethean_theme_info( $get ) {
	
	$current_theme = wp_get_theme();
	$output = $current_theme->get( $get );

	return $output;

}