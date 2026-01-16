<?php get_header(); ?>

<img class="banner2" src="<?php echo get_template_directory_uri(); ?>/image/banner2.png" alt="">

<div class="search-wrapper">
    <form class="search-box">

        <input 
            type="text" 
            placeholder="Type the doctor's name"
            class="search-input">

        <select class="search-select">
            <option>Select Location</option>
            <option>Phnom Penh</option>
            <option>Siem Reap</option>
            <option>Battambang</option>
        </select>

        <select class="search-select">
            <option>Select Specialization</option>
            <option>Cardiology</option>
            <option>Dermatology</option>
            <option>Pediatrics</option>
        </select>

        <button type="submit" class="search-btn">SEARCH</button>

    </form>
</div>

<!-- DOCTOR CARDS -->
<div class="doctor-cards-container">

    <div class="doctor-card">
        <img src="<?php echo get_template_directory_uri(); ?>/image/doctor.png">
        <h3>Dr. John Doe</h3>
        <p>Cardiologist</p>
        <p>Phnom Penh</p>
        <a href="#">View Profile</a>
    </div>

    <div class="doctor-card">
        <img src="<?php echo get_template_directory_uri(); ?>/image/doctor.png">
        <h3>Dr. Jane Smith</h3>
        <p>Dentist</p>
        <p>Siem Reap</p>
        <a href="#">View Profile</a>
    </div>

    <div class="doctor-card">
        <img src="<?php echo get_template_directory_uri(); ?>/image/doctor.png">
        <h3>Dr. Emily Johnson</h3>
        <p>Pediatrician</p>
        <p>Battambang</p>
        <a href="#">View Profile</a>
    </div>
    

</div>
<div class="doctor-cards-container">

    <div class="doctor-card">
        <img src="<?php echo get_template_directory_uri(); ?>/image/doctor.png">
        <h3>Dr. John Doe</h3>
        <p>Cardiologist</p>
        <p>Phnom Penh</p>
        <a href="#">View Profile</a>
    </div>

    <div class="doctor-card">
        <img src="<?php echo get_template_directory_uri(); ?>/image/doctor.png">
        <h3>Dr. Jane Smith</h3>
        <p>Dentist</p>
        <p>Siem Reap</p>
        <a href="#">View Profile</a>
    </div>

    <div class="doctor-card">
        <img src="<?php echo get_template_directory_uri(); ?>/image/doctor.png">
        <h3>Dr. Emily Johnson</h3>
        <p>Pediatrician</p>
        <p>Battambang</p>
        <a href="#">View Profile</a>
    </div>
    

</div>
<div class="doctor-cards-container">

    <div class="doctor-card">
        <img src="<?php echo get_template_directory_uri(); ?>/image/doctor.png">
        <h3>Dr. John Doe</h3>
        <p>Cardiologist</p>
        <p>Phnom Penh</p>
        <a href="#">View Profile</a>
    </div>

    <div class="doctor-card">
        <img src="<?php echo get_template_directory_uri(); ?>/image/doctor.png">
        <h3>Dr. Jane Smith</h3>
        <p>Dentist</p>
        <p>Siem Reap</p>
        <a href="#">View Profile</a>
    </div>

    <div class="doctor-card">
        <img src="<?php echo get_template_directory_uri(); ?>/image/doctor.png">
        <h3>Dr. Emily Johnson</h3>
        <p>Pediatrician</p>
        <p>Battambang</p>
        <a href="#">View Profile</a>
    </div>
    

</div>
<?php get_footer(); ?>
