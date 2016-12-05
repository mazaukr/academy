<?php



//Add records

function addentry (){
    $list = $_POST;
    $_SESSION['guest_list'][] = $list;


}

//Delete records
function del_entry (){
$del = $_POST['deleteid'];
    unset($_SESSION['guest_list'][$del]);

}

//Edit records
function edit_entry (){
    $list = $_POST;
    $edit = $_POST['editid'];
    $_SESSION['guest_list'][$edit] = $list;

}




?>

