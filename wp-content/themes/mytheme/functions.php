
<?php
function my_theme_enqueue_styles() {

    // Theme main stylesheet
    wp_enqueue_style(
        'my-theme-style',
        get_stylesheet_uri()
    );

    // Font Awesome
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css',
        array(),
        '6.5.1'
    );

}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
function appointment_form_styles() {
    wp_enqueue_style(
        'appointment-style',
        get_stylesheet_directory_uri() . '/style.css',
        [],
        '1.0'
    );
}
add_action('wp_enqueue_scripts', 'appointment_form_styles');
