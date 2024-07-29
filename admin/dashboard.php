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
    $isPost = false;
    $page = $_GET["page"];
    $limit = 3;
    if(!isset($_GET["page"])){
        $page = 1;
    }
    $offset  = ($page - 1) * $limit;
    $sql = "SELECT *FROM posts LIMIT {$offset} , 3";
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
                <?php
                    include "../PHP Logics/postEditSuccessmsg.php";
             ?>
                <table>
                    <thead>   
                        <tr>
                            <th>Title</th>
                            <th>Category</th>
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
                                while($rowPost = mysqli_fetch_assoc($result)){
                                    CheckingPostIsfetured($rowPost);
                                    //fetching the category title according the the post category id
                                    $categoryId = $rowPost["category_id"];
                                    $categorySQL = "SELECT *FROM categories WHERE id = '$categoryId'";
                                    $cateGoryResult = mysqli_query($conn,$categorySQL);
                                    $categoryTitle = mysqli_fetch_assoc($cateGoryResult);
                                   //fetching the post
                                echo '
                                <tr>
                                    <td>'.$rowPost["title"].'</td>
                                    <td>'. $categoryTitle["title"] .'</td>
                                    <td><a href="http://localhost/blog/admin/editpost.php?id='.$rowPost["id"].'" class="btn">Edit</a></td>
                                    <td><a href="http://localhost/blog/PHP Logics/deletePost.php?id='.$rowPost["id"].'" class="btnREd">Delete</a></td>
                                    <td>'.$isfeturedAdmin.'</td>
                                </tr>
                                ';
                                }
                            }else{
                                $currentUserId = $row["id"];
                                $sqlpost = "SELECT *FROM posts WHERE userId = '$currentUserId'";
                                $resultPost = mysqli_query($conn,$sqlpost);
                                if(mysqli_num_rows($resultPost) == 0){
                                    echo '<script>alert("You Have No Posts")</script>';
                                    $isPost = true;
                                }else{
                                    while($rowNoAdmin = mysqli_fetch_array($resultPost)){
                                        CheckingPostIsfetured($rowNoAdmin);
                                       
                                    echo '
                                    <tr>
                                        <td>'.$rowNoAdmin["title"].'</td>
                                        <td>Category</td>
                                        <td><a href="http://localhost/blog/admin/editpost.php?id='.$rowNoAdmin["id"].'" class="btn">Edit</a></td>
                                        <td><a href="http://localhost/blog/PHP Logics/deletePost.php?id='.$rowNoAdmin["id"].'" class="btnREd">Delete</a></td>
                                        <td>'.$isfeturedAdmin.'</td>
                                    </tr>
                                    ';
                                    }

                                }


                            }

                                    
                           
                        
                            
                               
                                    
                       
                                
                            ?>
                           
                    </tbody>
                  
                </table>
                <?php if(!$isPost) : ?>
                <ul class="pagination">
                    <?php
                        if($page > 1){
                           echo '<li><a href="http://localhost/blog/admin/dashboard.php?page='.($page - 1).'" class="btn">Prev</a></li>';
                        }
                    ?>

                        <?php 
                            $postSQl = "SELECT *FROM posts";
                            $resultPost = mysqli_query($conn, $postSQl);
                            if (mysqli_num_rows($resultPost) > 0) {
                                $limit = 3;
                                $total_posts = mysqli_num_rows($resultPost);
                                $total_pages = ceil($total_posts / $limit);
                                for ($x = 1; $x <= $total_pages; $x++) {
                                    if ($x == $page) {
                                        $active = "activePaginaiton";
                                    } else {
                                        $active = "";
                                    }
                            
                                    echo '<li class="'.$active.' btn"><a href="http://localhost/blog/admin/dashboard.php?page=' . $x . '">' . $x . '</a></li> ';
                                }
                            }
                        ?>

                                <?php
                        if($total_pages > $page){
                           echo '<li><a href="http://localhost/blog/admin/dashboard.php?page='.($page + 1).'" class="btn">Next</a></li>';
                           
                        }
                    ?>
                    

                               
                    <?php endif?>
                                    
                </ul>
            </div>
        </div>
        </setion>
        <!-- ========================================= Foooter starts ================================ -->
       <?php include "../partials/footer.php" ?>
    <script src="../javascript/main.js"></script>
   

    
        
