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
            <h2>Edit Post</h2>
            <form action="" method="POST">
                <input type="text" placeholder="Firstname" name="firstname" id="Title" required checked>
                <textarea placeholder="Description" name="PostBody" rows="4" required></textarea>
                <select>
                    <option value="0">Travel</option>
                    <option value="1">Coding</option>
                </select>
                <div class="form-controll">
                    <label for="avatar">User Avatar</label>
                    <input type="file" name="file" id="file">
                </div>
                <button type="submit" class="btn">Update Post</button>
            </form>
        </div>
    </section>
</body>
</html>