<?php
session_start();


include ('model.php');



//Add form validate
if ( !isset($_POST['name']))
    $_POST['name'] ='';

if ( !isset($_POST['count']))
    $_POST['count'] ='';

if ( !isset($_POST['price']))
    $_POST['price'] ='';

if ( !isset($_POST['sum']))
    $_POST['sum'] ='';

if ( !isset($_SESSION['guest_list']))
    $_SESSION['guest_list'] ='';

//Add validet

$list = Array();

//Validate ADD input for empty values
if (isset($_POST['action']) and $_POST['value']='Add')
    if ($_POST['name']!=='' and $_POST['count']!=='' and $_POST['price']!=='')
        addentry($_POST);


//Validate Delete action
if (isset($_POST['action']) and $_POST['value']='del')
    if (isset($_POST['delete']))
        del_entry($_POST);

//Validate Edit action
if (isset($_POST['action']) and $_POST['value']='edit')
    if (isset($_POST['edit']))
        edit_entry($_POST);




print_r($_SESSION);





include ('view.php');

?>