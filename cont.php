<?php
$ip = $_SERVER['REMOTE_ADDR'];
$date = date('Y-m-d H:i:s');
$file = 'logacess.txt';

$data = "$ip - $date\n";

file_put_contents($file, $data, FILE_APPEND | LOCK_EX);
?>
