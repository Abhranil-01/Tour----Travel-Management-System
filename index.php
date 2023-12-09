<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TRAVELX</title>
  <link rel="icon" href="favicon.ico">
  <link rel="stylesheet" href="sheet.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">


</head>

<body>
  <?php 
  include 'registration.php';
  include 'login.php';
?>
  <header>
  <a href="#" class="brand">TRAVELX</a>
    <nav class="navbar">
      <a class="active" href="index.php" onclick="alert('You are in user page');">User</a>
      <a href="Admin.php">Admin</a>
      
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
          <h2>Login</h2>

          <div class="input-box">
          <i class="fa-solid fa-envelope"></i>
            <input type="email" placeholder="Enter your email" name="Email"  pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" required>
            
          </div>

         <div class="input-box">
         <i class="fa-solid fa-lock"></i>
         <input type="password" placeholder="Enter your password" required name="password" required>

           
            
          </div>

          <div class="option_field">
            <span class="checkbox">
              <input type="checkbox" id="check">
              <label for="check">Remember me</label>
            </span>
            <a href="#" class="forgot_pw">Forgot password?</a>
          </div>

          <button  type="submit" class="button"  name="sub">Login</button>

          <div class="login_signup">
            Don’t have an account? <a href="#" class="register-link">Sign up</a>
          </div>
        </form>
      </div>



      <div class="form-box register">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"  autocomplete="off">
          <h2>Sign Up</h2>


          <div class="input-box">
          <i class="fa-solid fa-user"></i>
            <input type="text" placeholder="Enter your Name" name="name">
          </div>

          <div class="input-box">
          <i class="fa-solid fa-envelope"></i>
            <input type="email" placeholder="Enter your email" name="email"  pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$">
          </div>

         <div class="input-box">
         <i class="fa-solid fa-lock"></i>
            <input type="password" placeholder="Create your password"  required name="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,16}$">
          </div>

          <div class="input-box">
         <i class="fa-solid fa-lock"></i>
            <input type="password" placeholder="Confirm your password"  required name="cpassword" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,16}$">
          </div>


          <button type="submit" class="button" name="submit">Sign Up</button>

          <div class="login_signup">
            Already have an account? <a href="#" class="login-link">Login</a>
          </div>
        </form>
      </div>

      
    </div>


      
  </div>
<script type="text/javascript">
  const logregBox = document.querySelector(".logreg-box");
  const loginLink = document.querySelector(".login-link");
  const registerLink = document.querySelector(".register-link");

  registerLink.addEventListener("click", () =>{
    logregBox.classList.add("active");
  });

  loginLink.addEventListener("click", () =>{
    logregBox.classList.remove("active");
  });


</script>
    
</body>

</html>