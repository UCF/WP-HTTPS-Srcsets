=== WP HTTPS Srcsets ===
Contributors: ucfwebcom
Tags: srcset, https
Requires at least: 4.4
Tested up to: 4.4.2
Stable tag: 1.0.0

This plugin forces https to be used in srcset values for responsive images.

== Description ==

Fixes a bug exposed in WordPress 4.4 that causes images to use http srcset urls incorrectly over https connections, resulting in insecure content errors and images not loading.  This plugin sets all srcset value url schemas to use https.

Fix provided by WPTavern:
http://wptavern.com/how-to-fix-images-not-loading-in-wordpress-4-4-while-using-ssl
