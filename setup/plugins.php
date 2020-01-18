<?php

/**
 * Require Plugins
 *
 * @package webtonica
 * @since 0.1.0
 */

// TGM Plugin Activation
require_once WEBTONICA_INCLUDES . 'class-tgm-plugin-activation.php';

if ( ! function_exists( 'webtonica_plugins' ) ) {
	function webtonica_plugins() {
		$plugins = array(
			array(
				'name'             => 'ThemePlate',
				'slug'             => 'themeplate',
				'required'         => true,
				'source'           => 'https://github.com/kermage/ThemePlate/releases/download/v3.8.2/themeplate.zip',
				'force_activation' => true,
			),
			array(
				'name'   => 'Augment Types',
				'slug'   => 'augment-types',
				'source' => 'https://github.com/kermage/augment-types/releases/download/v1.5.3/augment-types.zip',
			),
			array(
				'name' => 'Enable Media Replace',
				'slug' => 'enable-media-replace',
			),
			array(
				'name' => 'Regenerate Thumbnails',
				'slug' => 'regenerate-thumbnails',
			),
			array(
				'name' => 'ShortPixel Image Optimizer',
				'slug' => 'shortpixel-image-optimizer',
			),
			array(
				'name' => 'W3 Total Cache',
				'slug' => 'w3-total-cache',
			),
			array(
				'name' => 'Wordfence Security',
				'slug' => 'wordfence',
			),
			array(
				'name' => 'Yoast SEO',
				'slug' => 'wordpress-seo',
			),
		);

		$config = array(
			'id'           => 'webtonica-tgmpa',
			'menu'         => 'webtonica-plugins',
			'parent_slug'  => 'webtonica-options',
			'dismissable'  => false,
			'is_automatic' => true,
		);

		tgmpa( $plugins, $config );
	}
	add_action( 'tgmpa_register', 'webtonica_plugins' );
}
