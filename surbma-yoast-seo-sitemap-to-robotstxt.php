<?php

/*
Plugin Name: Surbma - Yoast SEO Sitemap to robots.txt
Plugin URI: http://surbma.com/wordpress-plugins/
Description: Adds Yoast SEO generated XML Sitemap to the virtual robots.txt file.

Version: 1.0.1

Author: Surbma
Author URI: http://surbma.com/

License: GPLv2

Text Domain: surbma-yoast-seo-sitemap-to-robotstxt
Domain Path: /languages/
*/

// Prevent direct access to the plugin
if ( !defined( 'ABSPATH' ) ) exit( 'Good try! :)' );

// Localization
function surbma_yoast_seo_sitemap_to_robotstxt_init() {
	load_plugin_textdomain( 'surbma-yoast-sitemap-to-robotstxt', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
}
add_action( 'plugins_loaded', 'surbma_yoast_seo_sitemap_to_robotstxt_init' );

// Add Yoast SEO sitemap to virtual robots.txt file
function surbma_yoast_seo_sitemap_to_robotstxt_function( $output ) {
	$options = get_option( 'wpseo_xml' );
	if ( class_exists( 'WPSEO_Sitemaps' ) && $options['enablexmlsitemap'] == true ) {
		$homeURL = get_home_url();
    	$output .= "Sitemap: $homeURL/sitemap_index.xml\n";
	}
	return $output;
}
add_filter( 'robots_txt', 'surbma_yoast_seo_sitemap_to_robotstxt_function', 9999, 1 );
