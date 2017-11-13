<?php
/**
 * This file demonstrates how to use 'map' field
 */
add_filter( 'rwmb_meta_boxes', 'your_prefix_map_demo' );
function your_prefix_map_demo( $meta_boxes ) {
	$meta_boxes[] = array(
		'title'  => __( 'Google Map', 'textdomain' ),
		'fields' => array(
			// Map requires at least one address field (with type = text)
			array(
				'id'   => 'address',
				'name' => __( 'Address', 'textdomain' ),
				'type' => 'text',
				'std'  => __( 'Hanoi, Vietnam', 'textdomain' ),
			),
			array(
				'id'            => 'map',
				'name'          => __( 'Location', 'textdomain' ),
				'type'          => 'map',

				// Default location: 'latitude,longitude[,zoom]' (zoom is optional)
				'std'           => '-6.233406,-35.049906,15',

				// Name of text field where address is entered. Can be list of text fields, separated by commas (for ex. city, state)
				'address_field' => 'address',
				// 'api_key'       => 'XXXXXXXXX', // https://metabox.io/docs/define-fields/#section-map
			),
		),
	);

	return $meta_boxes;
}
