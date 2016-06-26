<?php
// FTP  CONNECTION ---------------- 
$ftp_server = "192.168.118.3";
$ftp_username = "test";
$ftp_userpass = "test";


$ftp_conn = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");
$login = ftp_login($ftp_conn, $ftp_username, $ftp_userpass);

//--------------------------------
?>
