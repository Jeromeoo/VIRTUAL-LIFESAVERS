<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator</title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vollkorn:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/adminui.css">

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
          <a href="">LOGOUT</a>
      </div>
    </li>
</div>

<div class="og-container">
<div class="sidebar">
<ul>
  <li><a href="adminui.html"><i class="fa-solid fa-house"></i>Home</a></li>
  <li><a href="donors.html"><i class="fa-solid fa-person"></i>Donors</a></li>
  <li><a href="blooddonations.html"><i class="fa-solid fa-droplet"></i>Blood Donations</a></li>
  <li><a href="bloodrequests.html"><i class="fa-solid fa-list"></i>Requests</a></li>
  <li><a href="handedover.html"><i class="fa-solid fa-briefcase"></i>Handed Over</a></li>
  <li><a href="users.html"><i class="fa-solid fa-user"></i>Users</a></li>
</ul>
</div>



<div class="head">
  <h1>Welcome back, Administrator!</h1> 
  <h2>Available Blood per group in Liters</h2>
</div>

<div class="container1">
  <div class="btype-aplus">
    <p>A&plus; <i class="fa-solid fa-droplet"></i></p> 
  </div>
  
  <div class="btype-bplus">
    <p>B&plus; <i class="fa-solid fa-droplet"></i></p> 
  </div>

  <div class="btype-oplus">
    <p>O&plus; <i class="fa-solid fa-droplet"></i></p> 
  </div>

  <div class="btype-abplus">
    <p>AB&plus; <i class="fa-solid fa-droplet"></i></p> 
  </div>
</div>

<div class="container2">
  <div class="btype-aminus">
    <p>A&minus; <i class="fa-solid fa-droplet"></i></p> 
  </div>
  
  <div class="btype-bminus">
    <p>B&minus; <i class="fa-solid fa-droplet"></i></p> 
  </div>

  <div class="btype-ominus">
    <p>O&minus; <i class="fa-solid fa-droplet"></i></p> 
  </div>

  <div class="btype-abminus">
    <p>AB&minus; <i class="fa-solid fa-droplet"></i></p> 
  </div> 
</div>

<div class="container3">
  <div class="total-donors">
    <p>Total Donors <span><i class="fa-solid fa-users"></i></span></p> 
  </div>
  
  <div class="tday-donated">
    <p>Total Donation Today <span><i class="fa-solid fa-square-plus"></i></span></p> 
  </div>

  <div class="tdayrequests">
    <p>Today's Requests <span><i class="fa-solid fa-list"></i></span></p> 
  </div>

  <div class="tdayrequests-approved">
    <p>Today's Approved Requests <span><i class="fa-solid fa-check"></i></span></p> 
  </div>
</div>

</div>