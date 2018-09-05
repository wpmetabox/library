<?php
/**
 * Include Contact Form 7 Forms as a dropdown,
 * Saves the page ID to the database.
 * 
 * Usage:
 *
 * - Create var containing metafield -
 * $contact_form = rwmb_meta("{$prefix}contact_form");
 * - Use in template file -
 * echo do_shortcode('[contact-form-7 id="' . $contact_form . '" title="' . get_the_title(' . $contact_form . ') . '"]');
 */

add_action( 'rwmb_meta_boxes', 'your_prefix_register_meta_boxes' );
function your_prefix_register_meta_boxes( $meta_boxes ) {
	$prefix = 'your_prefix_';

	array(
		'name'        => 'Select the form',
		'id'          => "{$prefix}contact_form",
		'type'        => 'post',
		'post_type'   => 'wpcf7_contact_form', // Contact form 7's post type
		'field_type'  => 'select_advanced',
		'placeholder' => 'Select an Item',
		'query_args'  => array(
			'post_status'    => 'publish',
			'posts_per_page' => - 1,
	        'orderby'     => 'title',
	        'order'       => 'ASC',
		),
	),
	// Other meta boxes go here
	return $meta_boxes;
}
