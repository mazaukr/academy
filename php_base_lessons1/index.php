<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задачи по основам PHP</title>
</head>
<body>

<h1>Задачи по основам PHP</h1>

<p><b>Все задания должны выполняться в папке php_basics_tasks, в отдельных файлах, которые должны называться по номеру задания, например, "17.php".<br>
        Если задание требует создания нескольких файлов - то такие файлы необходимо размещать в папке, название которой равно номеру задания.</b>
</p>



<p>
    <b>Вопросы можно задавать на <a href="http://ask.php-academy.kiev.ua/" target="_blank">http://ask.php-academy.kiev.ua/</a>.</b>
</p>

<hr>

<p>1. Создайте переменную name и присвойте ей значение, содержащее ваше имя, например "Иннокентий".</p>
<?php $name = "Artem"; ?>

<p>2. Создайте переменную age и присвойте ей значение, содержащее ваш возраст, например 20.</p>
<?php $age = 32; ?>

<p>3. Выведите с помощью echo фразу "Меня зовут: %ваше_имя%", например: "Меня зовут: Иннокентий".</p>
<?php
    echo "<b> Меня зовут {$name} </b>";
        ?>

<p>4. Выведите фразу "Мне %ваш_возраст% лет", например: "Мне 20 лет".</p>
<?php
    echo "<b> Мне {$age} года </b>";
        ?>

<p>5. Напишите конструкцию if, которая выводит фразу: "Вам еще работать и работать" при условии, что значение переменной age попадает в диапазон чисел от 18 до 59 (включительно).</p>
<?php
    if ($age>=18 and $age<=59)
        echo "<b> Вам ещё работать и работать</b>";
        ?>

<p>6. Расширьте конструкцию if из п.5, выводя фразу: "Вам пора на пенсию" при условии, что значение переменной age больше 59.</p>
<?php
    if ($age>=18 and $age<=59)
         echo "<b> Вам ещё работать и работать</b>";
              elseif ($age>59)
                  echo "<b>Вам пора на пенсию</b>";
?>

<p>7. Расширьте конструкцию if из п.5-6, выводя фразу: "Вам еще рано работать" при условии, что значение переменной age попадает в диапазон чисел от 0 до 17 (включительно).</p>
<?php
if ($age>=18 and $age<=59)
    echo "<b> Вам ещё работать и работать</b>";
        elseif ($age>59)
            echo "<b>Вам пора на пенсию</b>";
                elseif ($age>=0 and $age<=17)
                    echo "<b>Вам еще рано работать</b>";
?>

<p>8. Расширьте конструкцию if из п.5-7, выводя фразу: "Неизвестный возраст" при условии, что значение переменной age является отрицательным числом, или вовсе числом не является.</p>
<?php
if ($age<0 or !is_numeric($age))
    echo "<b> Неизвестный возраст </b>";
        elseif ($age>=18 and $age<=59)
         echo "<b> Вам ещё работать и работать</b>";
          elseif ($age>59)
           echo "<b>Вам пора на пенсию</b>";
            elseif ($age>=0 and $age<=17)
             echo "<b>Вам еще рано работать</b>";
?>

<p>9. Создайте переменную day и присвойте ей произвольное числовое значение.</p>
<?php
$day = 8
?>

<p>10. С помощью конструкции switch выведите фразу: "Это рабочий день", если значение переменной day попадает в диапазон чисел от 1 до 5 (включительно).</p>
<?php
switch ($day) {
    case 1: echo '<b>Monday</b>'; break;
    case 2: echo '<b>Tuesday</b>'; break;
    case 3: echo '<b>Wednesday</b>'; break;
    case 4: echo '<b>Thursday</b>'; break;
    case 5: echo '<b>Friday</b>'; break;
}
?>





<p>11. С помощью конструкции switch выведите фразу: "Это выходной день", если значение переменной day попадает в диапазон чисел от 6 до 7 (включительно).</p>
<?php
switch ($day) {
    case 6:  echo '<b>Это выходной день</b>'; break;
    case 7:  echo '<b>Это выходной день</b>'; break;
}
?>

<p>12. С помощью конструкции switch выведите фразу: "Неизвестный день", если значение переменной day не попадает в диапазон чисел от 1 до 7 (включительно).</p>
<?php
switch ($day) {
    default: echo '<b>Неизвестный день </b>'; break;
}
?>

<p>13. Заданы две переменные: s - длина участка, который проехал автомобиль; t - время движения в часах. Вывести скорость автомобиля на заданном участке в км/час и в м/сек.</p>
<?php
$s=10;
$t=12;
$d=1000;
$speed = ($s * $t);
$speed2 = ($speed * 1000)/3600;
echo "<b> $speed км/час = </b>";
echo "<b> $speed2 м/сек </b>";
?>

