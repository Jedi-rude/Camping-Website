<?php
    include '../database/dbconfig.php';
    error_reporting(E_ERROR | E_PARSE);
?>
<Html>
<head>
    <title>Pitctes Availability Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../CSS/home.css">
    
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
                        <li><a class="nav-link" href="../Pages/Information.php" accesskey="i">Info</a></li>
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
    <section class="hero hero6" id="home">
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
    
    <!-- start section of pitches searching -->

    <section class="Pitches">
        <h2>Available Pitches Types</h2>
        <form class="pitch-search" action="pitches.php" method="post">
            <input type="search" placeholder="Search a product.." name="input">
            <button class="pitch-search-btn" name="search">
                <img class="pitch-btn-img" src="../img/search.png">
            </button>
        </form>
        <div class="product-container">
            <?php
            if(isset($_POST['search'])) {
                $searchItem = $_POST['input'];
                $sql = "SELECT * FROM image WHERE item_name LIKE '%$searchItem%'";
            } else {
                $sql = "SELECT * FROM image";
            }
            $data = mysqli_query($conn, $sql);
            if(mysqli_num_rows($data) > 0){
                mysqli_num_rows($data);
                while($row = mysqli_fetch_array($data)){
                    ?>
                    <div class="product">
                        <img src="../Db-Photo/<?php echo $row['Image_name']?>" alt="">
                        <h3><?php echo $row['item_name']?></h3>
                        <p><?php echo $row['Price']?></p>
                    </div>
                    <?php
                    }
                    }
                ?>
        </div>
    </section>
    <!-- send section of pitches searching -->

    <!-- start section of footer -->
    
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
    <!-- end section of footer -->
</body>
<script src="../JS/navbar.js"></script>
</Html>