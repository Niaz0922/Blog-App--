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
    $sql = "SELECT *FROM categories";
    $result = $conn->query($sql);
    session_start();
    
    ?>
    <section class="formSec">
        <div class="container sign_container">
            <h2>Add Post</h2>
            <?php if(isset($_SESSION["post"])) : ?>
            <div class="alert_message_error_err">
                <P>
                    <?= $_SESSION["post"];
                    unset($_SESSION["post"]);
                    ?>
                </P>
            </div>
            <?php endif ?>
            <form action="../PHP Logics/addPost.php?id=<?php echo $row["id"]; ?>" method="POST" enctype="multipart/form-data">
                <input type="text" placeholder="Title" name="Title" id="Title" required>
                <select name="category" id="" required>
                <?php
                    while($row = mysqli_fetch_assoc($result)){
                        echo '
                            <option>'. $row["title"] .'</option>
                        ';
                    }
                
                ?>
                </select>
                
                <textarea name="desc" id="" rows="4" maxlength="400"  required></textarea>
                <div class="form-controll">
                    <label for="avatar">Post Thumbnail</label>
                    <input type="file" name="thumbnail" required>
                </div>
                <input style="cursor: pointer;" name="submit" type="submit" class="btn"></input>
            </form>
        </div>
    </section>
</body>
</html>