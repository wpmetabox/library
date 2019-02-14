<?php
/**
 * This snippet creates a settings page with some tabs. And when WooCommerce is active, it adds another tab for WooCommerce settings.
 * @see https://metabox.io/support/topic/how-to-add-conditional-tabs/
 */

// Register settings page. In this case, it's a theme options page
add_filter( 'mb_settings_pages', 'prefix_options_page' );
function prefix_options_page( $settings_pages ) {
	$my_settings_page = array(
		'id'          => 'pencil',
		'option_name' => 'pencil',
		'menu_title'  => __( 'Pencil', 'textdomain' ),
		'icon_url'    => 'dashicons-edit',
		'style'       => 'no-boxes',
		'columns'     => 1,
		'tabs'        => array(
			'general' => __( 'General Settings', 'textdomain' ),
			'design'  => __( 'Design Customization', 'textdomain' ),
		),
		'position'    => 68,
	);

	if ( class_exists( 'WooCommerce' ) ) {
		$my_settings_page['tabs']['faq'] = __( 'FAQ & Help', 'textdomain' );
	}

	$settings_pages[] = $my_settings_page;

	return $settings_pages;
}

// Register meta boxes and fields for settings page
add_filter( 'rwmb_meta_boxes', 'prefix_options_meta_boxes' );
function prefix_options_meta_boxes( $meta_boxes ) {
	$meta_boxes[] = array(
		'id'             => 'general',
		'title'          => __( 'General', 'textdomain' ),
		'settings_pages' => 'pencil',
		'tab'            => 'general',

		'fields' => array(
			array(
				'name' => __( 'Facebook', 'textdomain' ),
				'id'   => 'facebook',
				'type' => 'text',
			),
			array(
				'name' => __( 'Logo', 'textdomain' ),
				'id'   => 'logo',
				'type' => 'file_input',
			),
			array(
				'name'    => __( 'Layout', 'textdomain' ),
				'id'      => 'layout',
				'type'    => 'image_select',
				'options' => array(
					'sidebar-left'  => 'http://i.imgur.com/Y2sxQ2R.png',
					'sidebar-right' => 'http://i.imgur.com/h7ONxhz.png',
					'no-sidebar'    => 'http://i.imgur.com/m7oQKvk.png',
				),
			),
		),
	);
	$meta_boxes[] = array(
		'id'             => 'colors',
		'title'          => __( 'Colors', 'textdomain' ),
		'settings_pages' => 'pencil',
		'tab'            => 'design',

		'fields' => array(
			array(
				'name' => __( 'Heading Color', 'textdomain' ),
				'id'   => 'heading-color',
				'type' => 'color',
			),
			array(
				'name' => __( 'Text Color', 'textdomain' ),
				'id'   => 'text-color',
				'type' => 'color',
			),
		),
	);

	if ( class_exists( 'WooCommerce' ) ) {
		$meta_boxes[] = array(
			'id'             => 'info',
			'title'          => __( 'Theme Info', 'textdomain' ),
			'settings_pages' => 'pencil',
			'tab'            => 'faq',
			'fields'         => array(
				array(
					'type' => 'custom_html',
					'std'  => __( '<strong>Having questions?</strong><br><br><a href="https://metabox.io/docs/" target="_blank" class="button-primary">Go to our documentation</a>', 'textdomain' ),
				),
			),
		);
	}

	return $meta_boxes;
}
