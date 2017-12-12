<?php
/**
 * This switch demo fiel
 */

add_filter( 'rwmb_meta_boxes', 'your_prefix_switch_demo' );
function your_prefix_switch_demo( $meta_boxes ) {
	$meta_boxes[] = array(
		'title'  => __( 'Checkbox Upload Demo', 'textdomain' ),
		'fields' => array(
			array(
				'id'   => 'switch',
				'name' => __( 'Switch demo', 'textdomain' ),
				'type' => 'switch',
				'std'  		=> 1,
				'style'		=> 'square',
				'on_label'	=> 'On',
				'off_label'	=> 'Off',
			),
		),
	);
	return $meta_boxes;
}
