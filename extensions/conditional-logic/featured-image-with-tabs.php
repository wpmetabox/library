<?php
/**
 * This demo shows how to hide a tab "Featured Image Options" when there is no featured image set.
 *
 * @link    https://docs.metabox.io/extensions/meta-box-conditional-logic/#using-outside-meta-boxes
 * @link    https://docs.metabox.io/hide-tabs-with-conditional-logic/
 *
 * @package Meta Box
 * @package Meta Box Conditional Logic
 */

add_filter( 'rwmb_meta_boxes', function ( $meta_boxes ) {
	$meta_boxes[] = array(
		'title'       => 'Post/Page Options',
		'fields'      => array(
			array(
				'id'      => 'featured_image_layout_options',
				'type'    => 'radio',
				'options' => array(
					'show_below_title' => 'Featured Image Below Title',
					'show_above_title' => 'Featured Image Above Title',
				),
				'tab'     => 'featured_image_options',
				'inline'  => false,
				'std'     => array(
					'show_below_title',
				),
			),
			array(
				'id'   => 'page_options_hide_title',
				'type' => 'checkbox',
				'desc' => 'Hide Post/Page Title',
				'tab'  => 'hide_post_page_elements',
			),
			array(
				'id'   => 'hide_widget_one',
				'type' => 'checkbox',
				'desc' => 'Hide Footer Widget One',
				'tab'  => 'hide-footer-widgets',
			),
			array(
				'id'   => 'hide_widget_two',
				'type' => 'checkbox',
				'desc' => 'Hide Footer Widget Two',
				'tab'  => 'hide-footer-widgets',
			),
			array(
				'id'   => 'hide_widget_three',
				'type' => 'checkbox',
				'desc' => 'Hide Footer Widget Three',
				'tab'  => 'hide-footer-widgets',
			),
			array(
				'id'   => 'hide_widget_four',
				'type' => 'checkbox',
				'desc' => 'Hide Footer Widget Four',
				'tab'  => 'hide-footer-widgets',
			),
			array(
				'id'   => 'hide_widget_five',
				'type' => 'checkbox',
				'desc' => 'Hide Footer Widget Five',
				'tab'  => 'hide-footer-widgets',
			),
			array(
				'id'   => 'remove_content_area_padding',
				'type' => 'checkbox',
				'desc' => 'Remove Content Area Padding',
				'tab'  => 'page_builder_options',
			),
		),
		'tab_style'   => 'left',
		'tab_wrapper' => true,
		'tabs'        => array(
			'featured_image_options'  => array(
				'label' => 'Featured Image Options',
				'icon'  => 'dashicons-arrow-right',
			),
			'hide_post_page_elements' => array(
				'label' => 'Hide Post/Page Elements',
				'icon'  => 'dashicons-arrow-right',
			),
			'hide-footer-widgets'     => array(
				'label' => 'Hide Footer Widgets',
				'icon'  => 'dashicons-arrow-right',
			),
			'page_builder_options'    => array(
				'label' => 'Page Builder Options',
				'icon'  => 'dashicons-arrow-right',
			),
		),
	);
	return $meta_boxes;
} );

add_filter( 'rwmb_outside_conditions', function ( $conditions ) {
	$conditions['.rwmb-tab-featured_image_options']       = array(
		'visible' => array( '_thumbnail_id', '!=', '-1' ),
	);
	$conditions['.rwmb-tab-panel-featured_image_options'] = array(
		'visible' => array( '_thumbnail_id', '!=', '-1' ),
	);
	return $conditions;
} );
