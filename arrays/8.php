<p>8. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку
    '­1­2­3­4­5­6­7­8­9­'.

<?php
$arr = Array (1,2,3,4,5,6,7,8,9);
echo "<br>";

$count = count ($arr);
echo "<br>";

foreach ($arr as $value)
{
    if ($value !== $count)
        echo "-$value";
        else {
        echo "-$value-";}
}
?>


