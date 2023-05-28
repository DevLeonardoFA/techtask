<?php

/**
 * scripts and styles
 */
function wpdocs_theme_name_scripts() {
	wp_enqueue_style( 'themestyle', get_stylesheet_uri());
	wp_enqueue_style( 'main', get_stylesheet_uri() . '/assets/css/main.css');
	wp_enqueue_script( 'tailwind', 'https://cdn.tailwindcss.com');
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

add_theme_support( 'custom-logo' );

add_filter('show_admin_bar', '__return_false');

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