<?php
add_filter( 'rwmb_meta_boxes', function ( $meta_boxes ) {
	$meta_boxes[] = [
		'title'  => 'Test WYSIWYG field (aka editor)',
		'fields' => [
			// WYSIWYG/RICH TEXT EDITOR
			array(
				'name'    => esc_html__( 'WYSIWYG / Rich Text Editor', 'your-prefix' ),
				'id'      => 'wysiwyg',
				'type'    => 'wysiwyg',
				// Set the 'raw' parameter to TRUE to prevent data being passed through wpautop() on save
				'raw'     => false,
				'std'     => esc_html__( 'WYSIWYG default value', 'your-prefix' ),

				// Editor settings, see wp_editor() function: look4wp.com/wp_editor
				'options' => array(
					'textarea_rows' => 4,
					'teeny'         => true,
					'media_buttons' => false,
				),
			),
		],
	];
	return $meta_boxes;
} );
