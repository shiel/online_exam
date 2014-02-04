<?php 
$con =array(
	'host' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'exam_db'
	);
$db =new mysqli(
	$con['host'],
	$con['username'],
	$con['password'],
	$con['database']
	);
if(mysqli_connect_errno()){
	echo 'Could not connect to the database.';
	exit;
}
 ?>
