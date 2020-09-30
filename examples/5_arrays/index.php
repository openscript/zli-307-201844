<?php
$superpowers = array('strength', 'flying', 'seeing through');
//var_dump($superpowers);

$courses = array('2019' => array('101', '105'), '2020' => array('307'));
//var_dump($courses);

$names = ['Max', 'Moritz', 'Mike'];

foreach($names as $name) {
    //echo $name;
}

foreach($courses as $key => $value) {
    echo $key;
}

echo $superpowers[0];
$superpowers[22] = 'fire';
$superpowers[23] = 'fire';
$superpowers[24] = 'fire';
$superpowers[25] = 'fire';
var_dump($superpowers);

?>