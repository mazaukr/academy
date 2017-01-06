<?php

$basepath = __DIR__;

function gallery_view (){
    $image_array = scandir('gallery');
    return $image_array;



}




?>

