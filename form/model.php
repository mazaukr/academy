<?php

if (! isset($_SESSION['guest']))
    $list = Array ();
else
$list = $_SESSION['guest'];


$list[] = $_GET;
$_SESSION['guest'] = $list;

print_r($list);

?>