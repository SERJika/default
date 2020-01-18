<?php

/**
 * Actions and Filters
 *
 * @package webtonica
 * @since 0.1.0
 */

add_action( 'after_switch_theme', 'flush_rewrite_rules' );

// Remove JPEG compression.
if ( ! function_exists( 'webtonica_jpeg_quality' ) ) {
	function webtonica_jpeg_quality() {
		return 100;
	}
	add_filter( 'jpeg_quality', 'webtonica_jpeg_quality' );
}

// Allow SVG upload
if ( ! function_exists( 'webtonica_mime_types' ) ) {
	function webtonica_mime_types( $mimes ) {
		$mimes['svg'] = 'image/svg+xml';
		return $mimes;
	}
	add_filter( 'upload_mimes', 'webtonica_mime_types' );
}

// Add SVG as image
if ( ! function_exists( 'webtonica_ext_types' ) ) {
	function webtonica_ext_types( $mimes ) {
		$mimes['image'][] = 'svg';
		return $mimes;
	}
	add_filter( 'ext2type', 'webtonica_ext_types' );
}

// Custom excerpt length
if ( ! function_exists( 'webtonica_excerpt_length' ) ) {
	function webtonica_excerpt_length( $length ) {
		return 50;
	}
	add_filter( 'excerpt_length', 'webtonica_excerpt_length' );
}

// Custom excerpt read more
if ( ! function_exists( 'webtonica_excerpt_string' ) ) {
	function webtonica_excerpt_string( $more ) {
		return '&hellip;';
	}
	add_filter( 'excerpt_more', 'webtonica_excerpt_string' );
}

// Number of revisions to keep
if ( ! function_exists( 'webtonica_keep_revisions' ) ) {
	function webtonica_keep_revisions( $num, $post ) {
		return 30;
	}
	add_filter( 'wp_revisions_to_keep', 'webtonica_keep_revisions', 10, 2 );
}

// Re-add underline and justify buttons in the editor
if ( ! function_exists( 'webtonica_editor_buttons' ) ) {
	function webtonica_editor_buttons( $buttons ) {
		$temp    = array_merge( array_slice( $buttons, 0, 3, true ), array( 4 => 'underline' ), array_slice( $buttons, 3, count( $buttons ) - 1, true ) );
		$buttons = $temp;
		$temp    = array_merge( array_slice( $buttons, 0, 9, true ), array( 10 => 'alignjustify' ), array_slice( $buttons, 9, count( $buttons ) - 1, true ) );
		$buttons = $temp;

		return $buttons;
	}
	add_filter( 'mce_buttons', 'webtonica_editor_buttons' );
}

// Replace WP login screen logo.
if ( ! function_exists( 'webtonica_login_logo' ) ) {
	function webtonica_login_logo() {
		?>
		<style type="text/css">
			body.login h1 a {
				background-image: url( <?php echo esc_html( WEBTONICA_URL ); ?>screenshot.png );
				background-position: center;
				background-size: 440px 330px;
				width: 320px;
				height: 120px;
				box-shadow: 0 1px 3px rgba( 0, 0, 0, .13 );
			}
		</style>
		<?php
	}
	add_action( 'login_enqueue_scripts', 'webtonica_login_logo' );
}

// Link WP login logo to homepage.
if ( ! function_exists( 'webtonica_login_headerurl' ) ) {
	function webtonica_login_headerurl() {
		return home_url();
	}
	add_filter( 'login_headerurl', 'webtonica_login_headerurl' );
}

// Use the site title instead of 'WordPress'.
if ( ! function_exists( 'webtonica_login_headertext' ) ) {
	function webtonica_login_headertext() {
		return get_option( 'blogname' );
	}
	add_filter( 'login_headertext', 'webtonica_login_headertext' );
}

// Remove WP icon from the admin bar.
if ( ! function_exists( 'webtonica_remove_wp_icon' ) ) {
	function webtonica_remove_wp_icon() {
		global $wp_admin_bar;
		$wp_admin_bar->remove_menu( 'wp-logo' );
	}
	add_action( 'wp_before_admin_bar_render', 'webtonica_remove_wp_icon' );
}

// Makes WordPress-generated emails appear 'from' the site name.
if ( ! function_exists( 'webtonica_mail_from_name' ) ) {
	function webtonica_mail_from_name() {
		return get_option( 'blogname' );
	}
	add_filter( 'wp_mail_from_name', 'webtonica_mail_from_name' );
}

// Makes WordPress-generated emails appear 'from' the site admin email address.
if ( ! function_exists( 'webtonica_wp_mail_from' ) ) {
	function webtonica_wp_mail_from() {
		return get_option( 'admin_email' );
	}
	add_filter( 'wp_mail_from', 'webtonica_wp_mail_from' );
}
