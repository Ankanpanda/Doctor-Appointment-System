<?php
include 'database.php';

    $doctors_id = $_GET['doctors_id'];

    $sql = "DELETE FROM doctors WHERE id = '$doctors_id'";

    if ($conn->query($sql) === TRUE) {
        echo "doctor removed successfully!";
    } else {
        echo "Error: " . $conn->error;
    }

$conn->close();
?>
<meta http-equiv = "refresh" content = " 1 ; url = dashboard_admin.php"/>