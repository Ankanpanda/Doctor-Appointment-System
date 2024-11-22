<?php
session_start();
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $users_id = $_SESSION['user_id']; 
    $doctors_id = $_POST['doctors_id'];
    $appointment_date = $_POST['date'];
    $appointment_time = $_POST['time'];   

    $sql = $conn->prepare("INSERT INTO appointments (users_email, doctors_id, appointment_date, appointment_time) VALUES ('$users_id', '$doctors_id', '$appointment_date', '$appointment_time')");
    if ($sql->execute()) {
        echo "Appointment booked successfully!";
    } else {
        echo "Error: " . $sql->error;
    }
    $sql->close();
} else {
    echo "Invalid request. Please ensure all fields are filled correctly.";
}

$conn->close();
?>
<meta http-equiv = "refresh" content = " 1 ; url = dashboard.php"/>
