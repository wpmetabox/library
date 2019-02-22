<?php
/**
 * This file demonstrates how to use 'checkbox_list' field
 */
add_filter( 'rwmb_meta_boxes', function ( $meta_boxes ) {
	$meta_boxes[] = array(
		'title'  => __( 'Checkbox List Demo', 'textdomain' ),

		'fields' => array(
			array(
				'name'    => __( 'Checkbox List', 'textdomain' ),
				'id'      => 'checkbox_list',
				'type'    => 'checkbox_list',
				'select_all_none' => true,

				// Array of 'value' => 'Label' pairs for radio options.
				// Note: the 'value' is stored in meta field, not the 'Label'
				'options' => array(
					'value1' => __( 'Label1', 'textdomain' ),
					'value2' => __( 'Label2', 'textdomain' ),
				),
			),
		),
	);

	return $meta_boxes;
} );