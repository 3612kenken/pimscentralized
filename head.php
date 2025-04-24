<?php
session_start();

if (isset($_SESSION['ID'])) {

} else {
	header("Location: index.php");
}
include('connection.php');
$db = new PDODatabase;
$fullname = "";
$lastname = "";
$firstname = "";
$mi = "";
$designation = "";
$address = "";
$clinic = "";
$caddress = "";
$license = "";
$clinicname = "";
$contact = "";
$ptr = "";
$gender = ""; // Added to fix the undefined variable issue
$sql = "SELECT d.*, c.* FROM tbl_emp_and_doctor as d LEFT OUTER JOIN tbl_doctor_sched as s ON d.employee_id = s.employee_id LEFT OUTER JOIN tbl_clinic_info as c on c.employee_id = d.employee_id WHERE d.employee_id =?";
//$ScheduleOutput
$output = '';

$result = $db->prepare($sql);
$result->execute(array($_SESSION['employee_id']));
for ($i = 0; $row = $result->fetch(); $i++) {

	$fullname = $row[2] . " " . $row[3] . " " . $row[1];
	$lastname = $row[1];
	$firstname = $row[2];
	$mi = $row[3];
	$designation = $row[4];
	$address = $row[6];
	$license = $row[10];
	$clinicname = $row[10];
	$clinic = $row[11];
	$caddress = $row[12];
	$contact = $row[13];
	$ptr = $row[15];
	$gender = $row[5]; // Assigning the gender value from the database
}
?>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PISYS-Patient Information System</title>

	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/vendors/simple-datatables/style.css">
	<link rel="stylesheet" href="assets/vendors/apexcharts/apexcharts.css">
	<link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
	<link rel="stylesheet" href="assets/css/app.css">
	<link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
	<script src="assets/vendors/simple-datatables/simple-datatables.js"></script>





</head>