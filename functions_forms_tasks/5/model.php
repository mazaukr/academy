<?php



function dir_scan ($dir, $word)
{

    $files = scandir($dir);

    foreach ($files as $key => $value) {
        $pos = mb_strstr($value, $word);
        if ($pos == true) {
            echo "$value <br>";
        }
    }


}


?>

