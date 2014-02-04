<script src="js/jquery-1.10.2.min.js"></script>
<script >
function check_email(){
	var email =document.getElementById('email1').value;
	if(email.length > 0) {
		document.getElementById('err_email1').innerHTML = '';
		return true;
	}else{
		document.getElementById('err_email1').innerHTML ='Enter your Email.';
		return false;
	}
}
function check_pass(){
	var pass = document.getElementById('pass1').value;
	if(pass.length > 0){
		document.getElementById('err_pass1').innerHTML='';
		return true;
	}else{
		document.getElementById('err_pass1').innerHTML ='Enter your Password.';
		return false;
	}
}
</script>
