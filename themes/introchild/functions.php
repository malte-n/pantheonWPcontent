<?php

function wmtn_theme_styles() {
	
	//import stylesheets
	wp_enqueue_style( 'foundation_css', get_template_directory_uri(). '/css/foundation.css' );
//	wp_enqueue_style( 'main_css', get_template_directory_uri(). '/style.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css',
        array('parent-style'));
}

add_action( 'wp_enqueue_scripts', 'wmtn_theme_styles');

//creates custom menu
function register_my_menus() {
	  register_nav_menu(
	  'custom-menu',__( 'Header Menu' )	);
}

add_action( 'init', 'register_my_menus' );

?>
