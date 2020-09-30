<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
        var_dump($_POST);
        echo $_POST;
        ?>
        <form method="post">
            <label>
                Suchfeld
                <input type="text" name="q" placeholder="Suchbegriffe" />
            </label>
            <input type="submit" value="Losschicken" />
        </form>
    </body>
</html>