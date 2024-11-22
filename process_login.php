<?php
session_start();
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $_SESSION['user_id']=$email;

    $sql = "SELECT * FROM users WHERE users_email='$email' AND password='$password'";
    $sql_admin = "SELECT * FROM admin WHERE admin_email='$email' AND admin_password='$password'";

    $result = $conn->query($sql);
    $result_admin = $conn->query($sql_admin);

    if ($result->num_rows > 0) {
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Invalid email or password.";
        session_unset();
    }

    if($result_admin->num_rows > 0) {
        header("Location: dashboard_admin.php");
        exit();
    } else {
        session_unset();
    }
}


$conn->close();
?>
<meta http-equiv = "refresh" content = " 1 ; url = login.php"/>