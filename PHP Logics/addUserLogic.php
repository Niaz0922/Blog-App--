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
    $avatar = $_FILES['avatar'];
    $sqlExisting = "SELECT * FROM users WHERE username = '$username' OR email = 'email'";
    $result = mysqli_query($conn, $sqlExisting);
    $isAdmin = $_POST["admin"];

    if ($createpassword != $confirmpassword) {
        $_SESSION["addUser"] = "Please match the password";
    } else if (mysqli_num_rows($result) > 0) {
        $_SESSION["addUser"] = "Username Or Email Exist";
    } else {
        $time = time();
        $avatar_name = $time . $avatar["name"];
        $avName = $avatar["name"];
        $avatar_destination = "../images/" . $avatar_name;
        $avatar_tmpName = $avatar["tmp_name"];
        $allowedExtention = ["jpg", "png", "jpeg"];
        $extention = explode(".", $avatar["name"]);
        $extention = end($extention);
        $hashedPass = password_hash($createpassword, PASSWORD_DEFAULT);
        if (in_array($extention, $allowedExtention)) {
            if ($avatar["size"] < 1000000) {
                move_uploaded_file($avatar_tmpName, $avatar_destination);
            } else {
                $_SESSION["addUser"] = "File is too big";
            }
        } else {
            $_SESSION["addUser"] = "Please enter your file on JPG , PNG or JPEG";
        }
    }
}
if ($_SESSION["addUser"]) {
    header("Location: http://localhost/blog/admin/addUser.php");
} else {
    $InsertData = "INSERT INTO users (firstname,lastname,username,email,password,avatar,IsAdmin) VALUES ('$firstname','$lastname','$username','$email','$hashedPass','$avatar_name','$isAdmin')";
    $result = mysqli_query($conn, $InsertData);
    if ($result) {
        $_SESSION["success"] = "Added user Successfully";
        header("Location: http://localhost/blog/admin/manageUser.php");
    }
}



?>