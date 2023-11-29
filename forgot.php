<?php
include 'connection.php';

if (isset($_POST['submit'])) {
    $username = $_POST['email'];

    // Check if the email exists in your database
    $sql = "SELECT * FROM info WHERE email = '$username'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        if (isset($_POST['new_password']) && isset($_POST['confirm_password'])) {
            $newPassword = $_POST['new_password'];
            $confirmPassword = $_POST['confirm_password'];

            if ($newPassword === $confirmPassword) {
                // Passwords match, update the password in the database
                $hashedNewPassword = password_hash($newPassword, PASSWORD_DEFAULT);
                $updatePasswordSql = "UPDATE info SET password = '$hashedNewPassword' WHERE email = '$username'";
                if (mysqli_query($conn, $updatePasswordSql)) {
                    // Password changed successfully, show the success message
                    echo "<script>alert('Password Successfully changed!');window.location = 'index.php';</script>";

                } else {
                    echo "<script>alert('An error occurred while changing the password.');</script>";
                }
            } else {
                echo "<script>alert('New password and confirm password do not match.');</script>";
            }
        } else {
            // Display a message indicating that the user should enter a new password
            echo "<script>alert('Please enter a new password.');</script>";
        }
    } else {
        echo "<script>alert('Username is not a valid email address.');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password | Virtual Lifesaver</title>
    <link rel="stylesheet" type="text/css" href="css/signup.css">
    <title>Forgot Password?</title>
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
  </div>
  <div class="wrapper">
        <form action="forgot.php" method="post">
            <h2>Forgot Password?</h2>
            <div class="input-box">
                <input type="text" name="email" placeholder="Enter your email" required>
                <i class='bx bx-user'></i>
            </div>
            <div class="input-box">
                <input type="password" name="new_password" placeholder="New Password">
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="input-box">
                <input type="password" name="confirm_password" placeholder="Confirm Password">
                <i class='bx bxs-lock-alt'></i>
</div>

            <div class="input-box button">
        <input type="submit" name="Submit" value="Submit">
        </div>
           
    
        <div id="success-message" style="display: none; color: green;">Password Successfully changed!</div>
    </div>
</form>

</body>
</html>

