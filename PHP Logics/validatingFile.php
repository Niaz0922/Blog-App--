  <?php      

        $time = time();
        $avatar_name = $time . $avatar["name"];
        $avName = $avatar["name"];
        $avatar_destination = "../../images/" . $avatar_name;
        $avatar_tmpName = $avatar["tmp_name"];
        $ImageSize = getimagesize($avatar_tmpName);
        $imageWidth = $ImageSize[0];
        $imageheight = $ImageSize[1];
        $_SESSION["test"] = $imageWidth;
        $allowedExtention = ["jpg", "png", "jpeg"];
        $extention = explode(".", $avatar["name"]);
        $extention = end($extention);
        
?>