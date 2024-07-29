<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    // Including the header partials and checking that the user is admin or not
    include "partials\header.php";
    include "admin\config\database.php";
    $adminIS = "Authorization";
    $Loggeg_in_user_id = $row["id"];


    //fetching the user information according to the user
    $userID = $_GET["id"];
    $user_info_sql = "SELECT *FROM users WHERE id = '$userID'";
    $user_info_result = mysqli_query($conn, $user_info_sql);
    if (mysqli_num_rows($user_info_result) > 0) {
        $user_Information = mysqli_fetch_assoc($user_info_result);
    }




    //checking that the user is admin or not
    if ($user_Information["IsAdmin"] == 1) {
        $adminIS = "Admin";
    }



    ?>

    <!-- user profile starts -->

        
        





    <!-- user profile ends -->












    <?php
    include "partials/footer.php"
        ?>
</body>

</html>