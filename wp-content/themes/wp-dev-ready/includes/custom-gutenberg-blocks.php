<?php

/**
 * Only alow own gutenberg blocks except:
 */
function wp_dev_ready_allowed_block_types($allowed_blocks)
{

	return array(
		'core/archives',
		'core/audio',
		'core/button',
		'core/categories',
		'core/code',
		'core/column',
		'core/columns',
		'core/coverImage',
		'core/embed',
		'core/file',
		'core/freeform',
		'core/gallery',
		'core/heading',
		'core/html',
		'core/image',
		'core/latestComments',
		'core/latestPosts',
		'core/list',
		'core/more',
		'core/nextpage',
		'core/paragraph',
		'core/preformatted',
		'core/pullquote',
		'core/quote',
		'core/reusableBlock',
		'core/separator',
		'core/shortcode',
		'core/spacer',
		'core/subhead',
		'core/table',
		'core/textColumns',
		'core/verse',
		'core/video',
		'acf/spacer',

	);
}

/**
 * Register custom gutenberg blocks
 */
function register_custom_gutenberg_blocks()
{

	// check function exists
	if (function_exists('acf_register_block')) {

		acf_register_block(array(
			'name'				=> 'spacer',
			'title'				=> __('Spacer'),
			'description'		=> __('A spacer to separate content sections.'),
			'render_callback'	=> 'block_render_callback',
			'mode'              => 'edit',
			'category'			=> 'wp-dev-ready-components',
			'icon'				=> '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36" role="img" aria-hidden="true" focusable="false"><path d="M18.5 5.5h-13c-1.1 0-2 .9-2 2v9c0 1.1.9 2 2 2h13c1.1 0 2-.9 2-2v-9c0-1.1-.9-2-2-2zm.5 11c0 .3-.2.5-.5.5h-13c-.3 0-.5-.2-.5-.5v-9c0-.3.2-.5.5-.5h13c.3 0 .5.2.5.5v9zM6.5 12H8v-2h2V8.5H6.5V12zm9.5 2h-2v1.5h3.5V12H16v2z"></path></svg>',
			'keywords'			=> array('spacer'),
			'example' 			=> [
				'attributes' => [
					'mode' => 'preview',
					'data' => ['is_example' => true],
				]
			]
		));
	}
}
add_action('acf/init', 'register_custom_gutenberg_blocks');

function block_render_callback($block)
{

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-parts/block" folder
	if (file_exists(get_theme_file_path("/template-parts/components/gutenberg-blocks/{$slug}.php"))) {
		include(get_theme_file_path("/template-parts/components/gutenberg-blocks/{$slug}.php"));
	}
}

/**
 * Custom gutenberg category
 */
function wp_dev_ready_block_categories($categories)
{
	return array_merge(
		$categories,
		[
			[
				'slug'  => 'wp-dev-ready-components',
				'title' => __('WP dev ready Components', 'wp-dev-ready-block-components'),
			],
		]
	);
}
add_action('block_categories_all', 'wp_dev_ready_block_categories', 10, 2);
