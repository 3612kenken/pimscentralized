<?php
include('../connection.php');

class functions
{
	public function AddUsers($username, $password, $user_level, $employee_id)
	{
		$sql = 'INSERT tbl_users values(?,?,?,?,?)';

		$tm = date("hisa");
		$uID = $employee_id . date("Ymd") . "-" . $tm;
		$uID = sha1($uID);
		$password = sha1($password . "2024");
		$user_level = sha1($user_level . "2024");

		$db = new PDODatabase();
		$rset = $db->prepare($sql);

		$rset->execute(array($uID, $username, $password, $user_level, $employee_id));

		echo 'Record Saved';
	}

	public function UpdateUsers($uusername, $upassword, $uuser_level, $uemployee_id, $uID)
	{
		$sql = 'UPDATE tbl_users set username=?, password=?, user_level=?, employee_id=? WHERE tbu_id=?';

		$upassword = sha1($upassword . "2024");
		$uuser_level = sha1($uuser_level . "2024");

		$db = new PDODatabase();
		$rset = $db->prepare($sql);
		$rset->execute(array($uusername, $upassword, $uuser_level, $uemployee_id, $uID));

		echo 'Record Updated';
	}

	public function DeleteUsers($deleteID)
	{
		$sql = 'DELETE FROM tbl_users WHERE tbu_id =?';
		$db = new PDODatabase();
		$rset = $db->prepare($sql);
		$rset->execute(array($deleteID));

		echo 'Record Deleted';
	}

	public function AddBasicInfo(
		$patient_id,
		$lastname,
		$firstname,
		$middle,
		$ext,
		$province,
		$municipality,
		$barangay,
		$street,
		$phone,
		$birthdate,
		$place_birth,
		$informant,
		$gender,
		$philhealth,
		$civil_status,
		$nationality,
		$religion,
		$occupation,
		$mss_class,
		$nearest_relative,
		$relationship
	) {

		$sql = 'INSERT tbl_patient_info values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';

		$db = new PDODatabase();
		$rset = $db->prepare($sql);

		$rset->execute(array(
			$patient_id,
			$lastname,
			$firstname,
			$middle,
			$ext,
			$province,
			$municipality,
			$barangay,
			$street,
			$phone,
			$birthdate,
			$place_birth,
			$informant,
			$gender,
			$philhealth,
			$civil_status,
			$nationality,
			$religion,
			$occupation,
			$mss_class,
			$nearest_relative,
			$relationship
		));

		echo 'Record Saved';
	}

	public function UpdateBasicInfo(
		$patient_id,
		$lastname,
		$firstname,
		$middle,
		$ext,
		$province,
		$municipality,
		$barangay,
		$street,
		$phone,
		$birthdate,
		$place_birth,
		$informant,
		$gender,
		$philhealth,
		$civil_status,
		$nationality,
		$religion,
		$occupation,
		$mss_class,
		$nearest_relative,
		$relationship
	) {
		$sql = 'UPDATE tbl_patient_info SET lastname=?, firstname=?, middle=?, ext=?, province=?, municipality=?, barangay=?, street=?, phone=?, birthdate=?, place_birth=?, informant=?, gender=?, philhealth=?, civil_status=?, nationality=?, religion=?, occupation=?, mss_class=?, nearest_relative=?, relationship=? WHERE patient_id=?';

		$db = new PDODatabase();
		$rset = $db->prepare($sql);

		$rset->execute(array(
			$lastname,
			$firstname,
			$middle,
			$ext,
			$province,
			$municipality,
			$barangay,
			$street,
			$phone,
			$birthdate,
			$place_birth,
			$informant,
			$gender,
			$philhealth,
			$civil_status,
			$nationality,
			$religion,
			$occupation,
			$mss_class,
			$nearest_relative,
			$relationship,
			$patient_id
		));

		echo 'Record Updated';
	}

