<?php

if (!isset($_GET['name'])) {
    $_GET['name']='';}
    else $_GET['name'] = clear_data($_GET['name']);

if (!isset($_GET['count'])) {
    $_GET['count']='';}
else $_GET['count'] = clear_data($_GET['count']);

if (!isset($_GET['price'])) {
    $_GET['price']='';}
else $_GET['price'] = clear_data($_GET['price']);

function clear_data ($value){
    $value = strip_tags($value);
    return $value;
}

session_start();



?>

