<?php
/**
 * Include Ninja Forms as a dropdown,
 * Saves the form ID to the database.
 * 
 * Usage:
 *
 * - Create var containing metafield -
 * $ninja_form = rwmb_meta("{$prefix}ninja_form");
 * - Use in template file -
 * echo do_shortcode('[ninja_form id=' . $ninja_form . ']');
 */

add_action( 'rwmb_meta_boxes', 'your_prefix_register_meta_boxes' );
function your_prefix_register_meta_boxes( $meta_boxes ) {
	$prefix = 'your_prefix_';

	/**
	 * Build the ninja forms dropdown options for our metabox select_advanced field.
	 */
	if ( class_exists( 'Ninja_Forms' ) ) {
		// If plugin is active
		$forms = Ninja_Forms()->form()->get_forms();
		$key = array();
		$value = array();
		foreach( $forms as $form ): 
			$id = $form->get_id(); 
		    $key[] = intval( $id );
		    $value[] = esc_html( $form->get_setting( 'title' ) ) . ' [id:' . intval( $id ) . ']';
		endforeach;
		$option = array_combine($key, $value);
	} else {
		// Otherwise include cta
		$option = array('' => 'ACTIVATE NINJA FORM PLUGIN!!');
	}

	array(
		'name'        => 'Select',
		'id'          => "{$prefix}ninja_form",
		'type'        => 'select_advanced',
		'options'     => $option,
		'multiple'    => false,
		'placeholder' => 'Select a Form',
	),
	
	// Other meta boxes go here
	return $meta_boxes;
}
