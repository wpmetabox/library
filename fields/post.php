<?php
/**
 * This file demonstrates how to use 'post' field
 */
add_filter( 'rwmb_meta_boxes', 'your_prefix_post_demo' );
function your_prefix_post_demo( $meta_boxes ) {
	$meta_boxes[] = array(
		'title'  => __( 'Post Field Demo', 'textdomain' ),

		'fields' => array(
			array(
				'name'        => __( 'Post', 'textdomain' ),
				'id'          => 'post',
				'type'        => 'post',

				// 'clone'       => true,
				// 'multiple'    => true,
				// Post type: string (for single post type) or array (for multiple post types)
				'post_type'   => array( 'page' ),

				// Default selected value (post ID)
				// 'std'         => 1,

				// Field type, either 'select' or 'select_advanced' (default)
				// 'field_type'  => 'select_advanced',
				// 'field_type'  => 'checkbox_list',
				// 'field_type'  => 'checkbox_tree',
				// 'field_type'  => 'select_tree',
				'field_type'  => 'radio_list',
				// 'inline' => false,

				// Placeholder
				'placeholder' => __( 'Select an Item', 'textdomain' ),

				// Query arguments (optional). No settings means get all published posts
				// @see https://codex.wordpress.org/Class_Reference/WP_Query
				'query_args'  => array(
					'post_status'    => 'publish',
					'posts_per_page' => - 1,
				),
			),
		),
	);

	return $meta_boxes;
}


