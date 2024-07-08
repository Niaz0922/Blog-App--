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
    include "config\database.php";
    if(isset($_GET["id"])){
        $id = $_GET["id"];
        $sql = "SELECT *FROM categories WHERE id = '$id'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
    }
    ?>
    <section class="formSec">
        <div class="container sign_container">
            <h2>Edit Category</h2>
            <form action="http://localhost/blog/PHP Logics/editCatLogic.php" method="POST">
                <input type="text" placeholder="Title" name="Title" id="Title" value="<?php echo $row["title"]?>" required>
                <textarea placeholder="Description" name="desc" rows="4" required maxlength="300"><?php echo $row["description"]?></textarea>
                <input style="cursor: pointer;" type="submit" name="submit" class="btn"></input>
                <input type="hidden" value="<?php echo $id ?>" name="id">
            </form>
        </div>
    </section>
</body>
</html>