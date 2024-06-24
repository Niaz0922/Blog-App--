<?php
session_start();
include "C:/xampp/htdocs/blog/admin/config/database.php";
$dashboard = false;

if (isset($_SESSION["SignIn1"])) {
    $username = $_SESSION["SignIn1"];
    $sql = "SELECT *FROM users WHERE username = '$username'";
    $result = $conn->query($sql);
    if ($result) {
        $row = $result->fetch_assoc();
    }
}

if ($_SERVER['REQUEST_URI'] == "blog/admin/dashboard.php") {
    if ($row["IsAdmin"] == 1) {
        header("Location:http://localhost/blog/admin/dashboard.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Niaz Blog</title>
    <link rel="stylesheet" href="../style.css">
    <script src="https://kit.fontawesome.com/5633e145fd.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav>

        <div class="contianer nav-container">
            <a href="index.php" class="logo">EGATOR</a>
            <ul class="nav-items">
                <li><a href="http://localhost/blog/index.php">Home</a></li>
                <li><a href="../about.php">About</a></li>
                <li><a href="../service.php">Services</a></li>
                <li><a href="../contact.php">Contact</a></li>
                <li class="nav-profile">
                    <?php
                    if (isset($_SESSION["SignIn1"])) {
                        echo '
                            <div class="avatar">
                            <img width=100 height=100 src="../images/' . $row["avatar"] . '" alt="">
                        </div>
                            ';
                    } else {
                        echo '<li><a class="HeaderSign"  href="signIn.php">Sign In</a></li>';
                    }

                    ?>

                    <ul>

                        <?php
                        if (isset($_SESSION["SignIn1"])) {
                            echo ' <li><a href="admin/dashboard.php">Dahshboard</a></li>';
                            if ($row["IsAdmin"] == 1) {
                                $_SESSION["admin"] = "Admin";
                            } else {
                                unset($_SESSION["admin"]);
                            }
                            echo ' <li><a href="../partials\logout.php">Logout</a></li>';
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