<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helpdesk</title>
    <link rel="stylesheet" href="style/helpdesk.css">
</head>
<body>
<?php
        require 'navbar.php';
    ?>
    <header>
        <h1>Helpdesk</h1>
    </header>
    <main>
        <div class="updates">
            <h2>Latest Updates</h2>
            <ul>
                <li>New feature: Online payment for appointments</li>
                <li>Reminder: Please arrive 15 minutes early for your appointments</li>
                </ul>
        </div>
        <div class="faqs">
            <h2>Frequently Asked Questions</h2>
            <ul>
                <li>
                    <strong>How do I reschedule my appointment?</strong>
                    <p>To reschedule your appointment, please contact our customer support at 1800 2578 9863 or info@medbooker.com.</p>
                </li>
                <li>
                    <strong>What if I'm running late for my appointment?</strong>
                    <p>If you're running late, please contact your doctor's office to inform them and reschedule if necessary.</p>
                </li>
                </ul>
        </div>
        <div class="contact">
            <h2>Contact Us</h2>
            <strong>MedBooker Healthcare Private Limited</strong>
            <p><strong>Phone:</strong> 1800 2578 9863</p>
            <p><strong>Email:</strong> info@medbooker.com</p>
            <p><strong>Address:</strong> 16/2A, S.N.Banerjee Road
            Kolkata, West Bengal, India</p>
        </div>
    </main>
    <?php
        require 'footer.php';
    ?>
</body>
</html>