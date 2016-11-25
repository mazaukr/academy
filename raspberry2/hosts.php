<?php
set_include_path(get_include_path() . PATH_SEPARATOR . 'phpseclib');
include('Net/SSH2.php');
include 'Net/SFTP.php';



$ssh = new Net_SSH2('10.100.100.112');
if (!$ssh->login('root', '')) {
    exit('Login Failed');
}

/*$sftp = new Net_SFTP('10.100.100.112');
if (!$sftp->login('root', '')) {
    exit('Login Failed');
}
*/

//echo $ssh->exec('touch /home/test.txt');
echo $ssh->exec('ls -la');

$file = "/home/test.txt";
$text = "#10.1.80.45    socarfmdev.socar.ua".PHP_EOL;
//$sftp->put($file, $text);



?>