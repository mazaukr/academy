<?php

session_start();

$arr1 = Array();
$arr2 = Array();
$result = Array();



function getCommonWords($arr1, $arr2){
    $count1 = count($arr1);
    $count2 = count($arr2);

        for ($i = 0; $i < $count1; $i++) {
            for ($b = 0; $b < $count2; $b++) {
                if ($arr1[$i] === $arr2[$b]) {
                    $result[] = $arr1[$i];
                    break;
                }
            }
        }
   return $result;
}

?>
