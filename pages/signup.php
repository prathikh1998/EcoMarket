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

// Receive submitted signup credentials
$email = $_POST['signup_email'];
$password = $_POST['signup_password'];

// Get the first character of the email to use as the image file name
$imageFileName = strtolower(substr($email, 0, 1)) . ".png"; // Assuming all profile photos are PNG files

// Insert the new user data into the database with profile photo filename
$sql = "INSERT INTO users (email, password, profile_photo_filename) VALUES ('$email', '$password', '$imageFileName')";

if ($conn->query($sql) === TRUE) {
    // Redirect the user to the homepage or a success page
    header("Location: login.html");
    exit();
} else {
    // If there's an error (e.g., duplicate email), display an error message or redirect them back to the signup page
    echo "Error: " . $sql . "<br>" . $conn->error;
    // Alternatively, you can redirect them back to the signup page with an error message
    // header("Location: signup.html?error=duplicate_email");
    // exit();
}

// Close connection
$conn->close();
?>
