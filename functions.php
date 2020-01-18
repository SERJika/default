<?php

/**
 * webtonica functions and definitions
 *
 * @package webtonica
 * @since 0.1.0
 */

/* generator-themeplate v1.8.0 */

/* ==================================================
Global constants
================================================== */
// phpcs:disable Generic.Functions.FunctionCallArgumentSpacing.TooMuchSpaceAfterComma
define( 'WEBTONICA_NAME',         wp_get_theme( basename( __DIR__ ) )->get( 'Name' ) );
define( 'WEBTONICA_VERSION',      wp_get_theme( basename( __DIR__ ) )->get( 'Version' ) );
define( 'WEBTONICA_URI',          wp_get_theme( basename( __DIR__ ) )->get( 'ThemeURI' ) );
define( 'WEBTONICA_AUTHOR',       wp_get_theme( basename( __DIR__ ) )->get( 'Author' ) );
define( 'WEBTONICA_AUTHOR_URI',   wp_get_theme( basename( __DIR__ ) )->get( 'AuthorURI' ) );
define( 'WEBTONICA_PARENT_THEME', wp_get_theme( basename( __DIR__ ) )->get( 'Template' ) );
define( 'WEBTONICA_URL',          get_theme_root_uri( basename( __DIR__ ) ) . '/' . basename( __DIR__ ) . '/' );
define( 'WEBTONICA_PATH',         get_theme_root( basename( __DIR__ ) ) . '/' . basename( __DIR__ ) . '/' );
define( 'WEBTONICA_INCLUDES',     WEBTONICA_PATH . 'includes/' );
define( 'WEBTONICA_DEBUG',        true );
// phpcs:enable

/* ==================================================
Setup Theme
================================================== */

if ( class_exists( 'ThemePlate' ) ) :
	ThemePlate( array(
		'title' => 'webtonica',
		'key'   => 'webtonica',
	) );
	require_once 'setup/post-types.php';
	require_once 'setup/settings.php';
	require_once 'setup/meta-boxes.php';
endif;

require_once 'setup/plugins.php';
require_once 'setup/features.php';
require_once 'setup/navigations.php';
require_once 'setup/widgets.php';
require_once 'setup/scripts-styles.php';
require_once 'setup/actions-filters.php';
require_once 'setup/hooks.php';

/* ==================================================
Extra custom functions
================================================== */

