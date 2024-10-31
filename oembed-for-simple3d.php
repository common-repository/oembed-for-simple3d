<?php
/*
Plugin Name: oEmbed for Simple3D
Plugin URI:  https://wordpress.org/plugins/oembed-for-simple3d/
Description: Embed 3D models from simple3d.net into your WordPress site
Version:     1.0
Author:      Junekey Lee
Author URI:  http://GenerateWP.com/
Text Domain: oembed-for-simple3d
Domain Path: /languages
*/


/*
 * Prevent direct access to the file
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/*
 * Simple3d oEmbed
 */
function simple3d_oembed_provider() {
	wp_oembed_add_provider( '#http?://(www.)?simple3d.net/models/.*#i', 'http://simple3d.net/oembed', true );

}
add_action( 'init', 'simple3d_oembed_provider' );
