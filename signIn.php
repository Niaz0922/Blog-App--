<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Niaz</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="formSec">
        <div class="container sign_container">
            <h2>Sign Up</h2>
            <?php if(isset($_SESSION["signInValidation"])) : ?>
            <div class="alert_message_error_err">
                <P>
                    <?= $_SESSION["signInValidation"];
                    unset($_SESSION["signInValidation"]);
                    ?>
                </P>
            </div>
            <?php endif ?>
            <form action="PHP Logics\signinLogic.php" method="POST">
                <input type="text" placeholder="Username" name="Username" id="Username" required>
                <input type="password" placeholder=" Password" name="Pass" id="Pass" required>
                <input style="cursor: pointer;" type="submit" name = "submit" class="btn">Sign Up</input>
                <small>Don't Have an account? <a href="signup.php">Create</a></small>
            </form>
        </div>
    </section>
</body>
</html>


