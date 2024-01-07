<?php 
    session_start();
    include('../captcha/generateCaptcha.php');
    include('../database/userdatabase.php');


    if(isset($_POST['Captcha'])) {
        TempLoginStore( $_POST['username'],$_POST['password']);
        $_SESSION['error'] = null;
        header("Location: ../Pages/loginform.php");
    }

    if(isset($_POST['Login'])) {
        TempLoginStore($_POST['username'], $_POST['password']);
        $checkCaptcha = checkCaptcha($_POST['enteredCaptcha'], $_POST['currentGenerateCaptcha'], "Location: ../Pages/loginform.php");
        if($checkCaptcha == true) {
            TempLoginDelete();
            Login($_POST['username'], $_POST['password']);
        }
    }

    function TempLoginStore($username, $password) {
        $_SESSION['tmploginusername'] = $username;
        $_SESSION['tmploginpassword'] = $password;
    }
    function TempLoginDelete() {
        unset($_SESSION['tmploginusername']);
        unset($_SESSION['tmploginpassword']);
    }

?>