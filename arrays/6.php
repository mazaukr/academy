<p>6. Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а
    русские — в массив $ru.
    $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
    $en = array('green', 'red','blue');
    $ru = array('зеленый', 'красный', 'голубой');</p>
<?php

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$en = Array();
$ru = Array();
foreach ($arr as $key=>$value) {
    $en[]=$key;
    $ru[]=$value;
}
print_r($ru);
print_r($en);

?>