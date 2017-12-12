<?php
/**
 * This switch demo fiel
 */

add_filter( 'rwmb_meta_boxes', 'your_prefix_switch_demo' );
function your_prefix_switch_demo( $meta_boxes ) {
	$meta_boxes[] = array(
		'title'  => __( 'Check switch rounded demo', 'textdomain' ),
		'fields' => array(
			array(
				'type'      => 'switch',
				'name' 		=> esc_html__( 'Rounded no label', 'textdomain' ),
				'id'   		=> "switch_rounded",
				// Value can be 0 or 1
				'std'  		=> 1,

			),
			array(
				'type'      => 'switch',
				'name' 		=> esc_html__( 'On-Off label', 'textdomain' ),
				'id'   		=> "switch_rounded_label",
				// Value can be 0 or 1
				'std'  		=> 1,
				'on_label'	=> esc_html__( 'On', 'textdomain' ),
				'off_label'	=> esc_html__( 'Off', 'textdomain' ),
			),
			array(
				'type'      => 'switch',
				'name' 		=> esc_html__( 'With icon', 'textdomain' ),
				'id'   		=> "switch_rounded_label_true",
				// Value can be 0 or 1
				'std'  		=> 1,
				'on_label'	=> '<span class="dashicons dashicons-yes"></span>',
				'off_label'	=> '<span class="dashicons dashicons-no"></span>',
			),
		),
	);
	$meta_boxes[] = array(
		'title'  => __( 'Check switch square demo', 'textdomain' ),
		'fields' => array(
			array(
				'id'   => 'switch_square',
				'name' => __( 'Square no label', 'textdomain' ),
				'type' => 'switch',
				'std'  		=> 1,
				'style'		=> 'square',
			),
			array(
				'type'      => 'switch',
				'name' 		=> esc_html__( 'Enable - Disable', 'textdomain' ),
				'id'   		=> "switch_square_label",
				// Value can be 0 or 1
				'std'  		=> 1,
				// 2 style: rounded and square
				'style'		=> 'square',
				'on_label'	=> esc_html__( 'Enable', 'textdomain' ),
				'off_label'	=> esc_html__( 'Disable', 'textdomain' ),
			),

		),

	);
	return $meta_boxes;
}
