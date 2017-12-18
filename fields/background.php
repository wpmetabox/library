<?php
/**
 * This background demo field
 */
add_filter( 'rwmb_meta_boxes', 'your_prefix_background_demo' );
function your_prefix_background_demo( $meta_boxes ) {
	$meta_boxes[] = array(
		'title'  => __( 'Background demo', 'textdomain' ),
		'fields' => array(
			array(
				'name'     => __( 'Background Advanced', 'textdomain' ),
				'id'       => 'background_demo',
				'type'     => 'background',
			),
		),

	);
	return $meta_boxes;
}
