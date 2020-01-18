<?php

/**
 * Register theme features
 *
 * @package webtonica
 * @since 0.1.0
 */

if ( ! function_exists( 'webtonica_setup' ) ) {
	function webtonica_setup() {
		// Make theme available for Translation
		load_theme_textdomain( 'webtonica', WEBTONICA_PATH . 'languages' );
		// Add theme support for Post Formats
		add_theme_support( 'post-formats', array( 'link', 'image', 'quote', 'video', 'audio' ) );
		// Add theme support for Featured Images
		add_theme_support( 'post-thumbnails' );
		// Add theme support for Automatic Feed Links
		add_theme_support( 'automatic-feed-links' );
		// Add theme support for HTML5 Semantic Markup
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
		// Add theme support for document Title tag
		add_theme_support( 'title-tag' );

		// Add theme image sizes
		add_image_size( 'max', 1920, 1080 );
	}
	add_action( 'after_setup_theme', 'webtonica_setup' );
}

if ( ! function_exists( 'webtonica_credit' ) ) {
	function webtonica_credit() {
		return sprintf(
			'<a href="%1$s" target="_blank">%2$s %3$s</a> %4$s <span class="dashicons dashicons-heart"></span> by <a href="%5$s" target="_blank">%6$s</a>.',
			WEBTONICA_URI,
			WEBTONICA_NAME,
			WEBTONICA_VERSION,
			__( 'designed and developed with', 'webtonica' ),
			WEBTONICA_AUTHOR_URI,
			WEBTONICA_AUTHOR
		);
	}
	// Add to the admin footer
	add_filter( 'admin_footer_text', 'webtonica_credit' );
}

if ( ! function_exists( 'webtonica_updates' ) ) {
	function webtonica_updates( $value ) {
		unset( $value->response[ get_stylesheet() ] );
		return $value;
	}
	// Disable update notification from WordPress.org repository theme
	add_filter( 'pre_set_site_transient_update_themes', 'webtonica_updates' );
}
