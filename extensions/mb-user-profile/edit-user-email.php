<?php
/**
 * To let users edit their email, simply create a meta box (or a new field in an existing meta box) with id `user_email`. And then include the meta box into the shortcode.
 */

add_filter( 'rwmb_meta_boxes', function( $meta_boxes ) {
	$meta_boxes[] = [
		'title' => 'Edit User Email',
		'id' => 'edit-user-email',
		'type' => 'user',
		'fields' => [
			[
				'type' => 'email',
				'id'   => 'user_email',
				'name' => 'Email',
				'std'  => wp_get_current_user()->user_email,
			]
		],
	];
	return $meta_boxes;
} );

/**
 * Then add the following shortcode into a page:
 *
 * [mb_user_profile_info id="edit-user-email"]
 */
