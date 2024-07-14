  <?php          
            $BlogSql = "SELECT * FROM posts";
            $BlogResult = mysqli_query($conn,$BlogSql);
            while($blogs = mysqli_fetch_assoc($BlogResult)){



                //fetching the categories
                    $categoryID = $blogs["category_id"];
                    $catid = "SELECT *FROM categories WHERE id = '$categoryID'";
                    $catResult = mysqli_query($conn,$catid);
                    $resultCatId = mysqli_fetch_assoc($catResult);
                    $categoryBlog = $resultCatId["title"];
                
                



                //Getting user information
                $userId = $blogs["userId"];
                $sql = "SELECT *FROM users WHERE id = '$userId'";
                $user_result = $conn->query($sql);
                $userInfo = mysqli_fetch_assoc($user_result);
                $date = $blogs["date"];

                echo '
                <article class="post">
                <div class="post-thumbnail">
                    <img src="thumbnail/'.$blogs["thumbnail"].'" alt="">
                </div>
                <div class="post-info">
                    <a href="http://localhost/blog/categoryPost.php?id='.$resultCatId["id"].'" class="category-button">'.$categoryBlog.'</a>
                    <h3 class="post-title">
                        <a href="http://localhost/blog/post.php?id='. $blogs["id"] .'">'.$blogs["title"].'</a>
                    </h3>
                    <p class="post-body">
                        '.$blogs["description"].'
                    </p>
                    <div class="author">
                        <div class="post-author-avatar">
                            <img src="images/'.$userInfo["avatar"].'" alt="">
                        </div>
                        <div class="post-atuhor-info">
                            <h5>'.$userInfo["username"].'</h5>
                            <small>'. date("M d,Y - H:i", strtotime($date)) .'</small>
                        </div>
                    </div>
                </div>
                 </article>
                     ';
                 }
?>