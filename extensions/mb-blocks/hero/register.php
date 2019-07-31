<?php
// Register a hero content block for Gutenberg.
add_filter( 'rwmb_meta_boxes', function( $meta_boxes ) {
	$meta_boxes[] = [
		'title' => 'Hero Area',
		'id'    => 'hero-area',
		'type'  => 'block', // Important.

		// 'icon'  => 'awards', // Or you can set a custom SVG if you don't like Dashicons
		'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M485.5 0L576 160H474.9L405.7 0h79.8zm-128 0l69.2 160H149.3L218.5 0h139zm-267 0h79.8l-69.2 160H0L90.5 0zM0 192h100.7l123 251.7c1.5 3.1-2.7 5.9-5 3.3L0 192zm148.2 0h279.6l-137 318.2c-1 2.4-4.5 2.4-5.5 0L148.2 192zm204.1 251.7l123-251.7H576L357.3 446.9c-2.3 2.7-6.5-.1-5-3.2z"></path></svg>',
		'category' => 'layout',
		// 'context' => 'side', // The block settings will be available on the right sidebar.
		'supports' => [
			'align' => ['wide', 'full'],
		],

		'render_template' => get_template_directory() . '/blocks/hero/template.php', // The PHP template that renders the block.
		'enqueue_style'   => get_template_directory_uri() . '/blocks/hero/style.css', // CSS file for the block.

		// Now register the block fields.
		'fields' => [
			[
				'type' => 'single_image',
				'id'   => 'image',
				'name' => 'Image',
			],
			[
				'type' => 'text',
				'id'   => 'title',
				'name' => 'Title',
			],
			[
				'type' => 'text',
				'id'   => 'subtitle',
				'name' => 'Subtitle',
			],
			[
				'type' => 'textarea',
				'id'   => 'content',
				'name' => 'Content',
			],
			[
				'type' => 'single_image',
				'id'   => 'signature',
				'name' => 'Signature',
			],
			[
				'type' => 'text',
				'id'   => 'button_text',
				'name' => 'Button Text',
			],
			[
				'type' => 'text',
				'id'   => 'button_url',
				'name' => 'Button URL',
			],
			[
				'type' => 'color',
				'id'   => 'background_color',
				'name' => 'Background Color',
			],
		],
	];
	return $meta_boxes;
} );
