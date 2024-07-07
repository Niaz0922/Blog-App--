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
<?php include "../partials/header.php";
include "../adminCheck.php";
 ?>
    <section class="dashboard">
        <div class="container dashboard_container">
        <?php
            include "partial/dashboardPartial.php";
            include "config\database.php";
            if(isset($_SESSION["editUserSuccess"])){
                echo '<script>alert("User Information Updated Successfully")</script>';
                unset($_SESSION['editUserSuccess']);
            }
            ?>
            <div class="category">
                <button class="firstButton"><i class="fa-solid fa-arrow-left"></i></button>
                <button class="secondButton"><i class="fa-solid fa-arrow-right"></i></button>
                <h2>Manage Users</h2>
                <table>
                <thead>
                    <input type="hidden" name="sno" id="sno">
                            <tr>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                <th>Admin</th>
                            </tr>
                    <?php
                        //Fetching the data from database
                        $sql = "SELECT *FROM users";
                        $result = mysqli_query($conn,$sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            if($row["IsAdmin"] == 0){
                                $admin = "No";
                             }else{
                                $admin = "Yes";
                             }
                            echo '
                            
                        </thead>
                        <tbody>
                        <tr>
                            <td>'.$row["firstname"].'</td>
                            <td class="username">'.$row["username"].'</td>
                            <td><a href="http://localhost/blog/admin/edituser.php?id='.$row["id"] .'" target="_blank" class="btn" id="editUser">Edit</a></td>
                            <td><a href="http://localhost/blog/PHP Logics/EditUserDelete.php?id='.$row["id"] . '" class="btnREd">Delete</a></td>
                            <td>'. $admin .'</td>
                        </tr>
                    </tbody>
                            ';
                        }
                    
                    ?>
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
    <script src="../javascript/addUSer.js"></script>
 
</body>