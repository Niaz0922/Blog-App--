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
    include "partials/header.php"
  
  ?>
    <!-- ========================================= Nav Section Ends ================================ -->
    <section class="form-details">
        <form style="margin-right: 3rem;" action="login.php" method="POST">
            <span>LEAVE A MESSEGE</span>
            <h2>We love to hear from you</h2>
            <input type="text" placeholder="Your name" name="name">
            <input type="text" placeholder="Your E-mail" name="email">
            <input type="text" placeholder="Your Subject" name="subject">
            <textarea name="textarea" placeholder="Your Message" id="" cols="30" rows="10">
            </textarea>
            <input class="btn manageBTN" name="submit" type="Submit"></input>
        </form>
        <div class="people">
            <div>
                <img src="images/1.png" alt="">
                <p><span>John Doe</span>Senior Marketing Manager <br>Phone +88013323324 <br>example@gmail.com</p>
            </div>
            <div>
                <img src="images/2.png" alt="">
                <p><span>William SMith</span>Senior Marketing Manager <br>Phone +88013323324 <br>example@gmail.com</p>
            </div>
            <div>
                <img style="border-radius: 50%;" src="images/5.png" alt="">
                <p><span>Tm Abir</span>My honorable idol and entrepreneur <br>Phone +883243324 <br>tmabir@gmail.com</p>
            </div>
        </div>
    </section>
    <!-- ========================================= Foooter starts ================================ -->
    <?php
    include "partials/footer.php"
  
  ?>

</body>
</html>