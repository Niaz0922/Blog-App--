<?php
    include "../admin/config/database.php";
    if(isset($_GET["id"])){
        $id = $_GET["id"];
        $sql = "DELETE FROM categories WHERE id = '$id'";
        $result = mysqli_query($conn,$sql);
        if($result){
            session_start();
            $_SESSION["deleteCat"] = true;
            header("Location: http://localhost/blog/admin/manageCategory.php");
        }
    }

?>