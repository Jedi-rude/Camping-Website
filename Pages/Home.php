<?php
error_reporting(E_ERROR | E_PARSE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/home.css">  
    <title>Home</title>
</head>
<body>
    <!-- start section of viewer count -->
    
    <?php 
        session_start();
        require('../Auth/user.php');
        require('../database/bookingdatabase.php');
        $CheckUserLogin = Check_Login();
        if($CheckUserLogin) {
            $bookings = get_booking_list($_SESSION['id']);
        }
    ?>
    <script>
        if (!(performance.navigation.type == performance.navigation.TYPE_RELOAD)) {
            fetch("../routes/visitCountServer.php")
                .then(res => res.text())
                .then(text => document.getElementById("visitCount").innerHTML = text)
                .catch(err => console.log(err))
                .finally(() => console.log("AJAX done"));
        }        
    </script>

    <!-- end section of viewer count -->

    <!-- start point of header & navigation section -->
    <header>
        <input type="checkbox" id="check" placeholder="">
        <nav>
            <div class="icon-view-container">
                <div class="icon">GWSC</div>
                <p class="view-count" id="visitCount"><?php echo "Viewers: ".$_SESSION["test"]; ?></p>
            </div>
            <div class="search">
                <input type="search" placeholder="Search here">
                <button class="searchBtn">
                    <img class="btn-img" src="../img/search.png">
                </button>
            </div>
            <ol class="home-nav">
                <li><a class="nav-link" href="../Pages/Attraction.php" accesskey="a">Attraction</a></li>
                <li><a class="nav-link" href="../Pages/Information.php" accesskey="i">Info</a></li>
                <li><a class="nav-link" href="../Pages/pitches.php" accesskey="p" >Availability</a></li>
                <li><a class="nav-link" href="../Pages/Review.php" accesskey="r" >Reviews</a></li>
                <li><a class="nav-link" href="../Pages/Feature.php" accesskey="f" >Features</a></li>
                <li><a class="nav-link" href="../Pages/Contact.php" accesskey="c" >Contact</a></li>
                <?php if($CheckUserLogin == false) { ?>
                    <li><a class="nav-link" href="../Pages/loginform.php" accesskey="l" >Login</a></li>
                <?php } else { ?>
                        <li><button class="nav-link" onclick="accbarToggle()">My Account</button></li>
                <?php } ?>
            </ol>
            <label for="" class="bar">
                <img src="../img/menu.png" id="menu" alt="">
                <div class="small-navbar">
                    <p id="close-navbar">X</p>
                    <ul>
                        <li><a class="nav-link" href="../Pages/Attraction.php" accesskey="a">Attraction</a></li>
                        <li><a class="nav-link" href="../Pages/Information.php" accesskey="i">Info</a></li>
                        <li><a class="nav-link" href="../Pages/pitches.php" accesskey="p" >Availability</a></li>
                        <li><a class="nav-link" href="../Pages/Review.php" accesskey="r" >Reviews</a></li>
                        <li><a class="nav-link" href="../Pages/Feature.php" accesskey="f" >Features</a></li>
                        <li><a class="nav-link" href="../Pages/Contact.php" accesskey="c" >Contact</a></li>
                        <?php if($CheckUserLogin == false) { ?>
                            <li><a class="nav-link" href="../Pages/loginform.php" accesskey="l" >Login</a></li>
                        <?php } else { ?>
                                <li><button class="nav-link" onclick="accbarToggle()">My Account</button></li>
                        <?php } ?>
                    </ul>
                </div>
            </label>
        </nav>
    </header>
    <!-- end point of header & navigation section -->

    <!-- start point of home section -->
    <section class="hero" id="home">
        <div class="container">
            <h2 class="h1 hero-title">Come Our Place to relax and fun</h2> 
            <p class="hero-text">
                spending time in nature and sleeping in a temporary shelter, for one or more days and nights, booking is waiting
            </p>
            <div class="btn-group">
                <button class="btn btn-primary">Learn more</button>
  
                <button class="btn btn-secondary"><a href="#booking" >Book Now</a></button>
            </div>
  
        </div>
    </section>
    <!-- end point of home section -->

    <!-- start point of photo gallery section -->
    <section class="gallery" id="gallery">
        <div class="container">
            <p class="section-subtitle">Photo Gallery</p>
            <h2 class="h2 section-title">Photo's From Travellers</h2>
            <p class="section-text">
                Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum cumque laudantium.
                Sit ornare mollitia tenetur, aptent.
            </p>
            <ul class="gallery-list">
                <li class="gallery-item">
                    <figure class="gallery-image">
                        <img src="../img/swim.jpg" alt="Gallery image">
                    </figure>
                </li>
                <li class="gallery-item">
                    <figure class="gallery-image">
                        <img src="../img/camping5.jpg" alt="Gallery image">
                    </figure>
                </li>
                <li class="gallery-item">
                    <figure class="gallery-image">
                        <img src="../img/swim7.jpg" alt="Gallery image">
                    </figure>
                </li>
                <li class="gallery-item">
                    <figure class="gallery-image">
                        <img src="../img/camping1.jpg" alt="Gallery image">
                    </figure>
                </li>
                <li class="gallery-item">
                    <figure class="gallery-image">
                        <img src="../img/camping4.jpg" alt="Gallery image">
                    </figure>
                </li>
            </ul>
        </div>
    </section>
    <!-- end point of photo gallery section -->
    
    <!-- start point of slider section  -->
    <section class="slider">
        <h2>Wearable Tecnology Category</h2>
        <div class="slide-content">
            <div class="slides">
                <input type="radio" name="slide" id="slide1" checked/>
                <input type="radio" name="slide" id="slide2"/>
                <input type="radio" name="slide" id="slide3"/>
                <input type="radio" name="slide" id="slide4"/>
                <input type="radio" name="slide" id="slide5"/>
                
                <div class="slide s1">
                    <img src="../img/wearable1.jpg" alt="Alt 1"/>
                </div>
                <div class="slide s2">
                    <img src="../img/wearable2.jpg" alt="Alt 1"/>
                </div>
                <div class="slide s3">
                    <img src="../img/wearable3.jpg" alt="Alt 1"/>
                </div>
                <div class="slide s4">
                    <img src="../img/wearable4.jpg" alt="Alt 1"/>
                </div>
                <div class="slide s5">
                    <img src="../img/wearable5.jpg" alt="Alt 1"/>
                </div>
            </div>
            <div class="navigation">
                <label class="bar" for="slide1"></label>
                <label class="bar" for="slide2"></label>
                <label class="bar" for="slide3"></label>
                <label class="bar" for="slide4"></label>
                <label class="bar" for="slide5"></label>
            </div>
        </div>
    </section>
    <!-- end point of slider section  -->
    
    <!-- start point of promotion card section -->
    <section class="section-card">
        <div class="cards-wrapper">
            <div class="card-grid-space">
                <a class="card1 card3">
                    <div>
                        <p>Activities of our camping and swimming area</p>
                    </div>
                </a>
            </div>
            <div class="card-grid-space">
                <a class="card1 card4">
                    <div>
                        <p>Activities of our camping and swimming area</p>
                    </div>
                </a>
            </div>
            <div class="card-grid-space">
                <a class="card1 card5">
                    <div>
                        <p>Activities of our camping and swimming area</p>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- end point of promotion card section -->
    
    <!-- start point of booking section -->
    <section class="book-section" id="booking">
        <form class="booking-form" action="../routes/booking.php" method="post">
            <div class="elem-group">
                <label for="name">Your Name</label>
                <input type="text" id="name" name="visitor_name" placeholder="JordanZaw" pattern=[A-Z\\sa-z]{3,20} required value="<?php if(isset($_SESSION['tmpname'])) {echo $_SESSION['tmpname'];}  ?>">
            </div>
            <div class="elem-group">
                <label for="email">Your E-mail</label>
                <input type="email" id="email" name="visitor_email" placeholder="jordan@email.com" required value="<?php if(isset($_SESSION['tmpemail'])) {echo $_SESSION['tmpemail'];}  ?>">
            </div>
            <div class="elem-group">
                <label for="phone">Your Phone</label>
                <input type="tel" id="phone" name="visitor_phone" placeholder="789-123456789" pattern="[789][0-9]{9}" required value="<?php if(isset($_SESSION['tmpphone'])) {echo $_SESSION['tmpphone'];}  ?>">
            </div>
            <div class="elem-group inlined">
                <label for="person">Persons</label>
                <input type="number" id="person" name="total_persons" placeholder="2" min="1" required value="<?php if(isset($_SESSION['tmpperson'])) {echo $_SESSION['tmpperson'];}  ?>">
            </div>
            <hr>
            <div class="elem-group inlined">
                <label for="checkin-date">Check-in Date</label>
                <input type="date" id="checkin-date" name="checkin" value="<?php if(isset($_SESSION['tmpcheckindate'])) {echo $_SESSION['tmpcheckindate'];} ?>" required>
            </div>
            <div class="elem-group inlined">
                <label for="checkout-date">Check-out Date</label>
                <input type="date" id="checkout-date" name="checkout" value="<?php if(isset($_SESSION['tmpcheckoutdate'])) {echo $_SESSION['tmpcheckoutdate'];} ?>" required >
            </div>
            <hr>
            <div class="elem-group">
                <textarea id="message" name="visitor_message" placeholder="Tell us anything else that might be important." required><?php if(isset($_SESSION['tmpvisitormessage'])) {echo $_SESSION['tmpvisitormessage'];} ?></textarea>
            </div>
            <?php if(isset($_SESSION['error'])) { ?>
                <p class="text-white bg-danger p-3 rounded"> <?php echo $_SESSION['error']; ?></p>
                <?php } ?> 
            <button type="submit" name="Submit">Book The Rooms</button>
        </form>
    </section>
    <!-- end point of booking section -->
    
    <!-- start point of packaging section -->
    <section class="package" id="package">
        <div class="container">
            <p class="section-subtitle">Popular Places</p>
            <p class="section-text">
                Our nearest places offer opportunities for swimming, sunbathing, surfing, and other water sports.
            </p>
            <ul class="package-list">
                <li>
                    <div class="package-card">
                        <figure class="card-banner">
                            <img src="../img/waterfall1.jpg" alt="FOREST GENT waterfall image" loading="lazy">
                        </figure>
                        <div class="card-content">
                            <h3 class="h3 card-title">FOREST GENT waterfall</h3>
                            <p class="card-text">
                                waterfall is a natural phenomenon where water flows over a vertical drop or a series of steep drops
                                in a river or stream. 
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="package-card">
                        <figure class="card-banner">
                            <img src="../img/beach1.jpg" alt="Experience The Great Holiday On Beach" loading="lazy">
                        </figure>
                        <div class="card-content">
                            <h3 class="h3 card-title">Experience The Great Holiday On Beach</h3>
                            <p class="card-text">
                                Beaches are popular destinations for tourists and locals alike. Some beaches are also known for their unique features, such as black sand or pink sand.
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="package-card">
                        <figure class="card-banner">
                            <img src="../img/camping9.jpg" alt="Experience The Great Holiday On Beach" loading="lazy">
                        </figure>
                        <div class="card-content">
                            <h3 class="h3 card-title">Experience The Great Holiday On Beach</h3>
                            <p class="card-text">
                                Beaches are popular destinations for tourists and locals alike. Some beaches are also known for their unique features, such as black sand or pink sand.
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="package-card">
                    <?php
                        $apiKey = "74333c42d4d71f80463117576e549eb6";
                        $cityId = "1273293";
                        $googleApiUrl = "https://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=metric&APPID=" . $apiKey;
                        $ch = curl_init();
                        curl_setopt($ch, CURLOPT_HEADER, 0);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                        curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
                        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                        curl_setopt($ch, CURLOPT_VERBOSE, 0);
                        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                        $response = curl_exec($ch);
                        curl_close($ch);
                        $data = json_decode($response);
                        $currentTime = time();
                        ?>
                        <figure class="card-banner">
                            <img src="../img/weathert.jpg" alt="Experience The Great Holiday On Beach" loading="lazy">
                        </figure>
                        <div class="card-content">
                            <h2><?php echo $data->name; ?> Weather Status</h2>
                            <div class="time">
                                <div><?php echo date("l g:i a", $currentTime); ?></div>
                                <div><?php echo date("jS F, Y",$currentTime); ?></div>
                                <div><?php echo ucwords($data->weather[0]->description); ?></div>
                            </div>
                            <div class="weather-forecast">
                                <?php echo $data->main->temp_max; ?>&deg;C<span class="min-temperature"><?php echo $data->main->temp_min; ?>&deg;C</span>
                            </div>
                            <div class="time">
                                <div>Humidity: <?php echo $data->main->humidity; ?> %</div>
                                <div>Wind: <?php echo $data->wind->speed; ?> km/h</div>
                            </div>
                        </div>
                        
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- end point of packaging section -->


    <!-- start point of map section -->
    <section>
        <div class="map-responsive">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d159067.63735793225!2d-2.755525060531754!3d51.468587330876964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4871836681b3d861%3A0x8ee4b22e4b9ad71f!2sBristol%2C%20UK!5e0!3m2!1sen!2smm!4v1696868150597!5m2!1sen!2smm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	    </div>
    </section>
    <!-- end point of map section -->
    
    <!-- account section start -->
    <div class="account-section">
        <button class="acc-close-btn" onclick="accbarToggle()">X</button>
        <div class="acc-details-container">
            <img class="profile-pic" src="../img/user.png" alt="profile picture">
            <div class="acc-details">
                <h3>
                    Username - <span class="username"><?php if(isset($_SESSION['username'])) { echo $_SESSION['username']; } ?></span>
                </h3>
            </div>
        </div>
        <table class="acc-table" border="0">
            <thead>
                <th> Booking No.</th>
                <th>Check In Date</th>
                <th>Check Out Date</th>
                <th>Delete Record</th>
            </thead>
            <?php foreach($bookings as $booking) { ?>
            <tbody>
                <td><?php echo $booking[0]; ?></td>
                <td><?php echo $booking[5]; ?></td>
                <td><?php echo $booking[6]; ?></td>
                <td><a href="../routes/deletebooking.php/?id=<?php echo $booking[0]; ?>" class="rec-del-btn">Delete</a></td>
            </tbody>
            <?php } ?>
        </table>
        <a href="../routes/logout.php" class="acc-logout-btn">
            Logout
        </a>
    </div>
    <!-- account section end -->

    <!-- start point of footer section -->
    <footer>
        <div class="footer">
            <div class="content">
                <div class="services">
                    <h4>Services</h4>
                    <p><a href="#">Camping Booking</a></p>
                    <p><a href="#">Swimming Booking</a></p>
                    <p><a href="#">Room Reservation</a></p>
                    <p><a href="#">Transportation</a></p>
                    <p><a href="#">Foods & Bars</a></p>
                    <p><a href="#">Other special events</a></p>
                </div>
                <div class="social-media">
                    <h4>Social</h4>
                    <p><a href="https://linkedin.com"><i class="fab fa-linkedin"></i> Linkedin</a></p>
                    <p><a href="https://twitter.com"><i class="fab fa-twitter"></i> Twitter</a></p>
                    <p><a href="https://github.com"><i class="fab fa-github"></i> Github</a></p>
                    <p><a href="https://www.facebook.com"><i class="fab fa-facebook"></i> Facebook</a></p>
                    <p><a href="https://www.instagram.com"><i class="fab fa-instagram"></i> Instagram</a></p>
                    <p><a href="https://www.youtube.com"><i class="fab fa-youtube"></i> Youtube</a></p>
                </div>
                <div class="links">
                    <h4>Quick links</h4>
                    <p><a href="../Pages/Home.php">Home</a></p>
                    <p><a href="../Pages/Information.php">Info</a></p>
                    <p><a href="../Pages/pitches.php">Availability</a></p>
                    <p><a href="../Pages/Review.php">Reviews</a></p>
                    <p><a href="../Pages/Feature.php">Feature</a></p>
                    <p><a href="../Pages/Contact.php">Contact</a></p>
                    <p><a href="../Pages/Attraction.php">Attraction</a></p>
                </div>
                <div class="details">
                    <h4 class="address">Address</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur <br/>
                        adipisicing elit. Cupiditate, qui!
                    </p>
                    <h4 class="mobile">Mobile</h4>
                    <p><a href="#">0123456789</a></p>
                    <h4 class="mail">Email</h4>
                    <p><a href="#">gwsc@outlook.com</a></p>
                    <h4 class="mail">Copy Right ©</h4>
                    <p>2023 Content</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- end point of footer section -->
</body>
<script src="../JS/navbar.js"></script> 
</html>