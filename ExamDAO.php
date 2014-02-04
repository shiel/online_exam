<?php
	class ExamDAO {
		public static function getQuestion($id){
		try{
			global $db;
			$query = "SELECT q_id,question,choice_A,choice_B,choice_C,choice_D FROM questions WHERE q_id ='{$id}'";
			$result = $db->query($query);
			if ($result->num_rows > 0) {
				$row = $result->fetch_assoc();
			return $row;
			} else {
				return false;
			}
		}
		catch(Exception $e){
			error_log('Failed');
			}
		}
			public static function createUser($name,$mname,$lname,$email,$password){
				try {
					global $db;
					if(!$email) return false;
					if(!$password) return false;
					//if email is already existing.
					$query ="SELECT * FROM user WHERE email ='{$email}' AND password ='{$password}'";
					$result =$db->query($query);
						if($result->num_rows > 0){
							return false;
						}else{
							$query = "INSERT INTO user (name , mname , lname , email , password) VALUES('$name', '$mname', '$lname', '$email', '$password')";
							$result = $db->query($query);
							return true;
						}
					}catch(Exception $e){
						error_log('Failed.');
					}
			}
			//login
		public static function authenticate($email,$password){
			try{
				global $db;
				$query="SELECT * FROM user WHERE email = '{$email}' AND password = '{$password}' ";
				$result =$db->query($query);
				if($result){
					if($result->num_rows > 0){
						$user=$result->fetch_assoc();
						$result->free();
						return $user;
					}else{
						return false;
					}
				}else{
					echo "<script> alert('Error Logging In.Check your email/password.')</script>";
					return false;
				}
			}catch(Exception $e){
				error_log('Failed');
			}
			
		}
		public static function getAnswer(){
			try{
				global $db;
				$query ="SELECT answer FROM questions ORDER BY `q_id`";
				$result =$db->query($query);
				$row =array();
				while($answers = $result->fetch_assoc()){
					$row[] =$answers['answer'];
				}
				return $row;
			}catch(Exception $e){
				error_log('Failed.');
			}
			
		}
		public static function getScore($answer){
			try{
				$correct =self::getAnswer();
				if($correct === false){
					error_log('Answers are not ready.');
					return false;
				}if(count($correct) != strlen($answer)){
					error_log('Your answers are not valid.');
					return false;
				}
				$score = 0;
				for($a =0 ;$a < 10 ;$a++){
					if($correct[$a] == $answer[$a]){
						$score++;
					}
				}
				return $score;
			}catch(Exception $e){
				error_log('Failed.');
			}
		}
		//print the equivalent msg :)
	public static function getResult($ans){
		$result =self::getScore($ans);
		$msg ='';
		if($result >= 7){
			$msg = "<h4>Congratulations ! You passed the Exam.</h4>";
		}else if($result == 1){
			$msg = "<h4>You had answer ".$result." question.</h4>";
		}else{
			$msg = "<h4>Congratulations ! You had answer ".$result." questions correctly.</h4>";
		}
		return $msg;
	}
			
}

?>
