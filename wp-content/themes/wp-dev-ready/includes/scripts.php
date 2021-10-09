<?php
/**
 * Enqueue scripts and styles.
 */
function enqueue_scripts() {
    // This is the main css file
	wp_enqueue_style( 'theme-style', get_stylesheet_uri(), array(), DEV_VERSION );

    // This file is the tailwindcss output file (run "npm run watch" in de wp-content folder during developement to keep it auto updated)
    wp_enqueue_style('main-styles', get_template_directory_uri() . '/css/wp-dev-ready.css', array(), DEV_VERSION);

    // jQuery is not cool anymore; Alpine js, Your new lightweight JavaScript framework.
	wp_enqueue_script( 'alpine-js', 'https://unpkg.com/alpinejs@3.4.2/dist/cdn.min.js', array(), DEV_VERSION, false );

}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );