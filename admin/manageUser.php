<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Niaz Blog</title>
    <link rel="stylesheet" href="../style.css">
    <script src="https://kit.fontawesome.com/5633e145fd.js" crossorigin="anonymous"></script>
</head>
<body>
<?php include "../partials/header.php";

 ?>
    <section class="dashboard">
        <div class="container dashboard_container">
        <?php
            include "partial/dashboardPartial.php";
            include "config\database.php";
            if(isset($_SESSION["editUserSuccess"])){
                echo '<script>alert("User Information Updated Successfully")</script>';
                unset($_SESSION['editUserSuccess']);
            }
            ?>
            <div class="category">
                <button class="firstButton"><i class="fa-solid fa-arrow-left"></i></button>
                <button class="secondButton"><i class="fa-solid fa-arrow-right"></i></button>
                <h2>Manage Users</h2>
                <table>
                <thead>
                    <input type="hidden" name="sno" id="sno">
                            <tr>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                <th>Admin</th>
                            </tr>
                    <?php
                        //Fetching the data from database
                        
                        $limit = 3;
                        if(!isset($_GET["page"])){
                            $page = 1;
                        }else{
                            $page = $_GET["page"];
                        }
                        $offset  = ($page - 1) * $limit;
                        $sql = "SELECT *FROM users LIMIT {$offset} , 3";
                        $result = mysqli_query($conn,$sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            if($row["IsAdmin"] == 0){
                                $admin = "No";
                             }else{
                                $admin = "Yes";
                             }
                            echo '
                            
                        </thead>
                        <tbody>
                        <tr>
                            <td>'.$row["firstname"].'</td>
                            <td class="username">'.$row["username"].'</td>
                            <td><a href="http://localhost/blog/admin/edituser.php?id='.$row["id"] .'" class="btn" id="editUser">Edit</a></td>
                            <td><a href="http://localhost/blog/PHP Logics/EditUserDelete.php?id='.$row["id"] . '" class="btnREd">Delete</a></td>
                            <td>'. $admin .'</td>
                        </tr>
                    </tbody>
                            ';
                        }
                    
                    ?>
                </table>
        <ul class="pagination">

                <?php
                        if($page > 1){
                           echo '<li><a href="http://localhost/blog/admin/manageUser.php?page='.($page - 1).'" class="btn">Prev</a></li>';
                        }
                    ?>

                        <?php 
                            $postSQl = "SELECT *FROM users";
                            $resultPost = mysqli_query($conn, $postSQl);
                            if (mysqli_num_rows($resultPost) > 0) {
                                $limit = 3;
                                $total_posts = mysqli_num_rows($resultPost);
                                $total_pages = ceil($total_posts / $limit);
                                for ($x = 1; $x <= $total_pages; $x++) {
                                    if ($x == $page) {
                                        $active = "activePaginaiton";
                                    } else {
                                        $active = "";
                                    }
                            
                                    echo '<li class="'.$active.' btn"><a href="http://localhost/blog/admin/manageUser.php?page=' . $x . '">' . $x . '</a></li> ';
                                }
                            }
                        ?>

                                <?php
                        if($total_pages > $page){
                           echo '<li><a href="http://localhost/blog/admin/manageUser.php?page='.($page + 1).'" class="btn">Next</a></li>';
                           
                        }
                    ?>
        </ul>   
            </div>
        </div>
        </setion>
        <!-- ========================================= Foooter starts ================================ -->
        <?php include "../partials/footer.php" ?>
    <script src="../javascript/addUSer.js"></script>
 
</body>