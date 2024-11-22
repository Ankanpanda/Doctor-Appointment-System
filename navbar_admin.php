<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="style/navbar_admin.css">
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <img src="logo/health-care.png" alt="MedBooker">
        </div>
        <ul class="nav-links">
                <li><a href="dashboard_admin.php">Dashboard</a></li>
                <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
</body>
</html>