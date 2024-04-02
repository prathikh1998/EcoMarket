<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EcoMarket</title>
  <link rel="stylesheet" href="../styles/styles_main.css"> <!-- Link to your main CSS file -->
  <style>
    /* Add this CSS for dropdown styling */
    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 120px;
      box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
      z-index: 1;
      right: 0; /* Align dropdown to the right */
    }

    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .dropdown-content a:hover {
      background-color: #f1f1f1;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    #profile-img:hover {
      cursor: pointer;
    }

    /* Adjust profile image size and border radius */
    #profile-img {
      width: 50px;
      height: 50px;
      border-radius: 50%;
    }
  </style>
</head>
<body>
    <header>
    <div class="container">
      <div class="logo_title">
      <img src="../assets/logo.png" class="logo">
      <h1>EcoMarket</h1>
    </div>
      <nav>
        <ul>
          <li><a href="homePage.php">Home</a></li>
          <li><a href="shop.php">Shop</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="#">Contact</a></li>
          <li>
            <div class="profile-link">
              <div class="dropdown">
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

                // Check if user is logged in
                session_start();
                if (isset($_SESSION['email'])) {
                    // Retrieve the email of the logged-in user
                    $email = $_SESSION['email'];

                    // Query to retrieve the profile photo filename based on the user's email
                    $profilePhotoQuery = "SELECT profile_photo_filename FROM users WHERE email = '$email'";
                    $profilePhotoResult = $conn->query($profilePhotoQuery);

                    if ($profilePhotoResult->num_rows > 0) {
                        // Output data of the first row
                        $profilePhotoRow = $profilePhotoResult->fetch_assoc();
                        $profilePhotoFilename = $profilePhotoRow["profile_photo_filename"];
                        echo "<img style='display: flex; align-items: center;' src='../assets/$profilePhotoFilename' alt='Profile Photo' class='profile-photo' id='profile-img'>";
                    } else {
                        // If no profile photo found for the user
                        echo "<img src='../assets/default_profile_photo.png' alt='Profile Photo' class='profile-photo' id='profile-img'>";
                    }

                    // Add options dropdown within the same div
                    echo "<div class='dropdown-content'>
                            <a href='login.html'>Logout</a>
                            <a href='profile.php'>Profile</a>
                          </div>";
                } else {
                    // If user is not logged in
                    echo "<img src='../assets/creator2.jpeg' alt='Profile Photo' class='profile-photo' id='profile-img'>";
                }

                // Close database connection
                $conn->close();
                ?>
              </div>
            </div>
          </li>
        </ul>
      </nav>
    </div>
  </header>
</body>
</html>