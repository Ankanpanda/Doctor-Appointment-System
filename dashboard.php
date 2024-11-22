<?php
include 'database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style/dashboard.css">
</head>
<body>
    <?php
    require 'navbar.php';
    ?>
    <header>
        <h1>Welcome to Your Dashboard</h1>
        <div class="search-bar">
            <form action="appointment-book.php" method="GET">
                <input type="text" name="doctors_name" id="doctors_name" placeholder="Search by Name">
                <button type="submit">Book Appointment</button>
            </form>
        </div>
    </header>
    <main>
        <div class="user-info">
            <h2>Your Information</h2>
            <?php
                if (isset($_SESSION['user_id'])) {
                    $user_id = $_SESSION['user_id'];

                    $sql_user = "SELECT * FROM users WHERE users_email = '$user_id'";
                    $result_user = $conn->query($sql_user);
            
                    if ($result_user->num_rows > 0) {
                        $row_user = $result_user->fetch_assoc();
                        echo "<div class='user-info'>";
                        echo "<h2>" . $row_user['users_name'] . "</h2>";
                        echo "<p>Email: " . $row_user['users_email'] . "</p>";
                        echo "<p>Phone: " . $row_user['phone'] . "</p>";
                        echo "</div>";            
                    }
                }
            ?>
        </div>
        <div class="appointments">
            <h2>Upcoming Appointments</h2>
            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Doctor</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    if (isset($_SESSION['user_id'])) {
                        $user_id = $_SESSION['user_id'];
                        $sql = "SELECT a.id, a.appointment_date, a.appointment_time, d.doctors_name FROM appointments a INNER JOIN doctors d ON a.doctors_id = d.id WHERE users_email = '$user_id'";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row['appointment_date'] . "</td>";
                            echo "<td>" . $row['appointment_time'] . "</td>";
                            echo "<td>" . $row['doctors_name'] . "</td>";
                            echo "<td> <form action='reschedule.php' method='GET'>
                                    <input type='hidden' name='appointment_id' value='" . $row['id'] . "'>
                                    <button type='submit'>Reschedule</button></form>
                                    <form action='process_booking_cancel.php' method='GET'>
                                    <input type='hidden' name='appointment_id' value='" . $row['id'] . "'>
                                    <button type='submit' id='cancel-btn'>Cancel</button></form></td>";
                            echo "</tr>";
                        }
                    } 
                    else {
                        echo "<tr><td colspan='5'>No upcoming appointments.</td></tr>";
                    }
                }
                $conn->close();
                ?>
                </tbody>
            </table>
        </div>
    </main>

    <?php
    require 'footer.php';
    ?>
</body>
</html>

