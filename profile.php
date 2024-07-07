
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>
<?php
include "partials\header.php";
if($row["IsAdmin"] == 1){
    $adminIS = "Admin";
}else{
    $adminIS = "Authorization";
}
?>


<div class="user-container">
    <div class="profile_section">
        <img src="images/<?php echo $row["avatar"] ?>" alt="" class="userImage">
        <h3><?php echo $username ?></h3>
        <p><?php echo $row["email"] ?></p>
        <p>You have <?php ?>posts </p>
        <p> You are a <?php echo $adminIS ?></p>
    </div>
</div>


<?php
include "admin/partial/footer.php"
?>