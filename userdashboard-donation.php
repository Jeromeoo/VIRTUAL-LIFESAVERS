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
          <a href="">LOGOUT</a>
      </div>
    </li>
</div>

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