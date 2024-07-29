<?php
include "../admin\config\database.php";
session_start();

if (isset($_POST["submit"])) {
    //geting the input values
    $firstname = stripcslashes($_POST["firstname"]);
    $lastname =  stripcslashes($_POST["lastname"]);
    $username =  stripcslashes($_POST["username"]);
    $email = filter_var($_POST["email"],FILTER_SANITIZE_EMAIL);
    $createpassword = $_POST["createpassword"];
    $confirmpassword = $_POST["confirmPass"];
    $avatar = $_FILES['avatarImage'];
    //checking that the username or email is exists or not

    $sqlExisting = "SELECT * FROM users WHERE username = '$username' OR email = 'email'";
    $result = mysqli_query($conn, $sqlExisting);
    //checking the create pass and confirm pass matching or not

    if ($createpassword != $confirmpassword) {
        $_SESSION["SignUp"] = "Please match the password";
    } else if (mysqli_num_rows($result) > 0) {
        $_SESSION["SignUp"] = "Username Or Email Exist";
    } else {
        //validating the avatar
       include "validatingFile.php";
        $hashedPass = password_hash($createpassword, PASSWORD_DEFAULT);
        if (in_array($extention, $allowedExtention)) {
            if ($avatar["size"] < 1000000  && $imageWidth < 2000 && $imageheight < 2000 ) {
                move_uploaded_file($avatar_tmpName, $avatar_destination);
            } else {
                $_SESSION["SignUp"] = "File is too big . Reduce the file size and image Size";
            }
        } else {
            $_SESSION["SignUp"] = "Please enter your file on JPG , PNG or JPEG";
        }
    }
}



//if all the validation is passed then the user will be redirect to sign in page
if ($_SESSION["SignUp"]) {
    //if there is any error setting a session to get back the data and redirecting the user to signUp page
    header("Location: http://localhost/blog/signup.php");
    $_SESSION["signUpDataBack"] = $_POST;
} else {
    //after checking all the conditions inserting the data
    $InsertData = "INSERT INTO users (firstname,lastname,username,email,password,avatar) VALUES ('$firstname','$lastname','$username','$email','$hashedPass','$avatar_name')";
    $result = mysqli_query($conn, $InsertData);
    if ($result) {
        //locating to the sign in page after signup
        header("Location: http://localhost/blog/signin.php");
    }
}


