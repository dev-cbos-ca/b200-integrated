<?php

/**
 Plugin Name: WP Bundle Storefront Optimizer
 Plugin URI: http://wp.cbos.ca/plugins/wp-bundle-storefront-optimizer/
 Description: Removes selected styles, so that they can be concatonated and the site optimized.
 Version: 2018.03.23
 Author: wp.cbos.ca
 Author URI: http://wp.cbos.ca
 License: GPLv2+
 */

defined( 'ABSPATH' ) || exit;

if ( true ) {
	function deregister_unoptimized_storefront_scripts() {
		wp_deregister_style( 'storefront-style' );
		wp_deregister_style( 'storefront-style-inline' );
		wp_deregister_style( 'storefront-fonts' );
		wp_deregister_style( 'storefront-icons' );
		wp_deregister_style( 'storefront-woocommerce-style-css' );
		wp_deregister_style( 'storefront-woocommerce-style-inline' );
		}
	add_action( 'wp_enqueue_scripts', 'deregister_unoptimized_storefront_scripts', 55 );	
}

if ( true ) {
	function enqueue_optimized_storefront_scripts() {
		wp_enqueue_style( 'storefront-style' );
		}
	add_action( 'wp_enqueue_scripts', 'enqueue_optimized_storefront_scripts', 55 );	
}
