<p>24. Вам нужно разработать программу, которая считала бы количество вхождений
    какой­нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе
    442158755745 встречается 4 раза.</p>
<?php
//echo "<br>";

$digits = '83465783458334534634534535578';


$lenght = strlen($digits);
$count = 0;
$number = 5;

//$digits_array = Array();

for ($i=0;$i<$lenght;$i++) {
    if ($digits[$i] == $number)
        $count = $count + 1;
    }
echo "Количество вхождений цифры $number в число $digits = <b>$count </b> <br>";

?>
