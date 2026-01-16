<?php
/**
 * Theme Functions
 * File: functions.php
 */

/* Theme Setup */
function mytheme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'mytheme'),
    ));
}
add_action('after_setup_theme', 'mytheme_setup');

/* Enqueue CSS */
function mytheme_assets() {
    wp_enqueue_style(
        'mytheme-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'mytheme_assets');

/* HTML5 Support */
function mytheme_html5_support() {
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme', 'mytheme_html5_support');

/* Remove WordPress Version */
remove_action('wp_head', 'wp_generator');
