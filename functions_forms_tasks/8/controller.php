<?php
include('model.php');

//Add comments in file
if (isset($_POST['name']) and isset($_POST['comment']))
if ($_POST['name'] !== '' and $_POST['comment'] !== '') {
    comment_add();
}








?>

