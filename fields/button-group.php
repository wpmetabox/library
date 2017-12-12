<?php
/**
 * This Button group demo field
 */

add_filter( 'rwmb_meta_boxes', 'your_prefix_button_group_demo' );
function your_prefix_button_group_demo( $meta_boxes ) {
	$meta_boxes[] = array(
		'title'  => __( 'Button Group Demo', 'textdomain' ),
		'fields' => array(
			array(
				'id'   => 'button_group',
				'name' => __( 'Button group demo', 'textdomain' ),
				'type' => 'button_group',
				// Array of 'value' => 'Label' pairs for radio options.
				// Note: the 'value' is stored in meta field, not the 'Label'
				'options' => array(
					'value1' => esc_html__( 'Button 1', 'textdomain' ),
					'value2' => esc_html__( 'Button 2', 'textdomain' ),
					'value3' => esc_html__( 'Button 3', 'textdomain' ),
					'value4' => esc_html__( 'Button 4', 'textdomain' ),
					'value5' => esc_html__( 'Button 5', 'textdomain' ),
				),
				// style defause wordpress button
				'attributes' => array(
					'class'        => 'button',
				),
				// Display inline? value : true - false
				'inline' => true,

				// Display multiple? value : true - false
				'multiple'    => true,
			),
		),
	);
	return $meta_boxes;
}
