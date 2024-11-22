<?php
include 'database.php';

if (isset($_GET['appointment_id'])) {
    $appointment_id = $_GET['appointment_id'];

    // Retrieve the existing appointment details
    $sql = "SELECT * FROM appointments WHERE id = '$appointment_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        

        // Reschedule the appointment (update appointment_date and/or appointment_time)
        // ... (your logic for rescheduling)

        echo "Appointment rescheduled successfully!";
    } else {
        echo "Appointment not found.";
    }
} else {
    echo "Invalid request.";
}

$conn->close();
?>