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
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Travelx</title>
</head>

<body>
  <header>
    <a href="#" class="brand">TRAVELX</a>
    <div class="menu-btn"></div>
    <div class="navigation">
        <a class="active" href="home.html">Home</a>
        <a href="About.php">About</a>
        <a href="tourpack.php">Tour Packages</a>
        <a href="contact.php">Contact</a>
    </div>
    <button class="logbtn"><a href="logout.php">Logout </a></button>
    <!--<div class="user"><?php echo $_SESSION['name'];?></div>-->
  </header>
  <section class="home">
    <img class="image-slide active" src="Shimla4.jpg" alt="image" />
    <img class="image-slide" src="HD-Image.jpg" alt="image" />
    <img class="image-slide" src="r2.jpeg" alt="image" />
    <img class="image-slide" src="Sundarban7.jpg" alt="image" />
    <img class="image-slide" src="beautiful.jpg" alt="image" />
    <img class="image-slide" src="Taj.jpg" alt="image" />

   
      



    <div class="content">
      <h1>Welcome To<br /><span>Travelx</span></h1>
     </div>
    

    
    <div class="slider-navigation">
      <div class="nav-btn active"></div>
      <div class="nav-btn"></div>
      <div class="nav-btn"></div>
      <div class="nav-btn"></div>
      <div class="nav-btn"></div>
      <div class="nav-btn"></div>
    </div>

  
  
  </section>
  <main>
    <div class="introduction">
      <div class="image">
        <img src="shutterstock_267670610_lowerrez-620x500.jpg" alt="image" />
      </div>
      <div class="pragraph">
        <h1>TRAVELX</h1>
        <br />
        <p>
        Travel broadens the mind as we all know it. So are you planning for a long vacation to overcome
            the boredom of your daily life? Do you want a break from your hectic schedule? Here we, Bengal Tour Plans
            offer you the best deals and packages for the vacations. If you want to go out with your family then we are
            offering some exclusive offers which will cater to your desires well. For solo travelers, we are serving them
            with an attractive package of spiritual tours.With 7 years of experience and our skilled travel executives, we
            are the best travel company in Kolkata.
        </p>
      </div>
    </div>
    <div class="heading">
      <h1>OUR BEST TOURS <BR><span>HOT DEALS</span></BR></h1>
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

    
    <div class="cont">
      <div class="cont-head">
        <h1>Why Should You Choose TravelX As Your Tour Operators Kolkata?</h1>
      </div>
      <div class="cont-main">
        <p>79% trips are to refresh your soul and not to take unwanted headaches. With Kolkata tour and travel agency
          you can enjoy the tour with limpid pleasure. There will be no hazards for booking tickets or waiting for
          vehicles. In fact, you don’t have to think of the special permits when needed. All you are expected is to
          cooperate with us and relax. Hence, being travellers stop typing ‘tourist agencies near me’ in Google and hire
          Travelx. Therefore, give word to the Travelx, the top-notch travel tour operators of
          Kolkata, and explore the unexplored in a pocket-friendly price range for hotels, unknown places, rain forest,
          waterfalls, solo trips, adventure trips, family destinations.</p>
      </div>
    </div>




    <div class="box">
      <div class="box-content" style="border:2px solid purple;">
        <div class="box-icon"><i class="fa-regular fa-clock" style="color:purple;"></i></div>
        <div class="box-header">
          <h3 style="color:purple;">5 years of tour operating experience</h3>
        </div>
        <div class="box-paragraph">
          <p>Experience matters the most when it comes to conducting trips. From day one we gave our utmost efforts to
            position Travelx as the topmost travel agency of Kolkata, and yes we succeeded. We do not only schedule
            trips but follow the safety guidelines framed by our experienced travel agents of Kolkata. You can have
            faith in our words as we’re backed by 100% customer satisfaction so that we can offer best services for you.
          </p>
        </div>
      </div>

      <div class="box-content" style="border:2px solid rgb(14, 180, 14);">
        <div class="box-icon">
          <i class="fa-solid fa-train" style="color:rgb(14, 180, 14)"></i>
        </div>
        <div class="box-header">
          <h3 style="color:rgb(14, 180, 14)">Offbeat tour and travels near me</h3>
        </div>
        <div class="box-paragraph">
          <p>There are rare tours and travels in Kolkata to initiate tours in unspoiled locations. We plan trips for
            both popular locations (Silk Route Sikkim, Kashmir, Assam, Coorg) and offbeat tourist spots (Arunachal
            Pradesh). Have you ever heard the names of Satkosia and Kiriburu meghataburu or even saranda forest? We bet
            you didn’t. offbeat locations are virgin and preserved. Therefore, contact Travelx, the best Kolkata travel
            agents today 6291640218 </p>
        </div>
      </div>

      <div class="box-content" style="border:2px solid rgb(204, 6, 6);">
        <div class="box-icon"><i class="fa-solid fa-plane-departure" style="color:rgb(204, 6, 6)"></i></div>
        <div class="box-header">
          <h3 style="color:rgb(204, 6, 6)">Affordable discounted rates</h3>
        </div>
        <div class="box-paragraph">
          <p>Packages can be different for the tourists. For example, for the same location, we offer separate packages
            for different purposes. We have family packages, 5 days- 6 nights honeymoon trips, romantic couple honeymoon
            packages in Goa, visit baba mandir, tiger hills, senior special tourist destinations, and more. Stop
            bothering Google with phrases like a travel agency near to me and contact us. Only a skilled travel agent of
            Kolkata can give you the best trip of your life.</p>
        </div>
      </div>

      <div class="box-content" style="border:2px solid rgb(21, 21, 194);">
        <div class="box-icon"><i class="fa-solid fa-handshake-angle" style="color:rgb(21, 21, 194)"></i></div>
        <div class="box-header">
          <h3 style="color:rgb(21, 21, 194)">Well-connected tourism</h3>
        </div>
        <div class="box-paragraph">
          <p>Healthy tourism connections are bliss to grow a business. We are well-connected to all the reputed tour
            operators in the town. To be the best among all the Kolkata travel agencies we have maintained a peaceful
            relationship with other operators. Such steps boost up our skills, brighten our images, and help us to grow
            smother yet faster. You should always be wise while choosing travelling agencies in Kolkata who can plan
            trips at kuala lumpur, hong kong, dhow cruise.</p>
        </div>
      </div>




      <div class="box-content" style="border:2px solid rgb(23, 178, 240);">
        <div class="box-icon"><i class="fa-solid fa-chart-column" style="color:rgb(23, 178, 240)"></i></div>
        <div class="box-header">
          <h3 style="color:rgb(23, 178, 240)">Pocket-friendly hotels rates</h3>
        </div>
        <div class="box-paragraph">
          <p>Our services are for everyone. No matter if you have secured a low amount for the trip or you are looking
            for a luxury hotel stay. Beng the best travel agency at Kolkata we allocate hotels as per the requirements.
            We always book standard hotels in a budget-friendly manner. When you are with the best travel agent near
            Kolkata you don’t need to worry contact our twitter fan page for any help.</p>
        </div>
      </div>

      <div class="box-content" style="border:2px solid rgb(236, 158, 13);">
        <div class="box-icon"><i class="fa-solid fa-house" style="color:rgb(236, 158, 13)"></i></div>
        <div class="box-header">
          <h3 style="color:rgb(236, 158, 13)">EMI options for tourist</h3>
        </div>
        <div class="box-paragraph">
          <p>Do you wish to explore foreign countries but not getting enough courage due to the hugeeee package cost?
            Don’t be mournful! Have you yet checked our EMI options? Unlike other travel agencies in Kolkata, we are
            here with unbelievable EMI options for our trips. Don’t let your dreams die and utilize our cost-effective
            EMI options. Just convey your requirements without any hesitation.</p>
        </div>
      </div>

      <div class="box-content" style="border:2px solid rgb(160, 7, 68);">
        <div class="box-icon"><i class="fa-solid fa-car" style="color:rgb(160, 7, 68)"></i></div>
        <div class="box-header">
          <h3 style="color:rgb(160, 7, 68)">24x7 Tours and Travels Booking</h3>
        </div>
        <div class="box-paragraph">
          <p>Well, this is important. Unlike inexperienced travel agent at Kolkata, we remain active 24 hours a day. Not
            only that, but our tour operator of Kolkata aims to get in touch with the tourists during the trip to make
            sure that the travellers are safe. Our exclusive deals as the best travel agency in Bengal for your
            destination will blow your mind.</p>
        </div>
      </div>

      <div class="box-content" style="border:2px solid rgb(175, 59, 243);">
        <div class="box-icon"><i class="fa-solid fa-ship" style="color:rgb(175, 59, 243)"></i></div>
        <div class="box-header">
          <h3 style="color:rgb(175, 59, 243)">Weekend tours are fun</h3>
        </div>
        <div class="box-paragraph">
          <p>When you contact the best tour operators in Kolkata you can expect to have a flawless weekend. We are
            probably the only tours and travel agency in Kolkata that initiate holiday packages for short weekend trips.
            Such tourist destinations are budget-friendly and time-saving. If you wish to spend some quality time with
            your family for not more than 2 days like weekend trips then contact us now.</p>
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
					<p><a href="mailto:abhranilkundu05@gmail.com">abhranilkundu05@gmail.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the company</span>
					Premier domestic tour agency in Kolkata, offering personalized travel experiences and exceptional services
				</p>

				<div class="footer-icons">

					<a href="#" style="background-color: white;"><i class="fa-brands fa-facebook-f" style="color:#4267B2"></i></a>
					<a href="#" style="background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); ;"><i class="fa-brands fa-instagram"></i></a>
					<a href="#" style="background-color: white;"><i class="fa-brands fa-twitter" style="color:#1DA1F2"></i></a>
          <a href="#" style="background-color: green;"><i class="fa-brands fa-whatsapp"></i></a>
					

				</div>

			</div>

	
  </footer>


  <script src="index.js" type="text/javascript"></script>
  <script>alert('Welcome <?php echo $_SESSION['name'];?>')</script>
</body>

</html>