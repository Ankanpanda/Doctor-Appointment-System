<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Doctor</title>
    <link rel="stylesheet" href="style/add_doctor.css">
</head>
<body>
    <?php require 'navbar_admin.php'; ?>

    <div>        
        <h1>Add Doctor</h1>
</div>
    <main>
        <form action="process_add_doctors.php" method="POST">
            <label for="doctors_name">Name:</label>
            <input type="text" id="doctors_name" name="doctors_name" required><br>
            <label for="specialty">Specialty:</label>
            <input type="text" id="specialty" name="specialty" required><br>
            <label for="city">City:</label>
            <input type="text" id="city" name="city" required><br>
            <label for="time">Time:</label>
            <input type="text" id="time" name="time" required><br>
            <label for="fees">Fees:</label>
            <input type="number" id="fees" name="fees" step="0.01" required><br><br>
            <button type="submit">Add Doctor</button>
        </form>
    </main>

    <?php require 'footer_admin.php'; ?>
</body>
</html>