<?php 
include 'config.php';
include 'ExamDAO.php';
include 'links.php';

session_start();
$answer = (isset($_POST['answer'])) ? $_POST['answer'] :"";
$id = (isset($_POST['id'])) ?$_POST['id'] + 1 : 1 ;
$answers = (isset($_POST['answers'])) ? $_POST['answers'] :"";
$answer .= $answers;

if($id > 10){
	$_SESSION['answer'] = $answer;
	header("Location:result.php");
	}

$quest = ExamDAO::getQuestion($id);

 ?>
<html>
<script>
//check if the examinee has an answer
$(document).ready(function(){
	$('#submit').click(function(){
		if($('#A').is(":checked")){
			return true;
		}else if($('#B').is(":checked")){
			return true;
		}else if($('#C').is(":checked")){
			return true;
		}else if($('#D').is(":checked")){
			return true;
		}else{
			alert('Kindly,answer the question.');
			return false;
		}
	});
});
</script>
<head>
	<title>Questions :</title>
</head>
<body>
<form method ='post' action ='<?= $_SERVER['PHP_SELF']?>'>
	<div class='box1 offset3 text'>
		<div class='page-header marg1'>
			<div class='pull-right marg'>
				Question :<?= $quest['q_id'] ?> /10
				<input type = "hidden" name = "answer" value = "<?=$answer?>">
				<input type = "hidden" name = "id" value = "<?=$id?>">
			</div>
			</div>
			<center>
			<div id ='q'><h4><?= $quest['q_id'] ?>.
			<?= $quest['question'] ?></h4></div>
			<br>
			<div id= 'choice'>
				<table>
					<tr>
						<td><label><input type='radio' name ='answers' id ='A' value ='A'>&nbsp;<?= $quest['choice_A']?></label></td>
					</tr>
					<tr>
						<td><label><input type='radio' name ='answers' id ='B' value ='B'>&nbsp;<?= $quest['choice_B']?></label></td>
					</tr>
					<tr>
						<td><label><input type='radio' name ='answers' id ='C' value ='C'><?= $quest['choice_C']?></label></td>
					</tr>
						<td><label><input type='radio' name ='answers' id ='D' value ='D'>&nbsp;<?= $quest['choice_D']?></label></td>
					<tr><br>
						<td><br><br><input type='submit' name ='submit' id='submit' value ='Submit' class ='btn btn-success'></td>
					</tr>
				</table>
			</div>
	</center>
	</div>
</form>
</body>
</html>
