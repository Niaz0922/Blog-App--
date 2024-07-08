<?php 
include "../admin/config/database.php";
session_start();

   


    if(isset($_POST["submit"])){
        $title = $_POST["Title"];
        $desc = $_POST["PostBody"];
        $avatar = $_FILES["thumbnail"];
        
        //validating the thunmnail
        include "validatingFile.php";//this file validates the avatar
        if (in_array($extention, $allowedExtention)) {
            if ($avatar["size"] < 3000000) {
                move_uploaded_file($avatar_tmpName, $avatar_destination);
            } else {
                $_SESSION["categoryFailed"] = "File is too big";
            }
    }else{
        $_SESSION["categoryFailed"] = "Please add the file in JPG , PNG or JPEG format";
    }
}

//checking that the user has passed all the validations
if($_SESSION["categoryFailed"]){
        header("Location: http://localhost/blog/admin/addCategory.php");
}
//if he passes all this conditions we will alow him to submit the form
else{
    $sql = "INSERT INTO categories (title,description) VALUES ('$title','$desc')";
    $result = mysqli_query($conn,$sql);
    if($result){
        header("Location: http://localhost/blog/admin/manageCategory.php");
    }
}

?>