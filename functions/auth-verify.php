<?php
	session_start();
	include('auth.php');
	$auth=new Authenticate();
	$msg=$auth->Login($_POST['uname'], $_POST['pword'], 'SELECT * FROM tbl_users WHERE user_name=? AND password=?');
	echo $msg;
?>