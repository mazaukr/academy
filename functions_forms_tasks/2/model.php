<?php

session_start();

$arr1 = explode(" ",$_GET['text1']);
$arrnew = Array ();

foreach ($arr1 as $key=>$value){
    $len = mb_strlen($value);
    $arrnew[$len] = $value;
    }


krsort($arrnew);
echo "<br>";

$arrnew = array_slice($arrnew,0,3);

foreach ($arrnew as $value) {
    echo "$value <br>";
}
echo "<br>";
print_r($arrnew);
?>
