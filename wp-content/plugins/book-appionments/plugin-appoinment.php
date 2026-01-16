<?php
/**
 * Plugin Name: Book Appointments
 * Description: Simple appointment booking system
 * Version: 1.0
 * Author: You
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/* -------------------------------------------------
 * Add Admin Menu
 * ------------------------------------------------- */
function book_appointments_menu() {

    add_menu_page(
        'Book Appointments',        // Page title
        'Book Appointments',        // Menu title
        'manage_options',           // Capability ✅ FIXED
        'book-appointments',        // Menu slug
        'book_appointments_page',   // Callback function
        'dashicons-calendar',       // Icon
        20                           // Position
    );
}
add_action( 'admin_menu', 'book_appointments_menu' );

/* -------------------------------------------------
 * Admin Page Content
 * ------------------------------------------------- */
function book_appointments_page() {
    ?>
    <div class="wrap">
        <h1>Book Appointments</h1>
        <p>Appointment plugin is working.</p>
    </div>
    <?php
}
    