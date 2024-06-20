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
            <h2>Add User</h2>
            <div class="alert_message_error err">
                <P>This is error</P>
            </div>
            <form action="" method="POST">
                <input type="text" placeholder="Firstname" name="firstname" id="firstname" required>
                <input type="text" placeholder="Lastname" name="lastname" id="lastname" required>
                <input type="text" placeholder="Username" name="username" id="username" required>
                <input type="email" placeholder="Email" name="email" id="email" required>
                <input type="password" placeholder="Createpassword" name="createpassword" id="createpassword" required>
                <input type="password" placeholder="Confirm Password" name="confirmPass" id="confirmPass" required>
                <select>
                    <option value="0">Authorization</option>
                    <option value="1">Admin</option>
                </select>
                <div class="form-controll">
                    <label for="avatar">User Avatar</label>
                    <input type="file" name="file" id="file">
                </div>
                <button type="submit" class="btn">Add USer</button>
            </form>
        </div>
    </section>
</body>
</html>