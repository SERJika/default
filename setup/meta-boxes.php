<?php

/**
 * Register meta boxes
 *
 * @package webtonica
 * @since 0.1.0
 */

ThemePlate()->post_meta( array(
	'id'          => 'field',
	'title'       => __( 'ThemePlate Fields', 'webtonica' ),
	'description' => __( 'All available types.', 'webtonica' ),
	'fields'      => array(
		'text'     => array(
			'title'       => __( 'Text', 'webtonica' ),
			'description' => __( 'Enter a text.', 'webtonica' ),
			'type'        => 'text',
		),
		'date'     => array(
			'title'       => __( 'Date', 'webtonica' ),
			'description' => __( 'Set a date.', 'webtonica' ),
			'type'        => 'date',
		),
		'time'     => array(
			'title'       => __( 'Time', 'webtonica' ),
			'description' => __( 'Set a time.', 'webtonica' ),
			'type'        => 'time',
		),
		'email'    => array(
			'title'       => __( 'Email', 'webtonica' ),
			'description' => __( 'Enter an email.', 'webtonica' ),
			'type'        => 'email',
		),
		'url'      => array(
			'title'       => __( 'URL', 'webtonica' ),
			'description' => __( 'Enter a url.', 'webtonica' ),
			'type'        => 'url',
		),
		'textarea' => array(
			'title'       => __( 'Textarea', 'webtonica' ),
			'description' => __( 'Enter in a textarea.', 'webtonica' ),
			'type'        => 'textarea',
		),
		'selects'  => array(
			'title'       => __( 'Selects', 'webtonica' ),
			'description' => __( 'Basic and Advanced select.', 'webtonica' ),
			'type'        => 'group',
			'fields'      => array(
				'basic'    => array(
					'title'       => __( 'Basic', 'webtonica' ),
					'description' => __( 'Single and Multiple select.', 'webtonica' ),
					'type'        => 'group',
					'style'       => 'boxed',
					'fields'      => array(
						'single'   => array(
							'title'       => __( 'Single', 'webtonica' ),
							'description' => __( 'Select a value.', 'webtonica' ),
							'options'     => array( 'One', 'Two', 'Three' ),
							'type'        => 'select',
						),
						'multiple' => array(
							'title'       => __( 'Multiple', 'webtonica' ),
							'description' => __( 'Select values.', 'webtonica' ),
							'options'     => array( 'One', 'Two', 'Three', 'Four', 'Five', 'Six' ),
							'type'        => 'select',
							'multiple'    => true,
						),
					),
				),
				'advanced' => array(
					'title'       => __( 'Advanced', 'webtonica' ),
					'description' => __( 'Single and Multiple select.', 'webtonica' ),
					'type'        => 'group',
					'style'       => 'boxed',
					'fields'      => array(
						'single'   => array(
							'title'       => __( 'Single', 'webtonica' ),
							'description' => __( 'Select a value.', 'webtonica' ),
							'options'     => array( 'One', 'Two', 'Three' ),
							'type'        => 'select2',
						),
						'multiple' => array(
							'title'       => __( 'Multiple', 'webtonica' ),
							'description' => __( 'Select values.', 'webtonica' ),
							'options'     => array( 'One', 'Two', 'Three', 'Four', 'Five', 'Six' ),
							'type'        => 'select2',
							'multiple'    => true,
						),
					),
				),
			),
		),
		'choices'  => array(
			'title'       => __( 'Choices', 'webtonica' ),
			'description' => __( 'Single and Multiple choices.', 'webtonica' ),
			'type'        => 'group',
			'style'       => 'boxed',
			'fields'      => array(
				'radios'     => array(
					'title'       => __( 'Radios', 'webtonica' ),
					'description' => __( 'Inline and List radio.', 'webtonica' ),
					'type'        => 'group',
					'fields'      => array(
						'inline' => array(
							'title'       => __( 'Inline', 'webtonica' ),
							'description' => __( 'Select from radio.', 'webtonica' ),
							'options'     => array( 'First', 'Second', 'Third' ),
							'type'        => 'radio',
						),
						'list'   => array(
							'title'       => __( 'List', 'webtonica' ),
							'description' => __( 'Select from radio.', 'webtonica' ),
							'options'     => array( 'Fourth', 'Fifth', 'Sixth' ),
							'type'        => 'radiolist',
						),
					),
				),
				'checkboxes' => array(
					'title'       => __( 'Checkboxes', 'webtonica' ),
					'description' => __( 'Inline and List checkbox.', 'webtonica' ),
					'type'        => 'group',
					'fields'      => array(
						'inline' => array(
							'title'       => __( 'Inline', 'webtonica' ),
							'description' => __( 'Check a box.', 'webtonica' ),
							'options'     => array( 'Uno', 'Dos', 'Tres' ),
							'type'        => 'checkbox',
						),
						'list'   => array(
							'title'       => __( 'List', 'webtonica' ),
							'description' => __( 'Check a box.', 'webtonica' ),
							'options'     => array( 'Uno', 'Dos', 'Tres' ),
							'type'        => 'checklist',
						),
					),
				),
			),
		),
		'color'    => array(
			'title'       => __( 'Color', 'webtonica' ),
			'description' => __( 'Select a color.', 'webtonica' ),
			'type'        => 'color',
		),
		'files'    => array(
			'title'       => __( 'Files', 'webtonica' ),
			'description' => __( 'Single and Multiple file.', 'webtonica' ),
			'type'        => 'group',
			'fields'      => array(
				'single'   => array(
					'title'       => __( 'Single', 'webtonica' ),
					'description' => __( 'Select a file.', 'webtonica' ),
					'type'        => 'file',
				),
				'multiple' => array(
					'title'       => __( 'Multiple', 'webtonica' ),
					'description' => __( 'Select files.', 'webtonica' ),
					'type'        => 'file',
					'multiple'    => true,
				),
			),
		),
		'number'   => array(
			'title'       => __( 'Number', 'webtonica' ),
			'description' => __( 'Set a number.', 'webtonica' ),
			'type'        => 'number',
		),
		'range'    => array(
			'title'       => __( 'Range', 'webtonica' ),
			'description' => __( 'Set a range.', 'webtonica' ),
			'type'        => 'range',
		),
		'editor'   => array(
			'title'       => __( 'Editor', 'webtonica' ),
			'description' => __( 'Enter in an editor.', 'webtonica' ),
			'type'        => 'editor',
		),
		'objects'  => array(
			'title'  => __( 'Objects', 'webtonica' ),
			'type'   => 'group',
			'style'  => 'boxed',
			'fields' => array(
				'post' => array(
					'title'       => __( 'Posts', 'webtonica' ),
					'description' => __( 'Single and Multiple post.', 'webtonica' ),
					'type'        => 'group',
					'style'       => 'boxed',
					'fields'      => array(
						'single'   => array(
							'title'       => __( 'Single', 'webtonica' ),
							'description' => __( 'Select a post.', 'webtonica' ),
							'type'        => 'post',
							'options'     => 'post',
						),
						'multiple' => array(
							'title'       => __( 'Multiple', 'webtonica' ),
							'description' => __( 'Select posts.', 'webtonica' ),
							'type'        => 'post',
							'options'     => 'post',
							'multiple'    => true,
						),
					),
				),
				'page' => array(
					'title'       => __( 'Pages', 'webtonica' ),
					'description' => __( 'Single and Multiple page.', 'webtonica' ),
					'type'        => 'group',
					'style'       => 'boxed',
					'fields'      => array(
						'single'   => array(
							'title'       => __( 'Single', 'webtonica' ),
							'description' => __( 'Select a page.', 'webtonica' ),
							'type'        => 'page',
							'options'     => 'page',
						),
						'multiple' => array(
							'title'       => __( 'Multiple', 'webtonica' ),
							'description' => __( 'Select pages.', 'webtonica' ),
							'type'        => 'page',
							'options'     => 'page',
							'multiple'    => true,
						),
					),
				),
				'user' => array(
					'title'       => __( 'Users', 'webtonica' ),
					'description' => __( 'Single and Multiple user.', 'webtonica' ),
					'type'        => 'group',
					'style'       => 'boxed',
					'fields'      => array(
						'single'   => array(
							'title'       => __( 'Single', 'webtonica' ),
							'description' => __( 'Select a user.', 'webtonica' ),
							'type'        => 'user',
							'options'     => 'administrator',
						),
						'multiple' => array(
							'title'       => __( 'Multiple', 'webtonica' ),
							'description' => __( 'Select users.', 'webtonica' ),
							'type'        => 'user',
							'options'     => 'administrator',
							'multiple'    => true,
						),
					),
				),
				'term' => array(
					'title'       => __( 'Terms', 'webtonica' ),
					'description' => __( 'Single and Multiple term.', 'webtonica' ),
					'type'        => 'group',
					'style'       => 'boxed',
					'fields'      => array(
						'single'   => array(
							'title'       => __( 'Single', 'webtonica' ),
							'description' => __( 'Select a term.', 'webtonica' ),
							'type'        => 'term',
							'options'     => 'category',
						),
						'multiple' => array(
							'title'       => __( 'Multiple', 'webtonica' ),
							'description' => __( 'Select terms.', 'webtonica' ),
							'type'        => 'term',
							'options'     => 'category',
							'multiple'    => true,
						),
					),
				),
			),
		),
		'html'     => array(
			'type'    => 'html',
			'default' => '
				<div style="background-color: #d32f2f; padding: 1rem; border-radius: 0.25rem;">
					<p style="color: #fff; text-align: center;">Display custom content using an <code>html</code> field.</p>
				</div>
			',
		),
	),
) );
