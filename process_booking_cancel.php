<?php
include 'database.php';

if (isset($_GET['appointment_id'])) {
    $appointment_id = $_GET['appointment_id'];

    $sql = "DELETE FROM appointments WHERE id = '$appointment_id'";
    if ($conn->query($sql) === TRUE) {
        echo "Appointment canceled successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "Invalid request.";
}

$conn->close();
?>
<meta http-equiv = "refresh" content = " 1 ; url = dashboard.php"/>