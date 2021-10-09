<?php

/**
 * Bump version number to purge existing browser cache
 */
if (!defined('DEV_VERSION')) {
	define('DEV_VERSION', '1.0.0');
}

/**
 * Include helper functions
 */
include_once get_template_directory() . '/includes/helper-functions.php';

/**
 * Setup theme functions
 */
require_once get_template_directory() . '/includes/theme-setup.php';

/**
 * Enqueue scripts and styles.
 */
require_once get_template_directory() . '/includes/scripts.php';

// /**
//  * Backend functionality
//  */
// if (is_admin()) 
// {
// 	require get_template_directory() . '/inc/admin-functions.php';
// }

// /**
//  * Custom template tags for theme.
//  */
// require get_template_directory() . '/inc/template-tags.php';

// /**
//  * Customize woocommerce form fields
//  */
// require get_template_directory() . '/inc/woo-form-fields.php';

// /**
//  * Functions which enhance the theme by hooking into WordPress.
//  */
// require get_template_directory() . '/inc/template-functions.php';

// /**
//  * Include custom post types
//  */
// require get_template_directory() . '/inc/custom-post-types.php';

// /**
//  * Custom product fields
//  */
// require get_template_directory() . '/inc/custom-product-fields.php';

// /**
//  * Include custom gutenberg blocks
//  */
// require get_template_directory() . '/inc/custom-gutenberg-blocks.php';

// /**
//  * Wishlist functionality
//  */
// require get_template_directory() . '/inc/iear-wishlist.php';

// /**
//  * Functions to extend and modify ACF
//  */
// require get_template_directory() . '/inc/acf-functions.php';

// /**
//  * Template strings
//  */
// require_once get_template_directory() . '/inc/template-strings.php';
