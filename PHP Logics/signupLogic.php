<?php
include "../admin\config\database.php";
session_start();


if (isset($_POST["submit"])) {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $createpassword = $_POST["createpassword"];
    $confirmpassword = $_POST["confirmPass"];
    $avatar = $_FILES['avatarImage'];
    $sqlExisting = "SELECT * FROM users WHERE username = '$username' OR email = 'email'";
    $result = mysqli_query($conn, $sqlExisting);

    if ($createpassword != $confirmpassword) {
        $_SESSION["SignUp"] = "Please match the password";
    } else if (mysqli_num_rows($result) > 0) {
        $_SESSION["SignUp"] = "Username Or Email Exist";
    } else {
        $time = time();
        $avatar_name = $time . $avatar["name"];
        $avName = $avatar["name"];
        $avatar_destination = "../images/" . $avatar_name;
        $avatar_tmpName = $avatar["tmp_name"];
        $allowedExtention = ["jpg", "png", "jpeg"];
        $extention = explode(".", $avatar["name"]);
        $extention = end($extention);
        $hashedPass = password_hash($createpassword,PASSWORD_DEFAULT);
        if (in_array($extention , $allowedExtention)) {
            if ($avatar["size"] < 1000000) {
               move_uploaded_file($avatar_tmpName,$avatar_destination);
            }else{
                $_SESSION["SignUp"] = "File is too big";
            }
        }else{
            $_SESSION["SignUp"] = "Please enter your avatar with JPG , PNG or JPEG";
        }
    }
   
}
if($_SESSION["SignUp"]){
    header("Location: http://localhost/blog/signup.php");
    $_SESSION["signUpDataBack"] = $_POST;
    
}else{
    $InsertData = "INSERT INTO users (firstname,lastname,username,email,password,avatar) VALUES ('$firstname','$lastname','$username','$email','$hashedPass','$avatar_name')";
    $result = mysqli_query($conn , $InsertData);
    if($result){
        $_SESSION["SignUp"] = "Registration Successfull";
        header("Location: http://localhost/blog/signin.php");
    }

}
