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
    //retriving the categories from database
    include "admin/config/database.php"; 
    $sql = "SELECT *FROM categories";
    $result = $conn->query($sql);
    ?>
    <!-- ========================================= Fetured Section Starts ================================ -->
    <?php
           include "PHP Logics/feturePostFetch.php";


    ?>
    <section class="fetured">
        <div class="container fetured-container">
            <div class="post-thumbnail">
                <img src="../thumbnail/<?php echo $feturedPost["thumbnail"] ?>" alt="No">
            </div>
            <div class="post-info">
                <a href="" class="category-button"><?php echo $FeturedCatBlog ?></a>
                <h2 class="post-title"><a href="post.php"><?php echo $feturedPost["title"] ?></a></h2>
                <p class="post-body">
                    <?php echo $feturedPost["description"] ?>
                </p>
                <div class="author">
                    <div class="post-author-avatar">
                        <img src="../images/<?php echo $feturedUserInfo["avatar"] ?>" alt="Failed">
                    </div>
                    <div class="post-atuhor-info">
                        <h5><?php echo $feturedUserInfo["username"]?></h5>
                        <small><?php echo date("M d,Y - H:i", strtotime($feturedUserInfo["date"])) ?></small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================= Fetured Section Ends ================================ -->
    <!-- ========================================= Blog Section starts ================================ -->
    
        <?php
        //pagination
        
            include "PHP Logics/fetchpost.php";
        ?>
        
    <!-- ========================================= Blog Section Ends ================================ -->
    <!-- ========================================= Pagination Section Starts ================================ -->
   
        
    </div>












    <!-- ========================================= Paginaiton Section Ends ================================ -->
    <!-- ========================================= Category Buttons Section Starts ========================-->
    <section class="category-buttons">
        <div class="container container-buttons">
            <!-- fetching the data from categories table -->
            <?php while($row = mysqli_fetch_assoc($result)){?>
            <a href="categoryPost.php?id=<?php echo $row["id"] ?>" class="category-button"><?php echo $row["title"] ?></a>
           <?php } ?>
    </section>
    <!-- ========================================= Category Buttons Ends ================================ -->
    <!-- ========================================= Foooter starts ================================ -->
<?php
include "partials/footer.php"
?>
    
</body>
</html>