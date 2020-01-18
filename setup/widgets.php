<?php

/**
 * Register widget areas
 *
 * @package webtonica
 * @since 0.1.0
 */

if ( ! function_exists( 'webtonica_widgets_init' ) ) {
	function webtonica_widgets_init() {
		register_sidebar( array(
			'id'            => 'sidebar',
			'name'          => __( 'Sidebar Area', 'webtonica' ),
			'description'   => __( 'Add widgets here to appear in sidebar.', 'webtonica' ),
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
			'before_widget' => '<section class="widget %2$s">',
			'after_widget'  => '</section>',
		) );
		register_sidebars( 3, array(
			'id'            => 'footer',
			/* translators: count */
			'name'          => __( 'Footer Area %d', 'webtonica' ),
			'description'   => __( 'Add widgets here to appear in footer.', 'webtonica' ),
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
			'before_widget' => '<section class="widget %2$s">',
			'after_widget'  => '</section>',
		) );

		$widgets = glob( WEBTONICA_PATH . 'widgets/*_widget.php' );
		foreach ( $widgets as $widget ) {
			require_once $widget;
			if ( class_exists( 'webtonica_' . basename( $widget, '.php' ) ) ) {
				register_widget( 'webtonica_' . basename( $widget, '.php' ) );
			}
		}
	}
	add_action( 'widgets_init', 'webtonica_widgets_init' );
}
