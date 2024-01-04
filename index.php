<?php

session_start();


include 'connection.php';

if (isset($_POST['submit'])) {
    $username = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM info WHERE email = '$username'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if (isset($row['password'])) {
            $storedPassword = $row['password'];
            $userRole = $row['role']; // Assuming 'role' is the column indicating user role
            $_SESSION["userID"] = $row["id"];

            if (password_verify($password, $storedPassword)) {
                if ($userRole == 'admin') {
                    // Admin login
                    echo "<script>alert('Admin Login Successfully'); window.location = 'admin.php';</script>";
                    exit;
                } else {
                    // Regular user login
                    header("Location: homepage2.php");
                    exit;
                }
            } else {
                echo "<script>alert('Incorrect password. Please try again.');</script>";
            }
        } else {
            echo "<script>alert('Password not found for this user.');</script>";
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
    <link rel="stylesheet" href="css/signin.css">
    <title>Sign in | Virtual Lifesaver</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vollkorn:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
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
<body>
    <div class="wrapper">
        <h2>Sign In</h2>
        <form action="index.php" method="post">
            <div class="input-box">
                <input type="text" name="email" placeholder="Email or Username" required> 
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div>
                <a class="forgot" href="forgot.php">Forgot Password?</a>
            </div>
            <div class="input-box button">
                <input type="submit" name="submit" value="Sign in">
            </div>
            <div class="text">
                <h4>No account yet? <a href="signup_process.php">Sign up now</a></h4>
            </div>
        </form>
    </div>
</body>
</html>




