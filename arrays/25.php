<p>25. Ваше задание создать массив, наполнить это случайными значениями (функция rand),
    найти максимальное и минимальное значение и поменять их местами.</p>

<?php

$arr = Array();
$i=1;
while ($i<=30){
    $arr[]=rand (1, 500);
    $i++;
}
$max= max($arr);
$min = min($arr);

$func = arrayout($arr,$min,$max);
echo "$func RRRRRRRRRRR";

for ($i=0;$i<30;$i++){

        if ($arr[$i] == $max) {
           $arr[$i] = $min;
        }
        elseif ($arr[$i] == $min) {
           $arr[$i] = $max;
        }
}

echo "<br><b> max={$max} <br> min={$min} <br> </b>";

$func = arrayout($arr,$min,$max);
echo "$func";

function arrayout ($arr,$min,$max) {
    foreach ($arr as $value){
        if ($value == $max)
            echo ">>>$value <br>";
        elseif ($value==$min)
            echo ">>> $min <br>";
        else
            echo "$value <br>";
    }
return $value;
}
?>
