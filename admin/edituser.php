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
       
    ?>
    <section class="formSec">
        <div class="container sign_container">
            <h2>Edit User</h2>
            <form action="../PHP Logics\editusersLogic.php" method="POST">
                <input type="text" placeholder="Firstname" name="firstname" id="firstname" required>
                <input type="text" placeholder="Lastname" name="lastname" id="lastname" required>
                <input type="text" placeholder="Username" name="username" id="lastname" required>
                <input type="email" placeholder="Email" name="email" id="lastname" required>
                <select name="isadmin">
                    <option value="0">Authorization</option>
                    <option value="1">Admin</option>
                </select>
                <input type="submit" name="submit" class="btn"></input>
                <input type="hidden" name="Dbusername" id="DbUser">
            </form>
        </div>
 
    </section>
    <script src="../javascript/edituser.js"></script>
</body>
</html>
