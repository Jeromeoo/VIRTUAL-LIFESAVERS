<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual Lifesaver | Blood Donation</title>



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vollkorn:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="css/homepage.css">

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
        <section class="main-section">
            <div class="first-content">
              <h1>Every drop of blood <br>
                  you give is a lifeline <br>
                  for someone in need.</h1>
              <p>The river of life that sustains, protects, <br>
                   and nurtures our existence. 
                  </p>
          
              <span>"BLOOD"</span>
          
              <div class="donate-btn">
          
          <a href="BDform.php">DONATE BLOOD NOW</a>
              <a href="requestform.html">REQUEST BLOOD NOW</a>
          </div>
      
           
          
            </div>
          
          
          
            <div class="second-content">
             
              <img src="css/images/second-content.png" alt="">
            </div>
            
          
    
  
</section>


<section>
<footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative  to help the upcoming programmers with the code. Scanfcode focuses on providing the most efficient code or snippets as the code wants to be simple. We will help programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Categories</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/category/c-language/">C</a></li>
              <li><a href="http://scanfcode.com/category/front-end-development/">UI Design</a></li>
              <li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>
              <li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
              <li><a href="http://scanfcode.com/category/android/">Android</a></li>
              <li><a href="http://scanfcode.com/category/templates/">Templates</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/about/">About Us</a></li>
              <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
              <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
              <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
              <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
         <a href="#">Scanfcode</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>
</section>

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