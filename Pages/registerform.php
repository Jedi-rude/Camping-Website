<?php 
    session_start();
    include('../database/userdatabase.php');
    include('../captcha/generateCaptcha.php');
    error_reporting(E_ERROR | E_PARSE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
                        <li><a class="nav-link" href="../Pages/Home.php" accesskey="h">Home</a></li>
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

    <!-- start point of login form section -->
    <section class="mainlogin-form">
        <div class="wholeCaptchaForm">
            <form class="captchaForm" method="post" action="../routes/register.php">
                <div class="form-group login-form-container">
                    <input name="username" type="text" class="form-control" placeholder="Username" required="required" value="<?php if(isset($_SESSION['tmpusername'])) {echo $_SESSION['tmpusername'];} ?>">
                </div>
                <div class="form-group login-form-container">
                    <input name="password" type="password" class="form-control" placeholder="Password" required="required" value="<?php if(isset($_SESSION['tmppassword'])) {echo $_SESSION['tmppassword'];} ?>">
                </div>
                <div class="form-group login-form-container">
                    <input name="confirmpassword" type="password" class="form-control" placeholder="Confirm Password" required="required" value="<?php if(isset($_SESSION['tmpconfirmpassword'])) {echo $_SESSION['tmpconfirmpassword'];} ?>">
                </div>
                <div class="form-group">
                    <p class="alert-danger"><?php if(isset($_SESSION['error'])) {echo $_SESSION['error']; }?></p>
                </div>
                <div class="captchaContainer">
                    <input name="currentGenerateCaptcha" class="captcha" value="<?php echo $CurrentGenerateCaptcha ?>" readonly>
                    <button class="refreshCaptcha" type="submit" name="Captcha">Get new captcha</button>
                </div>
                <div class="captcha-input-container">
                    <input name="enteredCaptcha" type="text" class="captchaInput" placeholder="Enter Captcha">
                </div class="form-group">
                    <button type="submit" name="Register" class="btn" id="enterCaptcha">Register</button>
                </div>
            </form>
        </div>
    </section>
    <!-- end point of login form section -->
</body>
<script src="../JS/navbar.js"></script>
</html>