<?php

/**
 * Theme Hooks
 *
 * @package webtonica
 * @since 0.1.0
 */

require_once WEBTONICA_INCLUDES . 'google-tracking-codes.php';

if ( ! function_exists( 'webtonica_add_ga' ) ) {
	function webtonica_add_ga() {
		$tid = get_option( 'webtonica-options' )['google_analytics'];
		if ( $tid ) {
			themeplate_google_analytics_gtag( $tid );
		}
	}
	add_action( 'wp_head', 'webtonica_add_ga', 5 );
}

if ( ! function_exists( 'webtonica_add_gtm_head' ) ) {
	function webtonica_add_gtm_head() {
		$tid = get_option( 'webtonica-options' )['google_tagmanager'];
		if ( $tid ) {
			themeplate_google_tag_head( $tid );
		}
	}
	add_action( 'wp_head', 'webtonica_add_gtm_head', 5 );
}

if ( ! function_exists( 'webtonica_add_gtm_body' ) ) {
	function webtonica_add_gtm_body() {
		$tid = get_option( 'webtonica-options' )['google_tagmanager'];
		if ( $tid ) {
			themeplate_google_tag_body( $tid );
		}
	}
	add_action( 'wp_body_open', 'webtonica_add_gtm_body', 5 );
}
