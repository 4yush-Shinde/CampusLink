<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect input data
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    // Basic validation
    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        echo "All fields are required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
    } elseif ($password !== $confirm_password) {
        echo "Passwords do not match.";
    } else {
        // Process the data (e.g., save to a database)
        // This is a placeholder for actual database code
        echo "Sign up successful! Welcome, " . htmlspecialchars($username) . ".";
    }
}
?>
