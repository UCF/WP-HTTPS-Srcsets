<?php
/*
Plugin Name: WP HTTPS Srcsets
Description: Forces all responsive srcset urls to use HTTPS (fixes bug exposed in WP 4.4:  https://core.trac.wordpress.org/ticket/25449#comment:13)
Version: 0.0.0
Author: UCF Web Communications
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

/*
 * Force URLs in srcset attributes into HTTPS scheme.
 * http://wptavern.com/how-to-fix-images-not-loading-in-wordpress-4-4-while-using-ssl
 */
function ssl_srcset( $sources ) {
  foreach ( $sources as &$source ) {
    $source['url'] = set_url_scheme( $source['url'], 'https' );
  }

  return $sources;
}
add_filter( 'wp_calculate_image_srcset', 'ssl_srcset' );

?>
