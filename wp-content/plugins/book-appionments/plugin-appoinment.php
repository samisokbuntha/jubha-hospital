<?php

/** 
Plugin Name: plugin appoinment
Plugin URI: 
Description: A simple plugin to display custom text on your WordPress site.
Version: 1.0.0
Author: Buntha
License: ISO 9001 2008
*/
add_action('admin_menu', 'my_plugin_menu');

function my_plugin_menu() {
    add_menu_page(
        'Book Appointment',
        'Book Appointment',
        'manage_options',
        'my-plugin',
        'my_plugin_page',
        'dashicons-admin-generic',
        20
    );
}

function my_plugin_page() {
    echo '<h1>My Plugin Page</h1>';
}


