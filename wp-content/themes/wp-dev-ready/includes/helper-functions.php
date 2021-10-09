<?php
/**
 * Enable composer packages
 */
require_once ABSPATH . 'wp-content/vendor/autoload.php';

/**
 * Stealing Dump function from Laravel.
 */
if (!function_exists('d')) {

	function d()
	{
		call_user_func_array('dump', func_get_args());
	}
}

/**
 * Stealing Dump and die function from Laravel.
 */
if (!function_exists('dd')) {

	function dd()
	{
		call_user_func_array('dump', func_get_args());
		die();
	}
}