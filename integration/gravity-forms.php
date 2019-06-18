<?php
/**
 * Include Gravity Forms as a dropdown,
 * Saves the form ID to the database.
 * 
 * Usage:
 *
 * - Create var containing metafield -
 * $gravity_form = rwmb_meta("{$prefix}gravity_form");
 * - Use in template file -
 * echo do_shortcode('[gravityform id=' . $gravity_form . ' title="false" description="false"]');
 */

add_action( 'rwmb_meta_boxes', 'your_prefix_register_meta_boxes' );
function your_prefix_register_meta_boxes( $meta_boxes ) {
	$prefix = 'your_prefix_';

	/**
	 * Build the caldera forms dropdown options for our metabox select_advanced field.
	 */
  if ( class_exists('GFForms') ) {
	  // AllFormsTable.php Line: 114
	  $forms = RGFormsModel::get_forms( 1, 'title' );
	  $key = array();
	  $value = array();
	  foreach ( $forms as $form ) :
	  	$key[] = absint( $form->id );
		  $value[] = esc_html( $form->title );
	  endforeach;
	  $option = array_combine($key, $value);
  } else {
  	$option = array('no_forms' => 'ACTIVATE GRAVITY FORM PLUGIN!!');
  }


	array(
		'name'        => 'Gravity Form Select',
		'id'          => "{$prefix}gravity_form",
		'type'        => 'select_advanced',
		'options'     => $option,
		'multiple'    => false,
		'placeholder' => 'Select a Form',
	),
	
	// Other meta boxes go here
	return $meta_boxes;
}
