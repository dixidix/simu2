<?php
require('./ftp_conn.php');

$path = $_GET['path'];
$path = "./../".$path;
$filename = $_GET['filename'];
$ownerId = $_GET['id'];
$ftp_path = $ownerId."/".$filename;
if(ftp_chdir($ftp_conn, "files")){
	ftp_get($ftp_conn,$path,$ftp_path , FTP_BINARY);
}
ftp_close($ftp_conn);
?>
