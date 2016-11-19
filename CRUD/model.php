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
    $key = $_GET['editid'];

    $_SESSION['guest_list'][$key]['name']=$_GET['name'];
    $_SESSION['guest_list'][$key]['count']=$_GET['count'];
    $_SESSION['guest_list'][$key]['price']=$_GET['price'];

    echo "<br>";
    print_r($_SESSION);
    echo "<br>";

    echo $_SESSION['guest_list'][$key]['name'];
    echo $_SESSION['guest_list'][$key]['count'];
    echo $_SESSION['guest_list'][$key]['price'];


}




?>

