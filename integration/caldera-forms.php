<?php
/**
 * Include Caldera Forms as a dropdown,
 * Saves the form ID to the database.
 * 
 * Usage:
 *
 * - Create var containing metafield -
 * $caldera_form = rwmb_meta("{$prefix}caldera_form");
 * - Use in template file -
 * echo do_shortcode('[caldera_form id=' . $ninja_form . ']');
 */

add_action( 'rwmb_meta_boxes', 'your_prefix_register_meta_boxes' );
function your_prefix_register_meta_boxes( $meta_boxes ) {
	$prefix = 'your_prefix_';

	/**
	 * Build the caldera forms dropdown options for our metabox select_advanced field.
	 */
	if ( class_exists( 'Caldera_Forms' ) ) {
    $forms = Caldera_Forms_Forms::get_forms( true );
	  $key = array();
	  $value = array();
	  foreach( $forms as $form_id => $form ): 
		  // admin-metabox-append-a-form.html.php
		  $id = $form_id; 
	     $key[] = $form_id;
	      $value[] = $form['name'];
	  endforeach;
	  $option = array_combine($key, $value);
  } else {
	  $option = array('no_forms' => 'ACTIVATE CALDERA FORM PLUGIN!!');
  }

	array(
		'name'        => 'Caldera Form Select',
		'id'          => "{$prefix}caldera_form",
		'type'        => 'select_advanced',
		'options'     => $option,
		'multiple'    => false,
		'placeholder' => 'Select a Form',
	),
	
	// Other meta boxes go here
	return $meta_boxes;
}
