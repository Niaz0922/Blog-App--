<!DOCTYPE html>
<html lang="en">
<head>
<?php
session_start();

?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Niaz</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <section class="formSec">
        <div class="container sign_container">
            <h2>Add User</h2>
            <?php if(isset($_SESSION["addUser"])) : ?>
            <div class=".alert_message_error_err">
                <P>
                    <?= $_SESSION["addUser"];
                    unset($_SESSION["addUser"]);
                    ?>
                </P>
            </div>
            <?php endif ?>
            <form action="../PHP Logics\addUserLogic.php" method="POST" enctype="multipart/form-data">
                <input type="text" placeholder="Firstname" name="firstname" id="firstname" required>
                <input type="text" placeholder="Lastname" name="lastname" id="lastname" required>
                <input type="text" placeholder="Username" name="username" id="username" required>
                <input type="email" placeholder="Email" name="email" id="email" required>
                <input type="password" placeholder="Createpassword" name="createpassword" id="createpassword" required>
                <input type="password" placeholder="Confirm Password" name="confirmPass" id="confirmPass" required>
                <select name="admin">
                    <option value="0">Authorization</option>
                    <option value="1">Admin</option>
                </select>
                <div class="form-controll">
                    <label for="avatar">User Avatar</label>
                    <input type="file" name="avatar" id="file">
                </div>
                <input name="submit" type="submit" class="btn"></input>
            </form>
        </div>
    </section>
</body>
</html>