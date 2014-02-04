<?php
include 'config.php';
include 'validateLogin.php';
include 'links.php';

?>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<!-- banner -->
	<div class='top navbar navbar-fixed-top'>
		<div class='container'>
			<img class='logo1' src='img/lvcc_logo.png'>
			<a href="#" class ='logo'>Login</a>
		</div>
	</div>
	<!-- main content -->
	<div class='container'>
		<div class='row'>
			<div class ='offset2 span7'>
				<div class='box'>
					<div class='heading'><i class ='icon-lock'></i>Sign In</div>
					<form class='form-horizontal' method='post' action='welcomepage.php'>
						<div class='control-group'>
							<label class='control-label'>Email</label>
							<div class='controls'>
								<input type='text' id='email1' name='email1' placeholder ='Email ...' onblur='check_email()'>
								<span id='err_email1'></span>
							</div>
						</div>
						<div class ='control-group'>
							<label class='control-label'>Password</label>
							<div class='controls'>
								<input type='password' name='pass1' id='pass1' placeholder ='Password ...' onblur='check_pass()'>
								<span id='err_pass1'></span>
							</div>
						</div>
						<div class='control-group'>
							<div class='controls'>
								<input type='submit' value='Submit' class ='btn btn-success'>
								<input type='reset' value='Clear' class='btn'>
							</div>
						</div>
						<div class ='controls'>
							<div class='center'>
								<div class='text'>New to This App ?</div>
								<div class='link'>
									<a href="index.php" class ='btn btn-danger'>Sign Up</a>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- footer -->
	<div class ='color'>
		<footer><hr><center>All Rights Reserve<br> 20-present</center></footer>
	</div>
</body>
</html>

