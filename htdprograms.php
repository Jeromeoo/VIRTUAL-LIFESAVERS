<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOW TO DONATE / PROGRAMS</title>

    <link rel="icon" href="css/images/Announcement-Logo.jpg" type="">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vollkorn:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="css/htdprograms.css">

</head>
<body>

<header class="site-header2">


<div class="announcement2">

    <img src="css/images/Announcement-Logo.jpg" alt="">

    <p>Online Blood Donation: Share, Save, Support</p>

    <p></p>

</div>

<nav class="nav2">
    
    <img src="css/images/Logo.png" alt="">

    <ul class="nav_list2">
    <li class="nav_list-item"><a href="homepage2.php" class="nav_link2">HOME</a></li>
            <li class="dropdown">
                <button>MORE ↓</button> 
                <div class="content">
                <a href="epsave.php">PROFILE</a>
                    <a href="userdashboard-donation.php">USER DASHBOARD</a>
                    <a href="htdprograms.php">HOW TO DONATE</a>
                    <a href="#" onclick="confirmLogout()">LOGOUT</a>
</header>

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
                  
        </nav>

      
</header>



<section class="section2">
  <div>
    <h1 class="htd">HOW TO DONATE</h1>
  </div>
</section>

<section class="section3">
  <ul class="accordion">
    <li>
      <input type="radio" name="accordion" id="first">
      <label for="first">HOW OFTEN CAN A PERSON DONATE?</label>
      <div class="content">
        <p>A healthy individual may donate every three months.</p>
      </div>
    </li>
    <li>
      <input type="radio" name="accordion" id="second">
      <label for="second">WILL DONATING BLOOD MAKE A PERSON WEAK?</label>
      <div class="content">
        <p>No, it will not make you weak. Donating 450cc will not cause any ill effects or weakness. The human body has the capacity to compensate for the new fluid volume. Further, the bone marrow is stimulated to produce new blood cells which in turn makes the blood-forming organs function more effectively.</p>
      </div>
    </li>
    <li>
      <input type="radio" name="accordion" id="third">
      <label for="third">CAN A PERSON WHO HAS TATTOO OR BODY PIERCING STILL DONATE BLOOD?</label>
      <div class="content">
        <p>If the tattooing procedure or the piercing was done a year ago, he/she may donate. This is also applicable to acupuncture, and other procedures involving needles.</p>
      </div>
    </li>
    <li>
      <input type="radio" name="accordion" id="fourth">
      <label for="fourth">HOW LONG WILL IT TAKE TO DONATE BLOOD?</label>
      <div class="content">
        <p>The whole process of blood donation, from the registration up to the recovery, will only take an average of 30 minutes.
  
          The blood extraction will take about 5-10 minutes. The blood volume will start replenishing within 24 hours. Theoretically, by the end of the month, the body will have the blood status before the blood donation.</p>
      </div>
    </li>
    <li>
      <input type="radio" name="accordion" id="fifth">
      <label for="fifth">WILL I CONTACT DISEASE THROUGH BLOOD?</label>
      <div class="content">
        <p>No, we use sterile, disposable needles and syringes.</p>
      </div>
    </li>
  </ul>
  
</section>



    
</body>
</html>