<?php 
    session_start();
    require('../database/bookingdatabase.php');
    delete_booking($_GET['id']);
    header('Location: ../../Pages/Home.php');
