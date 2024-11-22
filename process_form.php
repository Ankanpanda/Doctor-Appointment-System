<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $details = $_POST['message'];

    $sql = $conn->prepare("INSERT INTO form_submissions (name, email, details) VALUES ('$name', '$email', '$details')");
    
    if ($sql->execute()) {
        echo "New record created successfully.";
    } else {
        echo "Error: " . $sql->error;
    }
    $sql->close();
}
?>

<meta http-equiv="refresh" content="2; url=contact.php">