<?php
session_start();

if (!isset($_SESSION['name'])) {

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
		header('location:Sundarban.php');
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
  <link rel="stylesheet" href="Sundarbannew.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />



  <title>Sundarban Tour</title>
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
    <img class="image-slide active" src="Sundarban1.jpg" alt="image" />
    <img class="image-slide" src="Sundarban3.jpg" alt="image" />
    <img class="image-slide" src="Sundarban4.jpg" alt="image" />
    <img class="image-slide" src="Sundarban5.jpg" alt="image" />
    <img class="image-slide" src="Sundarban6.jpg" alt="image" />
    <img class="image-slide" src="Sundarban7.jpg" alt="image" />





    <div class="content">
      <h1>Sundarban</h1>
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
        <h2>Sundarban tour details</h2>
      </div>

      <div class="pragraph">
        <p>
          Is your daily work life getting you enervated?<br><br>

          Want to surprise your family with an exciting wild adventure by taking them to a Sundarban tour?<br><br>

          If you think you are, then let’s grab a tiny-winy Sundarban tour package with your most favourite Sundarban
          tour operator, TravelX known for giving budget Sundarban tour package rate. <br><br>

          The Sundarbans is a vast mangrove forest located in the delta region of the Ganges, Brahmaputra, and Meghna
          rivers, straddling the border between Bangladesh and India. It is considered one of the most ecologically
          significant and biodiverse regions in the world and has been recognized as a UNESCO World Heritage Site..
          <br><br>

          The Sundarbans is known for its unique and diverse ecosystem, characterized by a network of tidal waterways,
          mudflats, and small islands covered with dense mangrove forests. The name "Sundarbans" is derived from the
          Sundari trees (Heritiera fomes), which are one of the dominant species of mangroves found in the area.
          <br><br>

          The Sundarbans is home to a wide range of plant and animal species, including the iconic Bengal tiger
          (Panthera tigris tigris). It is estimated that around 400 Bengal tigers inhabit the Sundarbans, making it one
          of the largest tiger populations in the world. Other notable wildlife species include saltwater crocodiles,
          Indian pythons, spotted deer, wild boars, and various species of birds and reptiles. <br><br>

          So save the dates for your tour under the best Sundarban tour package price. It is Sundarban tours 2 night 3
          days package, but you can also opt for the Sundarban tour 1 night 2 days package. <br> <br>

          We can arrange Sundarban tour 1 night 2 days package for you, but if you want, then you can join us in our 3
          days 2 nights Sundarban package tour. <br> <br>
        </p>
      </div>

      <div class="container">
        <div class="image"><img
            src="Sundarban3.jpg"
            alt="image"></div>

        <div class="image"><img
            src="Sundarban10.jpg"
            alt="image"></div>

        <div class="image"><img
            src="Sundarban8.jpg"
            alt="image"></div>

        <div class="image"><img
            src="Sundarban2.jpg"
            alt="image"></div>
      </div>

      <div class="pac-dt">
        <h2><i class="fa-solid fa-forward"></i> Sundarban package Date 2023 -</h2>
        <ul>
          <li><i class="fa-solid fa-calendar-days"></i> June, 2023 : 9, 16, 23, 30</li>
          <li><i class="fa-solid fa-calendar-days"></i> July, 2023 : 7, 14, 21, 28 (Hilsa Fest)
          <li><i class="fa-solid fa-calendar-days"></i> August, 2023 : 4, 11, 13, 18, 25 (Hilsa Fest)</li>
          <li><i class="fa-solid fa-calendar-days"></i> September, 2023 : 1, 8, 15, 22 (Hilsa Fest), 29</li>
          <li><i class="fa-solid fa-calendar-days"></i> October, 2023 : 6, 13, 20, 21, 22, 23, 24, 25, 27</li>
          <li><i class="fa-solid fa-calendar-days"></i> November, 2023 : 3, 6, 10, 13, 17, 20, 24, 27</li>
          <li><i class="fa-solid fa-calendar-days"></i> December, 2023 : 1, 4, 8, 11, 15, 18, 22, 23, 24, 25, 26, 27,
            28, 29, 30, 31</li>
        </ul>
      </div>



      <div class="pac-dt">
        <h2><i class="fa-solid fa-forward"></i> Sundarban Tour duration -</h2>
        <ul>
          <li><i class="fa-solid fa-clock"></i> Sundarban tour 2 night 3 days</li>
          
        </ul>
      </div>


      <div class="pac-dt">
        <h2><i class="fa-solid fa-forward"></i> Sundarban package Cost-</h2>
        <ul>
          <li><i class="fa-solid fa-indian-rupee-sign"></i> Standard Property Package: <br>
            Night stay Boat : 3500/- <br>
            By Train & Non Ac Hotel : 4500/- <br>
            By AC Car & Non Ac Hotel : 5400/- <br> <br></li>

          <li><i class="fa-solid fa-indian-rupee-sign"></i> Deluxe Property Package: <br>
            By Train & AC Hotel : 5600/- <br>
            By AC Car & Ac Hotel : 6500/- <br> <br> </li>

          <li><i class="fa-solid fa-indian-rupee-sign"></i> Star Property Package: <br>
            By AC Car & Star Hotel : 14,900/- <br> <br></li>

          <li><i class="fa-solid fa-indian-rupee-sign"></i> Child below 8 years: 50% Charges <br>
            No Charges for below 4 years.</li>
        </ul>
      </div>


      <div class="pac-dt">
        <h2><i class="fa-solid fa-forward"></i> Sundarban trip Covers-</h2>
        <ul>
          <li><i class="fa-solid fa-mountain-sun"></i> Gosaba Becon Bunglow and Rabindra Nath Tagore Bunglow</li>
          <li><i class="fa-solid fa-mountain-sun"></i> Hamilton Sahib Bunglow</li>
          <li><i class="fa-solid fa-mountain-sun"></i> Birds Jungle</li>
          <li><i class="fa-solid fa-mountain-sun"></i> Pirkhali</li>
          <li><i class="fa-solid fa-mountain-sun"></i> Gajikhali</li>
          <li><i class="fa-duotone fa-paw-claws"></i> Deul Varani</li>
          <li><i class="fa-solid fa-mountain-sun"></i> Banbibi Varani</li>
          <li><i class="fa-solid fa-mountain-sun"></i> Do-Banki Tiger Reserve Forest & watch tower</li>
          <li><i class="fa-solid fa-mountain-sun"></i> Panchamukhani (Five Rever Junctions)</li>
          <li><i class="fa-solid fa-mountain-sun"></i> Sudhanyakhali Tiger Reserve area & Watch tower</li>
          <li><i class="fa-solid fa-mountain-sun"></i> Pakhiralaya Island</li>
          <li><i class="fa-solid fa-mountain-sun"></i> Sajnekhali Tiger Reserve forest</li>
          <li><i class="fa-solid fa-mountain-sun"></i> Mangrove Interpretation Centre</li>
          <li><i class="fa-solid fa-mountain-sun"></i> Sajnekhali Watch tower</li>
          <li><i class="fa-solid fa-mountain-sun"></i> Sarakhali.</li>

        </ul>
      </div>

      <div class="pac-dt">
        <h2><i class="fa-solid fa-forward"></i> Sundarban Tour Includes-</h2>
        <ul>
          <li><i class="fa-sharp fa-solid fa-circle-check"></i> Pick up & Drop (as per plan)</li>

          <li><i class="fa-sharp fa-solid fa-circle-check"></i> All Meals like Bed tea, Breakfast, lunch, Evening
            Snacks, Dinner as per package schedule.</li>

          <li><i class="fa-sharp fa-solid fa-circle-check"></i>Family wise accommodation</li>

          <li><i class="fa-sharp fa-solid fa-circle-check"></i>Mangrove forest safari by motorized boat</li>

          <li><i class="fa-sharp fa-solid fa-circle-check"></i> National Park Entry Fees</li>

          <li><i class="fa-sharp fa-solid fa-circle-check"></i> Watchtower visit with guide</li>

          <li><i class="fa-sharp fa-solid fa-circle-check"></i> Local Folk Cultural Program</li>

        </ul>
      </div>


      <div class="pac-dt">
        <h2><i class="fa-solid fa-forward"></i> Sundarban Tour Excludes-</h2>
        <ul>
          <li><i class="fa-sharp fa-solid fa-circle-xmark"></i> Personal expenditure.</li>
          <li><i class="fa-sharp fa-solid fa-circle-xmark"></i> Coolie Charge.</li>
          <li><i class="fa-sharp fa-solid fa-circle-xmark"></i> Any meal out of inclusions</li>
          <li><i class="fa-sharp fa-solid fa-circle-xmark"></i> Movie Camera Permission Charges</li>
        </ul>
      </div>

      <div class="pac-dt">
        <h2><i class="fa-solid fa-forward"></i> Sundarban tour activities -</h2>
      </div>

      <div class="container1">
        <div class="image1"> <img
            src="Sundarban13.jpg"
            alt="image">
          <div class="img-cont">
            <h3>Tribal Dance</h3>
          </div>
        </div>

        <div class="image1"><img
            src="Sundarban12.jpg"
            alt="image">
          <div class="img-cont">
            <h3>Boat Safari</h3>
          </div>
        </div>

        <div class="image1"><img
            src="Sundarban14.jpg"
            alt="image">
          <div class="img-cont">
            <h3>National Park</h3>
          </div>
        </div>
        <div class="image1"><img
            src="Sundarban15.jpg"
            alt="image">
          <div class="img-cont">
            <h3>Bird Sanctuary</h3>
          </div>
        </div>
      </div>



      <div>
        <div class="pac-dt">
          <h2><i class="fa-solid fa-forward"></i> Sundarban Menu & Tour Plan Daywise -</h2>
        </div>

        <div class="day">
          <h2><i class="fa-solid fa-map-location-dot"></i> Day 1</h2>
          <p>Menu: <br>
            Breakfast : Radha Bhallavi/ Luchi, Alur Dam, Sweet, Tea. <br> <br>
            Lunch : Rice, Murighanta Dal, Beguni, Vegetable, Prawn, Bhetki Fish, Chatni, Papad, Card, Lemon. <br> <br>
            Snacks : Chicken Pokora, Salad, Tea/Coffee. <br> <br>
            Dinner : Fried Rice, Mutton, Salad. <br> <br>

            Tour: <br>

            Becon Bungalow, Hamilton & Rabindranath Tagore Bungalow, Sundarban Birds Jungle. <br> <br>

            07.42 AM - 12.00 PM :- On day one, we start our journey towards Sundarban Tour <br> <br>

            You can avail one of the two options for travelling to Sonakhali ferry ghat, one is by train from Sealdah
            Railway Station, and the other is by AC Car from Indian Musuem or Science City. <br> <br>

            By Train - Starting from Sealdah Railway Station at 8.28 AM By Canning local, we will reach Canning around
            9.50 AM. <br> <br>

            Pick up from Caning Railway Station by Auto heading towards Sonakhali ferry ghat to board on launch. <br>
            <br>

            By Car - First Pick up from Indian Musuem Main Gate at 7.30am, our secoend pikup point is Science City, PC
            Chandra Garden gte no 1. You will reach Sonakhali ferry ghat after 3hr. <br> <br>

            Now the actual thrill begins.
            As we board the Sundarban launch or Sundarban cruise and head towards our first destination, Gosaba, the
            windy Matla Rive rand the green vegetation upon its delta is undoubtedly to take your heart away from the
            dun of the city life. <br> <br>

            The Sundarban launch ride is a huge attraction in itself and does not feel like any other mundane journey.
            Before we even know it, we will reach Gosaba, and our Sundarban tours will get a head start. <br> <br>

            Breakfast with Drinking water will be served on the launch deck. <br> <br>

            12.00 PM - 1.00 PM:- First, the Sudurban tourism package will take us to the Sundarbans tour of 2 Historical
            bungalows. <br> <br>

            the first is the Beacon Bungalow. It is one of the most historical Bunglow and is famous because it was
            Tagore's abode during his Sundarban tour. <br> <br>

            Next, we head towards another of the major bunglow that is Hamilton Bungalow. <br> <br>

            Sir Daniel Hamilton is called the father of Sundarban, and he is said to have established the largest
            cooperative society in Sundarban. <br> <br>

            The Sundarban tour package we cover both in details and provides you with an oral guide through the
            historical stories. Soon you will start to relish the nostalgia of Sundarban trip. <br> <br>

            1.00 PM - 5.00 PM: - Delicious Lunch will be served on the launch in our Sundarban tour 2 nights 3 days.
            <br> <br>

            Then our Sundarban trip moves towards the Pakhir Jungle. This place is a real paradise for bird lovers and
            amusement, even for the general lot. The thousands of birds from various species arrive and fly around the
            island, making it a beautiful destination. This makes Sundarban tour more attracted that aims to bring you
            closer to the rulers of the sky. <br> <br>

            During this journey, tourists will spot seven types of kingfisher, black cormorants, egret, pond heron,
            Brahmani eagles, magpie robin, green bee-eaters and above all getting introduced to the lovely mangroves,
            with surreal creatures like the mudskipper, fiddler crabs etc. <br> <br>

            5.00 PM - 10.00 PM:- The first day of our Sundarban tour from Kolkata finally comes to an end as we reach
            one of the Sundarban’s hotel at Pakhiralaya Island/ Dayapur Island and rest to prepare for the second day of
            Sunderban tour package. <br> <br>

            Enjoy the enchanting evening with local Folk Cultural program along with Tea and Snacks. Dinner will be
            served on cruise/ Hotel.
            <br><br><br><br>
          </p>
        </div>




        <div class="day">
          <h2><i class="fa-solid fa-map-location-dot"></i> Day 2</h2>
          <p>Menu: <br>
            Early Morning : Bed Tea. <br> <br>
            Breakfast : Nanpuri, Chana Masala, Sweet, Tea/coffe. <br> <br>
            Lunch : Rice, Dal, fry, Vegetable, Rui Fish, Crabs, Chatni, Papad. <br> <br>
            Snacks : Chowmin, Tea/ Coffee.
            Dinner : Fried Rice, Chilly Chicken, Salad.
            <br> <br>

            Tour: <br>

            Sajnekhali Tiger Reserve ( Watch Tower ), Do Banki ( Watch Tower ), Pirkhali, Gazikhali, Duel Varani,
            Bonbibi Varani, Panchamukhani (5 River Junctions). <br> <br>

            07.30 AM: - Early morning, we will start Sundarban delta Safari through the boat. <br> <br>

            08.00 AM: - Entire day Sundarban jungle Safari guided by Govt tourist guide, who will join with us from
            Sajnekhali Tiger Reserve. <br> <br>

            08.30 AM: - We will start our thrilling Sundarban boat Safari through various rivers, Islands & narrow
            Creeks covering Pirkhali, SarakKhali, Gazikhali, Deul Bharani, Banbibi Bharani. In this Tiger Reserve area
            you can see animals like spotted deer, crocodile, wild boar, snakes, water monitor lizard, different types
            of birds, and also Royal Bengal Tiger. <br> <br>

            12.30 AM: - Now time to visit Do - Banki Tiger Reserve area & Watch Tower. <br> <br>

            The 498-meter canopy walk at Do - Banki allows you to view wildlife from an iron fencing enclosure; this
            place is something that deserves a visit from every wildlife photographer and other travellers. Have a
            birds-eye view of the wildlife of Sundarban from this watchtower, and from here you can see animals in their
            natural habitats. <br> <br>

            Little worried about safety? Don't worry. Our tour guide is always with you, and Sundarban forest authority
            has covered this full area with proper protection. Fantastic surrounding beauty and freshwater pond attract
            tigers, deer, and other wildlife towards them. <br> <br>

            02.00 PM:- Visit Panchamukhni ( Five River Junction ) through Boat. <br> <br>

            05.00 PM: - After this thrilling Sundarban National Park safari we will reach Pakhiralaya village for
            marketing. <br> <br>

            Have you ever enjoyed a village with its most wild nature? <br> <br>

            If not, then come with us with our Sunderban packages and explore the most beautiful village of Sundarban
            which is just next to the Sundarban tiger reserve forest. Not only that here you can follow the exact
            village nature in the livelihood of the dwellers of this village. <br> <br>

            Don't forget to buy a bottle of raw honey cultivated by the villagers of Pakhiralaya village. You may not
            find there any luxury vehicles, but you can only get there autorickshaw. Each home has its own pond, and
            they use it for their personal uses. <br> <br>

            09.30 PM: - Dinner will be served at Hotel/ Boat. <br> <br>

            => Bonus ~ if you are heading on the Sundarbans tour package somewhere around November to March, we have in
            store for you a special visit to Netidhopani ghat and watchtower. <br> <br>

            This place has a Hindu mythological legend. It is believed that Behula was called upon by the Hindu Gods to
            their heavenly abode at this ghat. This is where she mastered the life-giving chants. <br> <br>

            The mystic and nostalgic feel of this along with a broken Shiva temple is totally consuming.

            <br><br><br><br>
          </p>
        </div>


        <div class="day">
          <h2><i class="fa-solid fa-map-location-dot"></i> Day 3</h2>
          <p>Menu: <br>
            Early Morning : Bed Tea. <br> <br>
            Breakfast : Alu Parota (2 Pices), Vegetable, Sweet, Tea/ Coffee. <br> <br>
            Lunch : Rice, Dal, fry, Vegetable, Rui Fish, Crabs, Chatni, Papad. <br> <br>

            Tour: <br>

            Sajnekhali Tiger Reserve & Musuem (W.T), Sudhanyakhali Tiger Reserve (W.T), Sarakkhali 1, Sarakkhali 2. <br>
            <br>

            07.30 AM: - Early morning, we will start Sundarban Houseboat Safari. Explore the mystical forests while
            cruising through the dense woods and backwaters. <br> <br>

            Accompanied by the modern amenities, premiums and facilities, a Sundarban launch safari with us can provide
            you with an experience of a lifetime. Early Morning we will visit Sajnekhali Tiger Reserve. <br> <br>

            We, the city people often get bored in the hustle-bustle of city life, and our eyes lust to see greenery
            along with pollution-free air. If you are same, then come to Sajnekhali tiger reserve. With our Sundarban
            package, we will take you into the lush greenery of Sajnekhali. Sajnekhali is not only famous for its
            extended areas of the green field, but it is also home of Royal Bengal Tiger and varied species of birds.
            <br> <br>

            You can get a bird eye view of deer, tiger, and other animals in their natural habitats. So get ready with
            your camera to click some photos of colourful birds with our Sunderban tour package. <br> <br>

            Youalso need to obtain the permission of entering this National Park from Sajnekhali range office, which is
            also considered as the head of the department of Sundarban Tiger Reserve. You can also see a nature
            interpretation centre here and crocodile pond beside the centre. <br> <br>

            So enter the home of tigers, fishing cats, chital, etc. <br> <br>

            08.00 AM: - Delicious breakfast will be provided in launch. After the breakfast you can visit the
            Sudhanyakhali Tiger Reserve & Watch Tower. <br> <br>

            09.30 AM: - We will start our Sundarban jungle safari through Sarakkhali island. <br> <br>

            02.30 PM: - Lunch will be served on the launch deck. After the lunch we will be heading back towards
            Sonakhali. <br> <br>

            07.00 PM: - On the same way we will reach to Kolkata with sweet memories.

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
                <option>Sundarban Tour</option>
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