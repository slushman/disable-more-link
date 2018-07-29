<?php

/**
 * Plugin Name: 			Disable More Link
 * Plugin URI: 				https://github.com/slushman/disable-more-link/
 * Description: 			Removes all content from the "more link" added at the end of excerpts.
 * Author: 					slushman
 * Author URI: 				https://www.slushman.com/
 * GitHub Plugin URI: 		https://github.com/slushman/disable-more-link/
 * Github Branch: 			master
 * Version: 				1.0.1
 * License: 				GPL2+
 * License URI: 			http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @since 					1.0.0
 * @package 				Disable_More_Link
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) { exit; }

add_action( 'after_setup_theme', 'disable_more_link_filters' );

/**
 * Adds the appropriate filters at the after_setup_theme hook.
 * 
 * @hooked 		after_setup_theme
 * @since 		1.0.0
 */
function disable_more_link_filters() {

	add_filter( 'excerpt_more', 'dml_disable_more_link' );
	add_filter( 'the_content_more_link', 'dml_disable_more_link', 99 );

} // disable_more_link_filters()

/**
 * Removes all content from the more link.
 * 
 * @hooked 		excerpt_more
 * @since 		1.0.0
 * @param 		mixed 		$more 		The current content of the more link.
 * @return 		null 					Empty content.
 */
function dml_disable_more_link( $more ) {

	return '&hellip;';

} // dml_disable_more_link()