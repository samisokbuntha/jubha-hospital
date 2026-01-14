<div class="ap-header">
      <h1>
        Appointment
      </h1>
      <img src="<?php echo get_template_directory_uri(); ?>/image/logo1.png" alt="">
    
</div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Request an Appointment</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">

</head>
<body>

<div class="appointment-wrapper">

    <h2>Request an Appointment</h2>
    <p class="subtitle">
        Please complete the form below to request an appointment. Our team will review your information and reach out to confirm the date and time.
        If you need immediate assistance or have an urgent matter, please call us directly using the contact information provided.
    </p>

    <form class="appointment-form">

        <!-- Doctor (type / filter / select) -->
        <div class="form-group">
            <label>Doctor</label>

            <input type="hidden" name="doctor" id="doctorValue">

            <div class="dropdown">
                <input
                    type="text"
                    class="dropdown-input"
                    placeholder="Choose a doctor from the list"
                    onfocus="openDropdown()"
                    onkeyup="filterDoctor()"
                >

                <ul class="dropdown-list" id="doctorList">
                    <li onclick="selectDoctor(this)">
                         <img src="<?php echo get_template_directory_uri(); ?>/image/doctor-nha.jpg" alt="">
                        Dr. Nha
                    </li>
                    <li onclick="selectDoctor(this)">
                        <img src="<?php echo get_template_directory_uri(); ?>/image/doctor-nha.jpg" alt="">
                        Dr. Sok Dara
                    </li>
                    <li onclick="selectDoctor(this)">
                        <img src="<?php echo get_template_directory_uri(); ?>/image/doctor-nha.jpg" alt="">
                        Dr. Chanthy
                    </li>
                    <li onclick="selectDoctor(this)">
                        <img src="<?php echo get_template_directory_uri(); ?>/image/doctor-nha.jpg" alt="">
                        Dr. Lina
                    </li>
                    <li onclick="selectDoctor(this)">
                        <img src="<?php echo get_template_directory_uri(); ?>/image/doctor-nha.jpg" alt="">
                        Dr. Vannak
                    </li>
                </ul>
            </div>
        </div>

        <!-- First Name -->
        <div class="form-group">
            <label>First Name</label>
            <input type="text" placeholder="Enter your first name">
        </div>

        <!-- Last Name -->
        <div class="form-group">
            <label>Last Name</label>
            <input type="text" placeholder="Enter your last name">
        </div>

        <!-- Sex + DOB -->
        <div class="form-row">
            <div class="form-group">
                <label>Sex</label>
                <select>
                    <option selected disabled>Select your sex</option>
                    <option>Male</option>
                    <option>Female</option>
                </select>
            </div>

            <div class="form-group">
                <label>Date of Birth <span>(optional)</span></label>
                <input type="date">
            </div>
        </div>

        <!-- Phone + Email -->
        <div class="form-row">
            <div class="form-group phone-group">
                <label>Phone Number</label>
                <div class="phone-input">
                    <span class="country-code">+855 (KH)</span>
                    <input type="tel" placeholder="e.g. 9234567890">
                </div>
            </div>

            <div class="form-group">
                <label>Email Address <span>(optional)</span></label>
                <input type="email" placeholder="e.g. yourname@example.com">
            </div>
        </div>

        <!-- Reason -->
        <div class="form-group">
            <label>Reason for Appointment</label>
            <textarea placeholder="Describe the purpose of your visit (e.g. consultation, follow-up, specific concerns)."></textarea>
        </div>

        <!-- Privacy -->
        <div class="form-checkbox">
            <input type="checkbox" checked>
            <span>I have read and agree to the <a href="#">Privacy Policy</a>.</span>
        </div>

        <!-- Submit -->
        <button type="submit" class="submit-btn">Submit</button>

    </form>
</div>

<script>
function openDropdown() {
    document.getElementById("doctorList").style.display = "block";
}

function filterDoctor() {
    let value = document.querySelector(".dropdown-input").value.toLowerCase();
    let items = document.querySelectorAll("#doctorList li");

    items.forEach(item => {
        item.style.display = item.textContent.toLowerCase().includes(value)
            ? "block"
            : "none";
    });
}

function selectDoctor(item) {
    document.querySelector(".dropdown-input").value = item.textContent;
    document.getElementById("doctorValue").value = item.textContent;
    document.getElementById("doctorList").style.display = "none";
}

document.addEventListener("click", function(e) {
    if (!e.target.closest(".dropdown")) {
        document.getElementById("doctorList").style.display = "none";
    }
});
</script>

</body>
</html>
111
