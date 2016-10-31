<p>14. Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. С помощью цикла foreach и оператора if
    проверьте есть ли в массиве элемент со значением $e, равном 2, 3 или 4. Если есть —
    выведите на экран 'Есть!', иначе выведите 'Нет!'.</p>

<?php

$arr = Array(4, 2, 5, 19, 13, 0, 10);
$e = 2;

foreach ($arr as $value=>$key) {

    if ($key=$e and $e<4){
        echo "Есть!";
        $e++;
    }
    else{
        echo "Нет!";
        $e++;
    }
    }

echo "<br>";


$k=Array(2,3,4);
foreach ($arr as $value=>$key) {
    foreach ($k as $item => $key2) {
        if ($key == $key2)
             echo "Yes!";
        else
             echo "No!";

        }
    }

?>

