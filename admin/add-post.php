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
            <h2>Add Post</h2>
            <div class="alert_message_error err">
                <P>This is error</P>
            </div>
            <form action="" method="POST">
                <input type="text" placeholder="Title" name="Title" id="Title" required>
                <select name="" id="" required>
                    <option value="1">Travel</option>
                    <option value="1">Art</option>
                    <option value="1">Science and Technology</option>
                    <option value="1">Coding</option>
                </select>
                <textarea name="PostBody" id="" rows="4" required></textarea>
                <button style="cursor: pointer;" type="submit" class="btn">Add Category</button>
            </form>
        </div>
    </section>
</body>
</html>