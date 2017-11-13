<?php
/**
 * This demo shows you how to add custom fields to media modal when viewing/editing an attachment.
 *
 * @package Meta Box
 */

add_filter( 'rwmb_meta_boxes', function ( $meta_boxes ) {
	$prefix       = 'your_prefix_';
	$meta_boxes[] = array(
		'title'       => esc_html__( 'Standard Fields', 'textdomain' ),

		'post_types'  => 'attachment', // Must set to 'attachment' or contains 'attachment'.
		'media_modal' => true,         // Must set to true.

		'fields'      => array(
			array(
				'name' => esc_html__( 'Text', 'textdomain' ),
				'id'   => "{$prefix}text",
				'type' => 'text',
			),
			array(
				'name' => esc_html__( 'Checkbox', 'textdomain' ),
				'id'   => "{$prefix}checkbox",
				'type' => 'checkbox',
			),
			array(
				'name'    => esc_html__( 'Radio', 'textdomain' ),
				'id'      => "{$prefix}radio",
				'type'    => 'radio',
				'options' => array(
					'value1' => esc_html__( 'Label1', 'textdomain' ),
					'value2' => esc_html__( 'Label2', 'textdomain' ),
				),
			),
			array(
				'name'    => esc_html__( 'Select', 'textdomain' ),
				'id'      => "{$prefix}select",
				'type'    => 'select',
				'options' => array(
					'value1' => esc_html__( 'Label1', 'textdomain' ),
					'value2' => esc_html__( 'Label2', 'textdomain' ),
				),
			),
			array(
				'name' => esc_html__( 'Textarea', 'textdomain' ),
				'id'   => "{$prefix}textarea",
				'type' => 'textarea',
			),
		),
	);

	return $meta_boxes;
} );
