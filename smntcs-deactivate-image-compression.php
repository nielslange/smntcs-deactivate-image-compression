<?php
/**
 * Plugin Name:           SMNTCS Deactivate Image Compression
 * Plugin URI:            https://github.com/nielslange/smntcs-deactivate-image-compression
 * Description:           Keeps uploaded images at full quality by turning off WordPress's image compression and big-image downscaling.
 * Author:                Niels Lange
 * Author URI:            https://nielslange.de
 * Text Domain:           smntcs-deactivate-image-compression
 * Version:               2.2
 * Requires PHP:          7.4
 * Requires at least:     2.5
 * License:               GPL v2 or later
 * License URI:           https://www.gnu.org/licenses/gpl-2.0.html
 *
 * @package SMNTCS_Deactivate_Image_Compression
 */

defined( 'ABSPATH' ) || exit;

/**
 * Save JPEG images at full quality.
 *
 * @return int The image quality.
 */
add_filter( 'jpeg_quality', fn() => 100 );

/**
 * Save every image format that the image editor writes at full quality,
 * including WebP and AVIF.
 *
 * @return int The image quality.
 */
add_filter( 'wp_editor_set_quality', fn() => 100 );

/**
 * Stop WordPress from downscaling and recompressing large uploads.
 *
 * Since WordPress 5.3, images wider or taller than 2560 pixels are replaced
 * by a compressed "-scaled" copy. To keep that behaviour, remove this filter:
 * remove_filter( 'big_image_size_threshold', '__return_false' );
 */
add_filter( 'big_image_size_threshold', '__return_false' );
