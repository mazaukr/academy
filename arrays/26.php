<p>26. Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand).
    Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные
    индексы. После вывести на экран элементы, которые больше ноля и у которых не парный
    индекс.</p>

<?php

$arr = Array();
$i=0;
while ($i<100){
    $arr[]=rand (1, 100);
    $i++;
}
$sumint=0;
$sumfloat=0;
print_r ($arr);
foreach ($arr as $key=>$value){
    if ($key%2==0 and $value>0){
        $sumint=$sumint + $value;
//        echo "$sumint <br>";
    }
    elseif ($key%2==1 and $value>0){
        echo "<br>>>> $value ";

    }
}
echo "<br><b>Сумма всех чисел с парными индексами = $sumint </b><br>";

?>
