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
}

$functions = new functions();
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
echo $msg;

?>
