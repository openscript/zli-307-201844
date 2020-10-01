<?php
$origins = [
    'ch' => 'Schweiz',
    'de' => 'Deutschland',
    'at' => 'Österreich',
    'it' => 'Italien',
    'fr' => 'Frankreich'
];

$input_message = $_POST['message'];
$input_origin = $_POST['origin'];
$input_terms = $_POST['terms'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            select, input, textarea {
                margin-bottom: 1em;
            }

            select, input, label {
                display: block;
            }
        </style>
    </head>
    <body>
        <form method="post">
            <label for="message">Nachricht</label>
            <textarea id="message" name="message"><?php echo $input_message ?></textarea>
            <label for="origin">Herkunftsland</label>
            <select id="origin" name="origin">
                <?php
                foreach ($origins as $key => $value) {
                    if($key == $input_origin) {
                        echo "<option value='$key' selected>$value</option>";
                    } else {
                        echo "<option value='$key'>$value</option>";
                    }
                }
                ?>
            </select>
            <label for="terms">AGB</label>
            <?= isset($input_terms) ? '' : 'AGBs lesen!' ?>
            <input type="checkbox" name="terms" id="terms" />
            <input type="submit" value="Senden" />
        </form>
    </body>
</html>