	public function SaveComplaint(
		$dh_id,
		$patient_condition,
		$chief_complaint,
		$history,
		$nhsid,
		$diagnosis,
		$employee_id,
		$cpatient_id,
		$date_complaint,
		$time_complaint,
		$patient_status
	) {

		$complaint_id = sha1("complaint" . date("Y-m-d H:i:s"));

		$date_time_entry = date("Y-m-d H:i:s");

		$sql = 'INSERT tbl_patient_complaint values(?,?,?,?,?,?,?,?,?,?,?,?,?)';

		$db = new PDODatabase();
		$rset = $db->prepare($sql);

		$rset->execute(array(
			$complaint_id,
			$dh_id,
			$patient_condition,
			$chief_complaint,
			$history,
			$nhsid,
			$diagnosis,
			$employee_id,
			$cpatient_id,
			$date_complaint,
			$time_complaint,
			$patient_status,
			$date_time_entry
		));
		$sql = 'INSERT tbl_queue values(?,?,?,?,?,?)';

		$db = new PDODatabase();
		$rset = $db->prepare($sql);

		$rset->execute(array(null, $complaint_id, $cpatient_id, $date_time_entry, $employee_id, "Pending"));


		echo 'Record Saved';
	}
	public function DeleteData($del_id, $del_indx)
	{
		$tbl_name = "";
		$id_name = "";
		/*																																																										*/
		$db = new PDODatabase();
		if ($del_indx == '59be36566f9cc3a098a0f15fb61a49653dc902c1') {
			$tbl_name = "tbl_patient_info";
			$id_name = "patient_id";
			$sql = 'DELETE FROM tbl_patient_complaint WHERE patient_id =?';
			$rset = $db->prepare($sql);
			$rset->execute(array($del_id));

		} elseif ($del_indx == '171758c3f04b8aa77ea6892b5c4647492d271ab8') {
			$tbl_name = "users_log";
			$id_name = "log_id";
		} elseif ($del_indx == '5568c561fd7d4e7bb6ecdfc3f03a6dfefeba6a26') {
			$tbl_name = "tbl_users";
			$id_name = "user_id";
		} elseif ($del_indx == 'idcomplaint') {
			$tbl_name = "tbl_patient_complaint";
			$id_name = "complaint_id";
		} elseif ($del_indx == 'idlab') {
			$tbl_name = "tbl_laboratory_results";
			$id_name = "lab_id";
		} elseif ($del_indx == 'idvital') {
			$tbl_name = "tbl_vital_signs";
			$id_name = "vital_id";
		}

		$sql = 'DELETE FROM ' . $tbl_name . ' WHERE ' . $id_name . ' =?';

		$rset = $db->prepare($sql);
		$rset->execute(array($del_id));

		echo 'Record Deleted';
	}
	public function SaveVitalSign($vpatient_id, $temp, $hr, $rr, $bp, $ht, $wt)
	{
		$tm = date("hisa");
		$uID = $vpatient_id . date("Ymd") . "-" . $tm;
		$uID = sha1($uID);
		$date_time_entry = date("Y-m-d H:i:s");
		$sql = 'INSERT INTO tbl_vital_signs VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)';

		$db = new PDODatabase();
		$rset = $db->prepare($sql);
		$rset->execute(array($uID, $temp, $hr, $rr, $bp, $ht, $wt, $vpatient_id, $date_time_entry));

		echo 'Vital signs saved successfully.';
	}

	public function SaveLaboratoryResult($lab_patient_id, $test_date, $test_name, $result, $unit, $normal_value, $doctor, $hospital, $address)
	{
		$lab_id = sha1("lab" . date("Y-m-d H:i:s"));
		$date_time_entry = date("Y-m-d H:i:s");

		$sql = 'INSERT INTO tbl_laboratory_results VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';

		$db = new PDODatabase();
		$rset = $db->prepare($sql);
		$rset->execute(array($lab_id, $lab_patient_id, $test_date, $test_name, $result, $unit, $normal_value, $doctor, $hospital, $address, $date_time_entry));

		echo 'Laboratory result saved successfully.';
	}

