<?php
    include "../admin/config/database.php";
    session_start();
    $postID = $_GET["id"]; 
    if(isset($postID)){
        //fetching the data from database
        $sql = "SELECT *FROM posts WHERE id = '$postID'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        //deleting the thumbnail from images folder
        $thumbnail_Name = $row["thumbnail"];
        $thumbnail_Path = "../thumbnail/" . $thumbnail_Name;

        if($thumbnail_Path){
            unlink($thumbnail_Path);
            //delete the post from database
            $delete_Post_Sql = "DELETE FROM posts WHERE id = '$postID'";
            $Delete_post_query = mysqli_query($conn,$delete_Post_Sql);
            if($Delete_post_query){
                $_SESSION["deletePostSuccess"] = "Post Deleted Successfully";
                header("Location: http://localhost/blog/admin/dashboard.php");
            } 
        }

    }


?>