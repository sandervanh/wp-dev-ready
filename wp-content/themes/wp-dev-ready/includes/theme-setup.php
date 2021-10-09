<?php
if (!function_exists('theme_setup')) :

	function theme_setup()
	{
		/*
		 * For translation purposes
		 */
		load_theme_textdomain('wp-dev-ready', get_template_directory() . '/languages');

		/*
		 * Let WordPress manage the document title.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 */
		add_theme_support('post-thumbnails');

		/*
		 * Register primary nav_menu.
		 */
		register_nav_menus(
			array(
				'primary' => esc_html__('Primary', 'wp-dev-ready'),
				// 'footer' => esc_html__('Footer', 'wp-dev-ready'), // Register more

			)
		);

		/*
		 * Use HTML5 for following components
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',		
			)
		);

		/*
		 * Add theme support for selective refresh for widgets.
		 */ 
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for Woocommerce.
		 * Uncomment desired lines for woocommerce support
		 */
		// add_theme_support('woocommerce');
		// add_theme_support( 'wc-product-gallery-zoom' );
		// add_theme_support( 'wc-product-gallery-lightbox' );
		// add_theme_support( 'wc-product-gallery-slider' );
	}

endif;

add_action('after_setup_theme', 'theme_setup');
