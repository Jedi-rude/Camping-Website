<?php
error_reporting(E_ERROR | E_PARSE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/home.css">
    <title>Feature Page</title>
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
                <li><a class="nav-link" href="../Pages/Information.php" accesskey="i">Info</a></li>
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
                        <li><a class="nav-link" href="../Pages/Information.php" accesskey="i">Info</a></li>
                        <li><a class="nav-link" href="../Pages/pitches.php" accesskey="p" >Availability</a></li>
                        <li><a class="nav-link" href="../Pages/Review.php" accesskey="r" >Reviews</a></li>
                        <li><a class="nav-link" href="../Pages/Feature.php" accesskey="f" >Features</a></li>
                        <li><a class="nav-link" href="../Pages/Contact.php" accesskey="c" >Contact</a></li>
                    </ul>
                </div>
        </nav>
    </header>
    <!-- end point of header & navigation section -->

    <!-- start point of home section -->
    <section class="hero hero4" id="home">
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
            <div class="column">
                <div class="card card-4">
                    <div class="icon">
                        <img src="../img/paw.png" alt="bath">
                    </div>
                    <h3>Animal allow</h3>
                    <p>
                        We have places for animal to stay together
                    </p>
                </div>
            </div>
            <div class="column">
                <div class="card card-5">
                    <div class="icon">
                        <img src="../img/confetti.png" alt="bath">
                    </div>
                    <h3>Party</h3>
                    <p>
                        We have special servies to celebrate party
                    </p>
                </div>
            </div>
            <div class="column">
                <div class="card card-6">
                    <div class="icon">
                        <img src="../img/policeman.png" alt="internet">
                    </div>
                    <h3>Super Secure</h3>
                    <p>
                        We have security guards to protect and make safe to you
                    </p>
                </div>
            </div>
      </div>
    </section>
    <!-- end point of features section -->

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