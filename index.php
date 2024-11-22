<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Appointment System</title>
    <link rel="stylesheet" href="style/index.css">
</head>
<body>

    <?php
        require 'navbar.php';
    ?>

    <header class="hero">
        <h1>Find Your Perfect Doctor</h1>
        <p>Book appointments with top-rated doctors online or in-person.</p>
        <div class="search-bar">
            <form action="find-doctors.php" method="GET">
                <input type="text" name="speciality" id="specilaity" placeholder="Search by Specialization">
                <button type="submit">Find Doctors</button>
            </form>
        </div>
    </header>

    <section class="services">
        <h2>Our Services</h2>
        <div class="service-cards">
            <div class="service-card">
                <img src="logo/medical-report.png" alt="General Checkup">
                <h3>General Checkup</h3>
                <p>Comprehensive health assessments.</p>
            </div>
            <div class="service-card">
                <img src="logo/healthcare.png" alt="Specialty Consultations">
                <h3>Specialty Consultations</h3>
                <p>Expert advice for specific health conditions.</p>
            </div>
            <div class="service-card">
                <img src="logo/appointment.png" alt="Online Appointments">
                <h3>Online Appointments</h3>
                <p>Convenient consultations from the comfort of your home.</p>
            </div>
            <div class="service-card">
                <img src="logo/emergency-services.png" alt="Emergency Services">
                <h2>Emergency Services</h2>
                <p>Get immediate medical assistance in case of emergencies.</p>
            </div>
        </div>
        </div>
    </section>

    <?php
    require 'footer.php';
    ?>
</body>
</html>