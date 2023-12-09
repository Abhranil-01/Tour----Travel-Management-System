<?php
session_start();

if (!isset($_SESSION['name'])) {

  header('Location:index.php');
}
?>
<?php
include 'connection.php'; 
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $totaladult = $_POST['adt'];
  $totalchildren = $_POST['chd'];
  $tour = $_POST['tour'];
  $selectpackage = $_POST['sltpck'];
  $selectdate = $_POST['sltdt'];
  $address = $_POST['address'];

  //echo $name .$phone .$email;

  $sql = "INSERT INTO custrecord(Name, Email ,Phone, TotalAdults, TotalChildren,Tour, PackageDetails, TourDate, Address) VALUES ('$name', '$email', '$phone', '$totaladult', '$totalchildren','$tour', '$selectpackage', '$selectdate' ,  '$address')";


  $query = mysqli_query($con, $sql);

  if ($query) {
    header('location:Darjeeling.php');
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
  <link rel="stylesheet" href="Darjeeling.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />



  <title>Darjeeling Tour</title>
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
    <img class="image-slide active" src="Darjeeling1.jpeg" alt="image" />
    <img class="image-slide" src="darjeeling7.jpeg" alt="image" />
    <img class="image-slide" src="darjeeling4.jpg" alt="image" />
    <img class="image-slide" src="darjeeling5.jpeg" alt="image" />
    <img class="image-slide" src="darjeeling2.jpg" alt="image" />
    <img class="image-slide" src="darjeeling8.jpeg" alt="image" />





    <div class="content">
      <h1>Darjeeling</h1>
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
        <h2>Darjeeling tour details</h2>
      </div>

      <div class="pragraph">
        <p>
          Darjeeling is one of the most favourite tourist destinations for
          Bengalis and others alike. <br><br>

          Established by the British Empire,it is one of the oldest cities from the Raj still in existence. It was
          fashioned after Victorian Period England, and it primarily was the favourite tourist spot for various
          and high-ranking officials and other personnel of the British Raj. <br><br>

          So if you wish to explore this wonderful hill station and its surrounding area in a completely new light, then
          we have the best possible Darjeeling tour package for you. It includes all the beautiful places that make a
          trip to the mountains worth remembering. <br><br>

          Travelling is not only exploring new places, but also this is to explore different cultures, cuisines and
          various landscapes. <br><br>

          Travelling makes us interact with other people and of course it shows humanity towards the rest of the world.
          Travelling gets us relief from the hustle bustle of city life. It also opens up the opportunity to spend some
          quality time with our friends, family and loved one. <br><br>

          By keeping all these things in mind we are offering you an exciting and unforgettable Darjeeling Kalimpong
          Kurseong tour plan with us. <br><br>

          There is really nothing to give any introduction about Darjeeling tour package. Such a beautiful place really
          deserves a visit from everyone. Actually Darjeeling tour package is nothing but enjoying a great combination
          of snow capped mountains, eyesoothung landscapes, marvelous sight of tea gardens and the sizzling waterfalls.
          <br><br>

          Except for that some of the unique plants like oaks, birches, maples, chestnuts and rhododendron will add
          another charm to your Darjeeling tour package. Feel relaxed and extreme peace while visiting Buddhist
          monasteries at Darjeeling, lush green landscapes at Kurseong and a fantastic and tranquill weather at
          Kalimpong with our Darjeeling tour package. <br><br>

          You can say Darjeeling is such a place that is known for its youthful vibes which is mixed with modern and
          colonial charm. Once upon a time this was a summer retreat for the British peoples. So have you decided for
          having Darjeeling tour package? <br><br>

          Get ready to enjoy the realistic view of snow picked Kanchenjunga, and the sight of beautiful tea gardens on
          the slopes of rolling hills and the whistling cute Himalayan toy train through the mountains with our
          exclusive Darjeeling tour package. <br><br>

          If you want to combine all these sightseeing experiences with great foods, shopping and exciting activities in
          Darjeeling tour then come with us. <br><br>

          We will give you a fantastic planning to design your Darjeeling tour in this mesmerizing Indian hill station.
          <br><br>

          We are aimed to make your Darjeeling tour more enjoyable by providing great hotels and good tour guides.
          <br><br>

          Travelling with us at Darjeeling will help you in cutting out unnecessary costs, and you will be able to shape
          your Darjeeling tour package cost from Kolkata in exactly the same way that you want. <br><br>

          But before you start packing, let’s look at our Darjeeling tour itinerary first.

        </p>
      </div>
      <div class="container">
        <div class="image"><img src="d4.jpg" alt="image"></div>
        <div class="image"><img src="d1.jpeg" alt="image"></div>
        <div class="image"><img src="d3.jpeg" alt="image"></div>
        <div class="image"><img src="d2.jpeg" alt="image"></div>
      </div>

      <div class="pac-dt">
        <h2><i class="fa-solid fa-forward"></i> Darjeeling package Date 2023 -</h2>
        <ul>
          <li><i class="fa-solid fa-calendar-days"></i> January, 2023 : 21 - 27</li>
          <li><i class="fa-solid fa-calendar-days"></i> February, 2023 : 18 - 24</li>
          <li><i class="fa-solid fa-calendar-days"></i> March, 2023 : 21 - 27, 25 - 31</li>
          <li><i class="fa-solid fa-calendar-days"></i> June, 2023 : 04 - 10</li>
          <li><i class="fa-solid fa-calendar-days"></i> September, 2023 : 17 - 23</li>
          <li><i class="fa-solid fa-calendar-days"></i> October, 2023 : 03 - 09, 10 - 16</li>
          <li><i class="fa-solid fa-calendar-days"></i> November, 2023 : 12 - 18, 25 - 01</li>
          <li><i class="fa-solid fa-calendar-days"></i> December, 2023 : 19 - 25, 27 - 02</li>
        </ul>
      </div>



      <div class="pac-dt">
        <h2><i class="fa-solid fa-forward"></i> Darjeeling Tour duration -</h2>
        <ul>
          <li><i class="fa-solid fa-clock"></i> 6 Night 7 Days</li>

        </ul>
      </div>


      <div class="pac-dt">
        <h2><i class="fa-solid fa-forward"></i> Darjeeling package Cost-</h2>
        <ul>
          <li><i class="fa-solid fa-indian-rupee-sign"></i> 12000/- For Adults</li>
          <li><i class="fa-solid fa-indian-rupee-sign"></i> 5,900/- Below 8 Years</li>
          <li><i class="fa-solid fa-indian-rupee-sign"></i> 2500/- Below 4 years with car seat</li>
          <li><i class="fa-solid fa-indian-rupee-sign"></i> No Charges below 4 Years without car seat.</li>

        </ul>
      </div>


      <div class="pac-dt">
        <h2><i class="fa-solid fa-forward"></i> Darjeeling trip Covers-</h2>
        <ul>
          <li><i class="fa-solid fa-mountain-sun"></i> New Jalpaiguri</li>
          <li><i class="fa-solid fa-mountain-sun"></i> Kalimpong</li>
          <li><i class="fa-solid fa-mountain-sun"></i> Delo park</li>
          <li><i class="fa-solid fa-mountain-sun"></i> Teesta river</li>
          <li><i class="fa-solid fa-mountain-sun"></i> Tiger hill</li>
          <li><i class="fa-solid fa-mountain-sun"></i> Japani temple</li>
          <li><i class="fa-solid fa-mountain-sun"></i> Rock Garden</li>
          <li><i class="fa-solid fa-mountain-sun"></i> Mirik Lake</li>
          <li><i class="fa-solid fa-mountain-sun"></i> Padmaza Naidu Zoological Park</li>
          <li><i class="fa-solid fa-mountain-sun"></i> Himalayan Mountaineering Institute</li>

        </ul>
      </div>

      <div class="pac-dt">
        <h2><i class="fa-solid fa-forward"></i> Darjeeling Tour Includes-</h2>
        <ul>
          <li><i class="fa-sharp fa-solid fa-circle-check"></i> All Accomodation ( minimum twin Sharing ).</li>
          <li><i class="fa-sharp fa-solid fa-circle-check"></i> Sealdah to New Jalpaiguri & New Jalpaiguri to Sealdah
            Sleeper Train Fare.</li>
          <li><i class="fa-sharp fa-solid fa-circle-check"></i> Side Seen By Non AC Car ( Minimum 8 sharing ).</li>
          <li><i class="fa-sharp fa-solid fa-circle-check"></i> Non Ac Hotel ( Minimum Twin Sharing ).</li>
          <li><i class="fa-sharp fa-solid fa-circle-check"></i> Breakfast, Lunch, Dinner.</li>
        </ul>
      </div>


      <div class="pac-dt">
        <h2><i class="fa-solid fa-forward"></i> Darjeeling Tour Excludes-</h2>
        <ul>
          <li><i class="fa-sharp fa-solid fa-circle-xmark"></i> Train Meals.</li>
          <li><i class="fa-sharp fa-solid fa-circle-xmark"></i> Personal expenditure.</li>
          <li><i class="fa-sharp fa-solid fa-circle-xmark"></i> Coolie Charge.</li>
          <li><i class="fa-sharp fa-solid fa-circle-xmark"></i> Still or Video Camera Charges.</li>
          <li><i class="fa-sharp fa-solid fa-circle-xmark"></i> Entry fees.</li>
        </ul>
      </div>

      <div class="pac-dt">
        <h2><i class="fa-solid fa-forward"></i> Darjeeling tour activities -</h2>
      </div>

      <div class="container1">
        <div class="image1"> <img src="Darjeeling.png" alt="image">
          <div class="img-cont">
            <h3>Toytrain Ride</h3>
          </div>
        </div>
        <div class="image1"><img src="p1.jpeg" alt="image">
          <div class="img-cont">
            <h3>Paragliding</h3>
          </div>
        </div>
        <div class="image1"><img src="Rafting.jpg" alt="image">
          <div class="img-cont">
            <h3>River Rafting</h3>
          </div>
        </div>
        <div class="image1"><img src="d7.jpeg" alt="image">
          <div class="img-cont">
            <h3>Rock Climbing</h3>
          </div>
        </div>
      </div>



      <div>
        <div class="pac-dt">
          <h2><i class="fa-solid fa-forward"></i> Darjeeling tour plan -</h2>
        </div>

        <div class="day">
          <h2><i class="fa-solid fa-map-location-dot"></i> Day 1</h2>
          <p>Departure from Sealdah Railway Station -
            Activities : Meet & greet with tour Manager/ Guide at Sealdah Railway station, Catch Uttarbanga Express or
            similar train, overnight Journey at the train. <br><br>

            On the very first day of our Darjeeling tour, we are going to meet at the Sealdah Railway Station, and from
            there, we will board our train. It will be a matter of availability. <br><br>

            Between Darjeeling Mail or Uttarbanga Express or any other similar train, we will board one as per the
            availability and head towards New Jalpaiguri Station. <br><br>

            We will pass the night in Train; however, the food that you are going to have for this day is excluded from
            the overall package.<br><br><br><br>
          </p>
        </div>




        <div class="day">
          <h2><i class="fa-solid fa-map-location-dot"></i> Day 2</h2>
          <p>Kalimpong arrival -
            Activities : Reach Jalpaiguri Station, meet with others co-passenger who are joining us from different
            states. <br><br>

            Visit Sevoke Kalibari, Cactus point, Army Golf Course, Dr, Graham's home, Mangal Dham pranami temple and
            Stay overnight at Kalimpong hotel. <br><br>

            On the following day morning, we will be arriving at New Jalpaiguri Station. <br><br>

            Here, we will hurdle up again and meet with our drivers. They will take us up the mountain towards
            Kalimpong. <br><br>

            This is how our journey will start, and you will start experiencing the breathtaking visuals of the
            mountains. But don’t be alarmed, we will not deprive you of sightseeing either. <br><br>

            On our way, we are going to cross the Sevoke Kalibari on Sevoke Road. This is a very famous temple on the
            banks of Teesta and is surrounded by lush greenery and a beautiful hillside. You can offer your prayers here
            and wish good luck for the rest of the journey. <br><br>

            Our Darjeeling tour plan is made in such a way that you will get nothing but the very best of what the road
            has to offer. <br><br>

            On our way to the hip and happening town of Darjeeling, you will be able to witness some breathtaking and
            serene sights of beautiful lofty mountains and even the majestic presence of the mighty Teesta River.
            <br><br>

            On our way, we will be covering about 75km, and then we will check into the hotel. All the arrangements will
            be made prior to our arrival. So that you can check in to the hotel without any hassle and freshen up to get
            rid of the fatigue of the journey. <br><br>

            After lunch start for Kalimpong sightseeing. For all the lovers of Golf, we have a visit to Army Golf
            Course. Plus, we will also go to Pine view nursery, Dr. Graham's home, and Mangal Dham Pranami Temple.
            <br><br>

            We will stay the night at Kalimpong Hotel. <br><br><br><br>
          </p>
        </div>

        <div class="day">
          <h2><i class="fa-solid fa-map-location-dot"></i> Day 3</h2>
          <p>Arrival at Darjeeling : <br>
            Activities - See Delo park, Stay overnight at hotel.<br><br><br><br>

            On the next day of our Darjeeling trip, we will get up early in the morning and have some wholesome and
            lip-smacking breakfast.<br><br>

            After that, we will start our journey to explore all the significant nearby destinations around Kalimpong.
            We will be visiting all the famous Monasteries and Hanuman Tak.<br><br>

            Here you can visit the famous Delo Park, Cactus Garden, and Morgan House too. Do you have a knack for and
            deep interest in adventure sports? Then this visit will give you a memory of a lifetime.<br><br>

            In this package, we will also offer you a chance to go Paragliding. Imagine how thrilling that can be! If
            you are interested in science, then we have a visit to the Science Centre as well.<br><br>

            But there’s more in our Darjeeling package tour, especially in our Darjeeling honeymoon package
            trip.<br><br>

            Lastly, we will visit the Durpin Monastery, also known as the Zang Dhok Palri Phodang Monastery, and enjoy
            the sunset on Durpin Dara Hill.<br><br>

            With this, our sightseeing will be done, and we will return to Hotel.<br><br>

            We have kept the beautiful evening free for you to gather your strength back. Hence, we will stay the night
            at Kalimpong.<br><br><br><br>
          </p>
        </div>


        <div class="day">
          <h2><i class="fa-solid fa-map-location-dot"></i> Day 4</h2>
          <p>Sightseeing at Darjeeling : <br>
            Activities - Go to Tiger hill, Visit Japani temple, Enjoy at Rock Garden <br><br><br><br>

            On the fourth day of our Darjeeling tour package, we will visit Peshok View Point and Lamahata, and then
            Darjeeling. We will start our day with a healthy and delicious breakfast.<br><br>

            After that, we will drive to Peshok Viewpoint and Lamahata, and via this route, we will reach Darjeeling.
            Our Darjeeling tour plan will never leave you dissatisfied in terms of natural scenic beauty. In this
            Darjeeling trip, you will be witnessing a jewel in the crown of the Eastern Himalayas. Here, there is
            nothing but mesmerizing beauty all around. This place offers breathtaking views of Mount Everest, Mount
            Kanchendzonga, and the rest of the spectacular Himalayan range. If you are traveling to the snow-clad
            mountains for the first time or with your family, then our Darjeeling holiday experience will be etched in
            your mind forever. Also, if you are traveling with your newly-wed wife or the love of your life, we have the
            best Darjeeling tour package for couples at the minimum Darjeeling honeymoon package cost. With us, you
            don’t have to worry about the Darjeeling sightseeing cost as everything will be included in the
            package.<br><br>

            After visiting the viewpoint, we will have another important place on the way. I am talking about the famous
            Triveni viewpoint. Triveni is actually the confluence of rivers Teesta and Rangeet. In our Darjeeling local
            sightseeing plan, we will also allow you to have some flavour of Lamahatta. This is also a very famous
            place, and there is more than one monument to behold.<br><br>

            First, we will visit the Seductive Garden, a great place to click some amazing photographs and cherish the
            memories forever. Next up, we will go for the Watch Tower. From here, you can enjoy a wonderful top-view of
            the entire area.<br><br>

            Then we will see the beautiful blossoms of Orchid. You can also see the famous prayer flags waving along
            with the direction of the wind. All of this makes this place ideal, amidst the nature to take a break from a
            3-hour long journey. Here you can relax a bit, unwind and gather some strength and energy for the rest of
            the trip. Plus, it’s a great place to click some photos with your family.<br><br>

            We will have some delicious lunch on the way.<br><br>

            After that, upon reaching Darjeeling, we will check in to the hotel. Everything will be prearranged for you.
            You can freshen up, relax and unwind yourself from the fatigue of the journey.<br><br>

            Since you will have some free time now, you can stroll to Mall. There is a beautiful market there, and you
            can shop for some amazing things for yourself and your near and dear ones.<br><br>

            We will stay the night at the hotel in Darjeeling.<br><br><br><br>
          </p>
        </div>

        <div class="day">
          <h2><i class="fa-solid fa-map-location-dot"></i> Day 5</h2>
          <p>Excursion at Darjeeling : <br>
            Activities - Visit zoo and H.M.I, Stay at Darjeeling.<br><br><br><br>

            On the following day of our Darjeeling tour plan, we will start everything quite early. At around 3:45 AM,
            we will drive to 8000 feet / 2440 meters through primitive forests of oak, magnolia to the famous Tiger
            Hill. You all have probably heard about the majestic view of sunrise from Tiger Hill. It is the dream of
            every photographer.<br><br>

            If the weather stays in our favour, you will be able to view this amazing sunrise over Mt. Kanchendzonga
            Peak. This is one of the key attractions of our Darjeeling tour package from Kolkata and Darjeeling tour in
            general. But it doesn’t end there.<br><br>

            On our way back, we will visit the mesmerizing Ghoom Monastery, another famous monastery of the hills. We
            will also see the Batasia Loop on our way back to the hotel.<br><br>

            Now, breakfast will be served, and after taking some rest, we will prepare to go for visiting the 7 points
            or seven attractive destinations which covers everything from The Himalayan Mountaineering Institute, PNZ
            Zoological Park, Tenzing Rock, Tibetan Self Help Refugee Centre, Tea Garden, Japanese Temple, Peace Pagoda,
            and Ropeway.<br><br>

            Please note that the charges of Ropeway must be paid by guests directly. After that, we will return to the
            hotel and have our lunch.<br><br>

            We will visit the Tea Garden from outside. Please note that some of these venues remain closed on certain
            days of the week. But we will try to incorporate the itinerary in such a way that you will be able to see
            all of them.<br><br>

            In the evening, explore yourself, you are free to stroll around the area, and we will be staying the night
            at the Hotel in Darjeeling.<br><br>

            Kindly note that the early morning Tiger Hill visit is dependent on token availability as well. If Tiger
            hill's visit is not confirmed, we will do it in the evening time, if we can manage some
            time.<br><br><br><br>
          </p>
        </div>

        <div class="day">
          <h2><i class="fa-solid fa-map-location-dot"></i> Day 6</h2>
          <p>Departure from New Jalpaiguri. <br>
            Activities - Breakfast and lunch at New Jalpaiguri, Catch Uttarbanga Express. <br><br>

            On the 6th day of our Darjeeling trip plan, we will visit Mirik Lake, Indo-Nepal Border, Simana View Point &
            Tea Garden. All of these mind-boggling places will offer you outstanding natural and scenic beauty.<br><br>

            We will have lunch on the way.<br><br>

            Then will travel towards NJP Railway station to board Uttarbanga, Darjeeling Mail, or a similar train as per
            train ticket availability.<br><br>

            We will spend the night stay on the train.<br><br><br><br>
          </p>
        </div>

        <div class="day">
          <h2><i class="fa-solid fa-map-location-dot"></i> Day 7</h2>
          <p>Sealdah arrival. <br>
            { Activities - Arrive at Sealdah }<br><br><br><br>

            On the 7th and last day of our Darjeeling tour, we will reach Sealdah Railway Station and end our trip full
            of sweet memories.<br><br><br><br>
          </p>
        </div>
      </div>

    </div>



    <div class="r">
      <h2>BOOK NOW</h2>

      <form method="POST">
        <div class="name"><input name="name" type="text" class="feedback-input" placeholder="Enter Your Name" /></div>
        <div class="input-box"><input name="email" type="text" class="feedback-input" placeholder="Enter Your Email" />
          <input style="float:right" name="phone" type="tel" class="feedback-input" placeholder="Enter Your Phone No" />
        </div>
        <div class="input-box"><input name="adt" type="number" class="feedback-input" placeholder="Total Adults" />
          <input style="float:right" name="chd" type="number" class="feedback-input" placeholder="Total Children" />
        </div>


        <div class="name"><select name="tour" class="feedback-input">
            <option>Darjeeling Tour</option>
          </select>
        </div>

        <div class="input-box">
          <select name="sltpck" class="feedback-input">
            <option>Select Package</option>
            <option>6 Night 7 Days</option>

          </select>


          <select name="sltdt" class="feedback-input" style="float: right;">
            <option>Select Tour Date</option>
            <option>21st Jan</option>
            <option>23rd Jan</option>
            <option>27th Jan</option>

            <option>18th Feb</option>
            <option>21st Feb</option>
            <option>14th Feb</option>

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
            <option>16th Oct</option>

            <option>12th Nov</option>
            <option>18th Nov</option>
            <option>26th Nov</option>

            <option>19th Dec</option>
            <option>24th Dec</option>
            <option>29th Dec</option>

          </select>

        </div>


        <div class="name"> <textarea name="address" class="feedback-input" id="add" placeholder="Enter Your Address"></textarea></div>



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
        Premier domestic tour agency in Kolkata, offering personalized travel experiences and exceptional services.
      </p>

      <div class="footer-icons">

        <a href="#" style="background-color: white;"><i class="fa-brands fa-facebook-f" style="color:#4267B2"></i></a>
        <a href="#" style="background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); ;"><i class="fa-brands fa-instagram"></i></a>
        <a href="#" style="background-color: white;"><i class="fa-brands fa-twitter" style="color:#1DA1F2"></i></a>
        <a href="#" style="background-color: green;"><i class="fa-brands fa-whatsapp"></i></a>


      </div>

    </div>


  </footer>

  <script src="darjeeling.js"></script>
</body>

</html>