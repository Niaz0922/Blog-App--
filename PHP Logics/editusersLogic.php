<?php

include "../admin\config\database.php";
session_start();

if(isset($_POST["submit"])){
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $isAdmin = $_POST["isadmin"];
    $Dbuser = $_POST["Dbusername"];

    $sql = "UPDATE `users` SET `firstname` = '$firstname' , `lastname` = '$lastname' , `username` = '$username' , `email` = '$email' , `IsAdmin` = '$isAdmin'   WHERE `users`.`username` = '$Dbuser';";
    $result = mysqli_query($conn,$sql);
    if($result){
        $_SESSION["editUserSuccess"] = true;
        header("Location: http://localhost/blog/admin/manageUser.php");
    }else{
        $_SESSION["editUSerFailed"] = "Failed To Update";
        header("Location: http://localhost/blog/admin/edituser.php");
    }
}

?>