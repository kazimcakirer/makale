<?php 

$link = route(1);

$makale = $db-> query('SELECT * FROM makale WHERE makale_link=\''.$link.'\'') ->fetch(PDO::FETCH_ASSOC);



$file = PATH.'/article/'.$makale['makale_yol'];

header("Content-Type: application/octet-stream");


header("Content-Disposition: attachment; filename=".$makale['makale_adi'].'.pdf');
header("Content-Type: application/octet-stream");
header("Content-Type: application/download");
header("Content-Description: File Transfer");

header("Content-Transfer-Encoding: binary"); 
header("Content-Length: ". filesize($file));
ob_clean();
flush();
$fp= fopen($file, 'r');
while(!feof($fp)) {
	echo fread($fp, 1024768);
}
fclose($fp);
