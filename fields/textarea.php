<?php
/**
 * This file demonstrates how to use 'textarea' field
 */
add_filter( 'rwmb_meta_boxes', 'your_prefix_textarea_demo' );
function your_prefix_textarea_demo( $meta_boxes ) {
	$meta_boxes[] = array(
		'title'  => __( 'Textarea Demo', 'textdomain' ),
		'fields' => array(
			array(
				'name'        => __( 'Textarea', 'textdomain' ),
				'id'          => 'textarea',
				'desc'        => __( 'Textarea description', 'textdomain' ),
				'type'        => 'textarea',

				// Default value (optional)
				'std'         => __( 'Default textarea value', 'textdomain' ),

				// CLONES: Add to make the field cloneable (i.e. have multiple value)
				// 'clone'       => true,

				// Placeholder
				'placeholder' => __( 'Enter something here', 'textdomain' ),

				// Number of rows
				'rows'        => 5,

				// Number of columns
				'cols'        => 5,
			),
		),
	);
	return $meta_boxes;
}
