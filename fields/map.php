<?php
/**
 * This file demonstrates how to use 'map' field
 *
 * @see     https://docs.metabox.io/fields/map/#settings
 * @package Meta Box
 */

add_filter( 'rwmb_meta_boxes', function ( $meta_boxes ) {
	$meta_boxes[] = array(
		'title'  => __( 'Google Map', 'textdomain' ),
		'fields' => array(
			// Map requires at least one address field (with type = text).
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

				// Your Google Maps API key. Required.
				'api_key'       => 'XXXXXXXXX',

				// Address field ID. Can be a string or list of text fields, separated by commas (for ex. city, state).
				'address_field' => 'address',

				// Map language.
				'language'      => 'ru_RU',

				// The region code, specified as a country code top-level domain. For better autocomplete address.
				'region'        => 'ru',

				// Default location: 'latitude,longitude[,zoom]' (zoom is optional).
				'std'           => '-6.233406,-35.049906,15',
			),
		),
	);

	return $meta_boxes;
} );
