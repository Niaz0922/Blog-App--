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

    <?php
    include "../partials/header.php";
    include "config/database.php";
    $sql = "SELECT *FROM posts";
    $result = mysqli_query($conn, $sql);

    //checking that the user is admin or not
    if(isset($_SESSION["admin"])){
        $Isadmin = true;
    }else{
        $Isadmin = false;
    }


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
                            <th>Description</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            <th>Fetured</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                            //checking that the blog is fetured or not
                            function CheckingPostIsfetured($rowPost){
                                switch($rowPost["isFetured"]){
                                    case $rowPost == 0:
                                        $GLOBALS['isfeturedAdmin'] = "No";
                                       break;
                                  default:
                                   $GLOBALS['isfeturedAdmin'] = "Yes";
                                   break;
                                }
                            }
                            
                            if($Isadmin){
                                while($rowPost = mysqli_fetch_array($result)){
                                    CheckingPostIsfetured($rowPost);
                                   
                                echo '
                                <tr>
                                    <td>'.$rowPost["title"].'</td>
                                    <td>Category</td>
                                    <td><a href="http://localhost/blog/admin/editpost.php?id='.$row["id"].'" target="_blank" class="btn">Edit</a></td>
                                    <td><a href="" class="btnREd">Delete</a></td>
                                    <td>'.$isfeturedAdmin.'</td>
                                </tr>
                                ';
                                }
                            }else{
                                $currentUserId = $row["id"];
                                $sql = "SELECT *FROM posts WHERE userId = '$currentUserId'";
                                $resultPost = mysqli_query($conn,$sql);
                                if(mysqli_num_rows($resultPost) == 0){
                                    echo '<script>alert("You Have No Posts")</script>';
                                }else{
                                    while($rowNoAdmin = mysqli_fetch_array($resultPost)){
                                        CheckingPostIsfetured($rowNoAdmin);
                                       
                                    echo '
                                    <tr>
                                        <td>'.$rowNoAdmin["title"].'</td>
                                        <td>Category</td>
                                        <td><a href="http://localhost/blog/admin/editpost.php?id='.$row["id"].'" target="_blank" class="btn">Edit</a></td>
                                        <td><a href="" class="btnREd">Delete</a></td>
                                        <td>'.$isfeturedAdmin.'</td>
                                    </tr>
                                    ';
                                    }

                                }


                            }

                                    
                            
                        
                            
                               
                                    
                       
                                
                            ?>
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
   

    
        
