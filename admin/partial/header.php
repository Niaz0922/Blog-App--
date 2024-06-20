<?php
require "config/database.php";
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
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="service.php">Services</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li class="nav-profile">
                    <div class="avatar">
                        <img src="images/avatar1.jpg" alt="">
                    </div>
                    <ul>
                        <li><a href="admin/dashboard.php">Dahshboard</a></li>
                        <li><a href="admin/logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
            </ul>
            <button class="open-nav"><i class="fa-solid fa-bars"></i></button>
            <button class="close-nav"><i class="fa-solid fa-xmark"></i></button>
        </div>
    </nav>
