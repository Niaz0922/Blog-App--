<?php
include "../admin/config/database.php";
session_start();
if (isset($_POST["submit"])) {
    //geting the input values
    $title = stripcslashes($_POST["title"]);
    $desc = stripcslashes($_POST["desc"]);
    $category = $_POST["category"];
    $avatar = $_FILES["UpdatedThumbnail"];
    $PostId = $_GET["id"];
    $isfetured = $_POST["ISfetured"];
    $previousThumbnail = $_POST["PreviousThumbnailName"];
    //getting the category id according to the category name
    function categoryId($conn, $category)
    {
        $categoryIdUpdate = "SELECT *FROM categories WHERE title = '$category'";
        $resultCatUpdate = $conn->query($categoryIdUpdate);
        $CategoryUpdateRow = mysqli_fetch_assoc($resultCatUpdate);
        $GLOBALS['cat_id_category'] = $CategoryUpdateRow["id"];
    }
    //passing variable $category and $conn to CategoryId funciton
    categoryId($conn, $category);
    //deleting the existing thumbnail if the new thumbnail is available
    if ($avatar['name']) {
        $previous_thumbnail_path = "../../thumbnail/".$previousThumbnail;
        if ($previous_thumbnail_path) {
            unlink($previous_thumbnail_path);
        }

        //validating the file
        include "validatingFile.php";
        //checking that the file extention is jpg,png or jpeg
        if (in_array($extention, $allowedExtention)) {
            //checking that the file size is below 2mb
            if ($avatar["size"] < 2000000) {
                $location = "../../thumbnail/".$avatar_name;
                move_uploaded_file($avatar_tmpName, $location);
            } else {
                $_SESSION["editPost"] = "File is too big . Reduce the file size and image Size";
            }
        } else {
            $_SESSION["editPost"] = "Please enter your file on JPG , PNG or JPEG";
        }
    }
}


//end of submit if statement





//checking that there is no error
if (isset($_SESSION["editPost"])) {
    header("Location: http://localhost/blog/admin/editpost.php");
} else {
    //after validate everthing update the post
    $thumbnail_insert = $avatar_name ?? $previousThumbnail;
    $updatePost = "UPDATE posts SET title='$title' , description = '$desc' , category_id = '$cat_id_category' , thumbnail = '$thumbnail_insert' , isFetured = '$feture' WHERE id = '$PostId'";
    $updateResult = mysqli_query($conn, $updatePost);
    if ($updateResult) {
        $_SESSION["updatePostSuccess"] = "Post Edited Successfully";
        header("Location: http://localhost/blog/admin/dashboard.php");
    }
}