<?php
/**
 * Lethean functions and definitions
 *
 * This file will be referenced every time a template/page loads on your
 * Wordpress site. This is the place to define custom functions and
 * special code.
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link http://codex.wordpress.org/Theme_Development
 * @link http://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link http://codex.wordpress.org/Plugin_API
 *
 * @package 		WordPress
 * @subpackage Lethean
 * @since 			1.0.0
 */

require_once( get_template_directory() . '/config/paths.php' );
require_once( CURRENT_THEME_BASE_PATH . '/config/theme_info.php' );

/**
 * Make Lethean available for translation.
 *
 * Translations can be added to the /languages/ directory.
 */
load_theme_textdomain( lethean_theme_info( 'TextDomain' ), CURRENT_THEME_BASE_PATH . '/languages' );

require_once( CURRENT_THEME_BASE_PATH . '/functions/enqueue_scripts.php' );
require_once( CURRENT_THEME_BASE_PATH . '/functions/header/title.php' );
require_once( CURRENT_THEME_BASE_PATH . '/functions/menus/navs.php' );
require_once( CURRENT_THEME_BASE_PATH . '/functions/sidebars/register_sidebars.php' );
require_once( CURRENT_THEME_BASE_PATH . '/functions/sidebars/register_widgets.php' );