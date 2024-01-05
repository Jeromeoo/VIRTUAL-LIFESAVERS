<?php
include 'connection.php';

if (isset($_POST["Submit"])) {
    $first_name = $_POST["fname"];
    $last_name = $_POST["lname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confpassword = $_POST["cpassword"];
    $phone_number = $_POST['phone_number'];
    $address = $_POST ["address"];
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
                $insert_query = "INSERT INTO info (fname,lname, email, password, phone_number, address, birth_date) VALUES ('$first_name','$last_name', '$email', '$hashedPassword','$phone_number', '$address' ,'$birth_date')";
                
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
    <link href="https://fonts.googleapis.com/css2?family=Vollkorn:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
   </head>
   <body>
   <header class="site-header">
    <div class="announcement">
        <img src="css/images/Announcement-Logo.jpg" alt="">
        <p>Online Blood Donation: Share, Save, Support</p>
        <p></p>
    </div>
    <nav class="nav">
        <img src="css/images/Logo.png" alt="">
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
        <label for="fname">First Name:</label> 
        <input type="text" placeholder="Enter your first name" name="fname" required>
      </div> <br>
      <div class="input-box">
        <label for="lname">Last Name:</label> 
        <input type="text" placeholder="Enter your last name" name="lname" required>
      </div> <br>
      <div class="input-box">
      <label for="pnumber">Phone Number:</label> 
        <input type="text" placeholder="Enter your phone number" name="phone_number" required>
      </div> <br>
      <div class="input-box">
        <label for="address">Address:</label> 
        <input type="text" placeholder="Enter your address" name="address" required>
      </div> <br>
      <div class="input-box">
      <label for="email">Email:</label> 
        <input type="text" placeholder="Enter your email" name="email" required>
      </div> <br>
      <div class="input-box">
      <label for="password">Password:</label> 
        <input type="password" placeholder="Create password" name="password" required>
      </div> <br>
      <div class="input-box">
      <label for="cpassword">Retype your password:</label> 
        <input type="password" placeholder="Confirm password" name="cpassword" required>
      </div> <br>
      <div class="input-box">
        <label for="birthday">Birthdate:</label>
        <input type="date" placeholder="Enter birth date" name="birth_date" required>
      </div> <br>
      
      <div class="input-box button">
        <input type="submit" name="Submit" value="Register Now">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="index.php">Login now</a></h3>
      </div>
    </form>
  </div>
  <script>
    // HEADER 

// Get the header element
const header = document.querySelector('.site-header');

// Add an event listener to the window's scroll event
window.addEventListener('scroll', () => {
    // Check if the scroll position is greater than a certain value (e.g., 100px)
    if (window.scrollY > 100) {
        // Add the class to change the background color
        header.classList.add('scrolled');
    } else {
        // Remove the class to revert the background color
        header.classList.remove('scrolled');
    }
});
</script>
</body>
</html>