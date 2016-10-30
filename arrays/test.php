<?php
// Наше замыкание
$double = function($a) {
    return $a * 2;
};

// Диапазон чисел
$numbers = range(1, 5);

// Использование замыкания в качестве callback-функции
// для удвоения каждого элемента в нашем диапазоне
$new_numbers = array_map($double, $numbers);

print implode(' ', $new_numbers);
?>