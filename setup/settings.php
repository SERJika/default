<?php

/**
 * Register settings
 *
 * @package webtonica
 * @since 0.1.0
 */

ThemePlate()->settings( array(
	'id'          => 'google',
	'title'       => __( 'Google Codes', 'webtonica' ),
	'description' => __( 'Enter the tracking IDs to use in site.', 'webtonica' ),
	'context'     => 'side',
	'fields'      => array(
		'analytics'  => array(
			'title'       => __( 'Analytics', 'webtonica' ),
			'description' => __( 'UA-XXXXX-Y', 'webtonica' ),
			'type'        => 'text',
		),
		'tagmanager' => array(
			'title'       => __( 'Tag Manager', 'webtonica' ),
			'description' => __( 'GTM-XXXX', 'webtonica' ),
			'type'        => 'text',
		),
	),
) );

ThemePlate()->settings( array(
	'id'          => 'social',
	'title'       => __( 'Social Profiles', 'webtonica' ),
	'description' => __( 'Enter the links to the associated service.', 'webtonica' ),
	'context'     => 'normal',
	'fields'      => array(
		'profiles' => array(
			'title'      => __( 'Service', 'webtonica' ),
			'type'       => 'group',
			'repeatable' => true,
			'fields'     => array(
				'provider' => array(
					'title'   => __( 'Provider', 'webtonica' ),
					'type'    => 'select',
					'options' => array(
						'facebook'    => 'Facebook',
						'twitter'     => 'Twitter',
						'instagram'   => 'Instagram',
						'linkedin'    => 'LinkedIn',
						'youtube'     => 'Youtube',
						'pinterest'   => 'Pinterest',
						'google-plus' => 'Google+',
					),
				),
				'link'     => array(
					'title' => __( 'Link', 'webtonica' ),
					'type'  => 'url',
				),
			),
		),
	),
) );
