<?php
/**
 * This Button group demo field
 */

add_filter( 'rwmb_meta_boxes', 'your_prefix_button_group_demo' );
function your_prefix_button_group_demo( $meta_boxes ) {
	$meta_boxes[] = array(
		'title'  => __( 'Button group demo', 'textdomain' ),
		'fields' => array(
			array(
				'name'    => esc_html__( 'Text label', 'textdomain' ),
				'id'      => "button_group_label_text",
				'type'    => 'button_group',
				// Array of 'value' => 'Label' pairs for radio options.
				// Note: the 'value' is stored in meta field, not the 'Label'
				'options' => array(
					'button1' => esc_html__( 'Button 1', 'textdomain' ),
					'button2' => esc_html__( 'Button 2', 'textdomain' ),
					'button3' => esc_html__( 'Button 3', 'textdomain' ),
					'button4' => esc_html__( 'Button 4', 'textdomain' ),
					'button5' => esc_html__( 'Button 5', 'textdomain' ),
				),

				// Display inline? value : true - false
				'inline' => true,

				// Display multiple? value : true - false
				// 'multiple'    => true,
				'clone'       => true,
			),

			array(
				'name'    => esc_html__( 'With icon + multiple choices', 'textdomain' ),
				'id'      => "button_group_label_icon",
				'type'    => 'button_group',
				// Array of 'value' => 'Label' pairs for radio options.
				// Note: the 'value' is stored in meta field, not the 'Label'
				'options' => array(
					'bold' 			=> '<span class="dashicons dashicons-editor-bold"></span>',
					'italic' 		=> '<span class="dashicons dashicons-editor-italic"></span>',
					'alignleft' 	=> '<span class="dashicons dashicons-editor-alignleft"></span>',
					'aligncenter' 	=> '<span class="dashicons dashicons-editor-aligncenter"></span>',
					'alignright' 	=> '<span class="dashicons dashicons-editor-alignright"></span>',
				),

				// Display inline? value : true - false
				'inline' => true,

				// Display multiple? value : true - false
				'multiple'    => true,
				'clone'       => true,
			),

			array(
				'name'    => esc_html__( 'Vertical icons', 'textdomain' ),
				'id'      => "button_group_label_icon_position_inline",
				'type'    => 'button_group',
				// Array of 'value' => 'Label' pairs for radio options.
				// Note: the 'value' is stored in meta field, not the 'Label'
				'options' => array(
					'rss' 			=> '<span class="dashicons dashicons-rss"></span>',
					'twitter' 		=> '<span class="dashicons dashicons-twitter"></span>',
					'facebook' 		=> '<span class="dashicons dashicons-facebook-alt"></span>',
					'googleplus' 	=> '<span class="dashicons dashicons-googleplus"></span>',
				),

				// Display inline? value : true - false
				'inline' => false,

				// Display multiple? value : true - false
				'multiple'    => true,
				'clone'       => true,
			),
		),

	);
	return $meta_boxes;
}
