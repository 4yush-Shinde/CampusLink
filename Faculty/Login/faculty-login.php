<?php
// Sample username and password
$sample_username = 'admin';
$sample_password = 'password123';

// Start session
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if username and password match the sample
    if ($username === $sample_username && $password === $sample_password) {
        // Set session variables
        $_SESSION['username'] = $username;
        header("Location: welcome.php");
        exit();
    } else {
        echo "<p style='color:red; text-align:center;'>Invalid username or password.</p>";
    }
}
?>
