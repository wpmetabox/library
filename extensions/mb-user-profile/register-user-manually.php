<?php
/**
 * Register user manually when using the [mb_user_profile_register] shortcode.
 * This file ignores the default process of register user and trigger the custom code to register user manually.
 * You should modify it to match your need.
 *
 * @package    Meta Box
 * @subpackage MB User Profile
 */

// Disable default register fields.
add_filter( 'rwmb_profile_register_fields', '__return_empty_array' );

// Manually register user.
add_filter( 'rwmb_profile_insert_user_data', function ( $data, $config ) {
	// User strpos because the $config also contains default register form.
	if ( false === strpos( $config['id'], 'my-form' ) ) {
		return $data;
	}

	// Custom data for user.
	$data = [
		'user_login' => 'my_user',
		'user_email' => 'myemail@domain.com',
		'user_pass'  => 'my_user_pass',
	];
	return $data;
}, 10, 2 );

// Meta box for register form.
add_filter( 'rwmb_meta_boxes', function ( $meta_boxes ) {
	$meta_boxes[] = [
		'title'  => 'my form',
		'id'     => 'my-form',
		'type'   => 'user',
		'fields' => [
			[
				'name' => 'Text',
				'id'   => 'text',
				'type' => 'text',
			],
			[
				'name' => 'Textarea',
				'id'   => 'textarea',
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 3,
			],
		],
	];

	return $meta_boxes;
} );

