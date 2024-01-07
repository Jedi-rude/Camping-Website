<?php 
    session_start();
    // include('database/userdatabase.php');
    include('../captcha/generateCaptcha.php');

    if(isset($_SESSION['locked'])) {
        $difference = time() - $_SESSION['locked'];
        if($difference > 600) {
            unset($_SESSION['locked']);
            unset($_SESSION['login_attempts']);
        }
    }
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
            <ol>
                <li><a href="../Pages/Home.php" accesskey="h">Home</a></li>
                <li><a href="../Pages/Information.php" accesskey="i">Info</a></li>
                <li><a href="../Pages/pitches.php" accesskey="p">Availability</a></li>
                <li><a href="../Pages/Review.php" accesskey="r">Reviews</a></li>
                <li><a href="../Pages/Feature.php" accesskey="f">Features</a></li>
                <li><a href="../Pages/Contact.php" accesskey="c">Contact</a></li>
                <li><a href="../Pages/registerform.php" accesskey="l">Register</a></li>
            </ol>
            <label for="" class="bar">
                <img src="../img/menu.png" id="menu" alt="">
                <div class="small-navbar">
                    <p id="close-navbar">X</p>
                    <ul>
                        <li><a href="../Pages/Home.php">Home</a></li>
                        <li><a href="../Pages/Information.php">Info</a></li>
                        <li><a href="../Pages/pitches.php">Availability</a></li>
                        <li><a href="../Pages/Review.php">Reviews</a></li>
                        <li><a href="../Pages/Feature.php">Features</a></li>
                        <li><a href="../Pages/Contact.php">Contact</a></li>
                        <li><a href="../Pages/registerform.php">Register</a></li>
                    </ul>
                </div>
            </label>
        </nav>
    </header>
    <!-- end point of header & navigation section -->

    <!-- start point of login form section -->
    <section class="mainlogin-form">
        <div class="wholeCaptchaForm">
            <form class="captchaForm" method="post" action="../routes/login.php">
                <div class="form-group login-form-container">
                    <input name="username" type="text" class="form-control" placeholder="Username" required="required" value="<?php if(isset($_SESSION['tmploginusername'])) {echo $_SESSION['tmploginusername'];} ?>">
                </div>
                <div class="form-group login-form-container">
                    <input name="password" type="password" class="form-control" placeholder="Password" required="required" value="<?php if(isset($_SESSION['tmploginpassword'])) {echo $_SESSION['tmploginpassword'];} ?>">
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
                </div>
                <div class="form-group">
                    <?php 
                        if(isset($_SESSION['login_attempts']) && $_SESSION['login_attempts'] > 2) {
                            $_SESSION['locked'] = time();
                            echo "<p>Please wait for 10 minutes</p>";
                        } else {
                    ?>
                    <button type="submit" name="Login" class="btn" id="enterCaptcha">Login</button>
                    <?php } ?>
                </div>
            </form>
        </div>
    </section>
    <!-- end point of login form section -->
</body>
<script src="../JS/navbar.js"></script>
</html>