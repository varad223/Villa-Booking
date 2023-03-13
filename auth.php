<?php
    session_start();
    extract($_POST);

include 'db.php';
    $message="";
    if(count($_POST)>0) {
       
        $result = mysqli_query($con,"SELECT * FROM villa_login WHERE email='" . $_POST["email"] . "' and password = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["username"] = $row['username'];
        } else {
         $message = "Invalid Username or Password!";
        }
    }
    if(isset($_SESSION["id"])) {
    header("Location:index.php");
    }
?>



