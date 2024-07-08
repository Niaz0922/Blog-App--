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
    include "../partials/header.php";
    include "config\database.php";
    //fetching the data from database
    $sql = "SELECT *FROM categories";
    $result = $conn->query($sql);
  
  ?>
    <section class="dashboard">
        <?php include "../PHP Logics/ShowingSuccessMSG.php"?>
        <div class="container dashboard_container">
        <?php
            include "partial/dashboardPartial.php"
            ?>
            <div class="category">
                <button class="firstButton"><i class="fa-solid fa-arrow-left"></i></button>
                <button class="secondButton"><i class="fa-solid fa-arrow-right"></i></button>
                <h2>Manage Category</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Titile</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = mysqli_fetch_assoc($result)){ ?>
                        <tr>
                            <td><?php echo $row["title"] ?></td>
                            <td><a href="http://localhost/blog/admin/edit_category.php?id=<?php echo $row["id"] ?>"  class="btn">Edit</a></td>
                            <td><a href="http://localhost/blog/PHP Logics/deleteCatLogic.php?id=<?php echo $row["id"] ?>" class="btnREd">Delete</a></td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
        </setion>
        <!-- ========================================= Foooter starts ================================ -->
        <?php
    include "../partials/footer.php"
  
  ?>
   
</body>