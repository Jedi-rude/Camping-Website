<?php 
    session_start();
    
    if (isset($_SESSION["test"])) {
        $_SESSION["test"]++;
    } else {
        $_SESSION["test"] = 1;
    }

    echo $_SESSION["test"];
?>