<p>14. Задана переменная $foo = 'bar'; Создать переменную bar, в которой будет храниться число 10. Вывести число 10, используя только переменную $foo (не опечатка).</p>
<?php
$foo = 'bar';
$bar = 10;
echo $$foo;
?>

<p>15. Написать калькулятор. Переменная $a = изменяемое число. Переменная $b = изменяемое число. Переменная $operator = ‘+’ или ‘-’ или ‘/’ или ‘*’ или '%' (остаток от деления).
    На экран выводить результат в зависимости от значений этих переменных. Не забудьте про деление на 0, если надо - выдавать ошибку что на 0 делить нельзя.
</p>
<?php

$a=10;
$b=5;
$operator="*";
    if ($operator == "/" and $b == 0) {
    echo "<b>На 0 делить нельзя</b>";}
    elseif ($operator == "*")    {    $result=$a*$b;
        echo "$result";}
    elseif ($operator == "-")    {    $result=$a-$b;
        echo "$result";}
    elseif ($operator == "+")    {    $result=$a+$b;
        echo "$result";}
    elseif ($operator == "/")    {    $result=$a/$b;
        echo "$result";
    }
?>

<p>16. Создайте две переменные $a и $b, значения которых будут числами. Выведите максимальное число из этих двух.</p>
<?php
$a = 144;
$b = 173;
if ($a>$b)
    echo "<b> $a biggest then $b </b>";
else
    echo "<b> $b biggest then $a </b>"
?>

<p>17. Создайте две переменные $a = '78' (строковый тип) и $b = 78 (целочисленный тип). Проверьте эти две переменные на равность, с помощью if выведите "равны" или "не равны".</p>
<?php
$a = '78';
$b = 78;
if ($a==$b)
    echo "Var $a==$b";
else
    echo "<b> Var $a <> $b </b>";
?>

<p>18. Создайте две переменные $a = '78' (строковый тип) и $b = 78 (целочисленный тип). Проверьте эти две переменные на эквивалентность, с помощью if выведите "эквивалентны" или "не эквивалентны".</p>
<?php
$a = '78';
$b = 78;
if ($a===$b)
    echo "Var $a===$b";
else
    echo "<b> Var $a <> $b </b>";
?>

<p>19. Выведите результат сравнения $a и $b из п.17 с помощью var_dump ???????????????????.</p>
<?php
$a = '78';
$b = 78;
$result = $a==$b;

if (var_dump($result)==true)
    echo "<b> $a==$b </b>";
else
    echo "<b> Var $a <> $b </b>";
?>

<p>20. Приведите число 20 к типу boolean. Объясните результат.</p>
<?php
$a = 20;
$b = (bool)$a;
echo "<b> $b </b>";
?>

<p>21. Приведите число 0 к типу boolean. Объясните результат.</p>
<p>Отрицательное или положительное число, отличное от нуля - возвращает True, что равносильно еденице</p>
<?php
$a = 0;
$b = (bool)$a;
echo "<b> $b </b>";
?>

<p>22. Приведите число -20 к типу boolean. Объясните результат.</p>
<p>Отрицательное или положительное число, отличное от нуля - возвращает True, что равносильно еденице</p>
<?php
$a = -20;
$b = (bool)$a;
echo "<b> $b </b>";
?>

<p>23. Напишите 3 строки, используя три разные функции для вывода текста.</p>

<?php
echo "Вариант с excho <br>";
print("Вариант с print <br>");
print_r("Вариант с print_r");
?>

<p>24. Создайте в файле 3 комментария тремя разными типами.</p>
<?php
/* Первый комментарий*/
// Второй кмментарий
# Третий комментарий
?>

<p>25. Приведите пример, чем отличается &lt;?php от &lt;?= .</p>
<?php echo "Пример вывода раз <br>"?>
<?= 'Более короткий способ вывода'?>


<p>26. Объявите константу DAYS_COUNT равную 7 и константу MONTH_COUNT равную 12 двумя разными способами объявления констант.</p>
<?php
define('DAYS_COUNT', 7);
const MONTH_COUNT=12;
?>

<p>27. Выполните скрипт по задаче №4 из консоли (необходимо запустить php скрипт по задаче №4 из командной строки).</p>

<hr>

<p>
    <b>&copy; 2014-2016 <a href="http://php-academy.kiev.ua/" target="_blank">PHP Academy</a></b>
</p>

</body>
</html>
