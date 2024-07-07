<?php
    session_start();
    unset($_SESSION["SignIn1"]);
    setcookie("username","", time() - 3600,"/");
    header("Location: http://localhost/blog");

?>