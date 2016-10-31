<p>13. Вывести таблицу умножения</p>
<?php

for ($i=2; $i<=9; $i++) {
    for ($k=1; $k<=9; $k++){
        echo "<br>";
            while ($k<=9) {
            $result=$i*$k;
            echo "$i * $k=$result <br>";
            $k++;
        }
    }
}

?>