	public function AddEmployeeAndDoctor(
		$employee_id,
		$lastname,
		$firstname,
		$middle,
		$designation,
		$gender,
		$address,
		$status
	) {
		$sql = 'INSERT INTO tbl_emp_and_doctor (employee_id, lastname, firstname, middle, designation, gender, address, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';

		$db = new PDODatabase();
		$rset = $db->prepare($sql);

		$rset->execute(array(
			$employee_id,
			$lastname,
			$firstname,
			$middle,
			$designation,
			$gender,
			$address,
			$status
		));

		echo 'Employee/Doctor Record Added';
	}

	public function UpdateEmployeeAndDoctor(
		$employee_id,
		$lastname,
		$firstname,
		$middle,
		$designation,
		$gender,
		$address,
		$status
	) {
		$sql = 'UPDATE tbl_emp_and_doctor SET lastname=?, firstname=?, middle=?, designation=?, gender=?, address=?, status=? WHERE employee_id=?';

		$db = new PDODatabase();
		$rset = $db->prepare($sql);

		$rset->execute(array(
			$lastname,
			$firstname,
			$middle,
			$designation,
			$gender,
			$address,
			$status,
			$employee_id
		));

		echo 'Employee/Doctor Record Updated';
	}

	public function AddClinicInfo(
		$clinic_id,
		$profession,
		$license_num,
		$clinic_name,
		$address,
		$contact,
		$employee_id,
		$ptr
	) {
		$sql = 'INSERT INTO tbl_clinic_info (clinic_id, profession, license_num, clinic_name, address, contact, employee_id, ptr) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';

		$db = new PDODatabase();
		$rset = $db->prepare($sql);

		$rset->execute(array(
			$clinic_id,
			$profession,
			$license_num,
			$clinic_name,
			$address,
			$contact,
			$employee_id,
			$ptr
		));

		echo 'Clinic Information Added';
	}

	public function UpdateClinicInfo(
		$clinic_id,
		$profession,
		$license_num,
		$clinic_name,
		$address,
		$contact,
		$employee_id,
		$ptr
	) {
		$sql = 'UPDATE tbl_clinic_info SET profession=?, license_num=?, clinic_name=?, address=?, contact=?, employee_id=?, ptr=? WHERE clinic_id=?';

		$db = new PDODatabase();
		$rset = $db->prepare($sql);

		$rset->execute(array(
			$profession,
			$license_num,
			$clinic_name,
			$address,
			$contact,
			$employee_id,
			$ptr,
			$clinic_id
		));

		echo 'Clinic Information Updated';
	}

	public function UpdateProfile(
		$employee_id,
		$lastname,
		$firstname,
		$middle,
		$designation,
		$gender,
		$address,
		$username,
		$password,
		$clinic_id,
		$profession,
		$license_num,
		$clinic_name,
		$clinic_address,
		$clinic_contact,
		$ptr
	) {
		$db = new PDODatabase();

		// Update employee info
		$sql_employee = 'UPDATE tbl_emp_and_doctor SET lastname=?, firstname=?, middle=?, designation=?, gender=?, address=? WHERE employee_id=?';
		$rset_employee = $db->prepare($sql_employee);
		$rset_employee->execute(array($lastname, $firstname, $middle, $designation, $gender, $address, $employee_id));

		// Update user info
		$sql_user = 'UPDATE tbl_users SET user_name=?, password=? WHERE employee_id=?';
		$password_hashed = sha1($password . "2024");
		$rset_user = $db->prepare($sql_user);
		$rset_user->execute(array($username, $password_hashed, $employee_id));

		// Update clinic info
		$sql_clinic = 'UPDATE tbl_clinic_info SET profession=?, license_num=?, clinic_name=?, address=?, contact=?, ptr=? WHERE employee_id=?';
		$rset_clinic = $db->prepare($sql_clinic);
		$rset_clinic->execute(array($profession, $license_num, $clinic_name, $clinic_address, $clinic_contact, $ptr, $employee_id));

		echo 'Profile Updated Successfully';
	}

