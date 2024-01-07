<?php 

    function Check_Login_For_Booking() {
        $isLogin = isset($_SESSION['username']);
        $hasId = isset($_SESSION['id']);
        if($isLogin == true && $hasId == true) {
            unset($_SESSION['error']);
            return true;
        } else {
            header('Location: ../Pages/registerform.php');
            $_SESSION['error'] = 'You must be register to make booking.';
            return false;
        }
    }

    function Check_Login() {
        $isLogin = isset($_SESSION['username']);
        $hasId = isset($_SESSION['id']);
        if($isLogin == true && $hasId == true) {
            return true;
        } else {
            return false;
        }
    }

    function User_Login($username, $user_id) {
        $_SESSION['username'] = $username;
        $_SESSION['id'] = $user_id;
    }
