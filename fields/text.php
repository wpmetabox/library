<?php
/**
 * This file demonstrates how to use 'text' field
 */
add_filter( 'rwmb_meta_boxes', 'your_prefix_text_demo' );
function your_prefix_text_demo( $meta_boxes ) {
	$meta_boxes[] = array(
		'title'  => __( 'Text Demo', 'textdomain' ),
		'fields' => array(
			array(
				'name'        => __( 'Text', 'textdomain' ),
				'label_description' => __( 'Label description', 'your' ),
				'id'          => 'text',
				'desc'        => __( 'Please enter some text above', 'textdomain' ),
				'type'        => 'text',

				// Default value (optional)
				// 'std'         => __( 'Default text value', 'textdomain' ),

				// CLONES: Add to make the field cloneable (i.e. have multiple value)
				'clone'       => true,

				// Placeholder
				'placeholder' => __( 'Enter something here', 'textdomain' ),

				// Input size
				'size'        => 30,

				// Datalist
				'datalist'    => array(
					// Unique ID for datalist
					'id'      => 'text_datalist',
					// List of predefined options
					'options' => array(
						__( 'What', 'textdomain' ),
						__( 'When', 'textdomain' ),
						__( 'Where', 'textdomain' ),
						__( 'Why', 'textdomain' ),
						__( 'Who', 'textdomain' ),
					),
				),
			),
		),
	);
	return $meta_boxes;
}
