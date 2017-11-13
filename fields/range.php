<?php
/**
 * This file demonstrates how to use 'range' field
 */
add_filter( 'rwmb_meta_boxes', 'your_prefix_range_demo' );
function your_prefix_range_demo( $meta_boxes ) {
	$meta_boxes[] = array(
		'title'  => __( 'Range Field Demo', 'textdomain' ),

		'fields' => array(
			array(
				'name' => __( 'Range', 'textdomain' ),
				'id'   => 'range',
				'type' => 'range',
				'desc' => __( 'Background Opacity', 'textdomain' ),

				// Minimum value
				'min'  => 0,
				// Maximum value
				'max'  => 60,
				// Step
				'step' => 5,
			),
		),
	);

	return $meta_boxes;
}


