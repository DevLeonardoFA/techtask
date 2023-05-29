<?php

/**
 * scripts and styles
 */
function wpdocs_theme_name_scripts() {
	wp_enqueue_style( 'themestyle', get_stylesheet_uri());
	wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/assets/css/main.css');
	wp_enqueue_style( 'slick_style', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
	wp_enqueue_script( 'tailwind', 'https://cdn.tailwindcss.com');
	wp_enqueue_script( 'Jquery', 'https://code.jquery.com/jquery-3.7.0.min.js');
	wp_enqueue_script( 'slick_js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js');
	wp_enqueue_script( 'main_js', get_stylesheet_directory_uri() . '/assets/scripts/main.js');
    
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

add_theme_support( 'custom-logo' );

add_filter('show_admin_bar', '__return_false');

function remove_editor() {
    remove_post_type_support('page', 'editor');
}
add_action('admin_init', 'remove_editor');

function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
            'footer-menu' => __('Footer Menu'),
        )
    );
}
add_action('init', 'register_my_menus');

?>