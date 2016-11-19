<?php



//Add records

function addentry (){
    $list = $_POST;
    $_SESSION['guest_list'][] = $list;


}

//Delete records
function del_entry (){
$del = $_POST['delete'];
    unset($_SESSION['guest_list'][$del]);

}





//Edit records
function edit_entry (){
    $key = $_POST['edit'];
    $_SESSION['guest_list'][$key]['name']=
    $_SESSION['guest_list'][$key]['count']=
    $_SESSION['guest_list'][$key]['price']=
    print_r($_SESSION);
}




?>

