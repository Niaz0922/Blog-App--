<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Niaz</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php
    include "../partials/header.php";
    include "config/database.php";
    
    $PostId = $_GET["id"];
    //fetching the categories
    $sql = "SELECT *FROM categories";
    $result = $conn->query($sql);


    //fetching the current post details
    $currentPostSql = "SELECT * FROM posts WHERE id = '$PostId'";
    $CurrentPostResult = mysqli_query($conn,$currentPostSql);
    $post = mysqli_fetch_assoc($CurrentPostResult);
    $Isadmin = $row["IsAdmin"];
    
    
    ?>
    <section class="formSec">
        <div class="container sign_container">
            <h2>Edit Post</h2>
            <?php if(isset($_SESSION["editPost"])) : ?>
            <div class="alert_message_error_err">
                <P>
                    <?= $_SESSION["editPost"];
                    unset($_SESSION["editPost"]);
                    ?>
                </P>
            </div>
            <?php endif ?>
            <form action="http://localhost/blog/PHP Logics/editPostLogics.php?id=<?php echo $PostId ?>" method="POST" enctype="multipart/form-data">
                <input type="text" placeholder="Title" name="title" value="<?php echo $post["title"]?>" id="Title" required checked>
                <textarea placeholder="Description" name="desc" rows="4" maxlength="400" required><?php echo $post["description"]?></textarea>
                <select name="category">
                <?php
                    while($row = mysqli_fetch_assoc($result)){
                        echo '
                            <option>'. $row["title"] .'</option>
                        ';
                    }
                
                ?>
                </select>
                        <div class="remeberMeSection">
                            <input type="checkbox" id="ISfetured" name="ISfetured" value="ISfetured">
                            <label for="ISfetured">Fetured</label><br>
                        </div>
                <input type="hidden" name="PreviousThumbnailName" value="<?php echo $post["thumbnail"];?>">
                <div class="form-controll">
                    <label for="avatar">Thumbnail</label>
                    <input type="file" name="UpdatedThumbnail" id="file">
                </div>
                <input type="submit" name="submit" class="btn"></input>
            </form>
        </div>
    </section>
</body>
</html>