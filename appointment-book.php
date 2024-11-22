<?php
include 'database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointment</title>
    <link rel="stylesheet" href="style/appointment-book.css">
</head>
<body>
    <?php require 'navbar.php'; ?>

    <main>
        <h1>Search Results</h1>
        <table class="doctor-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Specialty</th>
                    <th>City</th>
                    <th>Time</th>
                    <th>Fees</th>
                    <th>Booking</th>
                </tr>
            </thead>
            <tbody>
                <?php             
                if (isset($_GET['doctors_name'])) {
                    $name = $_GET['doctors_name'];
                    $sql = "SELECT * FROM doctors WHERE doctors_name = '$name'";
                
                    $result = mysqli_query($conn, $sql);
                
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['doctors_name'] . "</td>";
                            echo "<td>" . $row['specialty'] . "</td>";
                            echo "<td>" . $row['city'] . "</td>";
                            echo "<td>" . $row['time'] . "</td>";
                            echo "<td>" . $row['fees'] . "</td>";
                            echo "<td>
                                    <form action='process_booking.php' method='POST'> 
                                        <input type='date' id='date' name='date' required>
                                        <input type='hidden' name='doctors_id' value='" . $row['id'] . "'> 
                                        <input type='hidden' name='time' value='" . $row['time'] . "'> &nbsp;
                                        <button type='submit' id='book-btn'>Book</button> 
                                    </form>
                                  </td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='8'>No doctors found.</td></tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </main>
    <?php require 'footer.php'; ?>
</body>
</html>
