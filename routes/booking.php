<?php 
    session_start();
    require('../database/bookingdatabase.php');
    require('../Auth/user.php');

    if(isset($_POST['Submit'])) {
        $isUserLogin = Check_Login_For_Booking();

        //store temporary user input data
        if($isUserLogin == true) {
            temp_store($_POST['visitor_name'],
                        $_POST['visitor_email'],
                        $_POST['visitor_phone'],
                        $_POST['total_persons'],
                        $_POST['checkin'],
                        $_POST['checkout'],
                        $_POST['visitor_message']);

            //validate input dates
            $check_input_dates = is_input_dates_acceptable();
        }

        //validate check in date with database
        if($check_input_dates) {
            $check_in_date_avaliable = is_check_in_date_avaliable($_POST['checkin']);
        }

        //store booking in database
        if($check_input_dates == true && $check_in_date_avaliable == true) {
            unset($_SESSION['error']);
            temp_destroy();
            create_booking($_POST['visitor_name'],
                    $_SESSION['id'],
                    $_POST['visitor_email'],
                    $_POST['visitor_phone'],
                    $_POST['total_persons'],
                    $_POST['checkin'],
                    $_POST['checkout'],
                    $_POST['visitor_message']);
            header('Location: ../Pages/Home.php');
        }
    }

    function is_input_dates_acceptable() {
        if($_POST['checkout'] >= $_POST['checkin']) {
            unset($_SESSION['error']);
            return true;
        } else {
            $_SESSION['error'] = 'Please select a validate check out date.';
            header('Location: ../Pages/home.php');
            return false;
        }
    }

    function temp_store($name, $email, $phone, $person, $check_in_date, $check_out_date, $visitor_message) {
        $_SESSION['tmpname'] = $name;
        $_SESSION['tmpemail'] = $email;
        $_SESSION['tmpphone'] = $phone;
        $_SESSION['tmpperson'] = $person;
        $_SESSION['tmpcheckindate'] = $check_in_date;
        $_SESSION['tmpcheckoutdate'] = $check_out_date;
        $_SESSION['tmpvisitormessage'] = $visitor_message;
    }

    function temp_destroy() {
        unset($_SESSION['tmpname']);
        unset($_SESSION['tmpemail']);
        unset($_SESSION['tmpphone']);
        unset($_SESSION['tmpperson']);
        unset($_SESSION['tmpcheckindate']);
        unset($_SESSION['tmpcheckoutdate']);
        unset($_SESSION['tmpvisitormessage']);
    }