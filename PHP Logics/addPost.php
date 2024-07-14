<?php
include "../admin/config/database.php";
session_start();
if (isset($_POST["submit"])) {
    //geting the inputs
    $title = $_POST["Title"];
    $desc = $_POST["desc"];
    $category = $_POST["category"];
    $userID = $_GET["id"];
    $avatar = $_FILES["thumbnail"];
    //checking that the title is existed or not
    $sql = "SELECT *FROM posts WHERE title = '$title'";
    $result = mysqli_query($conn, $sql);


    if (mysqli_num_rows($result) == 0) {
        //validating the thumbnail
        include "validatingFile.php";
        if (in_array($extention, $allowedExtention)) {
            if ($avatar["size"] < 2000000) {
                $location = "../thumbnail/" . $avatar_name;
                move_uploaded_file($avatar_tmpName, $location);
            } else {
                $_SESSION["post"] = "File is too big . Reduce the file size and image Size";
            }

        } else {
            $_SESSION["post"] = "Please enter your file on JPG , PNG or JPEG";

        }

    } else {
        $_SESSION["post"] = "Title exist";
    }

}
//if every condition is completed then the blog will post
if ($_SESSION["post"]){
    header("Location: http://localhost/blog/admin/add-post.php");
} else{
    //fetching the category id
    $sqlCat = "SELECT *FROM categories WHERE title = '$category'";
    $resultCat = $conn->query($sqlCat);
    $row = $resultCat->fetch_assoc();
    $catID = $row["id"];

    //insert the data into the database
    $sql = "INSERT INTO posts (title,description,category_id ,userId,thumbnail) VALUES('$title','$desc','$catID','$userID','$avatar_name')";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        $_SESSION["PostSuccess"] = "Blog posted successfuly";
        header("Location: http://localhost/blog/admin/dashboard.php");
    }else{
        header("Location: http://localhost/blog/admin/add-post.php");
        $_SESSION["post"] = "fuck";
    }
}




?>