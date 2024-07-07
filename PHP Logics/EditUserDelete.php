<?php
   include "../admin/config/database.php";

   if(isset($_GET["id"])){
        $id = $_GET["id"];
        $sql = "DELETE FROM users WHERE id = '$id'";
        $result = mysqli_query($conn,$sql);
        if($result){
            header("Location: http://localhost/blog/admin/manageUser.php");
        }else{
            echo "<script>alert('Failed to remove the user')</script>";
        }
   }

?>