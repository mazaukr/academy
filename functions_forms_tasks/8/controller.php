<?php
include('model.php');

//Add comments in file
$mat = '';




if (isset($_POST['name']) and isset($_POST['comment'])) {
    if ($_POST['name'] !== '' and $_POST['comment'] !== '') {
        if ( words_mat($mat) !== 'yes') {
            $mat = words_mat($mat);
                 comment_add();
        }
    }
}


?>
