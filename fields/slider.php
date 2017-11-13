<?php
/**
 * This file demonstrates how to use 'slider' field
 */
add_filter( 'rwmb_meta_boxes', 'your_prefix_slider_demo' );
function your_prefix_slider_demo( $meta_boxes ) {
	$meta_boxes[] = array(
		'title' => __( 'Slider Demo', 'textdomain' ),
		'fields' => array(
			array(
				'name' => __( 'Slider', 'textdomain' ),
				'id'   => 'slider',
				'type' => 'slider',

				// Text labels displayed before and after value
				'prefix' => __( '$', 'textdomain' ),
				'suffix' => __( ' USD', 'textdomain' ),

				// jQuery UI slider options. See here http://api.jqueryui.com/slider/
				'js_options' => array(
					'min'   => 10,
					'max'   => 255,
					'step'  => 5,
				),

				'std' => 150,
				// 'clone' => true,
			),
		),
	);
	return $meta_boxes;
}
