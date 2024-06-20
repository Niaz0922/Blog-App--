<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Niaz</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <section class="formSec">
        <div class="container sign_container">
            <h2>Edit User</h2>
            <form action="" method="POST">
                <input type="text" placeholder="Firstname" name="firstname" id="firstname" required>
                <input type="text" placeholder="Lastname" name="lastname" id="lastname" required>
                <select>
                    <option value="0">Authorization</option>
                    <option value="1">Admin</option>
                </select>
                <button type="submit" class="btn">Update user</button>
            </form>
        </div>
    </section>
</body>
</html>