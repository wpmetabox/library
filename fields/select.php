<?php
/**
 * This file demonstrates how to use 'select' field
 */
add_filter( 'rwmb_meta_boxes', 'your_prefix_select_demo' );
function your_prefix_select_demo( $meta_boxes ) {
	$meta_boxes[] = array(
		'title' => __( 'Select Field Demo', 'textdomain' ),

		'fields' => array(
			array(
				'name'    => __( 'Select', 'textdomain' ),
				'id'      => 'select_simple',
				'type'    => 'select',
				'options' => array(
					'value1' => __( 'Label1', 'textdomain' ),
					'value2' => __( 'Label2', 'textdomain' ),
				),
			),
			array(
				'name' => __( 'Select', 'textdomain' ),
				'id'   => 'select',
				'type' => 'select',

				'clone'       => true,

				// Array of 'value' => 'Label' pairs for select box
				'options'     => array(
					'value1' => __( 'Label1', 'textdomain' ),
					'value2' => __( 'Label2', 'textdomain' ),
				),

				// Select multiple values, optional. Default is false.
				'multiple'    => true,

				// Default selected value
				'std'         => 'value2',

				// Placeholder
				'placeholder' => __( 'Select an Item', 'textdomain' ),
			),
			array(
				'name'     => __( 'Select Advanced', 'textdomain' ),
				'id'       => 'select_advanced',
				'type'     => 'select_advanced',

				// Array of 'value' => 'Label' pairs for select box
				'options'  => array(
					'value1' => __( 'Label1', 'textdomain' ),
					'value2' => __( 'Label2', 'textdomain' ),
				),

				// Select multiple values, optional. Default is false.
				'multiple' => false,

				'std'         => 'value2', // Default value, optional
				'placeholder' => __( 'Select an Item', 'textdomain' ),
			),

		),
	);

	return $meta_boxes;
}


