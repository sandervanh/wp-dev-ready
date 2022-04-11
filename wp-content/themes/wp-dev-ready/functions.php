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

/**
 * Custom post types.
 */
require_once get_template_directory() . '/includes/custom-post-types.php';

/**
 * Custom taxonomies.
 */
require_once get_template_directory() . '/includes/custom-taxonomies.php';
