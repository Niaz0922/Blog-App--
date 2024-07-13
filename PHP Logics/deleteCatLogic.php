<?php
    include "../admin/config/database.php";
    $id = $_GET["id"];
    if(isset($id)){
        //updating the category id of all posts that belongs to this category
        $post_belongs_toThiscategory = "SELECT * FROM posts WHERE category_id = '$id'";
        $result = mysqli_query($conn,$post_belongs_toThiscategory);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                $Update_catId = "UPDATE posts SET category_id = 19 WHERE category_id = '$id'";
                $updateResult = mysqli_query($conn,$Update_catId);
            }
        }








        //deleting the category
        $sql = "DELETE FROM categories WHERE id = '$id'";
        $result = mysqli_query($conn,$sql);
        if($result){
            session_start();
            $_SESSION["deleteCat"] = true;
            header("Location: http://localhost/blog/admin/manageCategory.php");
        }
    }

?>