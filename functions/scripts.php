<?php

/**
	* Lethean Enqueue Scripts
	*
	* Register and enqueue stylesheets and scripts
	*
	* @package    Wordpress
	* @subpackage Lethean
	* @since      1.0.0
	*
	* @link https://codex.wordpress.org/Function_Reference/wp_enqueue_style
	*/
function lethean_load_scripts() {
	
	/**
	* Load our style and scripts.
  *
  * wp_enqueue_style( $handle, $src, $deps, $ver, $media )
	*
	* @param $handle (string) 			 (required) Name used as a handle for the stylesheet. Default: none
	* @param $src (string|boolean) 	 (optional) URL to the stylesheet. Default: false
	* @param $deps (array) 					 (optional) Array of handles of any stylesheet that this stylesheet depends on. Default: array()
	* @param $ver (string|boolean) 	 (optional) String specifying the stylesheet version number, if it has one. Defaul: false
	* @param $media (string|boolean) (optional) String specifying the media for which this stylesheet has been defined. e.g. 'screen'. Default: 'all'
	*/

	// Load Bootstrap
	wp_enqueue_style( 'bootstrap', BOOTSTRAP_URI . '/3.3.2/css/bootstrap.min.css', array(), '3.3.2', 'all');
	
	// Load Main stylesheet
	wp_enqueue_style( 'lethean', CURRENT_THEME_STYLESHEET, array( 'bootstrap' ), lethean_theme_info( 'Version' ), 'screen' );

	/**
	 * wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer )
	 *
	 * @param $handle 	 (string)				  (required) Name used as handle for the script. Default: none
	 * @param $src    	 (string|boolean) (optional) URL to the script. Default: false
	 * @param $deps   	 (array)          (optional) Array of handles of any script that this script depends on. Default: array()
	 * @param $ver    	 (string|boolean) (optional) String specifying the scripts version number, if it has one. Defaul: false
	 * @param $in_footer (boolean)  			(optional) If true, and the theme has a wp_footer()tag, the script is placed before the </body> end tag. Default: false 
	 */
	// Load footer scripts
	wp_enqueue_script( 'bootstrap', BOOTSTRAP_URI . '/3.3.2/js/bootstrap.min.js', array( 'jquery' ), '3.3.2', true );
	wp_enqueue_script( 'lateral-nav', PARENT_THEME_BASE_URI . '/assets/js/lateral-nav.js', array( 'jquery' ), lethean_theme_info( 'Version' ), true );

}
add_action( 'wp_enqueue_scripts', 'lethean_load_scripts' );