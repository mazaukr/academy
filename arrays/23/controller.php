<?php

if (!isset($_GET['name'])) {
    $_GET['name']='';}
else $_GET['name'] = clear_data($_GET['name']);

if (!isset($_GET['sum'])) {
    $_GET['sum']='';}
else $_GET['sum'] = clear_data($_GET['sum']);

if (!isset($_GET['price'])) {
    $_GET['price']='';}
else $_GET['price'] = clear_data($_GET['price']);

function clear_data ($value){
    $value = strip_tags($value);
    return $value;
}
session_start();



?>
