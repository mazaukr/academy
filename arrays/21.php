<p>21. Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9
    рядов, а не 5.<br><br>
    1<br>
    22<br>
    333<br>
    4444<br>
    55555</p>

<?php
echo "<br>";
$a=1;
$c = Array(1);
for ($i=0;$i<9;$i++) {
    echo "$c[$i]";
    $c[]=$c[$i] + $a;

    for ($b=0;$b<=$i;$b++) {
        if ($b<$i)
            echo "$c[$i]";
        else
            echo "$c[$i]<br>";
    }
}
?>


