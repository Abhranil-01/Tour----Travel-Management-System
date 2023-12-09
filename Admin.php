<?php session_start();

?>
<?php 
include 'admindb.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TRAVELX</title>
  <link rel="icon" href="favicon.ico">
  <link rel="stylesheet" href="admin.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">


</head>

<body>

  <header>
  <a href="#" class="brand">TRAVELX</a>
    <nav class="navbar">
      <a  href="index.php">User</a>
      <a class="active" href="Admin.php"  onclick="alert('You are in Admin page');">Admin</a>
      
    </nav>
  </header>

  <div class="background"></div>
  <div class="container">
    
    <div class="content">
      <div class="heading">
        <h2>WELCOME TO <br>
          TRAVELX
        </h2>
        <p>Book Your Next Destination</p>
      </div>
      <div class="social-icons">
        <a href="#""><i class=" fa-brands fa-facebook-f"></i></a>
        <a href="#"><i class="fa-brands fa-instagram"></i></a>
        <a href="#"><i class="fa-brands fa-twitter"></i></a>
        <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
      </div>
    </div>

    <div class="logreg-box">
      <div class="form-box login">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete="off">
          <h2>Admin Login</h2>
         
          <div class="input-box">
          <i class="fa-solid fa-user"></i>
            <input type="text" placeholder="Enter your Name" name="name">
          </div>

          <div class="input-box">
          <i class="fa-solid fa-envelope"></i>
            <input type="email" placeholder="Enter your email" name="email"  pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" required>
        </div>

         <div class="input-box">
            <i class="fa-solid fa-lock"></i>
            <input type="password" placeholder="Enter admin password"  name="password" required>
        </div>

          

          <button  type="submit" class="button"  name="submit">Login</button>

          
        </form>
      </div>



      


      
  

    
</body>

</html>