<?php
$magic = ['mushrooms', 'other', 'psycho'];
$magic_string = implode(',', $magic);

var_dump($magic_string);

$magic_original = explode(',', $magic_string);

var_dump($magic_original);

?>