<?php
/**
 * Theme Functions
 * File: functions.php
 */

/* -------------------------------------------------
 * Theme Setup
 * ------------------------------------------------- */
function mytheme_setup() {

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable featured images
    add_theme_support('post-thumbnails');

    // Register navigation menu
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'mytheme'),
    ));
}
add_action('after_setup_theme', 'mytheme_setup');


/* -------------------------------------------------
 * Enqueue CSS & JS
 * ------------------------------------------------- */
function mytheme_assets() {

    // Main stylesheet
    wp_enqueue_style(
        'mytheme-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );

}
add_action('wp_enqueue_scripts', 'mytheme_assets');


/* -------------------------------------------------
 * Enable HTML5 Support
 * ------------------------------------------------- */
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


/* -------------------------------------------------
 * Remove WordPress Version (Security)
 * ------------------------------------------------- */
remove_action('wp_head', 'wp_generator');
=======
add_action('wp_enqueue_scripts', 'appointment_form_styles');

