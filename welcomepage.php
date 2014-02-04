<?php
include 'config.php';
include 'ExamDAO.php';

$email=(isset($_REQUEST['email1'])) ?  $_REQUEST['email1']:false;
$password=(isset($_REQUEST['pass1'])) ? $_REQUEST['pass1']: false;

$authen =ExamDAO::authenticate($email,$password);
if(!$authen){
	echo "<script>alert('Wrong email/password');window.location.href='loginpage.php'</script>";
}else{
	echo "<script>alert('You may now take your Exam.');window.location.href= 'questionspage.php'</script>";
}

?>
