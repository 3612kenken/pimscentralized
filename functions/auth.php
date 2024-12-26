<?php
	include('../connection.php');
	class Authenticate{
		public function Login($uname, $pword, $sql){
			$funct = new PDODatabase();
			$rset=$funct->prepare($sql);
			$rset->execute(array($uname, $pword));
			$username='';
			$password='';
			$user_level='';
			$employee_id='';	
			$status='';
			$ID='';
			while($rwset=$rset->fetch()){
				$ID=$rwset[0];
				$username=$rwset[1];
				$password=$rwset[2];
				$user_level=$rwset[3];
				$employee_id=$rwset[4];
				$status=$rwset[5];
			}
			if($username==''){
				return 'Failed';
			}else{
				$_SESSION['ID']=$ID;
				$_SESSION['username']=$username;
				$_SESSION['password']=$password;
				$_SESSION['user_level']=$user_level;
				$_SESSION['employee_id']=$employee_id;
				$_SESSION['status']=$status;				
				return 'Success';
				
			}
		}
		
		public function Logout(){
			session_destroy();
			return 'Success';
		}
	}
?>