<?php

$_GET = $_POST;

if (isset($_GET['name'])) {
    $new_guest = $_GET;
}

if ( ! isset($_GET['name'])) $_GET['name'] = '';
else $_GET['name'] = clear_data($_GET['name']);
if ( ! isset($_GET['count'])) $_GET['count'] = '1';
else $_GET['count'] = clear_data($_GET['count']);
if ( ! isset($_GET['price'])) $_GET['price'] = '';
else $_GET['price'] = clear_data($_GET['price']);

session_start();

function clear_data($value) {

    $value = strip_tags($value);
    $value = str_replace("\"", "", $value);
    return $value;
}

function sort_array_asc($people, $orderby) {
    $sortArray = array();

    foreach($people as $person){
        foreach($person as $key=>$value){
            if(!isset($sortArray[$key])){
                $sortArray[$key] = array();
            }
            $sortArray[$key][] = $value;
        }
    }
    array_multisort($sortArray[$orderby],SORT_ASC,$people);
    return $people;

}

?>