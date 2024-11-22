<?php
include 'database.php';

    $user_email = $_GET['users_email'];

    $sql = "DELETE FROM users WHERE users_email = '$user_email'";

    if ($conn->query($sql) === TRUE) {
        echo "user removed successfully!";
    } else {
        echo "Error: " . $conn->error;
    }

$conn->close();
?>
<meta http-equiv = "refresh" content = " 1 ; url = dashboard_admin.php"/>