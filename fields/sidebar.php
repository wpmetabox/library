<?php
/**
 * This file demonstrates how to use 'sidebar' field
 *
 * @package Meta Box
 */

add_filter( 'rwmb_meta_boxes', function ( $meta_boxes ) {
	$meta_boxes[] = array(
		'title' => __( 'Sidebar Field Demo', 'textdomain' ),

		'fields' => array(
			array(
				'name'        => __( 'Sidebar', 'textdomain' ),
				'id'          => 'sidebar',
				'type'        => 'sidebar',

				// Field type: select, select_advanced, radio_list, checkbox_list.
				'field_type'  => 'select_advanced',

				// Placeholder.
				'placeholder' => __( 'Select a sidebar', 'textdomain' ),

				// 'clone'       => true,
				// 'multiple'    => true,
			),
		),
	);

	return $meta_boxes;
} );
