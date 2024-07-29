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
    $id = $_GET["id"];

    if (isset($id)) {
        $sqlPost = "SELECT *FROM posts WHERE id = '$id'";
        $sqlResult = mysqli_query($conn, $sqlPost);
        $singlePost = mysqli_fetch_assoc($sqlResult);

        //Getting user information
        $userId = $singlePost["userId"];
        $sql = "SELECT *FROM users WHERE id = '$userId'";
        $user_result = $conn->query($sql);
        $userInfo = mysqli_fetch_assoc($user_result);
        $date = $singlePost["date"];

    }

    ?>
    <!-- ========================================= Nav Section Ends ================================ -->
    <!-- ========================================= Post Section starts ================================ -->
    <section class="singlePost">
        <div class="container singlePost_container">
            <h3><?php echo $singlePost['title'] ?></h2>
                <div class="author">
                    <div class="post-author-avatar">
                        <a href="http://localhost/blog/profile.php?id=<?php echo $userInfo['id'] ?>">
                            <img src="../images/<?php echo $userInfo["avatar"] ?>" alt="">
                        </a>
                        
                    </div>
                    <div class="post-atuhor-info">
                        <h5><?php echo $userInfo["username"] ?></h5>
                        <small><?php echo date("M d,Y - H:i", strtotime($date)) ?></small>
                    </div>
                </div>
                <div class="singlepost_thumbnail">
                    <img src="../thumbnail/<?php echo $singlePost["thumbnail"] ?>" alt="">
                </div>
                <p>
                    <?php echo $singlePost["description"] ?>
                </p>

        </div>


    </section>
    <!-- ========================================= Post Section Ends ================================ -->
    <!-- ========================================= Foooter starts ================================ -->
    <?php
    include "partials/footer.php"

        ?>
</body>

</html>