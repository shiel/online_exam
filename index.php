<?php 
include 'links.php';
include 'validations.php';
include 'config.php';
?>
<html>
<head>
	<title>Registration Page</title>
</head>
<body>
	<!-- banner -->
	<div class='top navbar navbar-fixed-top'>
		<div class='container'>
			<img class='logo1' src='img/lvcc_logo.png'>
			<a href="#" class ='logo'>La Verdad Online Examination</a>
		</div>
	</div>
	<!-- main content -->
	<div class='container'>
		<div class='row'>
			<div class ='offset2 span7'>
				<div class='box'>
					<div class='heading'>Sign Up</div>
					<form class='form-horizontal' method='post' action='createUser.php'>
						<div class='control-group'>
							<label class='control-label'>Name</label>
							<div class='controls'>
								<input type='text' id='name' name='name' placeholder ='Your Name ...' onblur='check_name()'>
								<span id='err_name'></span>
							</div>
						</div>
						<div class ='control-group'>
							<label class='control-label'>Middle Name</label>
							<div class='controls'>
								<input type='text' name='mname' id='mname' placeholder ='Your Middle Name...' onblur='check_mname()'>
								<span id='err_mname'></span>
							</div>
						</div>
						<div class ='control-group'>
							<label class='control-label'>Last Name</label>
							<div class='controls'>
								<input type='text' name='lname' id='lname' placeholder ='Your Last Name...' onblur='check_lname()'>
								<span id='err_lname'></span>
							</div>
						</div>
						<div class ='control-group'>
							<label class='control-label'>Email</label>
							<div class='controls'>
								<input type='email' name='email' id='email' placeholder ='Your Email Address...' onblur ='check_email()'>
								<span id='err_email'></span>
							</div>
						</div>
						<div class ='control-group'>
							<label class='control-label'>Password</label>
							<div class='controls'>
								<input type='password' name='pwd' id='pwd' placeholder ='Your Password...' onblur='check_pass()'>
								<span id='err_pwd'></span>
							</div>
						</div>
						<div class ='control-group'>
							<label class='control-label'>Confirm Password</label>
							<div class='controls'>
								<input type='password' name='pwd1' id='pwd1' placeholder ='Confirm Password...' onblur='check_cpass()'>
								<span id='err_pwd1'></span>
							</div>
						</div>
						<div class='control-group'>
							<div class='controls'>
								<input type='submit' value='Submit' class ='btn btn-success' onclick='return check_all()'>
								<input type='reset' value='Clear' class='btn'>
							</div>
						</div>
						<div class ='controls'>
							<div class='center'>
								<div class='text'>Already Have An Account ?</div>
								<div class='link'>
									<a href="loginpage.php" class ='btn btn-danger'>Sign In</a>
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
