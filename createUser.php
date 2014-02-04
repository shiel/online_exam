<?php
include 'config.php';
include 'ExamDAO.php';

$name =(isset($_REQUEST['name'])) ? $_REQUEST['name']:false;
$mname=(isset($_REQUEST['mname'])) ? $_REQUEST['mname']:false;
$lname=(isset($_REQUEST['lname'])) ? $_REQUEST['lname']:false;
$email=(isset($_REQUEST['email'])) ? $_REQUEST['email']: false;
$password =(isset($_REQUEST['pwd'])) ? $_REQUEST['pwd']:false;
$password1 =(isset($_REQUEST['pwd1'])) ? $_REQUEST['pwd1']: false;

//add user to the database.
$user = ExamDAO::createUser($name,$mname,$lname,$email,$password);
//check if the email is already existing or not
if($user){
	echo "<script>alert('Welcome.You may now proceed to the Login page.');window.location.href='loginpage.php'</script>";
}else{
	echo "<script>alert('Email Already exist.');window.location.href='index.php'</script>";
}
?>
