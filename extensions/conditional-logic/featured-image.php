<?php
/**
 * Set a meta box visible/hidden when featured image is set/unset.
 */
add_filter( 'rwmb_meta_boxes', function ( $meta_boxes ) {
	$meta_boxes[] = array(
		'title'   => 'Homepage Settings',
		'visible' => array( '_thumbnail_id', '!=', '-1' ), // Visible when featured image is set.
		'fields'  => array(
			array(
				'id'   => 'heading',
				'name' => 'Heading Text',
				'type' => 'text',
			),
		),
	);

	return $meta_boxes;
} );
