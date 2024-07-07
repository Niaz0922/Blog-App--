<?php
    if(!isset($_SESSION["admin"])){
        echo "<script>alert('You are not an admin')</script>";
        header("Location: http://localhost/blog/admin/dashboard.php");
    }

?>