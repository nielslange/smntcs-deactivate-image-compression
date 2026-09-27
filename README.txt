=== SMNTCS Deactivate Image Compression ===

Contributors:       nielslange
Tags:               image compression, image quality, jpeg, webp, big image
Requires at least:  2.5
Tested up to:       7.1
Requires PHP:       7.4
Stable tag:         2.3
License:            GPL v2 or later
License URI:        https://www.gnu.org/licenses/gpl-2.0.html

Keeps uploaded images at full quality by turning off WordPress's image compression and big-image downscaling.

== Description ==

WordPress recompresses every image you upload. JPEG and WebP files are saved at a quality of 82, and since WordPress 5.3 images larger than 2560 pixels are replaced by a compressed "-scaled" copy. If you already optimise your images before uploading them, or use an image optimisation service, this extra compression can make them look blurry or pixelated.

SMNTCS Deactivate Image Compression turns all of that off:

* JPEG images are saved at full quality
* WebP and AVIF images, and every other format the image editor writes, are saved at full quality
* Large uploads are kept at their original size instead of being downscaled

There are no settings. Activate the plugin and every new upload keeps its full quality. Images you uploaded before activating the plugin are not changed.

== Installation ==

1. Upload `smntcs-deactivate-image-compression` to the `/wp-content/plugins/` directory.
2. Activate the plugin through the `Plugins` menu in WordPress.

== Frequently Asked Questions ==

= Can I keep the big-image downscaling? =

Yes. Add this line to your theme's functions.php file or a small plugin:

`remove_filter( 'big_image_size_threshold', '__return_false' );`

= Does the plugin change images I already uploaded? =

No. Only new uploads and newly generated image sizes are affected. Use a plugin such as Regenerate Thumbnails to rebuild existing image sizes.

== Changelog ==

= 2.3 (2026.09.27) =

- Remove duplicated FAQ entries from the readme
- Remove the Purpose section, which repeated the description

= 2.2 (2026.09.26) =

- Test up to WordPress 7.1
- Update development dependencies and GitHub Actions
- Save WebP, AVIF and all other image formats at full quality
- Stop WordPress from downscaling and recompressing large uploads

= 2.1 (2026.08.14) =

-   Test up to WordPress 7.0

= 2.0 (2025.03.21) =

-   Test up to WordPress 6.8

= 1.9 (2024.10.19) =

- Test up to WordPress 6.6

= 1.8 (2023.10.15) =

- Test up to WordPress 6.4

= 1.7 (2022.12.03) =

- Test up to WordPress 6.1

= 1.6 (2022.05.29) =

- Test up to WordPress 6.0

= 1.5 (2022.04.21) =

- Test up to WordPress 5.8

= 1.4 (2021.12.30) =

- Test up to WordPress 5.8

= 1.3 (2021.04.26) =

- [Add build tools](https://github.com/nielslange/smntcs-deactivate-image-compression/issues/23)
- [Replace Travis CI with GitHub Actions](https://github.com/nielslange/smntcs-deactivate-image-compression/issues/25)
- [Test up to WordPress 5.7](https://github.com/nielslange/smntcs-deactivate-image-compression/issues/22)

= 1.2 (2020.05.03) =

- [Tested up to 5.4](https://github.com/nielslange/smntcs-deactivate-image-compression/issues/7)

= 1.1 (2019.12.27) =

- [Tested up to 5.3](https://github.com/nielslange/smntcs-deactivate-image-compression/issues/4)

= 1.0 (2019.07.10) =

- Initial release
