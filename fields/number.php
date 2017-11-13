<?php
/**
 * This file demonstrates how to use 'number' field
 */
add_filter( 'rwmb_meta_boxes', 'your_prefix_number_demo' );
function your_prefix_number_demo( $meta_boxes ) {
	$meta_boxes[] = array(
		'title'  => __( 'Number Field Demo', 'textdomain' ),
		'fields' => array(
			array(
				'id'          => 'number',
				'name'        => __( 'Number', 'textdomain' ),
				'type'        => 'number',

				// Number step. Set to 'any' to accept float value
				'step'        => 'any',

				// Minimum value
				'min'         => 0,

				// Placeholder
				'placeholder' => __( 'Enter number:', 'textdomain' ),
			),
		),
	);

	return $meta_boxes;
}
