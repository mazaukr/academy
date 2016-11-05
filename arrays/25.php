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

echo "<br>";
print_r($arr);
echo "<br>";

for ($i=0;$i<30;$i++){

        if ($arr[$i] == $max) {
            echo "<br> $arr[$i] MAX <br>";
            $arr[$i] = $min;
        }
        elseif ($arr[$i] == $min) {
            echo "<br> $arr[$i] MIN <br>";
            $arr[$i] = $max;
        }
}

echo "<br><b> max={$max} <br> min={$min} <br> </b>";

print_r($arr);
?>
