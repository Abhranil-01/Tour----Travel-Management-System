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
        
		header('location:ChardhamTour.php');
        ?>
        <script>
            alert("Booked successfully");
        </script>
    <?php
        
     
	}
}

 ?>
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
    <link rel="stylesheet" href="ChardhamTour.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />



    <title>Chardham Tour</title>
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
        <img class="image-slide active" src="kedarnath1.jpg" alt="image" />
        <img class="image-slide" src="h1-D4aenmGAV-transformed.jpeg" alt="image" />
        <img class="image-slide" src="rudra1.jpeg" alt="image" />
        <img class="image-slide" src="b1.jpeg" alt="image" />
        <img class="image-slide" src="u1.jpeg" alt="image" />
        <img class="image-slide" src="r1.jpeg" alt="image" />





        <div class="content">
            <h1>Chardham</h1>
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
                <h2>Chardham Tour</h2>
            </div>

            <div class="pragraph">
                <p>
                    A Brief History about the Char Dham of Uttarakhand <br><br>
                    Uttarakhand is known as Dev Bhoomi, literally translated as 'Land of Gods'. The Char Dham of
                    Uttarakhand, which is also referred to as the Chota Char Dham attracts millions of Hindu devotees
                    and spiritual seekers to soak in the spiritual side of the country and also to get enlightenment.<br><br>

                    Talking about the history of the Char Dham of Uttarakhand, then these four holy sites, which include
                    Badrinath, Kedarnath, Gangotri, and Yamunotri are still not acknowledged that how and when they got
                    associated in a pilgrimage loop synchronically. Each of the holy sites has its own mythological
                    history and legends. But possibly it is the prominence and spiritualism, which made these four holy
                    sites a sacred place and now thousands of devotees from all around the world have become a part of
                    it.<br><br>

                    However, it is believed that a great Hindu philosopher and reformer Adi Shankaracharya initiated the
                    4 Dham Yatra in an endeavor to strengthen the Hindu religion during the 8th century. Before the
                    Indo-China war of 1962, visiting these four sacred sites was an arduous journey due to the steep and
                    rugged trails, only few travelers like saints, and altruists with their group were able to reach
                    these 4 holy sites. But after the war, India started extensive efforts into developing means of more
                    reliable connectivity at border areas. Now visiting these holy sites are enticing and engaging.<br><br><br><br>

                    Kedarnath<br><br>
                    Located in the Rudraprayag district of the Garhwal region in Uttarakhand, Kedarnath is one of the
                    holiest sites and highly revered among the Hindus. Kedarnath temple is dedicated to Lord Shiva and
                    also one of the most important Dham among Panch Kedar. Perched at an altitude of about 3586 meters
                    with a backdrop of mighty Himalayas, Kedarnath is also one of the twelve Jyotirlingas of Lord Shiva.<br><br><br><br>

                    Badrinath<br><br>
                    Badrinath is one of the four sites and one of the most famous pilgrimage places in the country. It
                    is situated at an altitude of about 3,133 meters amidst the two beautiful mountains Nar and Narayan.
                    Badrinath is the only shrine that is part of both Chota and the main Char Dham of India. Badrinath
                    is one of the pre-eminent pilgrimage places among Hindus, the temple is dedicated to Lord Vishnu.
                    Badrinath Temple is a beauty to behold, the temple has a height of around 15 meters and the main
                    deity inside the temple is Lord Vishnu.<br><br><br><br>

                    Yamunotri<br><br>
                    Located at an altitude of about 3185 meters above sea level, on the western side of the Garhwal
                    region, the Yamunotri temple is dedicated to Goddess Yamuna and renowned for its hot spring. It was
                    built in the 19th century by Maharani Gularia of Jaipur and was demolished twice in the present
                    century and rebuilt again.<br><br><br><br>

                    Gangotri<br><br>
                    The original Gangotri Temple is an old 18th-century temple built of white marble located on the
                    banks of River Bhagirathi. Built by the Nepalese Gorkha General Amar Singh Thapa. The temple is
                    devoted to the River Goddess and the origin of the holy river is at Gaumukh set in the Gangotri
                    glacier. It is famous for its ancient shrines and religious significance.<br><br><br><br>

                    Why to be a Part of Sacred Pilgrimage Yatras?<br><br>
                    The holy yatra is also called 'Teerth Yatra', devotees from various states aspire to be a part of
                    this holy pilgrimage once in a lifetime. According to Hindu mythology, it is believed that being a
                    part of this holy yatra opens the gates of salvation by washing away all the sins of a lifetime. It
                    is also believed that after completing this holy yatra one will also attain absolute calmness of
                    soul.<br><br><br><br>

                    When to visit for Chardham Yatra<br><br>
                    The best time to embark on the spiritual journey of Chota Char Dham or the Char Dham yatra of
                    Uttarakhand is from April, May, and the first half of June. Between these months you can easily do
                    the tour of four holy sites, as the temperature remains pleasant. It is suggested not to make a plan
                    for the chardham yatra at the time of monsoon season, as there is an extreme threat of landslides,
                    which can hinder your plan. So it is better to avoid planning your Char Dham yatra during the
                    monsoon season.<br><br><br><br>

                    How can you do your Chardham Yatra?<br><br><br><br>
                    To be a part of Chardham yatra visit the page of - All you Need to Know About Chardham Yatra
                    Registration in 2023. You can easily get detailed information about the registration process and
                    other details, which will help you to enjoy your holy yatra conveniently.<br><br><br><br>

                    Chardham Yatra Route <br><br>
                    Traditionally, the Chardham yatra is undertaken from the west to the east, thus, the yatra starts
                    from Yamunotri, then proceeding to Gangotri, and finally to Kedarnath and Badrinath. Pilgrims
                    traditionally first visit Yamunotri and Gangotri and bring with them the holy waters from the
                    sources of the rivers Yamuna and Ganga and offer abhishekams to Kedareshwara. Char Dhams of
                    Uttarakhand is also known as Chota Char Dham of India. <br><br><br><br>

                    

                    What is the total cost of Chardham Yatra?<br><br>
                    The cost for Chardham Yatra starts from 32000 per person. However, it all depends on your itinerary.<br><br><br><br>

                    Are you looking for Chardham Yatra packages?<br><br>
                    If you are looking to start your spiritual journey, then book our well-designed Chardham Yatra
                    packages to soak in spirituality. Seek the blessing of the Supreme Being, along with enjoying the
                    enchanting natural beauty. Our tour packages can be customized as per your requirements. It also
                    comes with comfortable accommodation, delish meals, sacred Darshan, and great sightseeing.<br><br><br><br>

                    The Best Places to visit during Chardham Yatra<br><br>
                    Places such as Har ki Pauri, Rishikesh, Mana Village, Vasudhara Falls, Madhyamaheshwar Temple,
                    Kalimath, Chandrashila, Surya Kund, and Saptrishi Kund are some of the must-visit places during your
                    Chardham Yatra. To get detailed information about the best places to visit during Chardham Yatra all
                    you need to visit the page - These Places You Shouldn’t Miss In Char Dham Yatra.<br><br><br><br>

                    Useful Tips for the Char Dham<br><br>
                    Yatra Keep your necessary medicines with you.<br>
                    Know the best time before visiting.<br>
                    Try to carry dry packaged food, and fruits.<br>
                    Avoid carrying or consuming alcohol on this sacred journey.<br>
                    Keep a small diary to note important things.<br>
                    Use your camera carefully.<br>
                    Keep extra batteries and power bank in case of emergency.<br>
                    Keep yourself hydrated and try to consume packaged or boiled.<br>
                    Carry sufficient cash along with the cards.<br><br><br><br>

                </p>
            </div>
            <div class="container">
                <div class="image"><img src="kedarnath2.jpg" alt="image"></div>
                <div class="image"><img src="b2.jpg" alt="image"></div>
                <div class="image"><img src="h2.jpg" alt="image"></div>
                <div class="image"><img src="l2.jpeg" alt="image"></div>
            </div>

           



            <div class="pac-dt">
                <h2><i class="fa-solid fa-forward"></i> Chardham Tour Duration -</h2>
                <ul>
                    <li><i class="fa-solid fa-clock"></i> 11 nights 12 days</li>

                </ul>
            </div>


            <div class="pac-dt">
                <h2><i class="fa-solid fa-forward"></i> Chardham Tour Package Cost-</h2>
                <ul>
                    <li><i class="fa-solid fa-indian-rupee-sign"></i> 20000/- Adults.</li>
                    <li><i class="fa-solid fa-indian-rupee-sign"></i> 12000/- Below 8 Years.</li>
                    <li><i class="fa-solid fa-indian-rupee-sign"></i> 6000/- Below 4 Years with seat.</li>
                    <li><i class="fa-solid fa-indian-rupee-sign"></i> Free for Below 4 Years without seat.</li>

                </ul>
            </div>


            <div class="pac-dt">
                <h2><i class="fa-solid fa-forward"></i> Chardham Trip Covers-</h2>
                <ul>
                <li><i class="fa-solid fa-mountain-sun"></i> Haridwar.</li>
                    <li><i class="fa-solid fa-mountain-sun"></i> Barkot.</li>
                    <li><i class="fa-solid fa-mountain-sun"></i> Uttarkashi.</li>
                    <li><i class="fa-solid fa-mountain-sun"></i> Guptkashi.</li>
                    <li><i class="fa-solid fa-mountain-sun"></i> kedarnath.</li>
                    <li><i class="fa-solid fa-mountain-sun"></i> Badrinath.</li>
                    <li><i class="fa-solid fa-mountain-sun"></i> Ruderpryag.</li>
                    <li><i class="fa-solid fa-mountain-sun"></i> Rishikesh.</li>
                </ul>
            </div>

            <div class="pac-dt">
                <h2><i class="fa-solid fa-forward"></i> Chardham Tour Includes-</h2>
                <ul>
                    <li><i class="fa-sharp fa-solid fa-circle-check"></i> Accommodation on Double Sharing Basis
                    </li>
                    <li><i class="fa-sharp fa-solid fa-circle-check"></i> Breakfast, Lunch, Dinner</li>
                    <li><i class="fa-sharp fa-solid fa-circle-check"></i> sightseeing as per itinerary by private car</li>
                    <li><i class="fa-sharp fa-solid fa-circle-check"></i> Parking & Toll Charges.</li>
                    <li><i class="fa-sharp fa-solid fa-circle-check"></i> All State Entry Taxes & Driver Allowance</li>

                </ul>
            </div>


            <div class="pac-dt">
                <h2><i class="fa-solid fa-forward"></i> Chardham Tour Excludes-</h2>
                <ul>

                    <li><i class="fa-sharp fa-solid fa-circle-xmark"></i> Personal expenditure.</li>
                    <li><i class="fa-sharp fa-solid fa-circle-xmark"></i> Coolie Charge.</li>
                    <li><i class="fa-sharp fa-solid fa-circle-xmark"></i> Still or Video Camera Charges.</li>
                    <li><i class="fa-sharp fa-solid fa-circle-xmark"></i> Entry fees.</li>
                </ul>
            </div>

            <div class="pac-dt">
                <h2><i class="fa-solid fa-forward"></i> Chardham Tour Activities -</h2>
            </div>

            <div class="container1">
                <div class="image1"> <img src="bungee.jpeg" alt="image">
                    <div class="img-cont">
                        <h3>Bungee Jumping</h3>
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
                <div class="image1"><img src="clif.jpg" alt="image">
                    <div class="img-cont">
                        <h3>Cliff Jumping</h3>
                    </div>
                </div>
            </div>



            <div>
                <div class="pac-dt">
                    <h2><i class="fa-solid fa-forward"></i> Chardham Tour Plan -</h2>
                </div>

                <div class="day">
                    <h2><i class="fa-solid fa-map-location-dot"></i> Day 1</h2>
                    <p>Reach Delhi Railway Station from Kolkata/Orissa/Patna/Ranchi & your Tour Starts from Delhi. You
                        can also come to Delhi by Air, in that case, holiday travel team will pick you up from Delhi
                        Airport. Night Stay in the Delhi Hotel. <br><br><br><br>
                    </p>
                </div>




                <div class="day">
                    <h2><i class="fa-solid fa-map-location-dot"></i> Day 2</h2>
                    <p>After break fast drive to Haridwar on arrival transfer to your Hotel. Visit Har-ki-Pauri for
                        Ganga Aarti in evening. Back to your hotel, Overnight stay at Haridwar Hotels. <br><br>

                        Haridwar : Haridwar, lying at the feet of Shiva's hills, i.e., Shivaliks, in the Haridwar
                        district of Uttarakhand,, is a doorway to Chardham Shrines. Suryavanshi prince Bhagirath
                        performed penance here to salvage the souls of his ancestors who had perished due to the curse
                        of sage Kapila. The penance was answered and the river Ganga trickled forth forms Lord Shiva's
                        locks and its bountiful water revived the sixty thousand sons of king Sagara. In the traditional
                        of Bhagirath, devout Hindus stand in the sacred waters here, praying for salvation of their
                        departed elder. It is doorway to
                        the sources of the Ganga and the Yamuna, 3000 to 4500 meters up into the snowy ranges of the
                        central Himalayas . The 'Aarti' worship of the Ganga after sunset and the floating 'dia' (lamp)
                        is a moving ritual.<br><br>

                        Temples & Sight Seeing – Har-ki-Pauri, Chandi Devi & Mansa Devi Temple, Daksha Mahadev Temple,
                        Bilkeshwar Mahadev, Anandmai Ashram, Pawan Dham, Bhooma Niketan, Vaishno Devi Temple,
                        Doodhadhari Temple & Bharat Mata Mandir.<br><br><br><br>
                    </p>
                </div>

                <div class="day">
                    <h2><i class="fa-solid fa-map-location-dot"></i> Day 3</h2>
                    <p>Drive to Barkot via Dehradun & Mussoorie. Enroute visit Kempty Fall and others later drive
                        straight to your Hotel for night halt. <br><br><br><br>
                    </p>
                </div>


                <div class="day">
                    <h2><i class="fa-solid fa-map-location-dot"></i> Day 4</h2>
                    <p>Drive to Hanuman Chatti, from here you have to take local jeeps for Janki chatti (It helps to
                        reduce the trek upto 8 kms), trek start from here to Yamunotri (6kms). Either by walk or by
                        horse or by Doli at own cost. Arr. Yamunotri, One can cook rice by packing it in a cloth and
                        dipping it in the hot water of the hot kund. Pilgrims take this cooked rice home as "Prasad".
                        Here near the temple "Pooja" can be offered to Divya Shila, After taking bath in Jamunabai
                        Kund's warn water and having "Darshan" of pious "Yamunaji" returning to Hanumanchatti. Later
                        drive back to Barkot. Overnight stay at Hotel. <br><br><br><br>
                    </p>
                </div>

                <div class="day">
                    <h2><i class="fa-solid fa-map-location-dot"></i> Day 5</h2>
                    <p>Drive to Uttarkashi via Barkot. Check in Hotel, Later visit Vishwanath Temple .Overnight stay at
                        Uttarkashi Hotel . <br><br>
                        Uttarkashi: Situated at the bank of river Bhagirathi. The temple of Lord Vishwanath is located
                        here where a massive iron trident is erected. The other important temples situated here are
                        Ekadash Rudra, Bhairav, Gyaneshwar and Goddess Kuteti Devi. <br><br><br><br>
                    </p>
                </div>

                <div class="day">
                    <h2><i class="fa-solid fa-map-location-dot"></i> Day 6</h2>
                    <p>We proceed to Gangotri (3048 mts), enroute we enjoy picturesque Harsil village, Bhagirathi River
                        and the most magnificent view of the Himalayas . After Gangotri Darshan we return to Uttarkashi.
                        overnight stay at Uttarkashi. <br><br>

                        Gangotri Temple: The temple, constructed by the Gorkha General Amar Singh Thapa in the 18th
                        Century, is situated on the right bank of Bhagirathi.<br><br>
                        Submerged Shivling: Submerged in the river, this natural rock Shivling is the place where,
                        according to mythology Lord Shiva sat when he received the Ganga in his matted lock. It is
                        visible in winter months when water level decreases.<br><br>
                        Kedar Ganga Sangam: Around 100 Yards from the Ganga Temple flows the river Kedar Ganga. Starting
                        from the Kedar Valley , this river meets the Bhagirathi on its left bank.<br><br><br><br>
                    </p>
                </div>


                <div class="day">
                    <h2><i class="fa-solid fa-map-location-dot"></i> Day 7</h2>
                    <p>Early morning, drive to Rudraprayag via Ghansali. Checkin Hotel Jwalpa Palace at Rudraprayag,Over
                        night stay at Ruderpryag Hotel. <br><br>

                        Rudraprayag: It is the confluence of river Mandakini and river Alaknanda. Temples : Rudranath
                        and Chamunda Devi, Koteshwar Temple (3 Kms).<br><br><br><br>
                    </p>
                </div>

                <div class="day">
                    <h2><i class="fa-solid fa-map-location-dot"></i> Day 8</h2>
                    <p>Morning drive to Gaurikund, Trek start from Gaurikund to Kedarnath (3584 mts) on foot or on by
                        pony / Doli. Tour members should carry personal medicines, heavy woolen, toiletries and clothes
                        for an overnight halt at Kedarnath. Check in Hotel. <br><br>

                        Later visit Kedarnath Temple . Overnight stay at Kedarnath Hotels.<br><br>

                        Gaurikund: At a distance of 5kms from Sonprayag and at an altitude of 1982 meters., one can take
                        bath in the hot water pond here and visit the Gauri Temple . This is the place where Goddess
                        Parvathi meditated to attain Lord Shiva. It is the base for a trek to Kedarnath.<br><br><br><br>
                    </p>
                </div>


                <div class="day">
                    <h2><i class="fa-solid fa-map-location-dot"></i> Day 9</h2>
                    <p>Early morning, after Temple Darshan trek down to Gaurikund. Later, drive to Rudraprayag Checkin
                        Hotel Jwalpa Palace at Rudraprayag. Overnight stay at Ruderpryag Hotels. <br><br><br><br>
                    </p>
                </div>

                <div class="day">
                    <h2><i class="fa-solid fa-map-location-dot"></i> Day 10</h2>
                    <p>Drive to Badrinath via Joshimath. Check in Hotel. Later at evening visit Badrinath Temple for
                        Aarti. Overnight stay. <br><br>

                        Badrinath one of the 'Four Dhams' is one of the most celebrated pilgrimage spots of the country
                        and is situated at an elevation of 3,133 meters, guarded on either side by the two mountain
                        ranges known as Nar & Narayan with the towering Neelkanth Peak providing a splendid backdrop.
                        This revered spot was once carpeted with wild berries. Thus the place got the name "Badri van",
                        meaning "forest of berries". <br><br><br><br>
                    </p>
                </div>

                <div class="day">
                    <h2><i class="fa-solid fa-map-location-dot"></i> Day 11</h2>
                    <p>
                        Early morning, pilgrims after having a bath in the Taptkund have the Darshan of Badrivishal.
                        Brahamakamal is significant for Pinddan Shraddh of ancestors (Pitrus). There are other
                        interesting sight seeing spot like Mana, Vyas Gufa, Maatamoorti, Charanpaduka, Bhimkund and the
                        "Mukh" of the Saraswati River . Just within the three kms of Badrinathjee. Later drive back to
                        Rudraprayag via Joshimath. Check in Hotel. <br><br>

                        Joshimath is situated on the slopes above the confluence of Alaknanda and Dhauliganga. Of the
                        four 'Maths' established by Adi Shankaracharya, Joshimath is in the Badrinath to Joshimath and
                        installed in the temple for people to worship. There are many temples in the township most
                        important is the temple of Nir Singh in commotion of Lord Vishnu. The left arm of this deity is
                        with time and the popular belief holds that the day the the arm completely withers Badrinath
                        valley will cease to exist and the Gods will transfer the residence into the neighboring Niti
                        Valley
                        at Bhavishya Badri. Joshimath is connected by regular bus service to Rishikesh, Haridwar,
                        Badrinath and many other centres in the region.<br><br><br><br>
                    </p>
                </div>




                <div class="day">
                    <h2><i class="fa-solid fa-map-location-dot"></i> Day 12</h2>
                    <p>
                        Morning drive back to Rishikesh. Check in Hotel. Later visit local sightseeing of Rishikesh.
                        Overnight stay. <br><br>

                        Rishikesh, the 'place of sages' is a celebrated spiritual town on the bank of Ganga and is
                        surrounded by Shivalik range of the Himalayas on three sides. It is said that when Raibhya Rishi
                        did hard penances, God appeared by the name of " Hrishikesh " and this area hence firth came to
                        be known as Rishikesh.<br><br>

                        Temples & Sight Seeing – Laxman Jhulla, Ram Jhulla, Triveni Ghat, Bharat Mandir, Shivananda
                        Ashram, Parmarth Ashram.<br><br><br><br>
                    </p>
                </div>

                <div class="day">
                    <h2><i class="fa-solid fa-map-location-dot"></i> Day 13</h2>
                    <p>
                        Drive back to Delhi . On Arr. Delhi , transfer to Railway Station / Airport. Tour Terminate.

                        Catch your Flight Back to Kolkata. <br><br><br><br>
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
            <input style="float:right" name="chd" type="number" class="feedback-input" placeholder="Total Childern" /></div>

            <div class="name"><select name="tour" class="feedback-input">
                <option>Chardham Tour</option>
                </select>
                </div>
         

            <div class="input-box">
              <select name="sltpck" class="feedback-input">
                <option>Select Package</option>
                <option>11 nights 12 days</option>
              
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
                <a href="Contact.php">Contact</a>
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

    <script src="ChardhamTour.js"></script>
</body>

</html>