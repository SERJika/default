<?php

/**
 * Enqueue scripts and styles
 *
 * @package webtonica
 * @since 0.1.0
 */

if ( ! function_exists( 'webtonica_scripts_styles' ) ) {
	function webtonica_scripts_styles() {
		$suffix = ( SCRIPT_DEBUG || WEBTONICA_DEBUG ) ? '' : '.min';

		// Deregister the jquery version bundled with WordPress
		wp_deregister_script( 'jquery-core' );
		wp_deregister_script( 'jquery-migrate' );
		// CDN hosted jQuery placed in the header, as some plugins require that jQuery is loaded in the header
		wp_register_script( 'jquery-core', 'https://code.jquery.com/jquery-2.2.4' . $suffix . '.js', array(), '2.2.4', false );
		wp_register_script( 'jquery-migrate', 'https://code.jquery.com/jquery-migrate-1.4.1' . $suffix . '.js', array(), '1.4.1', false );
		wp_add_inline_script( 'jquery-core', 'jQuery.noConflict();' );

		// jQuery
		wp_enqueue_script( 'jquery-core' );
		// Google Fonts
		wp_enqueue_style( 'webtonica-fonts', 'https://fonts.googleapis.com/css?family=Lato:400,700,900|Open+Sans:400,600,800', array(), WEBTONICA_VERSION );
		// Font Awesome
		wp_enqueue_script( 'webtonica-fontawesome', 'https://use.fontawesome.com/releases/v5.11.2/js/all.js', array(), '5.11.2', false );
		wp_add_inline_script( 'webtonica-fontawesome', 'FontAwesomeConfig = { searchPseudoElements: true };' );
		// Bootstrap
		wp_enqueue_script( 'webtonica-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap' . $suffix . '.js', array(), '4.3.1', true );

		// Site scripts and styles
		wp_enqueue_style( 'webtonica-style', WEBTONICA_URL . 'assets/css/webtonica' . $suffix . '.css', array(), WEBTONICA_VERSION );
		wp_enqueue_script( 'webtonica-script', WEBTONICA_URL . 'assets/js/webtonica' . $suffix . '.js', array(), WEBTONICA_VERSION, true );

		$webtonica_options = array(
			'ajaxurl' => admin_url( 'admin-ajax.php' ),
		);
		wp_localize_script( 'webtonica-script', 'webtonica_options', apply_filters( 'webtonica_localize_script', $webtonica_options ) );
	}
	add_action( 'wp_enqueue_scripts', 'webtonica_scripts_styles', 20 );
}

// Async Scripts
if ( ! function_exists( 'webtonica_async_scripts' ) ) {
	function webtonica_async_scripts( $tag, $handle ) {
		// Add script handles
		$scripts = array();

		if ( in_array( $handle, $scripts, true ) ) {
			return str_replace( ' src', ' async="async" src', $tag );
		}

		return $tag;
	}
	add_filter( 'script_loader_tag', 'webtonica_async_scripts', 10, 2 );
}

// Defer Scripts
if ( ! function_exists( 'webtonica_defer_scripts' ) ) {
	function webtonica_defer_scripts( $tag, $handle ) {
		// Add script handles
		$scripts = array(
			'webtonica-fontawesome',
		);

		if ( in_array( $handle, $scripts, true ) ) {
			return str_replace( ' src', ' defer="defer" src', $tag );
		}

		return $tag;
	}
	add_filter( 'script_loader_tag', 'webtonica_defer_scripts', 10, 2 );
}
