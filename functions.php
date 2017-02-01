<?php

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails');
/***** STYLES AND FONTS DECLARED *****/
function theme_styles() {
	wp_enqueue_style('googleFonts-Raleway','https://fonts.googleapis.com/css?family=Raleway');
	wp_enqueue_style('googleFonts-Rock-Salt','https://fonts.googleapis.com/css?family=Rock+Salt"');

	wp_enqueue_style('normalize-theme-style', get_template_directory_uri(). '/css/normalize.css');
	wp_enqueue_style('main-theme-style', get_template_directory_uri() . '/style.css');
}

add_action( 'wp_enqueue_scripts', 'theme_styles' );

?>
