<?php
/**
 * This file demonstrate how to use "osm" (Open Street Map) field.
 */

add_filter( 'rwmb_meta_boxes', function( $meta_boxes ) {
	$meta_boxes[] = [
		'title' => 'Test Open Street Map Field',
		'fields' => [
			[
				'type' => 'text',
				'id'   => 't',
				'name' => 'Address',
			],
			[
				'type'          => 'osm',
				'id'            => 'osm',
				'name'          => 'Open Street Map',
				'region'        => 'vn', // Limit search results to a specific country (or a list of countries). Accepts ISO 3166-1alpha2 code. https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2
				'language'      => 'vi', // Used for display auto-complete results. Accepts standard rfc2616 "accept-language" string or a simple comma separated list of language codes. https://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html
        'address_field' => 't',
			],
		],
	];
	return $meta_boxes;
} );
