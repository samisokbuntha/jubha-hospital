
<?php
/*
Plugin Name: Plugin Appointment
Description: Booking Appointment Plugin
Version: 1.0.0
Author: Buntha
*/
function appointment_form_styles() {
    wp_enqueue_style(
        'appointment-style',
        get_stylesheet_directory_uri() . '/css/appointment.css',
        array(),
        '1.0'
    );
}

if ( ! defined('ABSPATH') ) {
    exit;
}

add_action('admin_menu', 'boking_appionment_add_menu');

function boking_appionment_add_menu() {

    // MAIN MENU
    add_menu_page(
        'Plugin Appointment',
        'Plugin Appointment',
        'manage_options',
        'plugin-appoinment',
        'boking_appionment_page',
        'dashicons-calendar-alt',
        25
    );

    // SUB MENU: Create Patient
    add_submenu_page(
        'plugin-appoinment',
        'Create Patient',
        'Create Patient',
        'manage_options',
        'create-patient',
        'create_patient_page'
    );

    // SUB MENU: Create Doctor
    add_submenu_page(
        'plugin-appoinment',
        'Create Doctor',
        'Create Doctor',
        'manage_options',
        'create-doctor',
        'create_doctor_page'
    );

    // SUB MENU: Create Appointment
    add_submenu_page(
        'plugin-appoinment',
        'Create Appointment',
        'Create Appointment',
        'manage_options',
        'create-appointment',
        'create_appointment_page'
    );
}

/* ==========================
   PAGE CALLBACK FUNCTIONS
   ========================== */

function boking_appionment_page() {
    echo '
    <div class="wrap">
        <h1>Plugin Appointment</h1>
        <p>This is the main Booking Appointment dashboard.</p>
    </div>';
}

function create_patient_page() {
    echo '
    <div class="wrap">
        <h1>Create Patient</h1>
        <p>Patient creation form goes here.</p>
    </div>';
}

function create_doctor_page() {
    echo '
    <div class="wrap">
        <h1>Create Doctor</h1>
        <p>Doctor creation form goes here.</p>
    </div>';
}

function create_appointment_page() {
    echo '
    <div class="wrap">
        <h1>Create Appointment</h1>
        <p>Appointment booking form goes here.</p>
    </div>';
}



