
<?php
//echo "<br>";

$count = strlen($_GET['name']);
$digits = $_GET['name'];
$digits_array = Array();
$sum = 0;
for ($i=0;$i<$count;$i++) {
    $digits_array[]=$digits[$i];
    $sum=$sum+$digits_array[$i];
}

$_GET['sum']=$sum;



?>
