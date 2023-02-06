<?php
// funtions.php allows you to set-up theme basics

// enqueue stylesheets
// add stylesheet(s)
function set_theme_styles() {
	wp_enqueue_style( 'main_stylesheet' , get_template_directory_uri() . '/css/main.css' );
}
add_action('wp_enqueue_scripts', 'set_theme_styles');

// enqueue scripts
// add scripts
function theme_js() {
	wp_enqueue_script('scripts_js', get_template_directory_uri().'/js/scripts.js', '', '', true);
}
add_action('wp_enqueue_scripts', 'theme_js');

// enable menus
function register_theme_menus() {
	register_nav_menus( // register multiple custom menus
		array(
			'header-menu' => __('Header Menu'),
			'footer-menu' => __('Footer Menu')
			)
		);
}
add_action('init', 'register_theme_menus');

// enable featured images
add_theme_support('post-thumbnails');
