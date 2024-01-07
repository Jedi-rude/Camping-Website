<?php 
    session_start();
    include('../captcha/generateCaptcha.php');
    include('../database/userdatabase.php');

    if(isset($_POST['Captcha'])) {
        TempStore( $_POST['username'], $_POST['password'], $_POST['confirmpassword']);
        $_SESSION['error'] = null;
        header("Location: ../Pages/registerform.php");
    }

    if(isset($_POST['Register'])) {
        TempDelete();
        
        $CheckPassword = CheckConfirmPassword();

        if($CheckPassword == true) {
            $CheckCaptcha = checkCaptcha($_POST['enteredCaptcha'], $_POST['currentGenerateCaptcha'], "Location: ../Pages/registerform.php");
        }
        if($CheckCaptcha == true) {
            $uniqueUsername = CheckUniqueUsername($_POST['username']);
        }
        if($uniqueUsername == true) {
            CreateAccount($_POST['username'], $_POST['password']);
            User_Login($_POST['username'],getIdRegister());
            $_SESSION['error'] = null;
            header('Location:../Pages/Home.php');
        } 
    }

    function CheckConfirmPassword() {
        if($_POST['password'] == $_POST['confirmpassword']) {
            $_SESSION['error'] = null;
            return true;
        } else {
            $_SESSION['error'] = "Password and confirm password does not match.";
            header('Location:../Pages/registerform.php');
            return false;
        }
    }

    function TempStore ($username, $password, $confirmpassword) {
        $_SESSION['tmpusername'] = $username;
        $_SESSION['tmppassword'] = $password;
        $_SESSION['tmpconfirmpassword'] = $confirmpassword;
    }

    function TempDelete() {
        $_SESSION['tmpusername'] = null;
        $_SESSION['tmppassword'] = null;
        $_SESSION['tmpconfirmpassword'] = null;
    }

    function CheckPasswordLength() {
        if(strlen($_POST['password']) < 8 || strlen($_POST['password']) > 16) {
            $_SESSION['error'] = 'Password must be between 8 and 16 characters.';
            header('Location:  ../Pages/registerform.php');
            return false;
        }
    }

  