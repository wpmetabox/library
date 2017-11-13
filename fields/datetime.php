<?php
add_filter( 'rwmb_meta_boxes', 'your_prefix_register_meta_boxes' );

function your_prefix_register_meta_boxes( $meta_boxes ) {
	$prefix = 'your_prefix_';
	$meta_boxes[] = array(
		'title' => __( 'Date Time Picker With JS Options', 'textdomain' ),

		'fields' => array(
			array(
				'name' => __( 'Date', 'textdomain' ),
				'id'   => $prefix . 'date',
				'type' => 'date',

				// jQuery date picker options. See here http://jqueryui.com/demos/datepicker
				'js_options' => array(
					'appendText'      => __( '(yyyy-mm-dd)', 'textdomain' ),
					'autoSize'        => true,
					'buttonText'      => __( 'Select Date', 'textdomain' ),
					'dateFormat'      => __( 'yy-mm-dd', 'textdomain' ),
					'numberOfMonths'  => 2,
					'showButtonPanel' => true,
				),
			),
			array(
				'name' => __( 'Inline Date', 'textdomain' ),
				'id'   => $prefix . 'inline-date',
				'type' => 'date',

				// jQuery date picker options. See here http://jqueryui.com/demos/datepicker
				'js_options' => array(
					'appendText'      => __( '(yyyy-mm-dd)', 'textdomain' ),
					'autoSize'        => true,
					'buttonText'      => __( 'Select Date', 'textdomain' ),
					'dateFormat'      => __( 'yy-mm-dd', 'textdomain' ),
					'numberOfMonths'  => 2,
					'showButtonPanel' => true,
				),
				'inline' => true,
			),
			array(
				'name' => __( 'Datetime', 'textdomain' ),
				'id'   => $prefix . 'datetime',
				'type' => 'datetime',

				// jQuery datetime picker options. See here http://trentrichardson.com/examples/timepicker/
				'js_options' => array(
					'stepMinute'     => 15,
					'showTimepicker' => true,
				),
			),
			array(
				'name' => __( 'Time', 'textdomain' ),
				'id'   => $prefix . 'time',
				'type' => 'time',

				// jQuery datetime picker options. See here http://trentrichardson.com/examples/timepicker/
				'js_options' => array(
					'stepMinute' => 5,
					'showSecond' => true,
					'stepSecond' => 10,
				),
			),
		),
	);

	return $meta_boxes;
}
