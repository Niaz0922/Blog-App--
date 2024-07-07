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
        include "../admin\config\database.php";
        include "../adminCheck.php";
        
        if(isset($_GET["id"])){
            $id = $_GET["id"];
            $sql = "SELECT *FROM users WHERE id = '$id'";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($result);
        }
    ?>
   

   
    
    
    <section class="formSec">
        <div class="container sign_container">
        <h2>Edit User</h2>
        <h3 class="userPost"></h3>
            <form action="../PHP Logics\editusersLogic.php" method="POST">
                <input type="text" placeholder="Firstname" name="firstname" id="firstname" value="<?php echo $row["firstname"] ?>" required>
                <input type="text" placeholder="Lastname" name="lastname" id="lastname" value="<?php echo $row["lastname"] ?>"  required>
                <input type="text" placeholder="Username" name="username" id="lastname" value="<?php echo $row["username"] ?>"  required>
                <input type="email" placeholder="Email" name="email" id="lastname" value="<?php echo $row["email"] ?>" required>
                <select name="isadmin">
                    <option value="0">Authorization</option>
                    <option value="1">Admin</option>
                </select>
                <input type="submit" name="submit" class="btn"></input>
                <input type="hidden" name="Dbusername" value="<?php echo $_GET["id"] ?>">
            </form>
        </div>
        
 
    </section>
    <script src="../javascript/edituser.js"></script>
    <script>
        var usernameLocalstorage = localStorage.getItem("username");
        document.querySelector(".formSec .sign_container .userPost").innerHTML = `The user you are editing is   <p> ${usernameLocalstorage} <p>`;
    </script>
</body>
</html>
