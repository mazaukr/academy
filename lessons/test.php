<?php
set_include_path(get_include_path() . PATH_SEPARATOR . 'phpseclib');
include('SSH2.php');
include 'Net/SFTP.php';



$ssh = new Net_SSH2('192.168.0.163');
if (!$ssh->login('root', 'passw')) {
    exit('Login Failed');
}

$sftp = new Net_SFTP('192.168.0.163');
    if (!$sftp->login('root', 'passw')) {
            exit('Login Failed');
        }

$file = " /home/test.txt";
$text = "#10.1.80.45    socarfmdev.socar.ua".PHP_EOL."#10.1.80.45    socarfm.socar.ua".PHP_EOL;
$sftp->put('/home/test.txt', $text);



?>


