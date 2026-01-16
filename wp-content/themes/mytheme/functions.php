<?php
/**
 * Theme Functions
 * File: functions.php
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/* -------------------------------------------------
 * Theme Setup
 * ------------------------------------------------- */
function mytheme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'mytheme'),
    ));
}
add_action('after_setup_theme', 'mytheme_setup');


/* -------------------------------------------------
 * Enqueue CSS
 * ------------------------------------------------- */
function mytheme_assets() {
    wp_enqueue_style(
        'mytheme-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );

    // Appointment form stylesheet
    wp_enqueue_style(
        'appointment-form-style',
        get_stylesheet_directory_uri() . '/appointment.css',
        array(),
        '1.0'
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

/* -------------------------------------------------
 * Font Awesome Icons
 * ------------------------------------------------- */
function mytheme_font_icons() {
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css',
        array(),
        '6.5.1'
    );
}
add_action('wp_enqueue_scripts', 'mytheme_font_icons');
