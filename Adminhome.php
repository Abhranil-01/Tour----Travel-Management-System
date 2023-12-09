<?php
session_start();
?>

 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="favicon.ico" />
  <link rel="stylesheet" href="adminhome.css" />
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <title>Admin</title>
</head>

<body>
  <header>
    <a href="#" class="brand">TRAVELX</a>
    <div class="menu-btn"></div>
    <div class="navigation">
        <a class="active" href="Adminhome.php">Admin Home</a>
        <a  href="bookdisplay.php">Reservation Panel</a>
        <a  href="endisplay.php">Enquiry Panel</a>
        
    </div>
    <button class="logbtn"><a href="adminlogout.php">Logout </a></button>
    <!--<div class="user"></div>-->
  </header>

  <section class="home">
    <img src="HD-Image.jpg" alt="image" />
    <div class="content">
        <h1>Welcome To<span>&ensp;Admin Panel</span></h1>
      </div>
  </section>

  
</body>

</html>