	public function GetPatientInfo($get_patient_id)
	{
		$sql = "SELECT * FROM tbl_patient_info where patient_id = ?";

		$db = new PDODatabase();
		$result = $db->prepare($sql);
		$result->execute(array($get_patient_id));
		$output = '';
		$j = 0;
		while ($row = $result->fetch()) {
			$j++;
			$output .= '<tr>
				<td>' . $j . '</td>
				<td>' . $row['lastname'] . '</td>
				<td>' . $row['firstname'] . '</td>
				<td>' . $row['middle'] . '</td>
				<td>' . $row['ext'] . '</td>
				<td>
					<button class="btn badge bg-danger" onclick="ModalComplaint(\'' . $row['patient_id'] . '\')">Patient health records</button>
				</td>
				<td>None</td>
				<td>
					<button class="btn badge bg-primary"> <i class="fa fa-edit"></i></button>
					<button class="btn badge bg-danger" onclick="DeleteData(\'' . $row['patient_id'] . '\', \'59be36566f9cc3a098a0f15fb61a49653dc902c1\', 3);"> <i class="fa fa-trash"></i></button>
				</td>
			</tr>';
		}
		echo $output;
		exit;
	}

	public function GetPatientComplaint($getc_patient_id)
	{
		$sql = "SELECT * FROM tbl_patient_complaint WHERE patient_id = ?"; // Correct column name

		$db = new PDODatabase();
		$result = $db->prepare($sql);
		$result->execute(array($getc_patient_id));
		$output = '';
		$j = 0;
		while ($row = $result->fetch()) {
			$j++;
			$output .= '<tr>
				<td>' . $j . '</td>
				<td>' . $row['date_complaint'] . '</td>
				<td>' . $row['patient_condition'] . '</td>
				<td>' . $row['chief_complaint'] . '</td>
				<td>' . $row['history'] . '</td>
				<td>' . $row['diagnosis'] . '</td>
				<td>' . $row['employee_id'] . '</td>
				<td><button class="btn btn-primary btn-sm">Show</button></td>
			</tr>';
		}
		echo $output;
		exit;
	}

	public function GetVitalSigns($getv_patient_id)
	{

		$sql = "SELECT * FROM tbl_vital_signs WHERE patient_id = ?";

		$db = new PDODatabase();
		$result = $db->prepare($sql);
		$result->execute(array($getv_patient_id));
		$output = '';
		$j = 0;
		while ($row = $result->fetch()) {
			$j++;
			$output .= '<tr>
				<td>' . $j . '</td>
				<td>' . $row[1] . '</td>
				<td>' . $row[2] . '</td>
				<td>' . $row[3] . '</td>
				<td>' . $row[4] . '</td>
				<td>' . $row[5] . '</td>
				<td>' . $row[6] . '</td>
				<td><button class="btn btn-primary btn-sm">Edit</button></td>
				<td>Active</td>
			</tr>';
		}
		echo $output . "Vital Signs";
		exit;
	}

	public function GetLaboratoryResults($getl_patient_id)
	{

		$sql = "SELECT * FROM tbl_laboratory_results WHERE patient_id = ?";

		$db = new PDODatabase();
		$result = $db->prepare($sql);
		$result->execute(array($getl_patient_id));
		$output = '';
		$j = 0;
		while ($row = $result->fetch()) {
			$j++;
			$output .= '<tr>
				<td>' . $j . '</td>
				<td>' . $row['test_date'] . '</td>
				<td>' . $row['test_name'] . '</td>
				<td>' . $row['result'] . '</td>
				<td>' . $row['unit'] . '</td>
				<td>' . $row['normal_value'] . '</td>
				<td>' . $row['doctor'] . '</td>
				<td>' . $row['hospital'] . '</td>
				<td>' . $row['address'] . '</td>
				<td>
					<button class="btn badge bg-primary"> <i class="fa fa-edit"></i></button>
					<button class="btn badge bg-danger" onClick="DeleteData(&#39;' . $row[0] . '&#39;,&#39;idlab&#39;);"> <i class="fa fa-trash"></i></button>
				</td>
			</tr>';
		}
		echo $output . "laboratory";
		exit;
	}

