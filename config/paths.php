<?php
/*
 * Helpers for directorys, css/js assets, and php includes
 */

/* Absolute URIs */
define( 'PARENT_THEME_BASE_URI', get_template_directory_uri() );
define( 'PARENT_THEME_ASSETS_URI', PARENT_THEME_BASE_URI . '/assets' );
define( 'PARENT_THEME_LIBS_URI', PARENT_THEME_ASSETS_URI . '/libs' );
define( 'BOOTSTRAP_URI', PARENT_THEME_LIBS_URI . '/bootstrap' );
define( 'CURRENT_THEME_STYLESHEET', get_stylesheet_uri() );

/* Absolute Paths */
define( 'CURRENT_THEME_BASE_PATH', get_template_directory() );