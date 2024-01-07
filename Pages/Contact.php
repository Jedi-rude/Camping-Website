<?php
error_reporting(E_ERROR | E_PARSE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/home.css">
    
    <title>Contact Page</title>
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
                <li><a class="nav-link" href="../Pages/Information.php" accesskey="i">Info</a></li>
                <li><a class="nav-link" href="../Pages/pitches.php" accesskey="p" >Availability</a></li>
                <li><a class="nav-link" href="../Pages/Review.php" accesskey="r" >Reviews</a></li>
                <li><a class="nav-link" href="../Pages/Feature.php" accesskey="f" >Features</a></li>                
            </ol>
            <label for="" class="bar">
                <img src="../img/menu.png" id="menu" alt="">
                <div class="small-navbar">
                    <p id="close-navbar">X</p>
                    <ul>
                        <li><a class="nav-link" href="../Pages/Home.php" accesskey="h">Home</a></li>
                        <li><a class="nav-link" href="../Pages/Attraction.php" accesskey="a">Attraction</a></li>
                        <li><a class="nav-link" href="../Pages/Information.php" accesskey="i">Info</a></li>
                        <li><a class="nav-link" href="../Pages/pitches.php" accesskey="p" >Availability</a></li>
                        <li><a class="nav-link" href="../Pages/Review.php" accesskey="r" >Reviews</a></li>
                        <li><a class="nav-link" href="../Pages/Feature.php" accesskey="f" >Features</a></li>                    
                    </ul>
                </div>
            </label>
        </nav>
    </header>
    <!-- end point of header & navigation section -->

    <!-- start point of home section -->
    <section class="hero hero3" id="home">
        <div class="container">
            <h2 class="h1 hero-title">Come Our Place to relax and fun</h2> 
            <p class="hero-text">
                spending time in nature and sleeping in a temporary shelter, for one or more days and nights, booking is waiting
            </p>
            <div class="btn-group">
                <button class="btn btn-primary">Learn more</button>
  
                <button class="btn btn-secondary"><a href="../Pages/Home.php" >Book Now</a></button>
            </div>
  
        </div>
    </section>
    <!-- end point of home section -->

    <!-- start point of contact form section -->
    <section class="contact">
        <form action="../routes/addcmt.php" method="post">
            <input name="name" type="text" class="feedback-input" placeholder="Name" required/>
            <input name="email" type="text" class="feedback-input" placeholder="Email" required/>
            <textarea name="text" class="feedback-input" placeholder="Comment" required></textarea>
            <input type="submit" name="add" value="SUBMIT"/>
        </form>
    </section>
    <!-- end point of contact form section -->

    <hr>
    <br>

    <!-- start point of small contact page -->
    <section class="cta" id="contact">
        <div class="container container-content">
            <div class="cta-content">
                <p class="section-subtitle">Call To Action</p>
                <h2 class="h2 section-title">Ready For Unforgatable Travel. Remember Us!</h2>
                <p class="section-text">
                    Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum cumque
                    laudantium. Sit ornare
                    mollitia tenetur, aptent.
                </p>
            </div>
            <button class="btn btn-secondary">Contact Us !</button>
        </div>
    </section>
    <!-- end point of small contact page -->
    
    <!-- start point of rss feed section -->

    <?php $rss_feed = simplexml_load_file("http://localhost/Dynamic_Website/routes/rss.xml"); ?>
    
    <section class="rss-section">
        <div class="rss-table">
            <h3 class="rss-header">More Information about Camping and Swimming</h3>
            <div class="rss-item-container">
            <?php
            if(!empty($rss_feed)) {
                $i=0;
                foreach ($rss_feed->channel->item as $feed_item) {
                    if($i>=10) break;
                    ?>
                <div class="rss-item" valign="top">
                    <div><a class="feed_title" href="<?php echo $feed_item->link; ?>"><?php echo $feed_item->title; ?> >></a></div>
                    <div><?php echo implode(' ', array_slice(explode(' ', $feed_item->description), 0, 14)) . "..."; ?></div>
                </div>
            <?php
            $i++;}}?>
            </div>
        </div>
    </section>

<!-- end point of rss feed section -->

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