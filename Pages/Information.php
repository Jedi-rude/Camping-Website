<?php
error_reporting(E_ERROR | E_PARSE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/home.css">   
    <title>Information Page</title>
</head>
<body>
    <!-- start point of header & navigation section -->
    <header>
        <input type="checkbox" id="check" placeholder="">
        <nav>
            <div class="icon-view-container">
                <div class="icon">GWSC</div>
            </div>
            <div class="search">
                <input type="search" placeholder="Search here">
                <button class="searchBtn">
                    <img class="btn-img" src="../img/search.png">
                </button>
            </div>
            <ol class="home-nav">
                <li><a class="nav-link" href="../Pages/Home.php" accesskey="h">Home</a></li>
                <li><a class="nav-link" href="../Pages/Attraction.php" accesskey="a">Attraction</a></li>               
                <li><a class="nav-link" href="../Pages/pitches.php" accesskey="p" >Availability</a></li>
                <li><a class="nav-link" href="../Pages/Review.php" accesskey="r" >Reviews</a></li>
                <li><a class="nav-link" href="../Pages/Feature.php" accesskey="f" >Features</a></li>
                <li><a class="nav-link" href="../Pages/Contact.php" accesskey="c" >Contact</a></li>
            </ol>
            <label for="" class="bar">
                <img src="../img/menu.png" id="menu" alt="">
                <div class="small-navbar">
                    <p id="close-navbar">X</p>
                    <ul>
                        <li><a class="nav-link" href="../Pages/Home.php" accesskey="h">Home</a></li>
                        <li><a class="nav-link" href="../Pages/Attraction.php" accesskey="a">Attraction</a></li>
                        <li><a class="nav-link" href="../Pages/pitches.php" accesskey="p" >Availability</a></li>
                        <li><a class="nav-link" href="../Pages/Review.php" accesskey="r" >Reviews</a></li>
                        <li><a class="nav-link" href="../Pages/Feature.php" accesskey="f" >Features</a></li>
                        <li><a class="nav-link" href="../Pages/Contact.php" accesskey="c" >Contact</a></li>
                    </ul>
                </div>
            </label>
        </nav>
    </header>
    <!-- end point of header & navigation section -->

    <!-- start point of home section -->
    <section class="hero hero5" id="home">
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

    <!-- start point of pitches types information  -->
    <section class="Pitches">
        <h2>Pitches Availability </h2>       
        <div class="product-container">
            <div class="product">
                <img src="../img/tent1.jpg" alt="Product 1">
                <h3>Tent</h3>
                <p>$10</p>
            </div>
            <div class="product">
                <img src="../img/tent1.jpg" alt="Product 1">
                <h3>Tent</h3>
                <p>$10</p>
            </div>
            <div class="product">
                <img src="../img/tent1.jpg" alt="Product 1">
                <h3>Tent</h3>
                <p>$10</p>
            </div>
            <div class="product">
                <img src="../img/tent1.jpg" alt="Product 1">
                <h3>Tent</h3>
                <p>$10</p>
            </div>
        </div>
    </section>   
    <!-- end point of pitches types information -->

    <!-- start point of features section -->
    <section class="features">
        <div class="row">
            <h1>Our Features</h1>
        </div>
        <div class="row">
            <div class="column">
                <div class="card card-1">
                    <div class="icon">
                        <img src="../img/parking.png" alt="bath">
                    </div>
                    <h3>Parking Area</h3>
                    <p>
                        We have big area of car parking area
                    </p>
                </div>
            </div>
            <div class="column">
                <div class="card card-2">
                    <div class="icon">
                        <img src="../img/bath.png" alt="bath">
                    </div>
                    <h3>Cold/Hot Water</h3>
                    <p>
                        We have both cold and hot water at shower and swimming
                    </p>
                </div>
            </div>
            <div class="column">
                <div class="card card-3">
                    <div class="icon">
                        <img src="../img/internet.png" alt="bath">
                    </div>
                    <h3>Wifi</h3>
                    <p>
                        We have 24/7 internet access to do a lot of things
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end point of features section -->

    <!-- start point of promotion card section -->
    <section class="section-card">
        <center><h1>Our Activities</h1></center>
        <div class="cards-wrapper">
            <div class="card-grid-space">
                <a class="card1 card1">
                </a>
            </div>
            <div class="card-grid-space">
                <a class="card1 card2">
                </a>
            </div>
            <div class="card-grid-space">
                <a class="card1 card6">
                </a>
            </div>
        </div>
    </section>
    <!-- end point of promotion card section -->

     <!-- start point of map section -->
     <section>
        <div class="map-responsive">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d159067.63735793225!2d-2.755525060531754!3d51.468587330876964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4871836681b3d861%3A0x8ee4b22e4b9ad71f!2sBristol%2C%20UK!5e0!3m2!1sen!2smm!4v1696868150597!5m2!1sen!2smm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	    </div>
    </section>
    <!-- end point of map section -->

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
        </footer>
        <!-- end point of footer section -->
</body>
<script src="../JS/navbar.js"></script>
</html>