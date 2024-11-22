<?php
include 'database.php';

if (isset($_POST['doctors_name'], $_POST['specialty'], $_POST['city'], $_POST['time'], $_POST['fees'])) {
    $name = $_POST['doctors_name'];
    $specialty = $_POST['specialty'];
    $city = $_POST['city'];
    $time = $_POST['time'];
    $fees = $_POST['fees'];

    $sql = "INSERT INTO doctors (doctors_name, specialty, city, time, fees) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $name, $specialty, $city, $time, $fees);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "Doctor added successfully!";
    } else {
        echo "Error adding doctor: " . $conn->error;
    }
} else {
    echo "Invalid request.";
}

$conn->close();
?>
<meta http-equiv = "refresh" content = " 2 ; url = dashboard_admin.php"/>