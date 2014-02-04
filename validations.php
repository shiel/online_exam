<?php 
include 'links.php';
 ?>
<script>
//validation for the index page
function check_name(){
	var name =document.getElementById('name').value;
	if(name.length > 3){
		document.getElementById('err_name').innerHTML='';
		return true;
	}else{
		document.getElementById('err_name').innerHTML="<img src='img/error.gif' class ='marg3'>";
		return false;
	}
}
function check_mname(){
	var mname =document.getElementById('mname').value;
	if(mname.length > 3){
		document.getElementById('err_mname').innerHTML='';
		return true;
	}else{
		document.getElementById('err_mname').innerHTML="<img src='img/error.gif' class ='marg3'>";
		return false;
	}
}
function check_lname(){
	var lname =document.getElementById('lname').value;
	if(lname.length > 3){
		document.getElementById('err_name').innerHTML='';
		return true;
	}else{
		document.getElementById('err_lname').innerHTML="<img src='img/error.gif' class ='marg3'>";
		return false;
	}
}
function check_email(){
	var email =document.getElementById('email').value;
	if(email.length > 8){
		document.getElementById('err_email').innerHTML='';
		return true;
	}else{
		document.getElementById('err_email').innerHTML="<img src='img/error.gif' class ='marg3'>";
		return false;
	}
}
function check_pass(){
	var pass =document.getElementById('pwd').value;
	if(pass.length > 8){
		document.getElementById('err_pwd').innerHTML='';
		return true;
	}else{
		document.getElementById('err_pwd').innerHTML="<img src='img/error.gif' class ='marg3'>";
		return false;
	}
}
function check_cpass(){
	var cpass =document.getElementById('pwd1').value;
	var pass =document.getElementById('pwd').value;
	if(cpass ==  pass){
		document.getElementById('err_pwd1').innerHTML='';
		return true;
	}else{
		document.getElementById('err_pwd1').innerHTML="<img src='img/error.gif' class ='marg3'>";
		return false;
	}
}
function check_all(){
	if(check_name() && check_mname() && check_lname() && check_email() && check_pass() && check_cpass()){
		return true;
	}else{
		alert('Answer the required field/s correctly.');
		return false;
	}
}
</script>
