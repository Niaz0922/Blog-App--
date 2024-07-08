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
<?php include "../partials/header.php";?>
<?php if(isset($_SESSION["SignIn1"]) OR isset($_COOKIE["username"])) : ?>
    <?php


?>
    <section class="dashboard">
        <div class="container dashboard_container">
            <?php
            include "partial/dashboardPartial.php"
            ?>
            <div class="category">
                <button class="firstButton"><i class="fa-solid fa-arrow-left"></i></button>
                <button class="secondButton"><i class="fa-solid fa-arrow-right"></i></button>
                <h2>Manage Posts</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            <th>Admin</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Art</td>
                            <td>Art</td>
                            <td><a href="edit_category.php" class="btn">Edit</a></td>
                            <td><a href="" class="btnREd">Delete</a></td>
                            <td>Art</td>
                        </tr>
                        <tr>
                            <td>Art</td>
                            <td>Art</td>
                            <td><a href="edit_category.php" class="btn">Edit</a></td>
                            <td><a href="" class="btnREd">Delete</a></td>
                            <td>Art</td>
                        </tr>
                        <tr>
                            <td>Art</td>
                            <td>Art</td>
                            <td><a href="edit_category.php" class="btn">Edit</a></td>
                            <td><a href="" class="btnREd">Delete</a></td>
                            <td>Art</td>
                        </tr>
                        <tr>
                            <td>Art</td>
                            <td>Art</td>
                            <td><a href="edit_category.php" class="btn">Edit</a></td>
                            <td><a href="" class="btnREd">Delete</a></td>
                            <td>Art</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        </setion>
        <!-- ========================================= Foooter starts ================================ -->
        <footer>
        <div class="footer-socials">
            <a href="https://www.youtube.com/" target="_blank"><i class="fa-brands fa-youtube"></i></a>
            <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://www.linkedin.com/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
            <a href="https://www.twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a>
        </div>
        <div class="container footer-container">
            <article>
                <h4>Categories</h4>
                <ul>
                    <li><a href="">Business</a></li>
                    <li><a href="">Art</a></li>
                    <li><a href="">Coding</a></li>
                    <li><a href="">Help</a></li>
                    <li><a href="">Music</a></li>
                </ul>
            </article>
            <article>
                <h4>Support</h4>
                <ul>
                    <li><a href="">Business</a></li>
                    <li><a href="">Art</a></li>
                    <li><a href="">Coding</a></li>
                    <li><a href="">Help</a></li>
                    <li><a href="">Music</a></li>
                </ul>
            </article>
            <article>
                <h4>Blog</h4>
                <ul>
                    <li><a href="">Business</a></li>
                    <li><a href="">Art</a></li>
                    <li><a href="">Coding</a></li>
                    <li><a href="">Help</a></li>
                    <li><a href="">Music</a></li>
                </ul>
            </article>
            <article>
                <h4>Peramalinks</h4>
                <ul>
                    <li><a href="">Business</a></li>
                    <li><a href="">Art</a></li>
                    <li><a href="">Coding</a></li>
                    <li><a href="">Help</a></li>
                    <li><a href="">Music</a></li>
                </ul>
            </article>
        </div>
    </footer>
    <script src="../javascript/main.js"></script>
    <?php else:?>
        <script>
            alert("You are not an admin");
            location.href = "http://localhost/blog/";
        </script>
        </body>
    <?php endif?>
   

    
        
