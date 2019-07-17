<?php
// Register settings page. In this case, it's a theme options page
add_filter( 'mb_settings_pages', function ( $settings_pages ) {
	$settings_pages[] = array(
		'id'          => 'theme-slug',
		'option_name' => 'theme_slug',
		'menu_title'  => __( 'Theme Options', 'textdomain' ),
		'parent'      => 'themes.php',
		'help_tabs'   => array(
			array(
				'title'   => 'General',
				'content' => '<p>This tab displays the general information about the theme.</p>',
			),
			array(
				'title'   => 'Homepage',
				'content' => '<p>This tab displays the instruction for setting up the homepage.</p>',
			),
		),
	);

	return $settings_pages;
} );

// Register meta boxes and fields for settings page
add_filter( 'rwmb_meta_boxes', function ( $meta_boxes ) {
	$meta_boxes[] = array(
		'id'             => 'general',
		'title'          => __( 'General', 'textdomain' ),
		'settings_pages' => 'theme-slug',
		'fields'         => array(
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
		'settings_pages' => 'theme-slug',
		'fields'         => array(
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

	$meta_boxes[] = array(
		'id'             => 'info',
		'title'          => __( 'Theme Info', 'textdomain' ),
		'context'        => 'side',
		'settings_pages' => 'theme-slug',
		'fields'         => array(
			array(
				'type' => 'custom_html',
				'std'  => '<img src="http://placehold.it/260x150?text=Thumbnail">' . __( '<strong>%Name%</strong> is a responsive theme for businesses and agencies. Built with HTML5, SASS and other latest technologies.<br><br><a href="http://domain.com" target="_blank" class="button-primary">Learn more</a>', 'textdomain' ),
			),
		),
	);

	return $meta_boxes;
} );
