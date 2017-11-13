<?php
/**
 * This file demonstrates how to use 'custom_html' field
 */

add_filter( 'rwmb_meta_boxes', 'your_prefix_custom_html_demo' );
function your_prefix_custom_html_demo( $meta_boxes ) {
	$meta_boxes[] = array(
		'title'  => __( 'Custom HTML Demo', 'textdomain' ),
		'fields' => array(
			array(
				// Field name: usually not used
				// 'name' => __( 'Custom HTML', 'textdomain' ),
				'type' => 'custom_html',

				// HTML content
				'std'  => '<div class="alert alert-warning">Please be careful with the data entered in each field</div>',

				// Callback function to show custom HTML
				// 'callback' => 'display_warning',
			),
		),
	);
	return $meta_boxes;
}
