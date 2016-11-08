<?php

session_start();



function top ($arr1){
    $arrnew = Array ();

    foreach ($arr1 as $key => $value) {
        $len = mb_strlen($value);
        $arrnew[$len] = $value;
    }

    krsort($arrnew);
    echo "<br>";

    $arrnew = array_slice($arrnew, 0, 3);
return ($arrnew);
}

    echo "<br>";




?>
