<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Niaz</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/5633e145fd.js" crossorigin="anonymous"></script>
</head>
<body>
     <?php
    session_start();
    $firstname =  $_SESSION["signUpDataBack"]["firstname"] ?? null;
    $lastname =  $_SESSION["signUpDataBack"]["lastname"] ?? null;
    $username =  $_SESSION["signUpDataBack"]["username"] ?? null;
    $email =  $_SESSION["signUpDataBack"]["email"] ?? null;
    $createpassword =  $_SESSION["signUpDataBack"]["createpassword"] ?? null;
    $confirmpassword =  $_SESSION["signUpDataBack"]["confirmPass"] ?? null;
    unset($_SESSION["signUpDataBack"]);
    ?> 
    <section class="formSec">
        <div class="container sign_container">
            <h2>Sign Up</h2>
           <?php if(isset($_SESSION["SignUp"])) : ?>
            <div class="alert_message_error_err">
                <P>
                    <?= $_SESSION["SignUp"];
                    unset($_SESSION["SignUp"]);
                    ?>
                </P>
            </div>
            <?php endif ?>
             <form action="signupLogic.php" method="POST" enctype="multipart/form-data"> 
                <input type="text" placeholder="Firstname" value="<?php echo $firstname ?>" name="firstname" id="firstname" required>
                <input type="text" placeholder="Lastname" value="<?php echo $lastname ?>" name="lastname" id="lastname" required>
                <input type="text" placeholder="Username" value="<?php echo $username ?>" name="username" id="username" required>
                <input type="email" placeholder="Email" value="<?php echo $email ?>" name="email" id="email" required>
                <input type="password" placeholder="Createpassword" value="<?php echo $createpassword ?>" name="createpassword" id="createpassword" required minlength="8">
                <input type="password" placeholder="Confirm Password" value="<?php echo $confirmpassword ?>" name="confirmPass" id="confirmPass" required minlength="8">
                <div class="form-controll">
                    <label for="avatar">User Avatar</label>
                    <input type="file" name="avatarImage" required>
                </div>
                <input name="submit" type="submit" class="btn">Sign Up</input>
                <small>Already Have an account? <a href="signIn.php">Login</a></small>

            </form>
        </div>
    </section>
</body>
</html>



