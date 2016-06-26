<?php 
$db_host =  "192.168.118.2";
$db_name = "moodle";
$db_user = "moodleadm";
$db_pass = "1234";

$conn = new mysqli($db_host,$db_user,$db_pass,$db_name);
if($conn->connect_error){
	die("conection failed: ".$con->connect_error);
}
?>