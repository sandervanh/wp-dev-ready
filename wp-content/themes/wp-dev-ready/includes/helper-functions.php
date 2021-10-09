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

/**
 * Defer specific scripts
 */
function defer_scripts( $tag, $handle, $src ) {
    $defer = array( 
      'alpine-js',
      // 'script', // add more
    );
    if ( in_array( $handle, $defer ) ) {
       return '<script src="' . $src . '" defer="defer" type="text/javascript"></script>' . "\n";
    }
      
      return $tag;
  } 
  add_filter( 'script_loader_tag', 'defer_scripts', 10, 3 );
  