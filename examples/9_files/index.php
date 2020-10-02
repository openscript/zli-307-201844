<?php
var_dump($_FILES['image']);
move_uploaded_file($_FILES['image']['tmp_name'], './uploads/' . $_FILES['image']['name'])
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form method="post" enctype="multipart/form-data">
            <label for="image">Bild hochladen</label>
            <input id="image" type="file" name="image" />
            <input type="submit" value="Senden" />
        </form>
    </body>
</html>