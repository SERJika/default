<?php

/**
 * Register custom post types
 *
 * @package webtonica
 * @since 0.1.0
 */

ThemePlate()->post_type( array(
	'name'        => 'portfolio',
	'plural'      => __( 'Portfolio', 'webtonica' ),
	'singular'    => __( 'Portfolio', 'webtonica' ),
	'description' => __( 'Portfolio', 'webtonica' ),
	'args'        => array(
		'menu_position' => 5,
		'menu_icon'     => 'dashicons-media-document',
		'supports'      => array( 'title', 'editor', 'thumbnail' ),
		'has_archive'   => true,
	),
) );

ThemePlate()->taxonomy( array(
	'name'        => 'portfolio-cat',
	'plural'      => __( 'Categories', 'webtonica' ),
	'singular'    => __( 'Category', 'webtonica' ),
	'description' => __( 'Portfolio Category', 'webtonica' ),
	'type'        => 'portfolio',
	'args'        => array(
		'hierarchical' => true,
	),
) );

ThemePlate()->taxonomy( array(
	'name'        => 'portfolio-tag',
	'plural'      => __( 'Tags', 'webtonica' ),
	'singular'    => __( 'Tag', 'webtonica' ),
	'description' => __( 'Portfolio Tag', 'webtonica' ),
	'type'        => 'portfolio',
) );
