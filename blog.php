<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Niaz Blog</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/5633e145fd.js" crossorigin="anonymous"></script>
</head>
<!-- ========================================= Nav Section Starts ================================ -->
<body>
<?php
    include "partials/header.php";
    include "admin/config/database.php"; 
    $sql = "SELECT *FROM categories";
    $result = $conn->query($sql);
    if($_SESSION["search"]){
        echo '<script>alert("No Post Found")</script>';
        unset($_SESSION["search"]);
    }
  
  ?>
    <!-- ========================================= Nav Section Ends ================================ -->
    <!-- ========================================= Search Section Starts ================================ -->
    <section class="search_bar">
        <form action="PHP Logics/searchLogic.php" class="container search-container" method="GET">
            <div>
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="search" name="search" placeholder="Search" id="" required>
                <button type="submit" class="btn" name="searchBTN">Go</button>
            </div>
        </form>
    </section>
    <!-- ========================================= Search Section Ends ================================ -->
    <!-- ========================================= Blog Section starts ================================ -->
    
           <?php include "PHP Logics/fetchpost.php";?>
            
        
    <!-- ========================================= Blog Section Ends ================================ -->
    <!-- ========================================= Category Buttons Section Starts ========================-->
    <section class="category-buttons">
        <div class="container container-buttons">
        <?php while($row = mysqli_fetch_assoc($result)){?>
                <a href="categoryPost.php?id=<?php echo $row["id"] ?>" class="category-button"><?php echo $row["title"] ?></a>
               <?php } ?>
        </div>
    </section>
    <!-- ========================================= Category Buttons Ends ================================ -->
    <?php
    include "partials/footer.php"
  
  ?>

</body>
</html>