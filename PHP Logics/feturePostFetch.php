<?php

$feturedSQL = "SELECT *FROM posts WHERE isFetured = 1";
$feturedResult = mysqli_query($conn,$feturedSQL);
$feturedPost = mysqli_fetch_assoc($feturedResult);

  //fetching the categories
  $categoryID = $feturedPost["category_id"];
  $catid = "SELECT *FROM categories WHERE id = '$categoryID'";
  $catResult = mysqli_query($conn,$catid);
  $resultCatId = mysqli_fetch_assoc($catResult);
  $FeturedCatBlog = $resultCatId["title"];



  //Getting user information
  $userId = $feturedPost["userId"];
  $sql = "SELECT *FROM users WHERE id = '$userId'";
  $user_result = $conn->query($sql);
  $feturedUserInfo = mysqli_fetch_assoc($user_result);
?>