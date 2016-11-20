<?php

function read_dir ()
{
    $dir = __DIR__;

    $files = scandir($dir);
    echo $dir."<br>";
   foreach ($files as $key => $value) {
       echo "$key => $value <br>";
   }
}

?>
