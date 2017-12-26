<?php
/**
 * Single image field demo.
 *
 * @package Meta Box
 */

add_filter( 'rwmb_meta_boxes', 'your_prefix_single_image_demo' );
function your_prefix_single_image_demo( $meta_boxes ) {
	$meta_boxes[] = array(
		'title'  => __( 'Single Image Demo', 'textdomain' ),
		'fields' => array(
			array(
				'name' => __( 'Single Image', 'textdomain' ),
				'id'   => 'single_img',
				'type' => 'single_image',
				// 'clone' => true,
			),
		),
	);
	return $meta_boxes;
}
