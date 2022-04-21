<?php
/**
 * Plugin Name: SMNTCS Deactivate image compression
 * Plugin URI: https://github.com/nielslange/smntcs-deactivate-image-compression
 * Description: Deactivate the WordPress default image compression.
 * Author: Niels Lange <info@nielslange.de>
 * Author URI: https://nielslange.de/
 * Text Domain: smntcs-deactivate-image-compression
 * Version: 1.5
 * Stable tag: 1.5
 * Tested up to: 5.9
 * Requires PHP: 7.4
 * Requires at least: 5.5
 * License: GPLv2+
 * License URI: https://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 *
 * @category   Plugin
 * @package    WordPress
 * @subpackage SMNTCS Deactivate image compression
 * @author     Niels Lange <info@nielslange.de>
 * @license    https://www.gnu.org/licenses/gpl.html GNU Public License
 */

// Avoid direct plugin access.
defined( 'ABSPATH' ) || exit;

/**
 * Deactivate default image compression.
 *
 * @return int The image compression percentage.
 */
add_filter(
	'jpeg_quality',
	function() {
		return 100;
	}
);
