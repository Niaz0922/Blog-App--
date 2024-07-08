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
    include "admin\config\database.php";
    $sql = "SELECT *FROM categories";
    $result = $conn->query($sql);
  
  ?>
    <!-- ========================================= Nav Section Ends ================================ -->
    <!-- ========================================= Search Section Starts ================================ -->
    <section class="search_bar">
        <form action="" class="container search-container" method="POST">
            <div>
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="search" name="" placeholder="Search" id="">
                <button type="submit" class="btn">Go</button>
            </div>
        </form>
    </section>
    <!-- ========================================= Search Section Ends ================================ -->
    <!-- ========================================= Blog Section starts ================================ -->
    <section class="posts">
        <div class="container post-container">
            <article class="post">
                <div class="post-thumbnail">
                    <img src="images/blog2.jpg" alt="">
                </div>
                <div class="post-info">
                    <a href="" class="category-button">Greece</a>
                    <h3 class="post-title">
                        <a href="post.php">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime,
                            excepturi!</a>
                    </h3>
                    <p class="post-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit possimus, asperiores ex quas culpa
                        blanditiis recusandae cumque.
                    </p>
                    <div class="author">
                        <div class="post-author-avatar">
                            <img src="images/avatar3.jpg" alt="">
                        </div>
                        <div class="post-atuhor-info">
                            <h5>By: John Goru</h5>
                            <small>June 14, 2024</small>
                        </div>
                    </div>
                </div>
            </article>
            <article class="post">
                <div class="post-thumbnail">
                    <img src="images/blog3.jpg" alt="">
                </div>
                <div class="post-info">
                    <a href="" class="category-button">Greece</a>
                    <h3 class="post-title">
                        <a href="post.html">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime,
                            excepturi!</a>
                    </h3>
                    <p class="post-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit possimus, asperiores ex quas culpa
                        blanditiis recusandae cumque.
                    </p>
                    <div class="author">
                        <div class="post-author-avatar">
                            <img src="images/avatar4.jpg" alt="">
                        </div>
                        <div class="post-atuhor-info">
                            <h5>By: John Goru</h5>
                            <small>June 14, 2024</small>
                        </div>
                    </div>
                </div>
            </article>
            <article class="post">
                <div class="post-thumbnail">
                    <img src="images/blog4.jpg" alt="">
                </div>
                <div class="post-info">
                    <a href="" class="category-button">Greece</a>
                    <h3 class="post-title">
                        <a href="post.html">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime,
                            excepturi!</a>
                    </h3>
                    <p class="post-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit possimus, asperiores ex quas culpa
                        blanditiis recusandae cumque.
                    </p>
                    <div class="author">
                        <div class="post-author-avatar">
                            <img src="images/avatar5.jpg" alt="">
                        </div>
                        <div class="post-atuhor-info">
                            <h5>By: John Goru</h5>
                            <small>June 14, 2024</small>
                        </div>
                    </div>
                </div>
            </article>
            <article class="post">
                <div class="post-thumbnail">
                    <img src="images/blog5.jpg" alt="">
                </div>
                <div class="post-info">
                    <a href="" class="category-button">Greece</a>
                    <h3 class="post-title">
                        <a href="post.html">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime,
                            excepturi!</a>
                    </h3>
                    <p class="post-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit possimus, asperiores ex quas culpa
                        blanditiis recusandae cumque.
                    </p>
                    <div class="author">
                        <div class="post-author-avatar">
                            <img src="images/avatar8.jpg" alt="">
                        </div>
                        <div class="post-atuhor-info">
                            <h5>By: John Goru</h5>
                            <small>June 14, 2024</small>
                        </div>
                    </div>
                </div>
            </article>
            <article class="post">
                <div class="post-thumbnail">
                    <img src="images/blog6.jpg" alt="">
                </div>
                <div class="post-info">
                    <a href="" class="category-button">Greece</a>
                    <h3 class="post-title">
                        <a href="post.html">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime,
                            excepturi!</a>
                    </h3>
                    <p class="post-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit possimus, asperiores ex quas culpa
                        blanditiis recusandae cumque.
                    </p>
                    <div class="author">
                        <div class="post-author-avatar">
                            <img src="images/avatar1.jpg" alt="">
                        </div>
                        <div class="post-atuhor-info">
                            <h5>By: John Goru</h5>
                            <small>June 14, 2024</small>
                        </div>
                    </div>
                </div>
            </article>
            <article class="post">
                <div class="post-thumbnail">
                    <img src="images/blog7.jpg" alt="">
                </div>
                <div class="post-info">
                    <a href="" class="category-button">Greece</a>
                    <h3 class="post-title">
                        <a href="post.html">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime,
                            excepturi!</a>
                    </h3>
                    <p class="post-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit possimus, asperiores ex quas culpa
                        blanditiis recusandae cumque.
                    </p>
                    <div class="author">
                        <div class="post-author-avatar">
                            <img src="images/avatar10.jpg" alt="">
                        </div>
                        <div class="post-atuhor-info">
                            <h5>By: John Goru</h5>
                            <small>June 14, 2024</small>
                        </div>
                    </div>
                </div>
            </article>
            <article class="post">
                <div class="post-thumbnail">
                    <img src="images/blog8.jpg" alt="">
                </div>
                <div class="post-info">
                    <a href="" class="category-button">Greece</a>
                    <h3 class="post-title">
                        <a href="post.html">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime,
                            excepturi!</a>
                    </h3>
                    <p class="post-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit possimus, asperiores ex quas culpa
                        blanditiis recusandae cumque.
                    </p>
                    <div class="author">
                        <div class="post-author-avatar">
                            <img src="images/avatar11.jpg" alt="">
                        </div>
                        <div class="post-atuhor-info">
                            <h5>By: John Goru</h5>
                            <small>June 14, 2024</small>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>
    <!-- ========================================= Blog Section Ends ================================ -->
    <!-- ========================================= Category Buttons Section Starts ========================-->
    <section class="category-buttons">
        <div class="container container-buttons">
        <?php while($row = mysqli_fetch_assoc($result)){?>
                <a href="" class="category-button"><?php echo $row["title"] ?></a>
               <?php } ?>
        </div>
    </section>
    <!-- ========================================= Category Buttons Ends ================================ -->
    <?php
    include "partials/footer.php"
  
  ?>

</body>
</html>