<?php
// funtions.php allows you to set-up theme basics, for example;

// setting up global stylesheets and scripts
// enabling menus, featured images and excerpts
// adding filters
// adding custom post-types
// adding functions and snippets of code that can be applied sitewide

// enqueue stylesheets, ie add stylesheet(s)
function set_theme_styles() {
	wp_enqueue_style( 'main_stylesheet' , get_template_directory_uri() . '/css/main.css' );
}
add_action('wp_enqueue_scripts', 'set_theme_styles');

// enqueue scripts, ie add scripts
function set_theme_scripts() {
	wp_enqueue_script( 'main_script', get_template_directory_uri() . '/js/scripts.js', array('jquery') , '' , true);
}
add_action('wp_enqueue_scripts' , 'set_theme_scripts');

// enable menus
function register_theme_menus() {
	register_nav_menus( // register multiple custom menus
		array(
			// header-menu is in thet wp_nav_menu array in header.php
			// Header Menu is the name of the menu as it appears in the Menus section of the dashboard
			'header-menu' => __('Header Menu'),
			'footer-menu' => __('Footer Menu')
			)
		);
}
add_action('init', 'register_theme_menus');

// enable featured images
add_theme_support('post-thumbnails');

// enable page excerpts
add_post_type_support( 'page', 'excerpt' );
