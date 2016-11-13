<?php
include ('controller.php');
session_start();

print_r($_SESSION);

$guest = Array();



//Add records
function addentry (){
$list = $_POST;

    return $list;

}

print_r($_SESSION['guest_list']);


//Edit records
function edit_entry (){

}


//Delete records
function del_entry (){


}





?>