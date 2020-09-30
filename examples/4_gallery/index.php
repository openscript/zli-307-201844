<?php
$images_path = './images/';
$images = scandir($images_path);


foreach ($images as $image) {
    $current_image = $images_path . $image;
    if(!is_file($current_image)) {
        continue;
    }
    $current_image =  dirname($_SERVER['SCRIPT_NAME']) . ltrim($current_image, '.');
    echo "<img src='$current_image' />";
}

?>