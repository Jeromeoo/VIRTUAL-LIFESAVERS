<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="css/editprofile.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>

  <body>
    <div class="wrapper">
      <a href="homepage2.php" ><i class="fa-solid fa-arrow-left"></i></a>
      <div class="profile-picture">
      
      <img src="css/images/default-profile.jpg" alt="" class="default-profile">
      <br>
      <h2>Edit Profile</h2>
      
      <form>
        <form action="" method="">
        <div class="input-box">
            <p>Full Name:</p>
            <input class="editinput" type="text" placeholder="Enter your name" name="fname" required>
        </div>
        <br>
        <div class="input-box">
           <p>Birthdate:</p> 
            <input class="editinput" type="text" placeholder="Enter your birthdate" name="bdate" required>
        </div>
        <br>
        <div class="input-box">
          <p>Address:</p> 
          <input class="editinput" type="text" placeholder="Enter your address" name="address" required>
      </div>
      <br>
      <div class="input-box">
        <p>Contact Number:</p> 
        <input class="editinput" type="text" placeholder="Enter your contact number" name="contactno" required>
    </div>
      <br>
      <div class="input-box">
        <p>Email:</p> 
        <input class="editinput" type="text" placeholder="Enter your email" name="email" required>
  <br>
  <br>
    </form>
    </div>
  </body>
</html>