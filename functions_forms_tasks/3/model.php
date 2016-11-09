<?php

session_start();

//controller
if (isset($_POST['lenght']))
    $lenght = $_POST['lenght'];
else
    $lenght = 100;



$file = fopen('test.txt','r');
$size = filesize('test.txt');
$text = fread($file,$size);
fclose($file);




$arrayorig = explode(' ', $text);

foreach ($arrayorig as $key => $value) {
    if (mb_strlen($value)>$lenght)
        $arraynew[] = $value;
            else
                continue;

}

print_r($arraynew);
$textnew = implode(" ",$arraynew);

$file = fopen('test.txt','w');
fwrite($file,$textnew);
fclose($file);

?>