	public function LogUserAction($user_id, $action_made, $status)
	{

		$db = new PDODatabase();
		if (!session_start()) {
			session_start();
		}

		$user_id = $_SESSION['ID'];
		$log_id = sha1("log" . date("Y-m-d H:i:s") . $user_id);
		$time_log = date("H:i:s");
		$date_log = date("Y-m-d") . ' ' . $time_log;

		$sql = 'INSERT INTO users_log (log_id, date_log, time_log, action_made, status, user_id) VALUES (?, ?, ?, ?, ?, ?)';
		$rset = $db->prepare($sql);

		try {
			$rset->execute(array($log_id, $date_log, $time_log, $action_made, $status, $user_id));
		} catch (PDOException $e) {
			error_log("Failed to log user action: " . $e->getMessage());
			echo 'Failed to log user action.';
		}
	}

	public function AddDoctorSchedule($employee_id, $date_from, $date_to, $time_from, $time_to, $room)
	{
		$ds_id = sha1("schedule" . date("Y-m-d H:i:s") . $employee_id); // Generate unique ID
		$sql = 'INSERT INTO tbl_doctor_sched (ds_id, employee_id, date_from, date_to, time_from, time_to, room) VALUES (?, ?, ?, ?, ?, ?, ?)';

		$db = new PDODatabase();
		$rset = $db->prepare($sql);

		$rset->execute(array(
			$ds_id,
			$employee_id,
			$date_from,
			$date_to,
			$time_from,
			$time_to,
			$room
		));

		echo 'Doctor Schedule Added Successfully';
	}
}

// Initialize $msg to avoid undefined variable warning
$msg = "";

$functions = new functions();

if (!isset($db)) {
	$db = new PDODatabase();
}

if (isset($_POST['get_patient_id'])) {
	$get_patient_id = $_POST['get_patient_id'];
	$functions->GetPatientInfo(get_patient_id: $get_patient_id);

}
if (isset($_POST['getc_patient_id'])) {
	$getc_patient_id = $_POST['getc_patient_id'];
	$functions->GetPatientComplaint($getc_patient_id);

}
if (isset($_POST['getv_patient_id'])) {
	$getv_patient_id = $_POST['getv_patient_id'];
	$functions->GetVitalSigns($getv_patient_id);

}
if (isset($_POST['getl_patient_id'])) {
	$getl_patient_id = $_POST['getl_patient_id'];
	$functions->GetLaboratoryResults($getl_patient_id);

}
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
	$msg = $functions->SaveComplaint(
		$_POST['dh_id'],
		$_POST['patient_condition'],
		$_POST['chief_complaint'],
		$_POST['history'],
		$_POST['nhsid'],
		$_POST['diagnosis'],
		$_POST['employee_id'],
		$_POST['cpatient_id'],
		$_POST['date_complaint'],
		$_POST['time_complaint'],
		$_POST['patient_status']
	);

}
if (isset($_POST['patient_id'])) {

	$msg = $functions->AddBasicInfo(
		$_POST['patient_id'],
		$_POST['lastname'],
		$_POST['middle'],
		$_POST['firstname'],
		$_POST['ext'],
		$_POST['province'],
		$_POST['municipality'],
		$_POST['barangay'],
		$_POST['street'],
		$_POST['phone'],
		$_POST['birthdate'],
		$_POST['place_birth'],
		$_POST['informant'],
		$_POST['gender'],
		$_POST['philhealth'],
		$_POST['civil_status'],
		$_POST['nationality'],
		$_POST['religion'],
		$_POST['occupation'],
		$_POST['mss_class'],
		$_POST['nearest_relative'],
		$_POST['relationship']
	);

}

if (isset($_POST['update_patient_id'])) {
	$msg = $functions->UpdateBasicInfo(
		$_POST['update_patient_id'],
		$_POST['lastname'],
		$_POST['firstname'],
		$_POST['middle'],
		$_POST['ext'],
		$_POST['province'],
		$_POST['municipality'],
		$_POST['barangay'],
		$_POST['street'],
		$_POST['phone'],
		$_POST['birthdate'],
		$_POST['place_birth'],
		$_POST['informant'],
		$_POST['gender'],
		$_POST['philhealth'],
		$_POST['civil_status'],
		$_POST['nationality'],
		$_POST['religion'],
		$_POST['occupation'],
		$_POST['mss_class'],
		$_POST['nearest_relative'],
		$_POST['relationship']
	);
}

