<?php
/**
 * Dyna child functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package dyna-child
 */

/**
 * This file is used to define custom functions. There are some commented things here to help you
 * doing your own stuff, like overwriting or loading CSS and JS. If you do not need, you may also
 * delete all commented stuff.
 *
 * We may soon strip out all these comments and hold them in an external file or Gist, but for now
 * we think they are useful.
 *
 */

/* Enable this function to remove Dyna or plugin stylesheet and scripts and enqueue your own
 *
 * @link https://codex.wordpress.org/Function_Reference/wp_dequeue_style
 *
function dyna_remove_scripts() {
	wp_dequeue_style( 'dyna-styles' );
	wp_deregister_style( 'dyna-styles' );
	wp_dequeue_script( 'dyna-scripts' );
	wp_deregister_script( 'dyna-scripts' );
}
add_action( 'wp_enqueue_scripts', 'dyna_remove_scripts', 20 );
*/

/* Enqueue the parent stylesheet, use the commented lines to add more styles, if you need  */
function theme_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
//	$the_theme = wp_get_theme();
//	wp_enqueue_style( 'child-styles', get_stylesheet_directory_uri() . '/style.css', array(), $the_theme->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function add_child_textdomain() {
	load_child_theme_textdomain( 'dyna-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_textdomain' );