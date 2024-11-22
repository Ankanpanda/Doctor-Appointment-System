<?php
include 'database.php';

if (isset($_POST['appointment_id']) && isset($_POST['appointment_date'])) {
    $appointment_id = $_POST['appointment_id'];
    $appointment_date = $_POST['appointment_date'];

    $sql = "UPDATE appointments SET appointment_date = '$appointment_date' WHERE id = '$appointment_id'";

    if ($conn->query($sql) === TRUE) {
        echo "Appointment rescheduled successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "Invalid request.";
}

$conn->close();
?>
<meta http-equiv = "refresh" content = " 1 ; url = dashboard.php"/>