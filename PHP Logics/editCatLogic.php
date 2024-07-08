<?php
include "../admin\config\database.php";
session_start();


if(isset($_POST["submit"])){

        $title = $_POST["Title"];
        $desc = $_POST["desc"];
        $id = $_POST["id"];

        $sql  = "UPDATE `categories` SET `title` = '$title' , `description` = '$desc'  WHERE `categories`.`id` = '$id';";
        $result = mysqli_query($conn,$sql);
        if($result){
            $_SESSION["editcatSuccess"] = true;
            header("Location: http://localhost/blog/admin/manageCategory.php");
        }

}


?>