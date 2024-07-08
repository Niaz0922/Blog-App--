<?php 
include "../admin/config/database.php";

   
session_start();

    if(isset($_POST["submit"])){
        $title = $_POST["Title"];
        $desc = $_POST["PostBody"];

        $sql = "INSERT INTO categories (title,description) VALUES ('$title','$desc')";
        $result = mysqli_query($conn,$sql);
        if($result){
            $_SESSION["addedCat"] = true;
            header("Location: http://localhost/blog/admin/manageCategory.php");
        }else{
            $_SESSION["categoryFailed"] = "Failed to add category";
            header("Locaiton: http://localhost/blog/admin/addCategory.php");
        }
}
?>