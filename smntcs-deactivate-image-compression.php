<?php
/**
 * Plugin Name: SMNTCS Deactivate image compression
 * Plugin URI: https://github.com/nielslange/smntcs-deactivate-image-compression
 * Description: Deactivate the WordPress default image compression.
 * Author: Niels Lange <info@nielslange.de>
 * Author URI: https://nielslange.de/
 * Text Domain: smntcs-deactivate-image-compression
 * Version: 1.1
 * Tested up to: 5.3
 * Requires at least: 2.5
 * Requires PHP: 5.6
 * License: GPLv3+
 * License URI: https://www.gnu.org/licenses/gpl.html
 *
 * @category   Plugin
 * @package    WordPress
 * @subpackage SMNTCS Deactivate image compression
 * @author     Niels Lange <info@nielslange.de>
 * @license    https://www.gnu.org/licenses/gpl.html GNU Public License
 */

/**
 * Avoid direct plugin access
 *
 * @since 1.0.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	die( '¯\_(ツ)_/¯' );
}

/**
 * Deactivate default image compression
 *
 * @since 1.0.0
 */
add_filter( 
	'jpeg_quality', 
	function() {
		return 100; 
	} 
);
