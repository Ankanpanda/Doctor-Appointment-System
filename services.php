<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services</title>
    <link rel="stylesheet" href="style/services.css">
</head>
<body>
    <?php require 'navbar.php'; ?>

    <main>
        <h1>Our Services</h1>
        <div class="service-cards">
            <div class="service-card">
                <img src="logo/appointment.png" alt="Appointment Booking">
                <h2>Appointment Booking</h2>
                <p>Easily schedule appointments with your preferred doctors.</p>
            </div>
            <div class="service-card">
                <img src="logo/healthcare.png" alt="Online Consultations">
                <h2>Online Consultations</h2>
                <p>Consult with doctors from the comfort of your home.</p>
            </div>
            <div class="service-card">
                <img src="logo/communications.png" alt="Communication">
                <h2>Communication</h2>
                <p>Stay connected with your doctors and healthcare team.</p>
            </div>
            <div class="service-card">
                <img src="logo/telehealth.png" alt="Patient and Doctor Profiles">
                <h2>Patient and Doctor Profiles</h2>
                <p>View detailed profiles of doctors and patients.</p>
            </div>
            <div class="service-card">
                <img src="logo/emergency-services.png" alt="Emergency Services">
                <h2>Emergency Services</h2>
                <p>Get immediate medical assistance in case of emergencies.</p>
            </div>
        </div>

        <h2>Our Partnered Hospitals</h2>
        <ul>
            <li><h4>ABC Hospitals, Kolkata</h4></li>
            <li><h4>JKH Hospitals, Mumbai</h4></li>
            <li><h4>LTP Hospitals, New Delhi</h4></li>
            <li><h4>ZYQ Hospitals, Chennai</h4></li>
        </ul>
    </main>

    <?php require 'footer.php'; ?>
</body>
</html>