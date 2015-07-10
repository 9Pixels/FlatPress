<?php

/**
 *	Theme Setup
 */
if( !function_exists( 'flatpress_theme_setup' ) ) {
	add_action( 'after_setup_theme', 'flatpress_theme_setup' );
	function flatpress_theme_setup() {
		load_theme_textdomain( 'accountant', get_template_directory() . '/languages' );
	}
}

/**
 *	Enqueue Styles
 */
if( !function_exists( 'flatpress_enqueue_styles' ) ) {
	add_action( 'wp_enqueue_scripts', 'flatpress_enqueue_styles' );
	function flatpress_enqueue_styles() {

		$query_args = array(
			'family'	=> 'Roboto:200,300,400,700,600,400italic,700italic,300italic|Roboto+Slab:400,100,300,700'
		);
		wp_register_style( 'google_fonts', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array(), null );

	    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.3', 'all' );
	    wp_enqueue_style( 'google_fonts' );
	}
}

/**
 *	Enqueue Scripts
 */
if( !function_exists( 'flatpress_enqueue_scripts' ) ) {
	add_action( 'wp_enqueue_scripts', 'flatpress_enqueue_scripts' );
	function flatpress_enqueue_scripts() {
		wp_enqueue_script( 'scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array( 'jquery' ), '1.0.3', true );
	}
}