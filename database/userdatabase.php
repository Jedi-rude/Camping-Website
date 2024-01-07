<?php 
    require('dbconfig.php');
    require('../Auth/user.php');

    function CheckUniqueUsername($username) {
        global $conn;
        $userfound = false;
        $sql = mysqli_query($conn,"SELECT * FROM users WHERE username = '$username' ");
        if($sql) {
            $result = mysqli_fetch_assoc($sql);
            if($result['username'] == $username) {
                $_SESSION['error'] = 'Username already taken';
                header("Location: ../Pages/registerform.php");
                $userfound = true;
                return false;
            }
        }
        if($userfound == false) {
            unset($_SESSION['error']);
            return true;
        }
        }
    
    
    function CreateAccount($username, $password) {
        global $conn;
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        mysqli_query($conn, "INSERT INTO users( username, password) VALUES ( '$username', '$hashedPassword') ");
    }

    function Login($username,$password) {
        global $conn;
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' ");
        $result = mysqli_fetch_array($sql);
        if($result) {
            $realpassword = $result['password'];
            if(password_verify($password,$realpassword)) {
                User_Login($result['username'],$result['id']);
                header('Location: ../Pages/Home.php');
                return true;
            } else {
                $_SESSION['error'] = 'Password enterd is incorrect';
                header('Location: ../Pages/loginform.php');
                return false;
            }
            
        } else {
            $_SESSION['error'] = 'There is no account name with such username';
            header('Location: ../Pages/loginform.php');
            return false;
        }
    }

    function getIdRegister() {
        global $conn;
        $result = mysqli_query($conn, "SELECT * FROM users ORDER BY id DESC");
        $data = mysqli_fetch_assoc($result);
        return $data['id'] + 1;
    }

?>