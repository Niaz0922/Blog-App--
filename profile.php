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
    <section class="dashboard">
        <div class="container dashboard_container">
            <div class="category">
                <aside>
                    <ul>
                        <li class="LIdiff">
                            <a href="add-post.php">
                                <i class="fa-solid fa-pen"></i></i>
                                <h5>User Information</h5></i>
                            </a>
                        </li>
                        <li class="active LIdiff">
                            <a href="dashboard.php"><i class="fa-solid fa-pen-to-square"></i></i>
                                <h5>Update User Info</h5>
                            </a>
                        </li>

                        <li onclick="function3()" class="LIdiff">
                            <a href="addUser.php"><i class="fa-solid fa-user-plus"></i></i>
                                <h5>Security</h5>
                            </a>
                        </li>
                       
                    </ul>
                    </ul>
                </aside>
            </div>
        </div>
    </section>






    <!-- user profile ends -->












    <?php
    include "partials/footer.php"
        ?>
</body>

</html>