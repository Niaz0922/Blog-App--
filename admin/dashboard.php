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
<?php
include "partial\header.php";

?>
    <section class="dashboard">
        <div class="container dashboard_container">
            <?php
            include "partial/dashboardPartial.php"
            ?>
            <div class="category">
                <button class="firstButton"><i class="fa-solid fa-arrow-left"></i></button>
                <button class="secondButton"><i class="fa-solid fa-arrow-right"></i></button>
                <h2>Manage Posts</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            <th>Admin</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Art</td>
                            <td>Art</td>
                            <td><a href="edit_category.php" class="btn">Edit</a></td>
                            <td><a href="" class="btnREd">Delete</a></td>
                            <td>Art</td>
                        </tr>
                        <tr>
                            <td>Art</td>
                            <td>Art</td>
                            <td><a href="edit_category.php" class="btn">Edit</a></td>
                            <td><a href="" class="btnREd">Delete</a></td>
                            <td>Art</td>
                        </tr>
                        <tr>
                            <td>Art</td>
                            <td>Art</td>
                            <td><a href="edit_category.php" class="btn">Edit</a></td>
                            <td><a href="" class="btnREd">Delete</a></td>
                            <td>Art</td>
                        </tr>
                        <tr>
                            <td>Art</td>
                            <td>Art</td>
                            <td><a href="edit_category.php" class="btn">Edit</a></td>
                            <td><a href="" class="btnREd">Delete</a></td>
                            <td>Art</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        </setion>
        <!-- ========================================= Foooter starts ================================ -->
       <?php
       include "partial/footer.php"
       ?>
</body>