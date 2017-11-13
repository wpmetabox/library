<?php
/**
 * This file demonstrates how to use 'file' fields
 *
 * @package Meta Box
 */

add_filter( 'rwmb_meta_boxes', 'your_prefix_file_demo' );
function your_prefix_file_demo( $meta_boxes ) {
	$meta_boxes[] = array(
		'title'  => __( 'File Upload Demo', 'textdomain' ),
		'fields' => array(
			array(
				'id'           => 'file',
				'name'         => __( 'File', 'textdomain' ),
				'type'         => 'file',

				// Delete file from Media Library when remove it from post meta?
				// Note: it might affect other posts if you use same file for multiple posts.
				// 'force_delete' => true,

				// Maximum file uploads.
				// 'max_file_uploads' => 2,
			),
			array(
				'id'           => 'file2',
				'name'         => __( 'File Clone', 'textdomain' ),
				'type'         => 'file',
				'force_delete' => true,
				'clone'        => true,
			),
			array(
				'id'               => 'file_advanced',
				'name'             => __( 'File Advanced', 'textdomain' ),
				'type'             => 'file_advanced',
				'force_delete'     => false,
				'max_file_uploads' => 2,
			),
			array(
				'id'               => 'file_upload',
				'name'             => __( 'File Upload', 'textdomain' ),
				'type'             => 'file_upload',
				'force_delete'     => false,
				'max_file_uploads' => 2,
			),
			array(
				'id'          => 'file_input',
				'name'        => __( 'File Input', 'textdomain' ),
				'type'        => 'file_input',

				// Input field placeholder.
				'placeholder' => __( 'Please select a file or paste file URL here', 'textdomain' ),

				// Input size.
				'size'        => 60,
			),
		),
	);
	return $meta_boxes;
}
