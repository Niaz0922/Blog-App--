<?php
session_start();
include "C:/xampp/htdocs/blog/admin/config/database.php";
//checking that the user is logged in or not and geting the data from database

if (isset($_COOKIE["username"])) {
    $username = $_COOKIE["username"];
    commonSQl($username,$conn);
} else{
    $username = $_SESSION["SignIn1"];
    commonSQl($username,$conn);
 }

//getting the user information
function commonSQl($username,$conn){
    $sql = "SELECT *FROM users WHERE username = '$username'";
    $result = $conn->query($sql);
    if ($result) {
         $GLOBALS['row'] = $result->fetch_assoc();
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Niaz Blog</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/5633e145fd.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav>

        <div class="contianer nav-container">
            <a href="http://localhost/blog/index.php" class="logo">EGATOR</a>
            <ul class="nav-items">
                <li><a href="http://localhost/blog/blog.php">Blog</a></li>
                <li><a href="http://localhost/blog/about.php">About</a></li>
                <li><a href="http://localhost/blog/service.php">Services</a></li>
                <li><a href="http://localhost/blog/contact.php">Contact</a></li>
                <li class="nav-profile">
                    <?php
                    //checking that the user is logged in or not
                    if (isset($_SESSION["SignIn1"]) OR isset($_COOKIE["username"])){
                        echo '
                            <div class="avatar">
                            <img src="http://localhost/blog/images/' . $row["avatar"] . '" alt="">
                        </div>
                            ';
                    } else {
                        echo '<li><a  href="signIn.php">Sign In</a></li>';
                    }

                    ?>

                    <ul>
                        <?php
                        //checking that the user is logged in or not
                        if (isset($_SESSION["SignIn1"]) OR isset($_COOKIE["username"])) {
                            echo '<li><a href="http://localhost/blog/admin/dashboard.php">Dahshboard</a></li>';
                            echo ' <li><a href="http://localhost/blog/profile.php">Profile</a></li>';
                            echo ' <li><a href="http://localhost/blog/partials/logout.php">Logout</a></li>';

                            //Checking that the user is admin or author
                            if ($row["IsAdmin"] == 1) {
                                $_SESSION["admin"] = "Admin";
                            }else{
                                unset($_SESSION["admin"]);
                            }
                        }
                        ?>
                    </ul>
                </li>
            </ul>
            </ul>
            <button class="open-nav"><i class="fa-solid fa-bars"></i></button>
            <button class="close-nav"><i class="fa-solid fa-xmark"></i></button>
        </div>
    </nav>

  