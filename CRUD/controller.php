<?php


//Add form validate
if ( !isset($_POST['name']))
    $_POST['name'] ='';

if ( !isset($_POST['count']))
    $_POST['count'] ='';

if ( !isset($_POST['price']))
    $_POST['price'] ='';

if ( !isset($_POST['sum']))
    $_POST['sum'] ='';


//Add validet

$list = Array();

if (isset($_POST['action']) and $_POST['value']='Add') {
$_SESSION['guest_list'][] = addentry ($list);

}




?>