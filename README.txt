=== SMNTCS Deactivate image compression ===

Contributors: nielslange
Tags: Image compression
Version: 1.5
Stable tag: 1.5
Tested up to: 5.9
Requires PHP: 7.4
Requires at least: 5.5
License: GPLv2+
License URI: https://www.gnu.org/licenses/old-licenses/gpl-2.0.html

Deactivate the WordPress default image compression.

== Description ==

Deactivate the WordPress default image compression which got introduced with [WordPress 2.5](https://developer.wordpress.org/reference/hooks/jpeg_quality/).

== Installation ==

1. Upload `smntcs-deactivate-image-compression` to the `/wp-content/plugins/` directory
2. Activate the plugin through the `Plugins` menu in WordPress

== Purpose ==

By default, WordPress compress every uploaded image by 90%. In combination with other image optimisation tools, this can lead to pixelated images. This plugin deactivates the default image compression to avoid this issue.

== Changelog ==

= 1.5 (2022.04.21) =
* Test up to 5.8

= 1.4 (2021.12.30) =
* Test up to 5.8

= 1.3 (2021.04.26) =
* [Add build tools](https://github.com/nielslange/smntcs-deactivate-image-compression/issues/23)
* [Replace Travis CI with GitHub Actions](https://github.com/nielslange/smntcs-deactivate-image-compression/issues/25)
* [Test up to 5.7](https://github.com/nielslange/smntcs-deactivate-image-compression/issues/22)

= 1.2 (2020.05.03) =
* [Tested up to 5.4](https://github.com/nielslange/smntcs-deactivate-image-compression/issues/7)

= 1.1 (2019.12.27) =
* [Tested up to 5.3](https://github.com/nielslange/smntcs-deactivate-image-compression/issues/4)

= 1.0 (2019.07.10) =
* Initial release
