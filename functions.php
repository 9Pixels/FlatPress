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
 *	Define
 */
define( 'GET_CHILDTHEME_DIRECTORY_URI', get_stylesheet_directory_uri() );

/**
 *	Enqueue Styles
 */
if( !function_exists( 'flatpress_enqueue_styles' ) ) {
	add_action( 'wp_enqueue_scripts', 'flatpress_enqueue_styles' );
	function flatpress_enqueue_styles() {
		wp_enqueue_style( 'font-family-roboto', 'http://fonts.googleapis.com/css?family=Roboto:200,300,400,700,600,400italic,700italic,300italic');
		wp_enqueue_style( 'font-family-roboto-slab', 'http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' );
	    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
	}
}

/**
 *	Enqueue Scripts
 */
if( !function_exists( 'flatpress_enqueue_scripts' ) ) {
	add_action( 'wp_enqueue_scripts', 'flatpress_enqueue_scripts' );
	function flatpress_enqueue_scripts() {
		wp_enqueue_script( 'scripts', GET_CHILDTHEME_DIRECTORY_URI . '/js/scripts.js', array( 'jquery' ), '1.0', true );
	}
}