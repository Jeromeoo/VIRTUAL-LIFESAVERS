

<?php
// Start the session
session_start();

// Include your database connection file or establish a connection here
include 'connection.php';

// Query to retrieve information for all users
$sql = "SELECT i.fname, i.lname,i.phone_number, i.birth_date, i.email, i.address 
        FROM info i";

$result = $conn->query($sql);

// Check if the query was successful




// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donors</title>


    <link rel="preconnect" href="https://fonts.googleapis.com%22%3E/">
    <link href="https://fonts.googleapis.com/css2?family=Vollkorn:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/donors.css">
</head>
<body>

<header class="site-header">


<div class="announcement-header">
    <img src="css/images/Announcement-Logo.jpg" alt="">
    <p>Online Blood Donation: Blood Bank Management System</p>
    <ul class="admin-ddown"></ul>
    <li class="dropdown">
      <button>Administrator ↓</button>
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

<div class="og-container">
<div class="sidebar">
<ul>          
            <li><a href="admin.php"><i class="fa-solid fa-house"></i>Home</a></li>
            <li><a href="donors.php"><i class="fa-solid fa-person"></i>Donors</a></li>
            <li><a href="blooddonations.php"><i class="fa-solid fa-droplet"></i>Blood Donations</a></li>
            <li><a href="bloodrequests.php"><i class="fa-solid fa-list"></i>Requests</a></li>
            <li><a href="handedover.php"><i class="fa-solid fa-briefcase"></i>Handed Over</a></li>
            <li><a href="users.php"><i class="fa-solid fa-user"></i>Users</a></li>
</div>



<div class="head">
  <h1>DONOR'S INFORMATION</h1> 
</div>

<div class="container1">
  <table>
    <tr>
      <th>Name</th>
      <th>Blood Type</th>
      <th>Phone Number</th>
      <th>Email</th>
      <th>Date & Time <br>
        MM/DD/YY - HH/MM/AM-PM
      </th>
    
      
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      
    </tr>
  </table>
</div>