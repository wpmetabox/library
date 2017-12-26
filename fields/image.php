<?php
/**
 * This image demonstrates how to use 'image' fields
 */

add_filter( 'rwmb_meta_boxes', 'your_prefix_image_demo' );
function your_prefix_image_demo( $meta_boxes ) {
	$meta_boxes[] = array(
		'title'  => esc_html__( 'Image Upload Demo', 'textdomain' ),
		'fields' => array(
			array(
				'name' => __( 'Single Image', 'textdomain' ),
				'id'   => 'single_img',
				'type' => 'single_image',
				// 'clone' => true,
			),
			array(
				'id'               => 'image',
				'name'             => esc_html__( 'Image Gallery', 'textdomain' ),
				'type'             => 'image',

				// Delete image from Media Library when remove it from post meta?.
				// Note: it might affect other posts if you use same image for multiple posts.
				'force_delete'     => false,

				// Maximum image uploads.
				'max_file_uploads' => 2,
			),
			array(
				'id'               => 'image_advanced',
				'name'             => esc_html__( 'Image Advanced', 'textdomain' ),
				'type'             => 'image_advanced',

				// Delete image from Media Library when remove it from post meta?.
				// Note: it might affect other posts if you use same image for multiple posts.
				'force_delete'     => false,

				// Maximum image uploads.
				'max_file_uploads' => 2,

				// Display the "Uploaded 1/2 files" status.
				'max_status'       => true,

				'image_size' => 'medium',
			),
			array(
				'id'               => 'plupload_image',
				'name'             => esc_html__( 'Plupload Image (Alias of Image Upload)', 'textdomain' ),
				'type'             => 'plupload_image',

				// Delete image from Media Library when remove it from post meta?.
				// Note: it might affect other posts if you use same image for multiple posts.
				'force_delete'     => false,

				// Maximum image uploads.
				'max_file_uploads' => 2,

				// Display the "Uploaded 1/2 files" status.
				'max_status'       => true,
			),
			array(
				'id'               => 'image_upload',
				'name'             => esc_html__( 'Image Upload', 'textdomain' ),
				'type'             => 'image_upload',

				// Delete image from Media Library when remove it from post meta?.
				// Note: it might affect other posts if you use same image for multiple posts.
				'force_delete'     => false,

				// Maximum image uploads.
				'max_file_uploads' => 2,

				// Display the "Uploaded 1/2 files" status.
				'max_status'       => true,
			),
			array(
				'id'           => 'thickbox_image',
				'name'         => esc_html__( 'Thickbox Image', 'textdomain' ),
				'type'         => 'thickbox_image',

				// Delete image from Media Library when remove it from post meta?.
				// Note: it might affect other posts if you use same image for multiple posts.
				'force_delete' => false,
			),
		),
	);

	return $meta_boxes;
}
