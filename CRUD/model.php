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
    $key = $_POST['editid'];

    $_SESSION['guest_list'][$key]['name']=$_POST['name2'];
    $_SESSION['guest_list'][$key]['count']=$_POST['count2'];
    $_SESSION['guest_list'][$key]['price']=$_POST['price2'];

    echo "<br>";
    print_r($_SESSION);
    echo "<br>";

   echo $_SESSION['guest_list'][$key]['name2'];
    echo $_SESSION['guest_list'][$key]['count2'];
    echo $_SESSION['guest_list'][$key]['price2'];


}




?>

