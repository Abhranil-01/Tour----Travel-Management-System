<?php
session_start();

if(!isset($_SESSION['name'])){
 
  header('Location:index.php');
}
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="favicon.ico" />
  <link rel="stylesheet" href="About.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <title>Travelx</title>
</head>

<body>
<header>
    <a href="#" class="brand">TRAVELX</a>
    <div class="menu-btn"></div>
    <div class="navigation">
        <a  href="home.php">Home</a>
        <a class="active" href="About.php">About</a>
        <a href="tourpack.php">Tour Packages</a>
        <a href="contact.php">Contact</a>
    </div>
    <button class="logbtn"><a href="logout.php">Logout </a></button>
    <!--<div class="user"><?php echo $_SESSION['name'];?></div>-->
  </header>
  <section class="home">
    <img class="image" src="Shimla.jpg" alt="image" />
    <div class="content">
      <h1>About<span>&ensp;Us</span></h1>
    </div>

   
  </section>


  <main>
    <section>
      <div class="first-content">
      <div class="sep2">
         <h2><span>ABOUT</span> TRAVELX</h2>
        
        
          <p >Travel broadens the mind as we all know it. So are you planning for a long vacation to overcome
            the boredom of your daily life? Do you want a break from your hectic schedule? Here we, Bengal Tour Plans
            offer you the best deals and packages for the vacations. If you want to go out with your family then we are
            offering some exclusive offers which will cater to your desires well. For solo travelers, we are serving them
            with an attractive package of spiritual tours.With 7 years of experience and our skilled travel executives, we
            are the best travel company in Kolkata.</p>
        </div>
  
        <div class="abt_pic">
          <img src="Manali2.jpg" alt="image">
        </div>
      </div>
    </section>
   
  <section>
    <div class="middle">
      
      <div class="caption"> 
        <p>
            KNOW THE PILLARS BEHIND THE TRAVELX
        </p>
      </div>
     
    
      <div class="card">
          <div class="profile">
            <img  src="myimg.jpg" alt="image" />
          </div>
        <div class="hd">
          <p>Abranil Kundu <br><i>Developer of Frontend and Backend</i></p>
        </div>
      </div>

        <div class="card">
          <div class="profile">
            <img  src="IMG20220321140620.png" alt="image" />
          </div>
        <div class="hd">
          <p>
          Dipayan Sarkar<br><i>Developer of Frontend and Backend</i>
        </p>
        </div>
      </div>
        
    </div>
  </section>

  <section>
    <div class="back-content">
    <div class="sep2">
        <h2><span>Why</span> TravelX</h2>
      
      
        <p >As a travel agency, Bengal Tour Plans takes pride in its unique selling proposition (USP) that
          sets it apart from others in the industry. Our main focus lies in offering offbeat trips to unknown and remote
          weekend destinations, as well as promoting exceptionally beautiful tourist places. We understand the allure of
          exploring unexplored locations and aim to provide our customers with extraordinary experiences. Additionally,
          we prioritize the budget-conscious traveler by offering the lowest possible rates for our tours and travel
          packages. Our commitment to providing value for money ensures that our customers can enjoy their trips without
          breaking the bank. With Bengal Tour Plans, you can expect memorable journeys to offbeat destinations at
          affordable prices.</p>
      </div>

      <div class="abt_pic">
        <img src="poster.jpg" alt="image">
      </div>
    </div>
  </section>
</main>

<footer class="footer-distributed">

    <div class="footer-left">

      <h3>Travel<span>X</span></h3>

      <p class="footer-links">
        <a href="home.php" class="link-1">Home</a>
        <a href="About.php">About</a>
        <a href="tourpack.php">Tour Packages</a>
        <a href="contact.php">Contact</a>
      </p>

      <p class="footer-company-name">Travelx©2023</p>
    </div>

    <div class="footer-center">

      <div>
        <i class="fa-solid fa-location-dot"></i>
        <p>Kolkata,West Bengal</p>
      </div>

      <div>
        <i class="fa fa-phone"></i>
        <p>6291640218</p>
      </div>

      <div>
        <i class="fa fa-envelope"></i>
        <p><a href="mailto:travelx@company.com">travelx@company.com</a></p>
      </div>

    </div>

    <div class="footer-right">

      <p class="footer-company-about">
        <span>About the company</span>
        Premier domestic tour agency in Kolkata, offering personalized travel experiences and exceptional services
      </p>

      <div class="footer-icons">

        <a href="#" style="background-color: white;"><i class="fa-brands fa-facebook-f" style="color:#4267B2"></i></a>
        <a href="#"
          style="background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); ;"><i
            class="fa-brands fa-instagram"></i></a>
        <a href="#" style="background-color: white;"><i class="fa-brands fa-twitter" style="color:#1DA1F2"></i></a>
        <a href="#" style="background-color: green;"><i class="fa-brands fa-whatsapp"></i></a>


      </div>

    </div>


  </footer>







  <script src="tourpack.js" type="text/javascript"></script>
</body>

</html>