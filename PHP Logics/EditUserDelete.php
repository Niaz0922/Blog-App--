<?php
//including the database file and getting the id from header
include "../admin/config/database.php";
$id = $_GET["id"];


if (isset($id)) {
    //deleting the user thumbnail
    $thumbnailSql = "SELECT * FROM posts WHERE userId = '$id'";
    $thumbnailResult = mysqli_query($conn, $thumbnailSql);
    if (mysqli_num_rows($thumbnailResult) > 0) {
        while ($thumbnail = mysqli_fetch_assoc($thumbnailResult)) {
            $thumbnailPath = "../thumbnail/" . $thumbnail["thumbnail"];
            if ($thumbnailPath) {
                unlink($thumbnailPath);
            }
        }
    }





    //deleting the avatar
    $avatarSql = "SELECT * FROM users WHERE id = '$id'";
    $avatarResult = mysqli_query($conn, $avatarSql);
    if (mysqli_num_rows($avatarResult) > 0) {
        while ($avatar = mysqli_fetch_assoc($avatarResult)) {
            $avatarPath = "../images/" . $avatar["avatar"];
            if ($avatarPath) {
                unlink($avatarPath);
            }
        }
    }






    //deleting the user
    $sql = "DELETE FROM users WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: http://localhost/blog/admin/manageUser.php");
    } else {
        echo "<script>alert('Failed to remove the user')</script>";
    }
}

?>