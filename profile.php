
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
// Including the header partials and checking that the user is admin or not
include "partials\header.php";
if($row["IsAdmin"] == 1){
    $adminIS = "Admin";
}else{
    $adminIS = "Authorization";
}
?>





<?php
include "admin/partial/footer.php"
?>