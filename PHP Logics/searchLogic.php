<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Niaz Blog</title>
    <link rel="stylesheet" href="../style.css">
    <script src="https://kit.fontawesome.com/5633e145fd.js" crossorigin="anonymous"></script>
</head>
<!-- ========================================= Nav Section Starts ================================ -->

<body>
    <?php


    include "../partials/header.php";
    include "../admin/config/database.php";
    if (isset($_GET["search"]) && isset($_GET["searchBTN"])) {
        $search = filter_var($_GET["search"], FILTER_SANITIZE_SPECIAL_CHARS);
        $sql = "SELECT *FROM posts WHERE title LIKE '%$search%'";
        $result = mysqli_query($conn, $sql);
    } else {
        header("Location: http://localhost/blog/blog.php");
        die();
    }
if(mysqli_num_rows($result)){
    while ($blogs = mysqli_fetch_assoc($result)) {
        $userId = $blogs["userId"];
        $sql = "SELECT *FROM users WHERE id = '$userId'";
        $user_result = $conn->query($sql);
        $userInfo = mysqli_fetch_assoc($user_result);
        $date = $blogs["date"];




        //fetching the categories
        $categoryID = $blogs["category_id"];
        $catid = "SELECT *FROM categories WHERE id = '$categoryID'";
        $catResult = mysqli_query($conn, $catid);
        $resultCatId = mysqli_fetch_assoc($catResult);
        $categoryBlog = $resultCatId["title"];
        echo '
        <section class="posts" style="margin-top:10rem;">
        <div class="container post-container">
        <article class="post">
        <div class="post-thumbnail">
            <img src="../../thumbnail/' . $blogs["thumbnail"] . '" alt="">
        </div>
        <div class="post-info">
            <a href="http://localhost/blog/categoryPost.php?id=' . $resultCatId["id"] . '" class="category-button">' . $categoryBlog . '</a>
            <h3 class="post-title">
                <a href="http://localhost/blog/post.php?id=' . $blogs["id"] . '">' . $blogs["title"] . '</a>
            </h3>
            <p class="post-body">
                ' . $blogs["description"] . '
            </p>
            <div class="author">
                <div class="post-author-avatar">
                <a href="http://localhost/blog/profile.php?id='.$userInfo["id"].'">
                   <img src="../../images/' . $userInfo["avatar"] . '" alt="">
                </a>   
                </div>
                <div class="post-atuhor-info">
                    <h5>' . $userInfo["username"] . '</h5>
                    <small>' . date("M d,Y - H:i", strtotime($date)) . '</small>
                </div>
            </div>
        </div>
         </article>
         </div>
    </section>
         ';
    }
}else{
    $_SESSION["search"] = "No post found";
    header("Location: http://localhost/blog/blog.php");
}



    include "../partials/footer.php"

    ?>

</body>

</html>