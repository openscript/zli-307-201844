<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Checkbox :)</title>
    </head>
    <body>
        <?php
            var_dump($_POST['hobbies']);
        ?>
        <form method="post">
            <fieldset>
                <legend>Hobbies</legend>
                <label for="none">None</label>
                <input id="none" type='checkbox' name='hobbies[]' value='none' />
                <label for="play">Playing games</label>
                <input id="play" type='checkbox' name='hobbies[]' value='play' />
                <label for="sport">Sport</label>
                <input id="sport" type='checkbox' name='hobbies[]' value='sport' />
                <label for="music">Music</label>
                <input id="music" type='checkbox' name='hobbies[]' value='music' />
            </fieldset>
            <input type="submit" value="Send" />
        </form>
    </body>
</html>