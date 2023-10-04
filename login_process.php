<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Replace with your database connection logic
    $db_username = "admin";
    $db_password = "admin";

    if ($username == $db_username && $password == $db_password) {
        $_SESSION["username"] = $username;
        header("Location: dashboard.php"); // Redirect to a dashboard or another page upon successful login
        exit;
    } else {
        $error_message = "Invalid username or password.";
    }
}
?>
