<section class="posts">
        <div class="container post-container">
  <?php
            
            $limit = 3;
            if(!isset($_GET["page"])){
                $page = 1;
            }else{
                $page = $_GET["page"];
            }
            $offset  = ($page - 1) * $limit;
            $BlogSql = "SELECT * FROM posts LIMIT {$offset} , {$limit}";
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
                    <img style="height:200px;" src="../../thumbnail/'.$blogs["thumbnail"].'" alt="">
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
                        <a href="http://localhost/blog/profile.php?id='.$userInfo["id"].'">
                            <img src="../../images/'.$userInfo["avatar"].'" alt="">
                        </a>
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
        </div>
    </section>
        <ul class="pagination">
        <?php
            if($page > 1){
                echo '<li><a href="'.$_SERVER['PHP_SELF'].'?page='.($page - 1).'" class="btn">Prev</a></li>';
            }
        ?>

        
        <?php
        $posts = "SELECT * FROM posts";
        $result_records = mysqli_query($conn,$posts);
       if(mysqli_num_rows($result_records) > 0){
            $limit = 3;
            $totalRecords = mysqli_num_rows($result_records);
            $Total_page = ceil($totalRecords / $limit);
            for($x = 1;$x <= $Total_page ; $x++){
                if ($x == $page) {
                    $active = "activePaginaiton";
                } else {
                    $active = "";
                }
                echo '<li class="'.$active.' btn"><a href="'.$_SERVER['PHP_SELF'].'?page=' . $x . '">' . $x . '</a></li> ';
            }

       }
?>
 <?php
         if($Total_page > $page){
             echo '<li><a href="'.$_SERVER['PHP_SELF'].'?page='.($page + 1).'" class="btn">Next</a></li>';
                           
            }
    ?>


</ul>