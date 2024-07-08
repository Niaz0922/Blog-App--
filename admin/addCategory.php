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
    
    include "../adminCheck.php";
    session_start();
    ?>
    <section class="formSec">
        <div class="container sign_container">
            <h2><?php $_SESSION["categoryFailed"] ?></h2>
            <?php if(isset($_SESSION["categoryFailed"])) : ?>
            <div class="alert_message_error_err">
                <P>
                    <?= $_SESSION["categoryFailed"];
                    unset($_SESSION["categoryFailed"]);
                    ?>
                </P>
            </div>
            <?php endif ?>
            <form action="../PHP Logics/addCategoryLogic.php" method="POST" enctype="multipart/form-data">
                <input type="text" placeholder="Title" name="Title" id="Title" required>
                <textarea name="PostBody" id="" rows="4" required></textarea>
                <div class="form-controll">
                    <label for="thumbnail">Add thumbnail</label>
                    <input type="file" id="thumbnail" name="thumbnail">
                </div>
                <input style="cursor: pointer;" type="submit" name="submit" class="btn"></input>
            </form>
        </div>
    </section>
</body>
</html>