<?php
session_start();

if (!isset($_SESSION['email'])) {
    // Redirect to login page if not logged in
    header("Location: login.html");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_SESSION['email'];
    $fullname = $_POST['fullname'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];

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

    // Prepare SQL statement to retrieve existing password
    $password_query = "SELECT password FROM users WHERE email='$email'";
    $password_result = $conn->query($password_query);

    if ($password_result->num_rows > 0) {
        $row = $password_result->fetch_assoc();
        $existing_password = $row['password'];
    } else {
        echo "Error: Password not found";
        exit();
    }

    // Prepare SQL statement to update user details (excluding password)
    $sql = "UPDATE users SET fullname='$fullname', password='$existing_password', address1='$address1', address2='$address2', city='$city', state='$state', zip='$zip' WHERE email='$email'";

    if ($conn->query($sql) === TRUE) {
        // Redirect to profile page after successful update
        header("Location: profile.php");
        exit();
    } else {
        echo "Error updating profile: " . $conn->error;
    }

    $conn->close();
}
?>
