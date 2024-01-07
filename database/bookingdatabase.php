<?php 
    require('dbconfig.php');

    function is_check_in_date_avaliable($date) {
        global $conn;
        $query = "SELECT * FROM bookings WHERE check_in_date >= '$date' ";
        $result = mysqli_query($conn, $query);
        $check_in_date = mysqli_fetch_assoc($result);
        $query = "SELECT * FROM bookings WHERE check_out_date >= '$date' ";
        $result = mysqli_query($conn, $query);
        $check_out_date = mysqli_fetch_assoc($result);
        if($check_in_date || $check_out_date) {
            $_SESSION['error'] = 'Check in date is not avaliable';
            header('Location: ../Pages/Home.php');
            return false;
        } else {
            unset($_SESSION['error']);
            return true;
        }
    }

    function create_booking($name,$user_id, $email, $phone, $person, $check_in_date, $check_out_date, $visitor_message) {
        global $conn;
        mysqli_query($conn, "INSERT INTO bookings ( name, user_id, email, phone, person, check_in_date, check_out_date, visitor_message ) VALUES ( '$name', '$user_id', '$email', '$phone', '$person', '$check_in_date', '$check_out_date', '$visitor_message' ) ");
    }

    function get_booking_list($id) {
        global $conn;
        $result = mysqli_query($conn, "SELECT * FROM bookings WHERE user_id = '$id' ");
        $bookings = mysqli_fetch_all($result);
        return $bookings;
    }

    function delete_booking($id) {
        global $conn;
        mysqli_query($conn, "DELETE FROM bookings WHERE id = '$id' ");
    }
