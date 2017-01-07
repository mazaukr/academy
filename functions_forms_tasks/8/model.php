<?php

//Function Add comments to file
function comment_add ()
{
    $file = fopen("comments.txt", "a+") or die("File not fount");
    $comment = serialize($_POST);
    fputs($file, $comment . PHP_EOL);
    fclose($file);
}




//echo "<script>alert('У вас ".$num_message." новых сообщений');</script>";

function comments_panel ()
{
    $file_read = fopen("comments.txt", "r") or die("File not fount");

    while (!feof($file_read)) {
        $serializ_text = fgets($file_read, 1024);
        //var_dump($serializ_text);

        if ($serializ_text !== PHP_EOL and $serializ_text !== "") {
            $clear_text = unserialize($serializ_text);

            if (isset($clear_text['name']) and isset($clear_text['comment'])) {
                ?>
                <div class="panel panel-primary">
                    <div class="panel-heading"> <?= $clear_text['name'] ?></div>
                    <div class="panel-body">
                        <?= $clear_text['comment']; ?>
                    </div>
                </div>

                <?php
            }
        }
    }
    fclose($file_read);
}
?>



<?php

//print_r($_POST);




?>

