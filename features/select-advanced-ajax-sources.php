<?php
/**
 * This file demonstrate how to use `select_advanced` field to fetch options from remote source via ajax.
 */
 
// Register a meta box.
add_filter( 'rwmb_meta_boxes', function( $meta_boxes ) {
	$meta_boxes[] = [
		'title' => 'Fetch options via Ajax',
		'fields' => [
			[
				'type'                  => 'select_advanced',
				'id'                    => 's',
				'name'                  => 'Select2 Ajax',
				'ajax_callback'         => 'test_callback',
				'ajax_initial_callback' => 'test_initial_callback',
				'multiple'              => true,
			]
		],
	];
	return $meta_boxes;
} );

/**
 * The callback function that returns all items.
 * The format follows select2's documentation: https://select2.org/data-sources/formats
 */
function test_callback() {
	return [
		"results" => [
			[
				"id" => '1',
				"text" => 'So 1',
			],
			[
				"id" => '2',
				"text" => 'So 2',
			],
			[
				"id" => '3',
				"text" => 'So 3',
			],
		]
	];
}

/**
 * The callback function that returns selected items when page initially loads.
 * The format is an array of items. Each item is array( 'id' => 'value', 'text' => 'label' ).
 */
function test_initial_callback( $selected_values ) {
	$items = [
		1 => 'So 1',
		2 => 'So 2',
		3 => 'So 3',
	];
	$return = [];
	foreach ( $selected_values as $selected_value ) {
		if ( ! isset( $items[$selected_value] ) ) {
			continue;
		}
		$return[] = [
			'id'   => $selected_value,
			'text' => $items[$selected_value],
		];
	}

	return $return;
}
