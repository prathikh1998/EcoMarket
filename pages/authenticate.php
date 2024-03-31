<?php
// Database connection parameters
$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$database = "ecomarket"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Receive submitted login credentials
$email = $_POST['email'];
$password = $_POST['password'];

// Query the database to check if the user exists with the provided credentials
$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
$result = $conn->query($sql);

// Check if a row was returned (indicating a successful login)
if ($result->num_rows > 0) {
    // Start session
    session_start();

    // Store user email in session variable
    $_SESSION['email'] = $email;

    // Redirect the user to the homepage
    header("Location: homePage.php");
    exit();
} else {
    // Redirect the user back to the login page with an error message
    header("Location: login.html?error=invalid_credentials");
    exit();
}

// Close connection
$conn->close();
?>
