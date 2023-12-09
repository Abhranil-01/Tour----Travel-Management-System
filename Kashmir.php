<?php
session_start();

if(!isset($_SESSION['name'])){
 
  header('Location:index.php');
}
 ?>
 <?php 
include 'connection.php'; ; 
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
		header('location:Kashmir.php');
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
  <link rel="icon"
    href="favicon.ico"/>
  <link rel="stylesheet" href="Kashmir.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />



  <title>Kashmir Tour</title>
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
    <img class="image-slide active" src="Kashmir.jpg" alt="image" />
    <img class="image-slide" src="Kashmir12.jpg" alt="image" />
    <img class="image-slide" src="K4.jpg" alt="image" />
    <img class="image-slide" src="K2.jpg" alt="image" />
    <img class="image-slide" src="K0.jpg" alt="image" />
    <img class="image-slide" src="K.jpg" alt="image" />





    <div class="content">
      <h1>Kashmir</h1>
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
        <h2>Kashmir Tour Details</h2>
      </div>

      <div class="pragraph">
        <p>
          Kashmir is a state which is equally rich in cultural and natural wonders along with the myriad of history and
          political past that this state is home to. <br> <br>

          This state provides unique experiences to its tourists in the form of spicy native food along with a variety
          of teas, long walks or a jagged trekking experience on the many mountains in the region, marvelling at the
          cozy houseboats on the lakes of Srinagar and visiting the many pilgrimage sites, temples and religious and
          spiritual centres that are present throughout the state. <br> <br>

          If you love collecting souvenirs from the places you visit, then you can pick up the beautiful Pashmina silks,
          carpets and other textiles handcrafted by the native craftsmen in Kashmir. <br> <br>

          These are some of the unique experiences you can face all in the same state! With our Kashmir holiday
          packages, tourism will not only be about touring a destination but it more of exploring hidden treasures of
          the city, learning about their culture and traditions, and being one with the locals. <br> <br>

          On these terms, Kashmir does have a lot to offer for tourists holidaying here! Check out our best tour
          packages for Kashmir. <br> <br>
          <br> <br>
        </p>
      </div>

      <div class="container">
        <div class="image"><img
            src="K.jpg"
            alt="image"></div>

        <div class="image"><img
            src="K3.jpg"
            alt="image"></div>

        <div class="image"><img
            src="Kashmir14.jpg"
            alt="image"></div>

        <div class="image"><img
            src="Kashmir15.jpg"
            alt="image"></div>
      </div>

 



      <div class="pac-dt">
        <h2><i class="fa-solid fa-forward"></i> Kashmir Tour Duration -</h2>
        <ul>
          <li><i class="fa-solid fa-clock"></i>5 night 6 days</li>
        </ul>
      </div>


      <div class="pac-dt">
        <h2><i class="fa-solid fa-forward"></i> Kashmir Package Cost-</h2>
        <ul>
          <li><i class="fa-solid fa-indian-rupee-sign"></i> 29,999/- For Adults</li>

          <li><i class="fa-solid fa-indian-rupee-sign"></i> 19,999/- Below 15 Years </li>

          <li><i class="fa-solid fa-indian-rupee-sign"></i> 8,999/- Below 5years </li>

          <li><i class="fa-solid fa-indian-rupee-sign"></i> No Charges below 3 Years</li>
        </ul>
      </div>


      <div class="pac-dt">
        <h2><i class="fa-solid fa-forward"></i> Kashmir Trip Covers-</h2>
        <ul>
          <li><i class="fa-solid fa-mountain-sun"></i> Srinagar</li>
          <li><i class="fa-solid fa-mountain-sun"></i> Gulmarg</li>
          <li><i class="fa-solid fa-mountain-sun"></i> Pahalgam</li>
          <li><i class="fa-solid fa-mountain-sun"></i> Jammu</li>
          <li><i class="fa-solid fa-mountain-sun"></i> Leh Ladakh</li>
          <li><i class="fa-solid fa-mountain-sun"></i> Nubra Valley</li>
          <li><i class="fa-solid fa-mountain-sun"></i> Sonmarg</li>
          <li><i class="fa-solid fa-mountain-sun"></i> Patnitop</li>
          <li><i class="fa-solid fa-mountain-sun"></i> Sanasar</li>
          <li><i class="fa-solid fa-mountain-sun"></i> Zanskar</li>
        </ul>
      </div>

      <div class="pac-dt">
        <h2><i class="fa-solid fa-forward"></i> Kashmir Tour Includes-</h2>
        <ul>
          <li><i class="fa-sharp fa-solid fa-circle-check"></i> Pick up & Drop (as per plan)</li>

          <li><i class="fa-sharp fa-solid fa-circle-check"></i> All Meals like Bed tea, Breakfast, lunch, Evening
            Snacks, Dinner as per package schedule.</li>

          <li><i class="fa-sharp fa-solid fa-circle-check"></i>Family wise accommodation</li>

          <li><i class="fa-sharp fa-solid fa-circle-check"></i>Sightseeing</li>
        </ul>
      </div>


      <div class="pac-dt">
        <h2><i class="fa-solid fa-forward"></i> Kashmir Tour Excludes-</h2>
        <ul>
          <li><i class="fa-sharp fa-solid fa-circle-xmark"></i> Personal expenditure.</li>
          <li><i class="fa-sharp fa-solid fa-circle-xmark"></i> Coolie Charge.</li>
          <li><i class="fa-sharp fa-solid fa-circle-xmark"></i> Any meal out of inclusions</li>
          <li><i class="fa-sharp fa-solid fa-circle-xmark"></i> Movie Camera Permission Charges</li>
        </ul>
      </div>

      <div class="pac-dt">
        <h2><i class="fa-solid fa-forward"></i> Kashmir Tour Activities -</h2>
      </div>

      <div class="container1">
        <div class="image1"> <img
            src="Kashmir2.jpg"
            alt="image">
          <div class="img-cont">
            <h3>Trekking</h3>
          </div>
        </div>

        <div class="image1"><img
            src="Kashmir6-transformed.jpeg"
            alt="image">
          <div class="img-cont">
            <h3>Rafting</h3>
          </div>
        </div>

        <div class="image1"><img
            src="Kashmir3.jpg"
            alt="image">
          <div class="img-cont">
            <h3>Camping</h3>
          </div>
        </div>
        <div class="image1"><img
            src="Kashmir4.jpg"
            alt="image">
          <div class="img-cont">
            <h3>Skiing</h3>
          </div>
        </div>
      </div>



      <div>
        <div class="pac-dt">
          <h2><i class="fa-solid fa-forward"></i> Kashmir Tour Plan Daywise -</h2>
        </div>

        <div class="day">
          <h2><i class="fa-solid fa-map-location-dot"></i> Day 1</h2>
          <p>Srinagar <br> <br> <br>

            This capital city is situated on the bank of river Jhelum and is known as the summer capital. The city is
            surrounded by the magnificent snow-capped Himalayan mountain ranges which gives its tourists a calm and
            relaxed holiday away from the pollution and noise of the cities. <br> <br>

            The Dal lake is the most famous tourist attraction here and is surrounded by beautiful gardens, mountains
            and orchards. If you are a nature lover, don’t forget to visit the many gardens in the city such as
            Chashmashahi Gardens, Mughal Gardens, Nishat Gardens and the Shalimar Garden. The neighbouring regions
            provides scope for activities such as golfing, fishing, skiing, trekking, paragliding, river rafting,
            Kayaking and camping.
            <br><br><br><br>
          </p>
        </div>




        <div class="day">
          <h2><i class="fa-solid fa-map-location-dot"></i> Day 2</h2>
          <p>Gulmarg to Pahalgam <br> <br> <br>

            Are you an avid golfer and looking for an amazing golfing experience? Gulmarg is the place to visit as this
            city has the highest golf course in the world which is situated at an altitude of about 2650 metres above
            ground level! <br> <br>

            True to its, which means “Meadow of Flowers”, Gulmarg is filled with grassy hills with a lot of flowers.
            Winters in Gulmarg are the perfect season of skiing on the snowy mountains. Flowers such as bluebells,
            buttercups, daisies and forget me nots attract tourists from all over the world. this is a beautiful place
            to be spending with your loved one. <br> <br>

            Devotees on a pilgrim trip to the holy Amarnath caves (Lord Shiva’s abode) halt in Pahalgam as the base camp
            before continuing their journey to the shrine. Pahalgam is an ideal spot for activities such as fishing,
            trekking and hiking and the city also attracts a lot of tourists for its picturesque beauty of the Liddar
            valley.
            <br><br><br><br>
          </p>
        </div>


        <div class="day">
          <h2><i class="fa-solid fa-map-location-dot"></i> Day 3</h2>
          <p>Jammu <br> <br> <br>

            Jammu is the southernmost region of Kashmir and is fondly called the winter capital of the state. Majority
            of the tourists end up in Jammu as their first spot in their vacation. <br> <br>

            This region has many mountain ranges such as the Shivalik, Trikuta Hills, Pir Panjal Range and the Tawi
            River Basin whose beauty attracts tourism. <br> <br>

            The famous Vaishno Devi shrine is located here which also attracts a lot of pilgrims. Pick our land based
            Jammu packages at best price.
            <br><br><br><br>
          </p>
        </div>


        <div class="day">
          <h2><i class="fa-solid fa-map-location-dot"></i> Day 4</h2>
          <p>Leh Ladakh <br><br><br>

            Ladakh which is popularly known as “Little Tibet” is located amongst two most mighty mountain ranges which
            are the great Himalayas and the Karakoram mountain range. Ladakh offers a variety of sports such as Jeep
            Safari tours, Yak Safaris, Mountain climbing, Trekking and Cycling. <br> <br>

            The prevalent Buddhist monasteries and the majority of the population following Buddhist culture and
            traditions is what give Ladakh its pet name. <br> <br>

            The capital city of Ladakh is Leh which also offers splendid views of the landscapes, snow-capped mountains,
            enchanting rivers and many other adventure sports. <br> <br>

            Leh Ladakh features amongst our best tour packages for Kashmir.

            <br><br><br><br>
          </p>
        </div>

        <div class="day">
          <h2><i class="fa-solid fa-map-location-dot"></i> Day 5</h2>
          <p>Sonmarg to Patnitop <br><br><br>

            Sonmarg is the perfect destination to enjoy the snow peaked mountains from the various hill resorts in this
            region. <br> <br>

            Sonmarg is known to be the gateway to Ladakh and the beautiful flora here is fostered by the river Sindh
            which flows through the region. The pristine blue lakes and the grasslands filled with flowers is what
            majorly attracts the tourists to this place. The best time to visit Sonmarg is during the summers as then
            you can enjoy the exotic flora and grasslands while also being able to see the snow-clad mountain peaks.
            <br> <br>

            Another hill station away from the bustling cities is more like a dream come true with its Alps like snowy
            mountains ranges. <br> <br>

            This quaint little city is located near River Chenab which is the nurturing source of the grasslands and
            fields nearby. <br> <br>

            Here, you can undertake sport activities such trekking, camping, walking, paragliding and skiing. There is
            also a huge 9-hole golf course here which attracts golf lovers during the summers. <br> <br>

            When you visit Patnitop you can also visit the nearby religious places such as Vaishno Devi temple, Nag
            temple, Buddha Amarnath temple and the Bahu fort and temple.
            <br><br><br><br>
          </p>
        </div>

        <div class="day">
          <h2><i class="fa-solid fa-map-location-dot"></i> Day 6</h2>
          <p>Sanasar <br> <br> <br>

            Sanasar is known as the mini Gulmarg and is remote hill station in Jammu & Kashmir region. Due to this the
            tourist crowd, will also be less so that you can enjoy some peaceful time away from people and amidst
            nature. <br> <br>

            The town is constructed in such a way that it looks like a cup and is surrounded by large coniferous trees.
            Some activities that are available here are parasailing, paragliding and horse riding. <br> <br>

            There is also a newly constructed Gold course here. The major tourist attractions here are the Nag temple,
            waterfalls and the Hidden creek. <br> <br>

            And then bid farewell to the “Paradise on Earth” Kashmir with its breath-taking valleys and scenic
            landscapes with snow-capped mountains.

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
                <option>Kashmir Tour</option>
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

  <script
    src="sundarban.js"></script>
</body>

</html>