if (isset($_POST['vpatient_id'])) {
	$vpatient_id = $_POST['vpatient_id'];
	$temp = $_POST['temp'];
	$hr = $_POST['hr'];
	$rr = $_POST['rr'];
	$bp = $_POST['bp'];
	$ht = $_POST['ht'];
	$wt = $_POST['wt'];

	$msg = $functions->SaveVitalSign($vpatient_id, $temp, $hr, $rr, $bp, $ht, $wt);
}

if (isset($_POST['lab_patient_id'])) {
	$lab_patient_id = $_POST['lab_patient_id'];
	$test_date = $_POST['test_date'];
	$test_name = $_POST['test_name'];
	$result = $_POST['result'];
	$unit = $_POST['unit'];
	$normal_value = $_POST['normal_value'];
	$doctor = $_POST['doctor'];
	$hospital = $_POST['hospital'];
	$address = $_POST['address'];

	$msg = $functions->SaveLaboratoryResult($lab_patient_id, $test_date, $test_name, $result, $unit, $normal_value, $doctor, $hospital, $address);
}

if (isset($_POST['add_employee_id'])) {
	$msg = $functions->AddEmployeeAndDoctor(
		$_POST['add_employee_id'],
		$_POST['lastname'],
		$_POST['firstname'],
		$_POST['middle'],
		$_POST['designation'],
		$_POST['gender'],
		$_POST['address'],
		$_POST['status']
	);
}

if (isset($_POST['update_employee_id'])) {
	$msg = $functions->UpdateEmployeeAndDoctor(
		$_POST['update_employee_id'],
		$_POST['lastname'],
		$_POST['firstname'],
		$_POST['middle'],
		$_POST['designation'],
		$_POST['gender'],
		$_POST['address'],
		$_POST['status']
	);
}

if (isset($_POST['add_clinic_id'])) {
	$msg = $functions->AddClinicInfo(
		$_POST['add_clinic_id'],
		$_POST['profession'],
		$_POST['license_num'],
		$_POST['clinic_name'],
		$_POST['address'],
		$_POST['contact'],
		$_POST['employee_id'],
		$_POST['ptr']
	);
}

if (isset($_POST['update_clinic_id'])) {
	$msg = $functions->UpdateClinicInfo(
		$_POST['update_clinic_id'],
		$_POST['profession'],
		$_POST['license_num'],
		$_POST['clinic_name'],
		$_POST['address'],
		$_POST['contact'],
		$_POST['employee_id'],
		$_POST['ptr']
	);
}

if (isset($_POST['update_profile'])) {
	$msg = $functions->UpdateProfile(
		$_POST['puemployee_id'],
		$_POST['pulastname'],
		$_POST['pufirstname'],
		$_POST['pumiddle'],
		$_POST['pudesignation'],
		$_POST['pugender'],
		$_POST['puaddress'],
		$_POST['puusername'],
		$_POST['pupassword'],
		$_POST['puclinic_id'],
		$_POST['puprofession'],
		$_POST['pulicense_num'],
		$_POST['puclinic_name'],
		$_POST['puclinic_address'] ?? '', // Use null coalescing operator to provide a default value
		$_POST['puclinic_contact'] ?? '',  // Use null coalescing operator to provide a default value
		$_POST['puclinic_ptr'] ?? '' // Use null coalescing operator to provide a default value
	);
}

if (isset($_POST['log_action'])) {
	$functions->LogUserAction(
		$_POST['user_id'],
		$_POST['action_made'],
		$_POST['status']
	);
}

if (isset($_POST['add_schedule'])) {
	$msg = $functions->AddDoctorSchedule(
		$_POST['employee_id'],
		$_POST['date_from'],
		$_POST['date_to'],
		$_POST['time_from'],
		$_POST['time_to'],
		$_POST['room']
	);
}

echo $msg;

?>