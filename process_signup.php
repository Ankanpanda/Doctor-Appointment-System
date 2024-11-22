<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $phone = $_POST["phone"];

    if ($password !== $confirm_password) {
        echo "Passwords do not match.";
        exit();
    }

    $sql = "INSERT INTO users (users_name, users_email, password, phone) VALUES ('$name', '$email', '$password', '$phone')";

    if ($conn->query($sql) === TRUE) {
        echo "Signup successful!";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>

<meta http-equiv = "refresh" content = " 2 ; url = login.php"/>