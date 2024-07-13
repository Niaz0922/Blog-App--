<?php
session_start();
include "../admin\config\database.php";



if (isset($_POST["submit"])) {
    //some security steps
    $username = stripcslashes($_POST["Username"]);
    $password = stripcslashes($_POST["Pass"]);
    $username = mysqli_real_escape_string($conn,$username);
    $password = mysqli_real_escape_string($conn,$password);
    //matching the username and passwords
    $rememberMe = $_POST["remember"];
    $UserQuery = "SELECT * FROM users WHERE username = '$username'";
    $passwordQuery = "SELECT * FROM users WHERE password = '$password'";

    $UsernameResult = mysqli_query($conn, $UserQuery);
    $passwordResult = mysqli_query($conn, $passwordQuery);
    
    if (mysqli_num_rows($UsernameResult) == 1) {
        $sql = "SELECT *FROM users WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            $_SESSION["SignIn1"] = $username;
            if($rememberMe){
                $expirationTime = time() + 604800;
                setcookie("username",$username, $expirationTime , "/");
            }else{
                $_SESSION["SignIn1"] = $username;
            }
            header("Location: http://localhost/blog/"); 
        } else {
            header("Location: http://localhost/blog/signIn.php");
            $_SESSION["signInValidation"] = "Wrong username or password";
        }
    } else {
        header("Location: http://localhost/blog/signIn.php");
        $_SESSION["signInValidation"] = "Wrong Username or password";
    }
}

