
<?php
session_start();

if(!isset($_SESSION['name'])){
 
  header('Location:index.php');
}
 ?>

<?php
include 'connection.php';

if(isset($_POST['submit']))

{
	$name=mysqli_real_escape_string ($con, $_POST['Name']);
	$email=mysqli_real_escape_string ($con, $_POST['Email']); 
	$phone=mysqli_real_escape_string ($con, $_POST['Phone']); 
	$message=mysqli_real_escape_string ($con, $_POST['Messages']); 
	

	//echo $name .$phone .$email;

$sql="INSERT INTO enq (Name, Email, Phone, Messages) VALUES ('$name', '$email', '$phone','$message')" ;

	$query = mysqli_query($con,$sql);

	if($query)
	{
		?>
	<script type="text/javascript">
		alert("Database is Connected");
	</script>
	<?php
		header('Location:contact.php');
	}
}

 ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="favicon.ico" />
  <link rel="stylesheet" href="contact.css" />
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <title>Contact</title>
</head>

<body>
  <header>
    <a href="#" class="brand">TRAVELX</a>
    <div class="menu-btn"></div>
    <div class="navigation">
        <a  href="home.php">Home</a>
        <a  href="About.php">About</a>
        <a href="tourpack.php">Tour Packages</a>
        <a class="active" href="contact.php">Contact</a>
    </div>
    <button class="logbtn"><a href="logout.php">Logout </a></button>
    <!--<div class="user"><?php echo $_SESSION['name'];?></div>-->
  </header>

  <section class="home">
    <img src="Goa9.jpg" alt="image" />
    <div class="content">
        <h1>Contact<span>&ensp;Us</span></h1>
      </div>
  </section>

  <div class="que-con">
    <div class="r">
      <h1>ASK YOUR QUERIES</h1>
      <p>Please fill up our contact form so that our travel executive can call you back in next 24 hours time. You can also check out our home page for more information about us.</p>
        <div class="center">
      <form method="POST">      
        <div class="name"><input name="Name" type="text" class="feedback-input" placeholder="Enter Your Name" required/>  </div>
        <div class="input-box"><input name="Email" type="text" class="feedback-input"  pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" placeholder="Enter Your Email" required />
          <input style="float:right" name="Phone" type="tel" class="feedback-input" placeholder="Enter Your Phone No" required/></div>
          <div class="name">  <textarea name="Messages" class="feedback-input" id="add" placeholder="Enter Your Message" required></textarea></div>
        <button name="submit" type="submit">Submit Message</button>
      </form>
    </div>
    </div>

    <div class="contact">
      <h1>CONTACT INFO</h1>

      <h3><i class="fa-sharp fa-solid fa-location-dot"></i></h3>
      <h2>Address</h2>
      <p style="text-align: center;">Kolkata,West Bengal</p> 
     
      <h3><i class="fa-solid fa-envelope"></i></h3>
      <h2>Email Us</h2>
      <p style="text-align:center;">dipayan.kumar03@gmail.com/abhranil@gmail.com</p>

      
      <h3><i class="fa-solid fa-phone"></i></h3>
      <h2>Call Us</h2>
      <p style="text-align:center;">+91-8420361281/+91-8240250774</p>

      <div class="icon">

        <a href="#" style="background-color: white;"><i class="fa-brands fa-facebook-f" style="color:#4267B2"></i></a>
        <a href="#"
          style="background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); ;"><i
            class="fa-brands fa-instagram"></i></a>
        <a href="#" style="background-color: white;"><i class="fa-brands fa-twitter" style="color:#1DA1F2"></i></a>
        <a href="#" style="background-color: green;"><i class="fa-brands fa-whatsapp"></i></a>


      </div>

    </div>
  </div>


 




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


  <script src="D:\Educational\Intership\Full Stack Web Developer\PROJECT\Project-Home\Project-20230630T133752Z-001\Project\index.js" type="text/javascript"></script>
</body>

</html>