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
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$totaladult=$_POST['adt'];
	$totalchildren=$_POST['chd'];
    $tour=$_POST['tour'];
	$selectpackage=$_POST['sltpck'];
	$selectdate=$_POST['sltdt'];
	$address=$_POST['address'];

	//echo $name .$phone .$email;

	$sql="INSERT INTO custrecord(Name, Email ,Phone, TotalAdults, TotalChildren,Tour, PackageDetails, TourDate, Address) VALUES ('$name', '$email', '$phone', '$totaladult', '$totalchildren','$tour', '$selectpackage', '$selectdate' ,  '$address')";


	$query = mysqli_query($con,$sql);

	if($query)
	{
		header('location:Rajasthan.php');
    ?>
        <script>
            alert("Booked successfully");
        </script>
    <?php
     
	}
}

 ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="favicon.ico" />
  <link rel="stylesheet" href="Rajasthan.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />



  <title>Rajasthan Tour</title>
</head>

<body>
  <header>
    <a href="#" class="brand">TRAVELX</a>
    <div class="menu-btn"></div>
    <div class="navigation">
      <a href="home.php">Home</a>
      <a href="About.php">About</a>
      <a href="tourpack.php">Tour Packages</a>
      <a href="contact.php">Contact</a>
    </div>
    <button class="logbtn"><a href="logout.php">Logout </a></button>
    <!--<div class="user"><?php echo $_SESSION['name']; ?></div>-->

  </header>
  <section class="home">
    <img class="image-slide active" src="Rajasthan19-transformed.jpeg" alt="image" />
    <img class="image-slide" src="Rajasthan15.jpg" alt="image" />
    <img class="image-slide" src="Rajasthan8.jpeg" alt="image" />
    <img class="image-slide" src="Rajasthan18-transformed.jpeg" alt="image" />
    <img class="image-slide" src="Rajasthan14.jpg" alt="image" />
    <img class="image-slide" src="Rajasthan22-transformed.jpeg" alt="image" />





    <div class="content">
      <h1>Rajasthan</h1>
    </div>


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


      <div class="int-head">
        <h2>Rajasthan Tour Details</h2>
      </div>

      <div class="pragraph">
        <p>
          Happy from some fascinating places, Rajasthan fails to attract huge crowds of viewers around the world to
          enjoy Rajasthan Tour Package. <br> <br>

          Many old and neglected palaces and Havelis have now been transformed into gorgeous heritage hotels, which add
          more charm and greatness to its rich and royal culture. <br> <br>

          Rajasthan is India’s largest state, on the contrary, land, color, heritage and vibration. It represents the
          true combination of past traditions, which still adhere to economic development and technological progress.
          <br> <br>

          Behind each palace and castle, unique combination of different places and history, different, delightful
          festivals and festivals, colorful clothes of heavy ornaments are a symbol of the rich and diverse culture of
          this place. <br> <br>

          Rajasthan, often referred to as the “Land of Kings,” is a vibrant state in northern India known for its rich
          history, colorful culture, majestic forts, and magnificent palaces. It offers a diverse range of experiences
          for tourists, from exploring ancient cities to immersing oneself in the royal heritage of the Rajput warriors.
          <br> <br>

          Rajasthan is home to numerous forts and palaces that showcase the grandeur and architectural brilliance of the
          bygone era. Some of the must-visit forts include Amer Fort in Jaipur, Mehrangarh Fort in Jodhpur, and
          Jaisalmer Fort in Jaisalmer. The City Palace in Jaipur and Udaipur’s Lake Palace are also major attractions.
          <br> <br>

          Rajasthan is renowned for its vibrant culture, music, dance, and folk traditions. The state hosts various
          festivals like Pushkar Camel Fair, Jaipur Literature Festival, and Desert Festival that offer a glimpse into
          the colorful traditions and rituals of the region. The folk dances like Ghoomar and Kalbeliya, and music forms
          like Rajasthani folk and Sufi music are a treat for art enthusiasts. <br> <br>

          The Thar Desert in Rajasthan provides an excellent opportunity for desert safaris. Visitors can explore the
          vast sand dunes on camelback, enjoying breathtaking sunsets and experiencing the rustic lifestyle of desert
          communities. The cities of Jaisalmer and Bikaner are popular starting points for desert excursions. <br> <br>

          Rajasthan boasts several wildlife sanctuaries and national parks that are home to diverse flora and fauna.
          Ranthambore National Park is renowned for its population of Bengal tigers, while Keoladeo National Park in
          Bharatpur is a haven for bird lovers. Other notable wildlife sanctuaries include Sariska Tiger Reserve and
          Desert National Park. <br> <br>

          Rajasthan offers a unique opportunity to stay in heritage hotels, which are often former palaces and havelis
          (traditional mansions) converted into luxurious accommodations. These hotels provide a glimpse into the royal
          lifestyle, with opulent interiors, traditional Rajasthani hospitality, and a chance to experience the regal
          charm of the past. <br> <br>

          The bustling bazaars of Rajasthan are a paradise for shoppers. From traditional textiles like bandhani and
          block prints to vibrant handicrafts, jewelry, and leather goods, these markets offer a wide range of items to
          take home as souvenirs. <br> <br>

          Rajasthan is home to several important pilgrimage sites. Pushkar is known for its holy lake and Brahma Temple,
          while Ajmer is home to the revered Ajmer Sharif Dargah. The Dilwara Temples in Mount Abu are famous for their
          intricate marble carvings. <br> <br>

          Rajasthan’s cuisine is known for its rich flavors and unique preparations. From dal bati churma and gatte ki
          sabzi to lal maas (spicy meat curry) and ker sangri (a traditional Rajasthani vegetable dish), the state
          offers a gastronomic delight for food enthusiasts. <br> <br>

          Enjoy Rajasthan tour package with your family with Mercury Tour Operator. <br> <br>
        </p>
      </div>

      <div class="container">
        <div class="image"><img
            src="Rajasthan24-transformed.jpeg"
            alt="image"></div>

        <div class="image"><img
            src="Rajasthan4.jpg"
            alt="image"></div>

        <div class="image"><img
            src="Rajasthan6.jpg"
            alt="image"></div>

        <div class="image"><img
            src="Rajasthan5.jpg"
            alt="image"></div>
      </div>

      <div class="pac-dt">
        <h2><i class="fa-solid fa-forward"></i> Rajasthan Package Date 2023 -</h2>
        <ul>
          <li><i class="fa-solid fa-calendar-days"></i> January, 2023 : 7, 14, 21, 28 </li>
          <li><i class="fa-solid fa-calendar-days"></i> February, 2023 : 8, 15, 22, 27 </li>
          <li><i class="fa-solid fa-calendar-days"></i> June, 2023 : 9, 16, 23, 30</li>
          <li><i class="fa-solid fa-calendar-days"></i> July, 2023 : 10, 17, 24, 31</li>
          <li><i class="fa-solid fa-calendar-days"></i> August, 2023 : 5, 12, 14, 19, 26</li>
          <li><i class="fa-solid fa-calendar-days"></i> September, 2023 : 1, 8, 15, 22 ,29</li>
          <li><i class="fa-solid fa-calendar-days"></i> October, 2023 : 6, 13, 20, 21, 22, </li>
          <li><i class="fa-solid fa-calendar-days"></i> November, 2023 : 3, 6, 10, 13, 17, </li>
          <li><i class="fa-solid fa-calendar-days"></i> December, 2023 : 1, 4, 8, 11, 15</li>
        </ul>
      </div>



      <div class="pac-dt">
        <h2><i class="fa-solid fa-forward"></i> Rajasthan Tour Duration -</h2>
        <ul>
          
          <li><i class="fa-solid fa-clock"></i> 5 Night 6 Days </li>
        </ul>
      </div>


      <div class="pac-dt">
        <h2><i class="fa-solid fa-forward"></i> Rajasthan Package Cost-</h2>
        <ul>
          <li><i class="fa-solid fa-indian-rupee-sign"></i> 21,999/- For Adults</li>

          <li><i class="fa-solid fa-indian-rupee-sign"></i> 15,999/- Below 15 Years </li>

          <li><i class="fa-solid fa-indian-rupee-sign"></i> 8,999/- Below 5years with car seat </li>

          <li><i class="fa-solid fa-indian-rupee-sign"></i> No Charges below 3 Years</li>
        </ul>
      </div>


      <div class="pac-dt">
        <h2><i class="fa-solid fa-forward"></i> Rajasthan Trip Covers-</h2>
        <ul>
          <li><i class="fa-solid fa-mountain-sun"></i> Majestic Forts and Palaces</li>
          <li><i class="fa-solid fa-mountain-sun"></i> Rich Cultural Heritage</li>
          <li><i class="fa-solid fa-mountain-sun"></i> Desert Safari</li>
          <li><i class="fa-solid fa-mountain-sun"></i> Wildlife Sanctuaries and National Parks</li>
          <li><i class="fa-solid fa-mountain-sun"></i> Heritage Hotels</li>
          <li><i class="fa-solid fa-mountain-sun"></i> Colorful Bazaars</li>
          <li><i class="fa-solid fa-mountain-sun"></i> Pilgrimage Sites</li>
          <li><i class="fa-solid fa-mountain-sun"></i> Cuisine</li>
        </ul>
      </div>

      <div class="pac-dt">
        <h2><i class="fa-solid fa-forward"></i> Rajasthan Tour Includes-</h2>
        <ul>
          <li><i class="fa-sharp fa-solid fa-circle-check"></i> Pick up & Drop (as per plan)</li>

          <li><i class="fa-sharp fa-solid fa-circle-check"></i> All Meals like bed tea, breakfast, lunch, Evening
            Snacks, Dinner as per package schedule.</li>

          <li><i class="fa-sharp fa-solid fa-circle-check"></i>Family wise accommodation</li>

          <li><i class="fa-sharp fa-solid fa-circle-check"></i>Desert safari</li>

          <li><i class="fa-sharp fa-solid fa-circle-check"></i> National Park Entry Fees</li>

          <li><i class="fa-sharp fa-solid fa-circle-check"></i> Majestic Fort visit with guide</li>

          <li><i class="fa-sharp fa-solid fa-circle-check"></i> Local Programs</li>

        </ul>
      </div>


      <div class="pac-dt">
        <h2><i class="fa-solid fa-forward"></i> Rajasthan Tour Excludes-</h2>
        <ul>
          <li><i class="fa-sharp fa-solid fa-circle-xmark"></i> Personal expenditure</li>
          <li><i class="fa-sharp fa-solid fa-circle-xmark"></i> Coolie Charge</li>
          <li><i class="fa-sharp fa-solid fa-circle-xmark"></i> Any meal out of inclusions</li>
          <li><i class="fa-sharp fa-solid fa-circle-xmark"></i> Movie Camera Permission Charges</li>
        </ul>
      </div>

      <div class="pac-dt">
        <h2><i class="fa-solid fa-forward"></i> Rajasthan Tour Activities -</h2>
      </div>

      <div class="container1">
        <div class="image1"> <img
            src="Rajasthan16.jpg"
            alt="image">
          <div class="img-cont">
            <h3>Desert Safari</h3>
          </div>
        </div>

        <div class="image1"><img
            src="Rajasthan14.jpg"
            alt="image">
          <div class="img-cont">
            <h3>Majestic Palace Visiting</h3>
          </div>
        </div>

        <div class="image1"><img
            src="Rajasthan3.jpeg"
            alt="image">
          <div class="img-cont">
            <h3>A Day Out With Elephants</h3>
          </div>
        </div>
        <div class="image1"><img
            src="Rajasthan17.jpg"
            alt="image">
          <div class="img-cont">
            <h3>Music Of Kalbeliya Tribe</h3>
          </div>
        </div>
      </div>



      <div>
        <div class="pac-dt">
          <h2><i class="fa-solid fa-forward"></i> Rajasthan Tour Plan Daywise -</h2>
        </div>

        <div class="day">
          <h2><i class="fa-solid fa-map-location-dot"></i> Day 1</h2>
          <p>
            Arrival in Jaipur <br> <br> <br>

            Begin your adventure in Jaipur, the Pink City of Rajasthan, known for its captivating palaces and bustling
            markets. <br> <br>
            Immerse yourself in the vibrant atmosphere as you explore the city’s colorful bazaars and sample local
            delicacies.
            <br><br><br><br>
          </p>
        </div>




        <div class="day">
          <h2><i class="fa-solid fa-map-location-dot"></i> Day 2</h2>
          <p>Jaipur <br> <br> <br>

            Discover the magnificent Amber Fort, a UNESCO World Heritage Site, and marvel at its intricate architecture
            and panoramic views. <br> <br>
            Explore the City Palace, home to a fascinating collection of artifacts and royal treasures. <br> <br>
            Visit the Jantar Mantar, an astronomical observatory dating back to the 18th century. <br> <br>
            Experience the ethereal beauty of the Hawa Mahal, also known as the Palace of Winds.

            <br><br><br><br>
          </p>
        </div>


        <div class="day">
          <h2><i class="fa-solid fa-map-location-dot"></i> Day 3</h2>
          <p>
            Jaipur to Pushkar <br> <br> <br>

            Journey from Jaipur to Pushkar, a holy town famous for its sacred lake and Brahma Temple. <br> <br>
            Take a dip in the Pushkar Lake and witness the evening aarti (ritual) at Varaha Ghat. <br> <br>
            Explore the vibrant streets of Pushkar, known for its handicrafts and spiritual atmosphere.
            <br><br><br><br>
          </p>
        </div>


        <div class="day">
          <h2><i class="fa-solid fa-map-location-dot"></i> Day 4</h2>
          <p>
            Pushkar to Jodhpur <br> <br> <br>

            Travel from Pushkar to Jodhpur, the Blue City of Rajasthan, famous for its majestic forts and palaces. <br>
            <br>
            Explore the magnificent Mehrangarh Fort, perched on a hilltop and offering breathtaking views of the city.
            <br> <br>
            Visit Jaswant Thada, a stunning marble cenotaph dedicated to Maharaja Jaswant Singh II. <br> <br>
            Dive into the bustling markets of Jodhpur and indulge in shopping for textiles, handicrafts, and spices.
            <br><br><br><br>
          </p>
        </div>

        <div class="day">
          <h2><i class="fa-solid fa-map-location-dot"></i> Day 5</h2>
          <p>
            Jodhpur <br> <br> <br>

            Embark on a day trip to the enchanting Mandore Gardens, adorned with intricately carved cenotaphs and lush
            gardens. <br> <br>
            Immerse yourself in the history and culture of Jodhpur as you explore its architectural wonders and royal
            heritage.
            <br><br><br><br>
          </p>
        </div>

        <div class="day">
          <h2><i class="fa-solid fa-map-location-dot"></i> Day 6</h2>
          <p>
            Jodhpur to Ranakpur to Udaipur <br> <br> <br>

            Journey from Jodhpur to Udaipur, the City of Lakes, with a stop at Ranakpur, known for its exquisite Jain
            Temples. <br> <br>

            Marvel at the intricate marble carvings and architectural beauty of the Ranakpur Jain Temples. <br> <br>

            Arrive in Udaipur and prepare to be captivated by its romantic lakes, palaces, and charming streets. <br>
            <br>

            Explore the majestic City Palace, a sprawling complex overlooking Lake Pichola, showcasing a blend of
            Rajasthani and Mughal architecture. <br> <br>

            Visit Saheliyon ki Bari, a beautiful garden adorned with fountains, kiosks, and marble elephants. <br> <br>
            Enjoy a boat ride on Lake Pichola, where you can admire the stunning Lake Palace and Jag Mandir Island. <br>
            <br>

            And then bid farewell to the enchanting land of Rajasthan as you depart from Udaipur, carrying with you
            memories of its captivating forts, vibrant markets, and rich cultural heritage.
            <br><br><br><br>
          </p>
        </div>


        <div class="r">
          <h2>BOOK NOW</h2>
          
          <form method="POST">
            <div class="name"><input name="name" type="text" class="feedback-input" placeholder="Enter Your Name" /></div>
            <div class="input-box"><input name="email" type="text" class="feedback-input" placeholder="Enter Your Email" />
              <input style="float:right" name="phone" type="tel" class="feedback-input" placeholder="Enter Your Phone No" /></div>
         <div class="input-box"><input name="adt" type="number" class="feedback-input" placeholder="Total Adults" />
            <input style="float:right" name="chd" type="number" class="feedback-input" placeholder="Total Children" /></div>
         

            <div class="name"><select name="tour" class="feedback-input">
                <option>Rajasthan Tour</option>
                </select>
                </div>
            
            <div class="input-box">
              <select name="sltpck" class="feedback-input">
                <option>Select Package</option>
                <option>6 Night 7 Days</option>
              
              </select>

              
              <select name="sltdt" class="feedback-input" style="float: right;">
                  <option>Select Tour Date</option>
                  <option >21st Jan</option>
                  <option >23rd Jan</option>
                  <option >27th Jan</option>
      
                  <option >18th Feb</option>
                  <option >21st Feb</option>
                  <option >14th Feb</option>
      
                  <option>21st Mar</option>
                  <option>23rd Mar</option>
                  <option>27th Mar</option>
      
                  <option>21st Jun</option>
                  <option>26th Jun</option>
                  <option>30th Jun</option>
      
                  <option>17th Sep</option>
                  <option>21st Sep</option>
                  <option>17th Sep</option>
      
                  <option>3th Oct</option>
                  <option>9th Oct</option>
                  <option >16th Oct</option>
      
                  <option >12th Nov</option>
                  <option>18th Nov</option>
                  <option>26th Nov</option>
      
                  <option>19th Dec</option>
                  <option >24th Dec</option>
                  <option>29th Dec</option>
      
                </select>
             
            </div>
           

            <div class="name">  <textarea name="address" class="feedback-input" id="add" placeholder="Enter Your Address"></textarea></div>
           
          
         
         <button type="submit" name="submit">BOOK</button> 
  
        </form>
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


  <script src="sundarban.js"></script>
</body>

</html>