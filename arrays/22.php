<p>22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.<br><br>
    xx<br>
    xxxx<br>
    xxxxxx<br>
    xxxxxxxx<br>
    xxxxxxxxxx</p>

<?php
$a='xx';
$c ='xx';
for ($i=1;$i<=5;$i=$i+1) {
     echo "$c<br>";
     $c = $c . $a;
}
?>