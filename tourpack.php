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
  <link rel="stylesheet" href="tour.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Our Tour Packages</title>
</head>

<body>
<header>
    <a href="#" class="brand">TRAVELX</a>
    <div class="menu-btn"></div>
    <div class="navigation">
        <a  href="home.php">Home</a>
        <a  href="About.php">About</a>
        <a class="active" href="tourpack.php">Tour Packages</a>
        <a href="contact.php">Contact</a>
    </div>
    <button class="logbtn"><a href="logout.php">Logout </a></button>
    <!--<div class="user"><?php echo $_SESSION['name'];?></div>-->
  </header>
  <section class="home">

    <img class="image-slide" src="Taj.jpg" alt="image" />

    <div class="content">
      <h1>Our Tour Packages</h1>
    </div>

  </section>
  <main>
    <div class="introduction">
      <div class="int-head">
        <h1>Book Customized Tour Packages From TravelX</h1>
      </div>
      <div class="paragraph">
        <p>Welcome to our tour package page! Here, we have curated a selection of extraordinary travel destinations that
          are bound to leave you mesmerized. We understand that budget is an important factor for many travelers, which
          is why we take pride in being one of the most affordable travel agencies in the city. Rest assured, our prices
          are designed to provide you with great value for your money without compromising on the quality of your
          experience.To make your travel dreams even more accessible, we are delighted to offer a special 15% discount
          on our
          popular tours: the Sundarban Tour, Arunachal Tours, Satkosia, and Silk Route Tours. This limited-time discount
          allows you to explore these incredible destinations at an even more affordable rate.Take this opportunity to
          embark on a memorable journey by contacting us today. Our dedicated team is ready to
          assist you with any inquiries you may have regarding these enticing travel packages. Don't miss out on this
          fantastic offer and let us help you create unforgettable memories that will last a lifetime!</p>
      </div>
    </div>
    <div class="heading">
      <h1>TRAVELX <BR><span>HOT DEALS</span></BR></h1>
    </div>
    <!--card-->
    <div class=" container">
      <div class="cards">
        <div class="img">
          <img src="Rajasthan.jpg" alt="Rajasthan">
        </div>
        <div class="title">
          <h3>Rajasthan Tour</h3>
        </div>
        <div class="des">
      <a href="Rajasthan.php"><button>Read More</button></a>
    </div>
      </div>

      <div class="cards">
        <div class="img">
          <img src="Darjeeling.png" alt="image">
        </div>
        <div class="title">
          <h3>Darjeeling Tour</h3>
        </div>
        <div class="des">
          <a href="Darjeeling.php"><button>Read More</button></a>
        </div>
      </div>
      <div class="cards">
        <div class="img">
          <img src="Kasmir.png" alt="image">
        </div>
        <div class="title">
          <h3>Kashmir Tour</h3>
        </div>
        <div class="des">
          
          <a href="Kashmir.php"><button>Read More</button></a>
        </div>
      </div>
    </div>



    <!--second row -->
    <div class=" container">
      <div class="cards">
        <div class="img">
          <img src="kedarnath.png" alt="image">
        </div>
        <div class="title">
          <h3>Chardham Tour</h3>
        </div>
        <div class="des">
      <a href="ChardhamTour.php"><button>Read More</button></a>
    </div>
      </div>

      <div class="cards">
        <div class="img">
          <img src="g1.png" alt="image">
        </div>
        <div class="title">
          <h3>Gangtok-North Sikkim Tour</h3>
        </div>
        <div class="des">
          <a href="Gangtok-North Sikkim Tour.php"><button>Read More</button></a>
        </div>
      </div>
      <div class="cards">
        <div class="img">
          <img src="Sundarban2.png" alt="image">
        </div>
        <div class="title">
          <h3>Sundarban Tour</h3>
        </div>
        <div class="des">
          
          <a href="Sundarban.php"><button>Read More</button></a>
        </div>
      </div>
    </div>

    <!--Third Row-->
    <div class=" container">
      <div class="cards">
        <div class="img">
          <img src="Arunachal.jpg" alt="Arunachal">
        </div>
        <div class="title">
          <h3>Arunachal Tour</h3>
        </div>
        <div class="des">

          <a href="#"><button>Book Now</button></a>
        </div>
      </div>

      <div class="cards">
        <div class="img">
          <img src="vizag.png" alt="vizag">
        </div>
        <div class="title">
          <h3>Vizag-Hydrabad Tour</h3>
        </div>
        <div class="des">

          <a href="#"><button>Book Now</button></a>
        </div>
      </div>
      <div class="cards">
        <div class="img">
          <img src="kerala.png" alt="kerala">
        </div>
        <div class="title">
          <h3>Kerala Tour</h3>
        </div>
        <div class="des">

          <a href="#"><button>Book Now</button></a>
        </div>
      </div>
    </div>

    <!--Fourth Row-->
    <div class=" container">
      <div class="cards">
        <div class="img">
          <img src="Goa.png" alt="Goa">
        </div>
        <div class="title">
          <h3>Goa Tour</h3>
        </div>
        <div class="des">

          <a href="#"><button>Book Now</button></a>
        </div>
      </div>



      <div class="cards">
        <div class="img">
          <img src="shimla1.png" alt="shimla">
        </div>
        <div class="title">
          <h3>Shimla-Kullu-Manali Tour</h3>
        </div>
        <div class="des">

          <a href="#"><button>Book Now</button></a>
        </div>
      </div>

      <div class="cards">
        <div class="img">
          <img src="TajMahal.png" alt="tajmahal">
        </div>
        <div class="title">
          <h3>Agra-Mathura Tour</h3>
        </div>
        <div class="des">
          <a href="#"><button>Book Now</button></a>
        </div>
      </div>
    </div>

    <!--Fifth Row-->
    <div class="container">
      <div class="cards">
        <div class="img">
          <img src="Andaman6.png" alt="andaman">
        </div>
        <div class="title">
          <h3>Andaman Tour</h3>
        </div>
        <div class="des">

          <a href="#"><button>Book Now</button></a>
        </div>
      </div>

      <div class="cards">
        <div class="img">
          <img src="Meghalay.png" alt="meghalay">
        </div>
        <div class="title">
          <h3>Meghalaya Tour</h3>
        </div>
        <div class="des">

          <a href="#"><button>Book Now</button></a>
        </div>
      </div>
      <div class="cards">
        <div class="img">
          <img src="Gir.png" alt="Gir">
        </div>
        <div class="title">
          <h3>Gujrat Tour</h3>
        </div>
        <div class="des">

          <a href="#"><button>Book Now</button></a>
        </div>
      </div>
    </div>

    <!--Sixth Row-->
    <div class=" container">
      <div class="cards">
        <div class="img">
          <img src="Varanashi.png" alt="Varanashi">
        </div>
        <div class="title">
          <h3>Varanashi Tour</h3>
        </div>
        <div class="des">

          <a href="#"><button>Book Now</button></a>
        </div>
      </div>

      
      <div class="cards">
        <div class="img">
          <img src="m1.png" alt="ooty">
        </div>
        <div class="title">
          <h3>Mysore-Ooty-Coorg Tour</h3>
        </div>
        <div class="des">

          <a href="#"><button>Book Now</button></a>
        </div>
      </div>


      <div class="cards">
        <div class="img">
          <img src="amritsar.jpg" alt="ooty">
        </div>
        <div class="title">
          <h3>Amritsar Tour</h3>
        </div>
        <div class="des">

          <a href="#"><button>Book Now</button></a>
        </div>
      </div>

    </div>

    <!--Seventh Row-->
    <div class=" container">
      <div class="cards">
        <div class="img">
          <img src="lakshadweep.png" alt="Lakshadweep">
        </div>
        <div class="title">
          <h3>Lakshadweep Tour</h3>
        </div>
        <div class="des">

          <a href="#"><button>Book Now</button></a>
        </div>
      </div>

      <div class="cards">
        <div class="img">
          <img src="lonavala.png" alt="lonavala">
        </div>
        <div class="title">
          <h3>Lonavala Tour</h3>
        </div>
        <div class="des">

          <a href="#"><button>Book Now</button></a>
        </div>
      </div>

      <div class="cards">
        <div class="img">
          <img src="Dooars2.jpg" alt="Dooars">
        </div>
        <div class="title">
          <h3>Dooars Tour</h3>
        </div>
        <div class="des">

          <a href="#"><button>Book Now</button></a>
        </div>
      </div>
    </div>

      <!--Eight Row-->
      <div class=" container">
        <div class="cards">
          <div class="img">
            <img src="victoria.png" alt="victoria">
          </div>
          <div class="title">
            <h3>Kolkata Tour</h3>
          </div>
          <div class="des">

            <a href="#"><button>Book Now</button></a>
          </div>
        </div>

        <div class="cards">
          <div class="img">
            <img src="Pondicherry.png" alt="Pondicherry">
          </div>
          <div class="title">
            <h3>Pondicherry Tour</h3>
          </div>
          <div class="des">

            <a href="#"><button>Book Now</button></a>
          </div>
        </div>
       
        <div class="cards">
          <div class="img">
            <img src="Ladakh4.jpg" alt="puri">
          </div>
          <div class="title">
            <h3>Ladakh Tour</h3>
          </div>
          <div class="des">

            <a href="#"><button>Book Now</button></a>
          </div>
        </div>
      </div>



    



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