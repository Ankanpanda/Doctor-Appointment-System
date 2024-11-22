<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style/contact.css">
</head>
<body>

<?php
    require 'navbar.php';
    ?>
    <header>
        <h1>Contact Us</h1>
    </header>
    <main>
        <section class="contact-info">
            <h2>Our Headquarters</h2>
            <p>
                MedBooker Healthcare Private Limited<br>
                16/2A, S.N.Banerjee Road<br>
                Kolkata, West Bengal, India<br>
                Phone: 1800 2578 9863<br>
                Email: info@medbooker.com
            </p>
            <div class="social-media">  
                <a href="https://www.facebook.com/MedBookerOfficial">Facebook</a>
                <a href="https://twitter.com/MedBookerOfficial">Twitter</a>
                <a href="https://www.instagram.com/MedBookerOfficial">Instagram</a>
            </div>
        </section>
        <section class="contact-form">
            <h2>Contact Form</h2>
            <form action="process_form.php" method="post">
                <input type="text" name="name" placeholder="Your Name" required><br>
                <input type="email" name="email" placeholder="Your Email" required><br>
                <textarea name="message" placeholder="Your Message"></textarea>
                <button type="submit">Send</button>
            </form>
        </section>
    </main>
      
    <?php
    require 'footer.php';
    ?>

</body>
</html>