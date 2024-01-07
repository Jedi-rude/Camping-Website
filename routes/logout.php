<?php
session_start();
session_destroy();
header("location:../Pages/home.php");
die();
?>