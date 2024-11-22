<?php
include 'database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reschedule Appointment</title>
    <link rel="stylesheet" href="style/reschedule.css">
</head>
<body>
    <?php require 'navbar.php'; ?>

    <main>
        <h1>Reschedule Appointment</h1>
        <form action="process_reschedule.php" method="POST">
            <label for="appointment_date">New Appointment Date:</label>
            <input type="date" id="appointment_date" name="appointment_date" required>
            <input type="hidden" name="appointment_id" value="<?php echo $_GET['appointment_id']; ?>"><br>
            <button type="submit">Reschedule</button>
        </form>
    </main>

    <?php require 'footer.php'; ?>
</body>
</html>