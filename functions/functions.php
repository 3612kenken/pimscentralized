<?php
include('../connection.php');

class functions
{
	public function AddUsers($username, $password, $user_level, $employee_id){
		$sql = 'INSERT tbl_users values(?,?,?,?,?)';
		
		$tm = date("hisa");
		$uID = $employee_id.date("Ymd")."-".$tm;
		$uID = sha1($uID);
		$password =sha1($password."2024");
		$user_level =sha1($user_level."2024");
		
			$db = new PDODatabase();
			$rset = $db->prepare($sql);
			
			$rset->execute(array($uID, $username, $password, $user_level, $employee_id));

			echo 'Record Saved';
	}
	
	public function UpdateUsers($uusername, $upassword, $uuser_level, $uemployee_id, $uID){
		$sql = 'UPDATE tbl_users set username=?, password=?, user_level=?, employee_id=? WHERE tbu_id=?';
		
		$upassword =sha1($upassword."2024");
		$uuser_level =sha1($uuser_level."2024");
		
			$db = new PDODatabase();
			$rset = $db->prepare($sql);
			$rset->execute(array($uusername, $upassword, $uuser_level, $uemployee_id,$uID));

			echo 'Record Updated';
	}
	
	public function DeleteUsers($deleteID){
		$sql = 'DELETE FROM tbl_users WHERE tbu_id =?';
			$db = new PDODatabase();
			$rset = $db->prepare($sql);
			$rset->execute(array($deleteID));

			echo 'Record Deleted';
	}
	
	public function AddBasicInfo($patient_id,$lastname,$firstname,$middle,$ext,$province,$municipality,
									$barangay, $street,$phone,$birthdate ,$place_birth,
									$informant,$gender,$philhealth,$civil_status,$nationality,
									$religion,$occupation,$mss_class,
									$nearest_relative, $relationship){
			
		$sql = 'INSERT tbl_patient_info values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
		
			$db = new PDODatabase();
			$rset = $db->prepare($sql);
			
			$rset->execute(array($patient_id,$lastname,$firstname,$middle,$ext,$province,$municipality,
									$barangay, $street,$phone,$birthdate ,$place_birth,
									$informant,$gender,$philhealth,$civil_status,$nationality,
									$religion,$occupation,$mss_class,
									$nearest_relative, $relationship));

			echo 'Record Saved';
	}
	public function SaveComplaint($dh_id,$patient_condition,$chief_complaint,
				$history,$nhsid,$diagnosis,$employee_id,$cpatient_id,$date_complaint, $time_complaint,  $patient_status){
					
			$complaint_id = sha1("complaint".date("Y-m-d H:i:s"));
			
			$date_time_entry =date("Y-m-d H:i:s");
			
			$sql = 'INSERT tbl_patient_complaint values(?,?,?,?,?,?,?,?,?,?,?,?,?)';
		
			$db = new PDODatabase();
			$rset = $db->prepare($sql);
			
			$rset->execute(array($complaint_id, $dh_id,$patient_condition,$chief_complaint,
				$history,$nhsid,$diagnosis,$employee_id,$cpatient_id, $date_complaint, $time_complaint,
				$patient_status, $date_time_entry));		
		echo 'Record Saved';			
	}
	public function DeleteData($del_id, $del_indx){
		$tbl_name="";
		$id_name="";
		/*
		
		59be36566f9cc3a098a0f15fb61a49653dc902c1 = 1fss - tbl_patient_info
		96ac4e3ace276447823abf60c6ba5c82c9c8ac99 = 2fss - subjects
		89f55692ba270667c86539774b7060b76f9fdd8e = 3fss - student sec
		dd2e4f810de2943c36278d58313b9179ca3be6f1 = 4fss - faculty
		df27b3e59fd5795b51cd2a6a1c9ee1626b71558d = 5fss - schedhistory
		171758c3f04b8aa77ea6892b5c4647492d271ab8 = 6fss - userlog
		5568c561fd7d4e7bb6ecdfc3f03a6dfefeba6a26 = 7fss - users
		
		
		*/
		$db = new PDODatabase();
		if($del_indx=='59be36566f9cc3a098a0f15fb61a49653dc902c1'){
			$tbl_name="tbl_patient_info";
			$id_name="patient_id";
			
			$sql = 'DELETE FROM tbl_patient_complaint WHERE patient_id =?';
		
			
			$rset = $db->prepare($sql);
			$rset->execute(array($del_id));
			
		}elseif($del_indx=='96ac4e3ace276447823abf60c6ba5c82c9c8ac99'){
			$tbl_name="tbl_subjects";
			$id_name="subj_id";
			
		}elseif($del_indx=='89f55692ba270667c86539774b7060b76f9fdd8e'){
			$tbl_name="tbl_students_sec";
			$id_name="sec_id";
			
			
		}elseif($del_indx=='dd2e4f810de2943c36278d58313b9179ca3be6f1'){
			$tbl_name="tbl_faculty";
			$id_name="faculty_id";
			
			$sql = 'DELETE FROM tbl_faculty_availability WHERE faculty_id =?';
		
			
			$rset = $db->prepare($sql);
			$rset->execute(array($del_id));

			
		}elseif($del_indx=='df27b3e59fd5795b51cd2a6a1c9ee1626b71558d'){
			$tbl_name="tbl_sched_history";
			$id_name="sched_hs_id";
			
		}elseif($del_indx=='171758c3f04b8aa77ea6892b5c4647492d271ab8'){
			$tbl_name="users_log";
			$id_name="log_id";
		}elseif($del_indx=='5568c561fd7d4e7bb6ecdfc3f03a6dfefeba6a26'){
			$tbl_name="tbl_users";
			$id_name="user_id";
		}elseif($del_indx=='idlog'){
			$tbl_name="users_log";
			$id_name="log_id";
		}elseif($del_indx=='idnotif'){
			$tbl_name="tbl_notif";
			$id_name="notif_id ";
		}
		
		$sql = 'DELETE FROM '.$tbl_name.' WHERE '.$id_name.' =?';
		
			$rset = $db->prepare($sql);
			$rset->execute(array($del_id));

			echo 'Record Deleted';
	}
}

