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
              <a href="requestform.php">REQUEST BLOOD NOW</a>
          </div>

            </div>
            <div class="second-content">
             
              <img src="css/images/second-content.png" alt="">
            </div>
</section>
<section class="certified-section">
  <div class="certified">
    <h1>Get Certified:
      <br> Standard First Aid and <br>
       Basic Life Support <br> 
         Training</h1>
    <p>Every second matters when an emergency occurs. Immediate and expert <br> medical care, however,
       is not always accessible in critical situations. Have <br>
        the knowledge and confidence to respond effectively in emergency <br>
         situations by taking this course and learning life-saving techniques and <br>
          skills. Start a unique learning experience as you become ready to save lives <br>
          in various emergency situations.
</p>
  <a href="https://redcross.elearnified.com/">ENROLL NOW!</a>
<div class="train">
    <img src="css/images/training.png" alt="">
</div>
  </div>

</section>

<section class="tips">
  <h1>GIVE BLOOD</h1>

<div class="row">
  <div class="tips-col">
      <h3>WHAT IS BLOOD  DONATION & REQUESTING</h3>
      <p>Blood donation is when people voluntarily give a part of their blood to help others in need.
     This selfless act takes place at blood donation center.
      The donated blood is crucial for medical treatments, surgeries, and emergency,
       while blood requesting happens when healthcare providers or hospitals seek specific
        blood types or components to assist patients. They make these requests through blood banks.
         The goal is to match the requested blood with a suitable donor,
          ensuring safe and effective transfusions.</p>
  </div>
  <div class="tips-col">
      <h3>HOW TO DONATE & REQUEST BLOOD</h3>
      <p>Donating blood through our online appointment system is a straightforward and efficient process.
         If you're a healthy individual aged 17 or older, you can easily contribute to the gift of life.
          Begin by visiting our online platform and creating an account, if you haven't done so already.
           Once logged in, navigate to the blood donation section, where you can choose a date, time,
            and location that suits you best. Complete a brief health questionnaire to ensure eligibility,
             confirm your appointment details, and submit your request. After confirmation, 
             you'll receive all the necessary information, including the location and any additional 
             instructions. Your commitment to this simple online process makes a significant impact in 
             saving lives. Thank you for being a vital part of our blood donation community!
             <br><br>
             Request blood through our user-friendly online platform. 
             Simply log in, go to the blood request section, and specify the needed blood type or 
             components, including any urgent details. Once submitted, our system promptly notifies 
             matching potential donors. Upon finding a suitable match, you'll receive confirmation and 
             details about the available blood supply. Our platform simplifies the connection between 
             donors and recipients, ensuring a swift response to medical needs and contributing to the 
             well-being of those in need.
</p>
  </div>
  <div class="tips-col">
      <h3>WHO CAN DONATE & REQUEST</h3>
      <p>Our online blood appointment system makes it easy for both donors and those in need. 
        If you're healthy and 17 or older, you can schedule a donation to help save lives. 
        For medical professionals, our platform simplifies the process of requesting specific blood types 
        or components for patients. It's a straightforward way to connect donors with those who require 
        blood, ensuring timely and targeted assistance in healthcare situations. 
        Join us in this simple yet impactful journey of blood donation and requests.</p>
  </div>
</div>

</section>

<!--- Section Two ------>
<section class="tips-two">
    <h1>More Details</h1>
    <div class="row-two">
  <div class="tips-col-two">
      <h3>AFTER DONATING BLOOD</h3>
      <p>The person typically rests briefly to prevent dizziness, enjoys light snacks and drinks to 
        boost energy, has the donation site bandaged, and receives post-donation instructions, 
        including avoiding strenuous activity and staying hydrated. Some centers monitor donors briefly.
         Over the next few weeks, the body naturally replaces the donated blood components,
          and most donors feel a sense of accomplishment knowing they've contributed to saving lives.</p>
</div>
<div class="row-two">
  <div class="tips-col-two">
      <img src="css/images/ManDonating 1.png" alt="">
</div>
<div class="row-two">
  <div class="tips-col-two">
      <h3>AFTER DONATING BLOOD</h3>
      <p>The person typically rests briefly to prevent dizziness, enjoys light snacks and drinks to 
        boost energy, has the donation site bandaged, and receives post-donation instructions, 
        including avoiding strenuous activity and staying hydrated. Some centers monitor donors briefly.
         Over the next few weeks, the body naturally replaces the donated blood components,
          and most donors feel a sense of accomplishment knowing they've contributed to saving lives.</p>
</div>

</div>
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