<?php
include 'database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style/dashboard_admin.css">
</head>
<body>
    <?php
    require 'navbar_admin.php';
    ?>
    <header>
        <h1>Welcome to Admin Dashboard</h1>
    </header>
    <main>
    <div class="dashboard-section"> 
        <h2>Status</h2>
        <p>Total Number of Users: <?php echo getTotalUsers(); ?><br>
        <p>Total Number of Doctors: <?php echo getTotalDoctors(); ?><br>
        <p>Total Number of Appointments: <?php echo getTotalAppointments(); ?><br>
        <p>Total Number of Form Submissions: <?php echo getContactFormSubmissions(); ?><br>
        <br>
        <p id="imp"> This system auto refreshes in every 2 minutes </p>
    </div>
    <div class="dashboard-section">
            <h2>Users</h2>
            <table class="users-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Phone Number</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    $sql = "SELECT * FROM users";

                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $row['users_name'] . "</td>";
                            echo "<td>" . $row['users_email'] . "</td>";
                            echo "<td>" . $row['password'] . "</td>";
                            echo "<td>" . $row['phone'] . "</td>";
                            echo "<td> <form action='process_remove_user.php' method='GET'>
                                    <input type='hidden' name='users_email' value='" . $row['users_email'] . "'>
                                    <button type='submit' id='delete-btn'>Delete</button></form></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>No Users found.</td></tr>";
                    }
            ?>
            </tbody>
        </table>
            
        </div>

        <div class="dashboard-section">
            <h2>Doctors</h2>
            <p><form action ='add_doctors.php'> Add a new Doctor: <button type='submit' id='add-doctor-btn'>Add</button></form></P>
            <table class="users-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Specialization</th>
                    <th>City</th>
                    <th>Time</th>
                    <th>Fees</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    $sql = "SELECT * FROM doctors";

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
                            echo "<td> <form action='process_remove_doctor.php' method='GET'>
                                    <input type='hidden' name='doctors_id' value='" . $row['id'] . "'>
                                    <button type='submit' id='delete-btn'>Delete</button></form></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='7'>No doctors found.</td></tr>";
                    }
            ?>
            </tbody>
        </table>
            </div>

        <div class="dashboard-section">
            <h2>Appointments</h2>
            <table class="appointments-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User Email</th>
                    <th>Doctor ID</th>
                    <th>Appointment Date</th>
                    <th>Appointment Time</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    $sql = "SELECT * FROM appointments";

                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['users_email'] . "</td>";
                            echo "<td>" . $row['doctors_id'] . "</td>";
                            echo "<td>" . $row['appointment_date'] . "</td>";
                            echo "<td>" . $row['appointment_time'] . "</td>";
                            echo "<td> <form action='process_remove_appointment.php' method='GET'>
                                    <input type='hidden' name='appointment_id' value='" . $row['id'] . "'>
                                    <button type='submit' id='delete-btn'>Delete</button></form></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6'>No Appointments found.</td></tr>";
                    }
            ?>
            </tbody>
        </table>
        </div>


        <div class="dashboard-section">
            <h2>Contact Form Submissions</h2>
            <table class="form-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Details</th>
                    <th>Created at</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    $sql = "SELECT * FROM form_submissions";

                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['name'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>" . $row['details'] . "</td>";
                            echo "<td>" . $row['created_at'] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>No Submissions found.</td></tr>";
                    }
            ?>
            </tbody>
        </table>
        </div>
    </main>

    <?php require 'footer_admin.php'; ?>
</body>
</html>

<meta http-equiv="refresh" content="120; url=dashboard_admin.php">

<?php

function getTotalUsers() {
    global $conn;

    $sql = "SELECT COUNT(*) AS total_users FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['total_users'];
    } else {
        return 0;
    }
}

function getTotalDoctors() {
    global $conn;

    $sql = "SELECT COUNT(*) AS total_doctors FROM doctors";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['total_doctors'];
    } else {
        return 0;
    }
}

function getTotalAppointments() {
    global $conn;

    $sql = "SELECT COUNT(*) AS total_appointments FROM appointments";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['total_appointments'];
    } else {
        return 0;
    }
}

function getContactFormSubmissions() {
    global $conn;

    $sql = "SELECT COUNT(*) AS total_submissions FROM form_submissions";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['total_submissions'];
    } else {
        return 0;
    }
}

?>