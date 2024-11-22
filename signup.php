<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="style/signup.css">
</head>
<body>

<?php
    require 'navbar.php';
    ?>

    <div class="signup-container">
        <h1>Signup</h1>
        <form action="process_signup.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required><br><br>
            <button type="submit">Signup</button>
        </form>
        <p>Already have an account? <a href="login.php">Login</a></p>
    </div>

    
    <?php
    require 'footer.php';
    ?>

</body>
</html>