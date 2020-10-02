<?php
error_reporting(E_ALL);
$input_tag = $_POST['tag'] ?? '';
$input_age = $_POST['age'] ?? '';
$games = [
    'halo' => 'Halo',
    'ageofempires' => 'Age of Empires',
    'unreal' => 'Unreal Tournament',
    'counterstrike' => 'Counter Strike',
    'anno' => 'Anno 1800',
    'empireearth' => 'Empire Earth' 
];
$input_games = $_POST['games'] ?? [];
$input_submit = $_POST['submit'] ?? null;
$errors = [];

if($input_submit !== null) {
    if ($input_tag == '') {
        $errors['tag'] = 'Bitte ausfüllen';
    }

    if ($input_age == '' || $input_age < 16 || $input_age > 99) {
        $errors['age'] = 'Bitte ausfüllen';
    }

    if (count($input_games) < 3) {
        $errors['games'] = 'Wähle mindestens 3 Spiele';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Warzoneparty</title>
        <style>
            input {
                display: block;
                margin-bottom: 1em;
            }
        </style>
    </head>
    <body>
        <h1>Warzoneparty</h1>
        <?php if($input_submit !== null && count($errors) <= 0): ?>
        <dl>
            <dt>Gamertag</dt>
            <dd><?= $input_tag ?></dd>
            <dt>Alter</dt>
            <dd><?= $input_age ?></dd>
            <dt>Spiele</dt>
            <dd><?= implode(',', $input_games) ?></dd>
        </dl>
        <?php else: ?>
        <form method="POST">
            <?= $errors['tag'] ?? '' ?>
            <label for="tag">Gamertag</label>
            <input type="text" name="tag" required value="<?= $input_tag ?>" />
            <?= $errors['age'] ?? '' ?>
            <label for="age">Alter</label>
            <input type="number" name="age" min="16" max="99" value="<?= $input_age ?>" />
            <?= $errors['games'] ?? '' ?>
            <p>Wähle mindestens 3 Spiele aus.</p>
            <fieldset>
                <legend>Spiele</legend>
                <?php foreach($games as $key => $value): ?>
                <label for="<?= $key ?>"><?= $value ?></label>
                <input 
                    id="<?= $key ?>" 
                    type="checkbox" 
                    name="games[]"
                    <?= in_array($key, $input_games) ? 'checked' : '' ?>
                    value="<?= $key ?>"
                />
                <?php endforeach; ?>
            </fieldset>
            <input type="submit" name="submit" value="Anmelden" />
        </form>
        <?php endif; ?>
    </body>
</html>