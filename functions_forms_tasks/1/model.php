<?php

session_start();

$arr1 = Array();
$arr2 = Array();
$result = Array();

$arr1 = explode(" ",$_GET['text1']);
$arr2 = explode(" ",$_GET['text2']);

function getCommonWords($arr1, $arr2){
    $count1 = count($arr1);
    $count2 = count($arr2);

    if ($count1>$count2) {
        echo "Работает первый скрипт <br>";
        for ($i = 0; $i < $count1; $i++) {
            for ($b = 0; $b < $count2; $b++) {
                if ($arr1[$i] == $arr2[$b]) {
                    $result[] = $arr1[$i];

                }
            }
        }
    }
    else{
        echo "Работает второй (условие) скрипт <br>";
        for ($i = 0; $i < $count2; $i++) {
            for ($b = 0; $b < $count1; $b++) {
                if ($arr2[$i] == $arr1[$b]) {
                    $result[] = $arr2[$i];
                }
            }
        }

    }
    return $result;
}

$result = getCommonWords ($arr1,$arr2);

foreach ($result as $value){
    echo "$value ";
}




?>
