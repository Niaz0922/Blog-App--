<?php
session_start();
include "../admin\config\database.php";
if (isset($_POST["submit"])) {
    $username = $_POST["Username"];
    $password = $_POST["Pass"];

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
            header("Location: http://localhost/blog/");
        } else {
            header("Location: http://localhost/blog/signIn.php");
            $_SESSION["signInValidation"] = "Wrong password or password";
        }
    } else {
        header("Location: http://localhost/blog/signIn.php");
        $_SESSION["signInValidation"] = "Wrong Username or password";
    }
}
