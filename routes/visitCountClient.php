<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visit Count</title>
</head>
<body>        
    <?php
        session_start();
    ?>
    <marquee behavior="" direction="" id="visitCount">
        <?php 
            if (isset($_SESSION["test"])) {
                echo $_SESSION["test"];
            } 
        ?>
    </marquee>    

    <script>
        if (!(performance.navigation.type == performance.navigation.TYPE_RELOAD)) {
            fetch("visitCountServer.php")
                .then(res => res.text())
                .then(text => document.getElementById("visitCount").innerHTML = text)
                .catch(err => console.log(err))
                .finally(() => console.log("AJAX done"));
        }        
    </script>
</body>
</html>