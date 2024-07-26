<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Niaz Blog</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/5633e145fd.js" crossorigin="anonymous"></script>
</head>
<!-- ========================================= Nav Section Starts ================================ -->
<body>
<?php
    include "partials/header.php";
    include "admin/config/database.php";
    if(isset($_GET["id"])){
        $id = $_GET["id"];
        $sqlCategory = "SELECT *FROM categories WHERE id = '$id'";
        $sqlResult = mysqli_query($conn,$sqlCategory);
        $categoryFetch = mysqli_fetch_assoc($sqlResult);



//getting the post according to the above id-------------------

        $Post = "SELECT *FROM posts WHERE category_id = '$id'";
        $postResult = mysqli_query($conn,$Post);
                

    }
  
  ?>
    <!-- ========================================= Nav Section Ends ================================ -->
    <section class="catName">
        <div class="container cat-container">
            <h2><?php echo $categoryFetch["title"] ?></h2>
        </div>
    </section>
    <!-- ========================================= Blog Section starts ================================ -->
    <section class="posts">
        <div style="margin-bottom:200px;" class="container post-container">
            <?php
                if(mysqli_num_rows($postResult) > 0){
                    while($posts = mysqli_fetch_assoc($postResult)){
//getting user information---------------------------------------------
                    $userId = $posts["userId"];
                    $sql = "SELECT *FROM users WHERE id = '$userId'";
                    $user_result = $conn->query($sql);
                    $userInfo = mysqli_fetch_assoc($user_result);
                    $date = $posts["date"];
                        echo '
                        <article class="post">
                        <div class="post-thumbnail">
                            <img src="../thumbnail/'.$posts["thumbnail"].'" alt="">
                        </div>
                        <div class="post-info">
                            <a href="" class="category-button">Greece</a>
                            <h3 class="post-title">
                                <a href="post.php?id='.$posts['id'].'">'.$posts["title"].'</a>
                            </h3>
                            <p class="post-body">
                               '.$posts["description"].'
                            </p>
                            <div class="author">
                                <div class="post-author-avatar">
                                    <img src="../images/'.$userInfo["avatar"].'" alt="">
                                </div>
                                <div class="post-atuhor-info">
                                    <h5>By: '.$userInfo["username"].'</h5>
                                    <small>'. date("M d,Y - H:i", strtotime($date)) .'</small>
                                </div>
                            </div>
                        </div>
                    </article>
                        ';
                    }

                }else{
                    echo '            
                        <h2 style="position:absolute;left:450px;">No Post Available in this Category</h2>
                    ';
                }
            ?>
           
        </div>
    </section>
    <!-- ========================================= Blog Section Ends ================================ -->
    <!-- ========================================= Foooter starts ================================ -->
    <?php
    include "partials/footer.php"
  
  ?>

</body>
</html>