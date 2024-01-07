<?php
error_reporting(E_ERROR | E_PARSE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/home.css">
    <title>Attraction Page</title>
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
            </label>

        </nav>
    </header>
    <!-- end point of header & navigation section -->

    <!-- start point of home section -->
    <section class="hero hero2" id="home">
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
            </ul>
        </div>
    </section>
    <!-- end point of packaging section -->

    <!-- start point of product searching section -->

    <section class="search-section">
    <?php
    error_reporting(E_ERROR | E_PARSE);
    define("MAX_RESULTS", 15);
    
     if (isset($_POST['submit']) )
     {
        $keyword = $_POST['keyword'];
               
        if (empty($keyword))
        {
            $response = array(
                  "type" => "error",
                  "message" => "Please enter the keyword."
                );
        } 
    }?>
    
    <div class="search-form-container">
        <form id="keywordForm" method="post" action="">
            <div class="input-row">
                Search Keyword : <input class="input-field" type="search" id="keyword" name="keyword"  placeholder="Enter Search Keyword">
            </div>
            <input class="btn-submit"  type="submit" name="submit" value="Search">
        </form>
    </div>
    <?php if(!empty($response)) { ?>
        <div class="response <?php echo $response["type"]; ?>"> <?php echo $response["message"]; ?> </div>
    <?php }?>
    <?php
        if (isset($_POST['submit']) )
        {
            if (!empty($keyword))
            {
                $apikey = 'AIzaSyDT0ZnKAMf1-BTJK1tcBeYiOVuII06kYmQ'; 
                $googleApiUrl = 'https://www.googleapis.com/youtube/v3/search?part=snippet&q=' . $keyword . '&maxResults=' . MAX_RESULTS . '&key=' . $apikey;

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
                $value = json_decode(json_encode($data), true);
            ?>

            <div class="result-heading">About <?php echo MAX_RESULTS; ?> Results</div>
            <div class="videos-data-container" id="SearchResultsDiv">

            <?php
                for ($i = 0; $i < MAX_RESULTS; $i++) {
                    $videoId = $value['items'][$i]['id']['videoId'];
                    $title = $value['items'][$i]['snippet']['title'];
                    $description = $value['items'][$i]['snippet']['description'];
                    ?> 
    
                        <div class="video-tile">
                        <div  class="videoDiv">
                            <iframe id="iframe" style="width:100%;height:100%" src="//www.youtube.com/embed/<?php echo $videoId; ?>" 
                                    data-autoplay-src="//www.youtube.com/embed/<?php echo $videoId; ?>?autoplay=1"></iframe>                     
                        </div>
                        <div class="videoInfo">
                        <div class="videoTitle"><b><?php echo $title; ?></b></div>
                        <div class="videoDesc"><?php echo $description; ?></div>
                        </div>
                        </div>
           <?php 
                    }
                } 
           
            }
            ?> 
            
        </div>
    </section>

    <!-- start point of product searching section -->

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