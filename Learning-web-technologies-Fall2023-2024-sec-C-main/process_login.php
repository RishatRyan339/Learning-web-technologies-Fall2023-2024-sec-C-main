<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $enteredUsername = $_POST["username"];
    $enteredPassword = $_POST["password"];
    
    // Retrieve stored username and hashed password from cookies
    $storedUsername = $_COOKIE["username"];
    $storedPassword = $_COOKIE["password"];
    
    // Check if the entered username matches the stored username
    if ($enteredUsername === $storedUsername && password_verify($enteredPassword, $storedPassword)) {
        // Start a session
        session_start();
        
        // Storing the username in the  for session for future use
        $_SESSION["username"] = $storedUsername;
        
        // Redirect to the dashboard
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Invalid username or password.";
    }
}
?>
