<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vollkorn:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="css/style.css">

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

    <section class="about-main-section">
        <div class="about-section">
            <p><span>A</span>bout <span>U</span>s</p>
          </div>
  
        
      
      
      
        
      </section>
      <section class="second-section">
       
            <div class="about-second-content">
                <img src="css/images/blood-donor.jpg" alt="">
              </div>

            <div class="abt-first-content">
                
            
                <h1>VIRTUAL <br>
                    LIFESAVER <br>
                </h1>
                <p>A Website that is an accessible and user-friendly <br>
                    online platform that encourages individuals to <br>
                    register as blood donors. <br>
                    </p>
            
                    <button onclick="redirectToBDForm()">DONATE BLOOD NOW</button> <br>
                    <button onclick="redirectToRequestForm()">REQUEST BLOOD NOW</button>

                    <script>
                    function redirectToBDForm() {
                     // Redirect the user to BDform.php
                     window.location.href = 'BDform.php';
                     }     

                     function redirectToRequestForm() {
                      // Redirect the user to another form (replace 'RequestForm.php' with the actual file name)
                      window.location.href = 'requestForm.php';
                     }
                    </script>

                
      
       
      
        </div>
      </section>
      </body>
    <style>
        
            </style>
