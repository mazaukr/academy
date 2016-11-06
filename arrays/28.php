<p>28. Вывести таблицу умножения с помощью двух циклов for.</p>

<?php


echo "<table>";
echo "<tr>";
for ($i=2;$i<=9;$i++){
    echo "<td style='border: double'>";
         for ($b=1;$b<=9;$b++){
             if ($b==9) {
                 $c=$i*$b;
                 echo "$i*$b=$c";
                 echo "</td>";
             }
             else {
                 $c = $i * $b;
                 echo "$i*$b=$c <br>";

             }
    }
}
echo "</tr>";
echo "</table>";

?>

