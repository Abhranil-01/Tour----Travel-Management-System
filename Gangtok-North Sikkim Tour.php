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
		header('location:Gangtok-North Sikkim Tour.php');
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
    <link rel="stylesheet" href="Gangtok-North Sikkim Tour.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />



    <title>Gangtok-North Sikkim Tour</title>
</head>

<body>
<header>
    <a href="#" class="brand">TRAVELX</a>
    <div class="menu-btn"></div>
    <div class="navigation">
        <a  href="home.php">Home</a>
        <a href="About.php">About</a>
        <a href="tourpack.php">Tour Packages</a>
        <a href="contact.php">Contact</a>
    </div>
    <button class="logbtn"><a href="logout.php">Logout </a></button>
    <!--<div class="user"><?php echo $_SESSION['name'];?></div>-->
  
  </header>
    <section class="home">
        <img class="image-slide active" src="s5.jpg" alt="image" />
        <img class="image-slide" src="s15.jpeg" alt="image" />
        <img class="image-slide" src="s13.jpeg" alt="image" />
        <img class="image-slide" src="s11.jpeg" alt="image" />
        <img class="image-slide" src="s1.jpg" alt="image" />
        <img class="image-slide" src="s3.jpg" alt="image" />





        <div class="content">
            <h1>Gangtok-North Sikkim</h1>
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
                <h2>Gangtok-North Sikkim Tour</h2>
            </div>

            <div class="pragraph">
                <p>
                    Gangtok tour Package - It is almost next to impossible that people staying in INDIA and not visiting
                    Gangtok. <br><br>

                    Yes, Gangtok the tourist place the capital of Sikkim, and also the municipality. <br><br>

                    Gangtok, the place of the Enchey monastery the Buddhist pilgrimage which made Gangtok one of the
                    most attractive destination point for trvel frek. <br><br>

                    Gangtok has its own diversity for we find there three distinct ethnicities like Nepalese, Lepchas
                    and Bhutia. Gangtok was a popular stopover in the trade route between Lhasa in Tibet and Kolkata.
                    Sikkim tourism and Sikkim tour packages have been flourishing rapidly because of the presence of
                    Gangtok along with the two streams Roro Chu and Ranikhola flowing. <br><br>

                    If you are wondering why you did not visit Gangtok the tourist place then now it is time you must go
                    for the Gangtok tour package from Kolkata. <br><br>

                    Gangtok is a place where you will find the mighty river Teesta flowing and the terrific sound of the
                    fast-flowing river will instantly rejuvenate you. <br><br>

                    The most amazing part of visiting the Sikkim tourism is, Gangtok has become a place apt for eco
                    tourism and that will, in fact, urge you to participate in conserving nature. <br><br>

                    You are desiring to try the mountaineering, trekking, river rafting and so more? <br><br>

                    Gangtok is the place for you then. Now, let us get straight to the itinerary for knowing the Gangtok
                    tour package more vividly. <br><br>

                </p>
            </div>
            <div class="container">
                <div class="image"><img src="s6.jpg" alt="image"></div>
                <div class="image"><img src="s2.jpg" alt="image"></div>
                <div class="image"><img src="s4.jpg" alt="image"></div>
                <div class="image"><img src="s14.jpeg" alt="image"></div>
            </div>

           

            <div class="pac-dt">
                <h2><i class="fa-solid fa-forward"></i> Gangtok-North Sikkim Tour Duration -</h2>
                <ul>
                    <li><i class="fa-solid fa-clock"></i> 7 Night 8 Days</li>

                </ul>
            </div>


            <div class="pac-dt">
                <h2><i class="fa-solid fa-forward"></i> Gangtok-North Sikkim Tour Package Cost-</h2>
                <ul>
                    <li><i class="fa-solid fa-indian-rupee-sign"></i> 20000/- Adults.</li>
                    <li><i class="fa-solid fa-indian-rupee-sign"></i> 12000/- Below 8 Years.</li>
                    <li><i class="fa-solid fa-indian-rupee-sign"></i> 6000/- Below 4 Years with seat.</li>
                    <li><i class="fa-solid fa-indian-rupee-sign"></i> Free for Below 4 Years without seat.</li>

                </ul>
            </div>


            <div class="pac-dt">
                <h2><i class="fa-solid fa-forward"></i> Gangtok-North Sikkim Trip Covers-</h2>
                <ul>
                    <li><i class="fa-solid fa-mountain-sun"></i> Gangtok</li>
                    <li><i class="fa-solid fa-mountain-sun"></i> New Baba Mandir</li>
                    <li><i class="fa-solid fa-mountain-sun"></i> Tshangu Lake</li>
                    <li><i class="fa-solid fa-mountain-sun"></i> Rumtek Monastery</li>
                    <li><i class="fa-solid fa-mountain-sun"></i> Lachung</li>
                    <li><i class="fa-solid fa-mountain-sun"></i> Lachen</li>
                    <li><i class="fa-solid fa-mountain-sun"></i> Gurudongmar Lake</li>
                    <li><i class="fa-solid fa-mountain-sun"></i> Zero Point</li>
                    <li><i class="fa-solid fa-mountain-sun"></i> MG Marg</li>
                    <li><i class="fa-solid fa-mountain-sun"></i> Nathula Pass</li>



                </ul>
            </div>

            <div class="pac-dt">
                <h2><i class="fa-solid fa-forward"></i> Gangtok-North Sikkim Tour Includes-</h2>
                <ul>
                    <li><i class="fa-sharp fa-solid fa-circle-check"></i> Sealdah to New Jalipaiguri & New Jalpaiguri to
                        Sealdah SL Class Sleeper Train Fare..
                    </li>
                    <li><i class="fa-sharp fa-solid fa-circle-check"></i> Side Seen By Car mahindra-bulero/ Tata Sumo.
                        (8 Sharing)</li>
                    <li><i class="fa-sharp fa-solid fa-circle-check"></i> Hotel. (Minimum 2 Sharing)</li>
                    <li><i class="fa-sharp fa-solid fa-circle-check"></i> All Meals as per package schedule..</li>

                </ul>
            </div>


            <div class="pac-dt">
                <h2><i class="fa-solid fa-forward"></i> Gangtok-North Sikkim Tour Excludes-</h2>
                <ul>
                    <li><i class="fa-sharp fa-solid fa-circle-xmark"></i> Train Meals.</li>
                    <li><i class="fa-sharp fa-solid fa-circle-xmark"></i> Personal expenditure.</li>
                    <li><i class="fa-sharp fa-solid fa-circle-xmark"></i> Coolie Charge.</li>
                    <li><i class="fa-sharp fa-solid fa-circle-xmark"></i> Still or Video Camera Charges.</li>
                    <li><i class="fa-sharp fa-solid fa-circle-xmark"></i> Entry fees.</li>
                </ul>
            </div>

            <div class="pac-dt">
                <h2><i class="fa-solid fa-forward"></i> Gangtok-North Sikkim Tour Activities -</h2>
            </div>

            <div class="container1">
                <div class="image1"> <img src="g3.jpeg" alt="image">
                    <div class="img-cont">
                        <h3>Cablecar Ride</h3>
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
                <div class="image1"><img src="y1.jpg" alt="image">
                    <div class="img-cont">
                        <h3>Yak Ride</h3>
                    </div>
                </div>
            </div>



            <div>
                <div class="pac-dt">
                    <h2><i class="fa-solid fa-forward"></i> Gangtok-North Sikkim Tour Plan -</h2>
                </div>

                <div class="day">
                    <h2><i class="fa-solid fa-map-location-dot"></i> Day 1</h2>
                    <p>Upon arrival at the Bagdogra Airport/NJP Railway Station, board a hassle-free transfer to
                        Gangtok. <br><br>
                        Don’t forget to capture the picturesque views of the mighty Teesta River on the way. <br><br>
                        Upon reaching Gangtok, check in to the hotel and spend the rest of the day at leisure. <br><br>
                        In the evening, you can visit the MG Marg of Gangtok where you can collect souvenirs and treat
                        your taste buds with authentic Sikkimese cuisine.<br><br>
                        Overnight stay at the hotel in Gangtok.<br><br><br><br>
                    </p>
                </div>




                <div class="day">
                    <h2><i class="fa-solid fa-map-location-dot"></i> Day 2</h2>
                    <p>After a tasty breakfast in the morning, get ready to visit some beautiful locations around
                        Gangtok.<br><br>
                        Begin by visiting the famous glaciated lake - Tsomgo Lake aka Changu Lake which was used to
                        predict the future by the Buddhist monk depending upon its changing colours.<br><br>
                        Following this, you will visit the famous shrine of the Baba Mandir where it is believed that
                        his spirit protects every soldier in the inhospitable high-altitude terrain of the Eastern
                        Himalayas.<br><br>
                        Later, you can also visit Nathula Pass* (closed on Mondays and Tuesdays) which is one of the
                        most crucial passes on the crossroads of the India-China border (at an additional cost).<br><br>
                        Later, return back to Gangtok for an overnight stay.<br><br><br><br>
                    </p>
                </div>

                <div class="day">
                    <h2><i class="fa-solid fa-map-location-dot"></i> Day 3</h2>
                    <p>Wake up to a beautiful morning in the mountains and have a delicious breakfast at the hotel.
                        <br><br>
                        Get ready and board your transfers to Lachen, a picturesque hamlet in North Sikkim. <br><br>
                        Pass a number of small waterfalls on the way as you drive on the North Sikkim Highway. <br><br>
                        The road to Lachen takes you through the beautiful Chungthang town, near Kanchenjunga National
                        Park where you can see the confluence of 2 Rivers Lachen Chu and Lachung Chu. <br><br>
                        After arriving in Lachen, check in to your hotel and spend the rest of the day at leisure
                        admiring the surroundings around you. <br><br>
                        Overnight stay and dinner in Lachen. <br><br>
                    </p>
                </div>


                <div class="day">
                    <h2><i class="fa-solid fa-map-location-dot"></i> Day 4</h2>
                    <p>Start your day by waking around the snow capped mountains and have a hearty breakfast (at the
                        stay or on the way at Thangu Village depending on the time you depart). <br><br>
                        Begin your day by visiting the glittering Gurudongmar lake - The Highest Altitude Accessible
                        Lake named after guru Padmasambhava, who is believed to have traversed this region during his
                        visit to Tibet.<br><br>
                        The lake is enclosed with snow clad mountains all around and is a major source of Teesta
                        river.<br><br>
                        Spend some time admring the colours of the lake and then start your journey back to Lachen,
                        where you will have your lunch.<br><br>
                        Further, hit the roads as you will start your journey to Lachung - one of the most pretty
                        settlements of Sikkim.<br><br>
                        On the way you will pass by the Bhim Nala waterfalls - one of the highest waterfalls in
                        Sikkim.<br><br>
                        If time permits stop by the holy rock at Chungthang that bears a footprint of Guru
                        Padmasambhava.<br><br>
                        Reach Lachung and have your dinner.<br><br>
                        Overnight stay in Lachung.<br><br><br><br>
                    </p>
                </div>

                <div class="day">
                    <h2><i class="fa-solid fa-map-location-dot"></i> Day 5</h2>
                    <p>Yumthang Valley, Zero Point - Yumthang valley: The name ‘Yumthang’ means ‘valley of flowers’ and
                        now we can obviously understand what is this North Sikkim tour place be like. The valley is full
                        of rhododendrons and one can imagine what the scene looks like. The flowers bloom during the
                        months of March to May. The place is filled with red,pink,blue and purple flowers all blissful
                        in nature. There is a natural hot spring named as ‘Yumthang Hot Spring’ and here because of the
                        presence of sulphur people can take a soothing bath and heal all their pain from their body. In
                        a chilled weather, this warm shower will be like a blessing. Near Yumthang in Sikkim, there are
                        two rivers namely, Yumthang Chu and Puniya Chu which are perfect for fishing purposes.
                        <br><br><br><br>

                        ZERO POINT: Visiting the last juncture of the Gangtok tourist spots and that is Zero point in
                        Sikkim. Now, why the name Zero Point? Well, this point is the last stop in the civilian roadway
                        and you cannot drive any further ahead. It is 23 kilometres from Yumthang with an altitude of
                        15,000 feet. Another amazing fact: China border is just a short distance away from here but we
                        are not allowed to go to a sad part. This is a surprising place indeed because as it is told if
                        you work hard you will get reward eventually and so is this place. The path is unreliable but
                        the result is very fascinating because you will get to witness three rivers’ amalgamation along
                        with the aerial mountains covered with snow and also some eye soothing scenes. Zero Point in
                        Sikkim place is deprived of vegetation though one can only see some stretches of grassy land
                        during the melting of snow. After the whole day’s trip, we will get back to Gangtok. The night
                        will be spent at Gangtok’s hotel. <br><br>
                    </p>
                </div>

                <div class="day">
                    <h2><i class="fa-solid fa-map-location-dot"></i> Day 6</h2>
                    <p>Rumtek Monastery : This one is the greatest and largest monasteries inGangtok tourism in Sikkim
                        and best places to visit in Gangtok. It is the dwelling place for most of the monks and here
                        they also perform the rituals and practices of the Karma Kagyu lineage. 24 km away from Gangtok,
                        this monastery is a quintessence of the pristineBuddhist architecture. Another thrill of this
                        part of Gangtok sightseeing is, you will get to walk uphill for about half a kilometre to reach
                        the main monastery. Get a panoramic view of Gangtok from the opposite hill from Rumtek.
                        <br><br><br><br>

                        Hanuman Tok: your craving for seeing the Kanchenjanga has come to an end because this Hanuman
                        Tok is the place for it. Not only this is Lord Hanuman’s temple but also the serenity that you
                        will get 7,200 ft. above is something different. It is told that Lord Hanuman rested in that
                        place while he was carrying the sanjeevani herbs for Laxman. Also, it is this place among the
                        Gangtoksightseeing is the one where wishes are fulfilled. What else do we need? <br><br><br><br>

                        Ganesh Tok: this is a place for the divine Lord Ganesha and also this 6,500 ft. high altitude
                        place is an epitome of beauty itself for the whole Gangtok town and the rolling hills and the
                        snow-capped mountains can be viewed from here. <br><br><br><br>

                        Enchey Monastery: The ‘solitary temple’ as this place is popularly called is a 200 years old
                        antique monastery and home to 90 monks belonging to the Nyingma sect. Buddha, Loketeswara and
                        Guru Padmasambhava are the three major deities worshipped here. <br><br><br><br>

                        Bakthang Waterfall: This waterfall is a fantastic stopover during travelling towards Tashi
                        viewpoint or returning. This waterfall though doesn’t comprise of a great height but a great
                        width. The commencement of the water is from Ratey Chu. This place is perfect for taking some
                        good pictures and a momentary rest. <br><br><br><br>

                        Chorten Stupa: You can mark this stupa instantly by seeing the golden stupa at the top. This
                        stupa is considered one of the most significant stupas of Sikkim. Apart from all these wonderful
                        attraction points, you will get to visit the flower exhibition centre, travel in ropeways and
                        more. <br><br><br><br>
                    </p>
                </div>


                <div class="day">
                    <h2><i class="fa-solid fa-map-location-dot"></i> Day 7</h2>
                    <p>RETURNING BACK - thus the trip of the Sikkim itinerary ends well and we will again head back to
                        our hometowns and place of residing with smiles on our faces after the Gangtok tour package. The
                        return journey will initiate by a small car which will direct you all towards NJP station with a
                        10 person sharing accommodation. Further, you all will quench your hunger by having lunch on the
                        way. The train journey will then commence from NJP to Sealdah. <br><br><br><br>
                    </p>
                </div>

                <div class="day">
                    <h2><i class="fa-solid fa-map-location-dot"></i> Day 8</h2>
                    <p>LANDING IN KOLKATA - Within 9 am the following day you all will reach Sealdah railway station and
                        hence it is a blissful end to our journey. <br><br><br><br>

                        GURUDONGMAR LAKE Lake from Gangtok is a place among Sikkim tourist places which is considered
                        one of the highest lakes in the world. It is situated on the northern side of Kanchenjunga range
                        and is encircled by snow-capped mountains. The water is frozen during the winters except for one
                        part which the devotees consider to be sanctified. The source of river Teesta is this
                        Gurudongmar Lake. It is located very close to the Tibet border. If the tourists wish to visit
                        this lake we will add a visit to Gurudongmar Lake from Gangtok accordingly. The
                        Yumthang-Gurudongmar package tour cost is also quite affordable and won’t be heavy on the
                        pockets. <br><br><br><br>
                    </p>
                </div>


            </div>

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
                <option>Gangtok-North Sikkim Tour</option>
                </select>
                </div>
            
            <div class="input-box">
              <select name="sltpck" class="feedback-input">
                <option>Select Package</option>
                <option>7 Night 8 Days</option>
              
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

                <a href="#" style="background-color: white;"><i class="fa-brands fa-facebook-f"
                        style="color:#4267B2"></i></a>
                <a href="#"
                    style="background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); ;"><i
                        class="fa-brands fa-instagram"></i></a>
                <a href="#" style="background-color: white;"><i class="fa-brands fa-twitter"
                        style="color:#1DA1F2"></i></a>
                <a href="#" style="background-color: green;"><i class="fa-brands fa-whatsapp"></i></a>


            </div>

        </div>


    </footer>

    <script src="Gangtok-North Sikkim Tour.js"></script>
</body>

</html>