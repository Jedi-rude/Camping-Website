<?php 
    $CurrentGenerateCaptcha = generateCaptcha();
    
    function generateCaptcha() {
        $CaptchaList = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z',0,1,2,3,4,5,6,7,8,9);
        $Captcha = "";
        for($i = 0; $i < 6; $i++) {
            $random = rand(0,61);
            $Captcha = $Captcha.$CaptchaList[$random];
        }
        return $Captcha;
    }
    
    function checkCaptcha($enter, $current, $location) {
        if($enter == $current) {
            unset($_SESSION['error']);
            header($location);
            return true;
        } else {
            $_SESSION['error'] = 'Captcha entered is incorrect';
            header($location);
            return false;
        }
    }
?>
