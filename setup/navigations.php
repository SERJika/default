<?php

/**
 * Register navigation menus
 *
 * @package webtonica
 * @since 0.1.0
 */

if ( ! function_exists( 'webtonica_navigations' ) ) {
	function webtonica_navigations() {
		// Bootstrap Nav Walker
		require_once WEBTONICA_INCLUDES . 'class-bootstrap-navbar.php';

		register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'webtonica' ),
			'footer'  => __( 'Footer Menu', 'webtonica' ),
		) );
	}
	add_action( 'after_setup_theme', 'webtonica_navigations' );
}

// Primary Menu
if ( ! function_exists( 'webtonica_primary_menu' ) ) {
	function webtonica_primary_menu() {
		wp_nav_menu( array(
			'theme_location' => 'primary',
			'menu_class'     => 'nav navbar-nav',
			'walker'         => new Bootstrap_NavBar(),
			'depth'          => 0,
		) );
	}
}

// Footer Menu
if ( ! function_exists( 'webtonica_footer_menu' ) ) {
	function webtonica_footer_menu() {
		wp_nav_menu( array(
			'theme_location' => 'footer',
			'depth'          => 1,
		) );
	}
}
