<?php
session_start();
include "../admin\config\database.php";
if(isset($_POST["submit"])){
    $username = $_POST["Username"];
    $password = $_POST["Pass"];

    $UserQuery = "SELECT * FROM users WHERE username = '$username'";
    $passwordQuery = "SELECT * FROM users WHERE password = '$password'";

    $UsernameResult = mysqli_query($conn,$UserQuery);
    $passwordResult = mysqli_query($conn,$passwordQuery);

    if(mysqli_num_rows($UsernameResult)  == 1 && mysqli_num_rows($passwordResult) == 1){
        $_SESSION["SignIn1"] = $username;
        header("Location: http://localhost/blog/");
}else{
    header("Location: http://localhost/blog/signIn.php");
    $_SESSION["signInValidation"] = "Username Or password do not exist";
}


}

