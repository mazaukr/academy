<?php


if ( isset($_SESSION['guest_list']))
    $list = $_SESSION['guest_list'];
else {
    $list = Array();
    $guest = Array(
        "name" => "Bob",
        "count" => "1",
        "price" => "10",
        "sum" => "10",
    );
    $list[] = $guest;

    $guest = Array(
        "name" => "Mary",
        "count" => "1",
        "price" => "5",
        "sum" => "5",
    );
    $list[] = $guest;
}


if (isset($_GET['count']) AND $_GET['count'] > 0 AND $_GET['name'] != '') {
    $_GET['sum'] = floatval($_GET['price']) * intval($_GET['count']);
    if (in_array('name', $names))
    $list[] = $_GET;
}

$list = sort_array_asc($list, 'name');

$_SESSION['guest_list'] = $list;

// print_r($list);
