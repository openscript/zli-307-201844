<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$superman = false;

if ($superman) {
    echo 'I can fly..';
} else {
    echo 'I can\'t fly..';
}

$superpower = 'Husslk';

switch ($superpower) {
    case 'Hulk':
        echo 'I can throw a car at you';
        break;
    case 'Storm':
        echo 'I can make it rain';
        break;
    
    default:
        echo 'I\'m quite weak...';
        break;
}

for ($i=0; $i < 20; $i++) { 
    echo $i;
}

?>
</body>
</html>