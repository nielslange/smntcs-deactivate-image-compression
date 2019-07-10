<?php
/**
 * Plugin Name: SMNTCS Deactivate image compression
 * Plugin URI:
 * Description: Deactivate the WordPress default image compression.
 * Author: Niels Lange
 * Author URI: https://nielslange.de/
 * Version: 1.0
 * Text Domain: smntcs-deactivate-image-compression
 * Domain Path: /languages
 *
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package SMNTCS
 */

// Avoid direct plugin access.
if ( ! defined( 'ABSPATH' ) ) {
	die( '¯\_(ツ)_/¯' );
}

// Deactivate default image compression
add_filter( 'jpeg_quality', function( $arg ) {
	return 100;
});
