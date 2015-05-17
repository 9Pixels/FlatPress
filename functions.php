<?php

/**
 *	Theme Setup
 */
if( !function_exists( 'flatpresstheme_setup' ) ) {
	add_action( 'after_setup_theme', 'flatpresstheme_setup' );
	function flatpresstheme_setup() {
		load_theme_textdomain( 'accountant', get_template_directory() . '/languages' );
	}
}
/**
 *	Enqueue Styles
 */
if( !function_exists( 'flatpressenqueue_styles' ) ) {
	add_action( 'wp_enqueue_scripts', 'flatpressenqueue_styles' );
	function flatpressenqueue_styles() {
	    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
	}
}