<?php
include 'connection.php';

if (isset($_POST["Submit"])) {
    $first_name = $_POST["fname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confpassword = $_POST["cpassword"];
    $birth_date = $_POST["birth_date"];

    // Check if the user already exists
    $query = "SELECT * FROM info WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('Email already exists');</script>";
    } else {
        // Validate the email as a valid email address
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $first_name = ucfirst($first_name); // Capitalize the first name

            if ($password == $confpassword) {
                // Hash the password
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                // Insert data into the database
                $insert_query = "INSERT INTO info (fname, email, password, birth_date) VALUES ('$first_name', '$email', '$hashedPassword', '$birth_date')";
                
                if (mysqli_query($conn, $insert_query)) {
                    echo "<script>alert('Registered Successfully'); window.location = 'index.php';</script>";
                } else {
                    echo "<script>alert('Registration failed. Please try again.');</script>";
                }
            } else {
                echo "<script>alert('Password Does Not Match');</script>";
            }
        } else {
            echo "<script>alert('Email is not valid.')</script>";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up | Virtual Lifesaver</title> 
    <link rel="stylesheet" href="css/signup.css">
   </head>
   <body>
   <header class="site-header">
    <div class="announcement">
        <img src="images/Announcement-Logo.jpg" alt="">
        <p>Online Blood Donation: Share, Save, Support</p>
        <p></p>
    </div>
    <nav class="nav">
        <img src="images/Logo.png" alt="">
        <ul class="nav_list">
        <li class="nav_list-item"><a href="homepage.php" class="nav_link">HOME</a></li>
            <li class="nav_list-item"><a href="about.php" class="nav_link">ABOUT</a></li>
            <li class="nav_list-item"><a href="contact.php" class="nav_link">CONTACT</a></li>
            <li class="nav_list-item"><a href="index.php" class="nav_link">SIGN IN</a></li>
            <li class="nav_list-item"><a href="signup_process.php" class="nav_link">SIGN UP</a></li>
        </ul>
    </nav>
  </header>
  <div class="wrapper">
    <h2>Sign Up</h2>
    <form action="signup_process.php" method="post">
      <div class="input-box">
        <input type="text" placeholder="Enter your name" name="fname" required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Enter your email" name="email" required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Enter your username">
      </div>
      <div class="input-box">
        <input type="password" placeholder="Create password" name="password" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Confirm password" name="cpassword" required>
      </div>
      <div class="input-box">
        <input type="date" placeholder="Enter birth date" name="birth_date" required>
      </div>
      <div class="policy">
        <input type="checkbox">
        <h3>Remember me</h3>
      </div>
      <div class="input-box button">
        <input type="submit" name="Submit" value="Register Now">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="signin.html">Login now</a></h3>
      </div>
    </form>
  </div>
</body>
</html>