$functions = new functions();

if (isset($_POST['del_id'])) {
	$msg = $functions->DeleteData($_POST['del_id'], $_POST['del_indx']);
}
//Add Records
if (isset($_POST['username'])) {

	$msg = $functions->AddUsers($_POST['username'], $_POST['password'], $_POST['user_level'], $_POST['employee_id']);

}
//Update Records
if (isset($_POST['uusername'])) {
	$msg = $functions->UpdateUsers($_POST['uusername'], $_POST['upassword'], $_POST['uuser_level'], $_POST['uemployee_id']);

}
//Delete Records
if (isset($_POST['deleteID'])) {
	$msg = $functions->DeleteUsers($_POST['deleteID']);

}

if (isset($_POST['dh_id'])) {
	$msg = $functions->SaveComplaint($_POST['dh_id'],$_POST['patient_condition'],$_POST['chief_complaint'],
				$_POST['history'],$_POST['nhsid'],$_POST['diagnosis'],$_POST['employee_id'],$_POST['cpatient_id'],
				$_POST['date_complaint'],$_POST['time_complaint'],$_POST['patient_status'] );

}
if (isset($_POST['patient_id'])) {
	
	$msg = $functions->AddBasicInfo($_POST['patient_id'],$_POST['lastname'],$_POST['middle'],$_POST['firstname'],
	$_POST['ext'],$_POST['province'],$_POST['municipality'],$_POST['barangay'],
 $_POST['street'],$_POST['phone'],$_POST['birthdate'],$_POST['place_birth'],$_POST['informant'],
 $_POST['gender'],$_POST['philhealth'],$_POST['civil_status'],$_POST['nationality'],
 $_POST['religion'], $_POST['occupation'],$_POST['mss_class'],
 $_POST['nearest_relative'], $_POST['relationship']);
 
}
echo $msg;

?>
