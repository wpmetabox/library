<?php
/**
 * This file demonstrates the new contexts in Meta Box 4.13.0
 */


add_filter( 'rwmb_meta_boxes', function ( $meta_boxes ) {
	$meta_boxes[] = array(
		'title'   => esc_html__( 'Form Top', 'textdomain' ),
		'context' => 'form_top',
		'style'   => 'seamless',
		'fields'  => array(
			array(
				'type' => 'custom_html',
				'std'  => '<div style="background: #d1ecf1; padding: 1em;">This is a notice</div>',
			),
		),
	);
	$meta_boxes[] = array(
		'title'   => esc_html__( 'After Post Title', 'textdomain' ),
		'context' => 'after_title',
		'style'   => 'seamless',
		'fields'  => array(
			array(
				'id'   => 'featured',
				'name' => esc_html__( 'Make this post featured?', 'textdomain' ),
				'type' => 'checkbox',
			),
		),
	);
	return $meta_boxes;
} );
