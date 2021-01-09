<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'crud_1810530196';

$link = mysqli_connect($host, $user,$pass,$db);

if (!$link) {
	die(mysqli_connect_error);
	# code...
}
 ?>