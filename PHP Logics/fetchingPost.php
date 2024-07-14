<?php
    include "../admin/config/database.php";
    $BlogSql = "SELECT * FROM posts";
    $BlogResult = mysqli_query($conn,$BlogSql);

?>