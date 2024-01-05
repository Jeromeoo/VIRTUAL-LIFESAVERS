<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Recipient</title>


    <link rel="preconnect" href="https://fonts.googleapis.com%22%3E/">
    <link href="https://fonts.googleapis.com/css2?family=Vollkorn:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/userdashboard-donation.css">
</head>
<body>

<header class="site-header">


<div class="announcement-header">
    <img src="css/images/Announcement-Logo.jpg" alt="">
    <p>Online Blood Donation: Blood Bank Management System</p>
    <ul class="admin-ddown"></ul>
    <li class="dropdown">
      <button>User ↓</button>
      <div class="content">
          
          <a href="#" onclick="confirmLogout()">LOGOUT</a>

<!-- JavaScript code -->
<script>
    function confirmLogout() {
        var confirmLogout = confirm("Are you sure you want to logout?");
        if (confirmLogout) {
            window.location.href = 'homepage.php'; // Redirect if the user confirms
        }
        // If the user cancels, do nothing or provide alternative actions
    }

</script>
      </div>
    </li>
</div>
<?php
// Start the session
session_start();

// Include your database connection file or establish a connection here
include 'connection.php';

// Query to retrieve information for all users
$sql = "SELECT i.fname, i.lname, i.birth_date, i.email, i.address 
        FROM info i";

$result = $conn->query($sql);

// Check if the query was successful
if ($result && $result->num_rows > 0) {
    // Output data for each row
    while ($row = $result->fetch_assoc()) {
        $fname = $row['fname'];
        $lname = $row['lname'];
        $birthdate = $row['birth_date'];
        $email = $row['email'];
        $address = $row['address'];

        // Display the user information (you can customize this part as needed)
        echo "Name: $fname $lname<br>";
        echo "Birth Date: $birthdate<br>";
        echo "Email: $email<br>";
        echo "Address: $address<br>";
        echo "<hr>";
    }
} else {
    echo "Error retrieving user information: " . $conn->error;
}

// Close the database connection
$conn->close();
?>

<div class="og-container">
<div class="sidebar">
<ul>

  <li><a href="userdashboard-donation.html"><i class="fa-solid fa-droplet"></i></i>Your Donations</a></li>
  <li><a href="userdashboard-request.html"><i class="fa-solid fa-hand-holding-dollar"></i></i></i>Your Requests</a></li>
  
</ul>
</div>



<div class="head">
  <h1>USER'S CURRENT DONATION</h1> 
</div>

<div class="container1">
  <table>
    <tr>
      <th>Name</th>
      <th>Blood Type</th>
      <th>Blood Type Donated</th>
      <th>Date & Time <br>
        MM/DD/YY - HH/MM/AM-PM
      </th>
      <th></th>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><button class="cancel-btn">Cancel</button>
        <button class="accept-btn">Accept</button></td>
    </tr>
  </table>

</div>

<br> 

<div class="head2">
  <h1>USER'S PAST DONATIONS</h1> 
</div>

<div class="container2">
  <table>
    <tr>
      <th>Name</th>
      <th>Blood Type</th>
      <th>Blood Type Donated</th>
      <th>Date & Time <br>
        MM/DD/YY - HH/MM/AM-PM
      </th>
      <th></th>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>
        <p class="completed">COMPLETED</p>
    </tr>
  </table>

</div>