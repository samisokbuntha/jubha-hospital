<?php
/** 
Plugin Name: plugin appoinment
Plugin URI: 
Description: A simple plugin to display custom text on your WordPress site.
Version: 1.0.0
Author: Buntha
License: ISO 9001 2008
*/

add_action('admin_menu', 'boking_appionment_add_menu');

function boking_appionment_add_menu() {

    // MAIN MENU
    add_menu_page(
        'plugin appoinment',        // Page title
        'plugin appoinment',        // Menu title
        'manage_options',             // Capability
        'plugin appoinment',          // Menu slug
        'boking_appionment_page',     // Callback
        'dashicons-calendar-alt',     // Icon
        25
    );

    // SUB MENU: Create Patient
    add_submenu_page(
        'plugin appoinment',          // Parent slug
        'Create Patient',             // Page title
        'Create Patient',             // Menu title
        'manage_options',             // Capability
        'create-patient',             // Menu slug
        'create_patient_page'         // Callback
    );

    // SUB MENU: Create Doctor
    add_submenu_page(
        'plugin appoinment',
        'Create Doctor',
        'Create Doctor',
        'manage_options',
        'create-doctor',
        'create_doctor_page'
    );

    // SUB MENU: Create Appointment
    add_submenu_page(
        'plugin appoinment',
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
    ?>
    <div class="wrap">
        <h1>plugin appoinment</h1>
        <p>This is the main Booking Appointment dashboard.</p>
    </div>
    <?php
}

function create_patient_page() {
    ?>
    <div class="wrap">
        <h1>Patient</h1>
        <p>kobsari</p>
    </div>
    <?php
}

function create_doctor_page() {
    ?>
    <div class="wrap">
        <h1>Create Doctor</h1>
        <p>Doctor creation form goes here.</p>
    </div>
    <?php
}

function create_appointment_page() {
    ?>
    <div class="wrap">
        <h1>Create Appointment</h1>
        <p>Appointment booking form goes here.</p>
    </div>
    <?php
}



