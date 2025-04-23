<?php
include('../connection.php');

header('Content-Type: application/json');

$patient_id = isset($_GET['patient_id']) ? $_GET['patient_id'] : null;
$db = new PDODatabase();

$response = [];

// Fetch Patient Info
if ($patient_id) {
    $sql_patient_info = "SELECT * FROM tbl_patient_info WHERE patient_id = ?";
    $result_patient_info = $db->prepare($sql_patient_info);
    $result_patient_info->execute([$patient_id]);
    $response['PatientInfo'] = $result_patient_info->fetch(PDO::FETCH_ASSOC);

    // Fetch Patient Complaint
    $sql_patient_complaint = "SELECT * FROM tbl_patient_complaint WHERE patient_id = ?";
    $result_patient_complaint = $db->prepare($sql_patient_complaint);
    $result_patient_complaint->execute([$patient_id]);
    $response['PatientComplaint'] = $result_patient_complaint->fetchAll(PDO::FETCH_ASSOC);

    // Fetch Vital Signs
    $sql_vital_signs = "SELECT * FROM tbl_vital_signs WHERE patient_id = ?";
    $result_vital_signs = $db->prepare($sql_vital_signs);
    $result_vital_signs->execute([$patient_id]);
    $response['VitalSigns'] = $result_vital_signs->fetchAll(PDO::FETCH_ASSOC);

    // Fetch Laboratory Results
    $sql_laboratory_results = "SELECT * FROM tbl_laboratory_results WHERE patient_id = ?";
    $result_laboratory_results = $db->prepare($sql_laboratory_results);
    $result_laboratory_results->execute([$patient_id]);
    $response['LaboratoryResults'] = $result_laboratory_results->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Fetch all Patient Info
    $sql_patient_info = "SELECT * FROM tbl_patient_info";
    $result_patient_info = $db->prepare($sql_patient_info);
    $result_patient_info->execute();
    $response['PatientInfo'] = $result_patient_info->fetchAll(PDO::FETCH_ASSOC);

    // Fetch all Patient Complaints
    $sql_patient_complaint = "SELECT * FROM tbl_patient_complaint";
    $result_patient_complaint = $db->prepare($sql_patient_complaint);
    $result_patient_complaint->execute();
    $response['PatientComplaint'] = $result_patient_complaint->fetchAll(PDO::FETCH_ASSOC);

    // Fetch all Vital Signs
    $sql_vital_signs = "SELECT * FROM tbl_vital_signs";
    $result_vital_signs = $db->prepare($sql_vital_signs);
    $result_vital_signs->execute();
    $response['VitalSigns'] = $result_vital_signs->fetchAll(PDO::FETCH_ASSOC);

    // Fetch all Laboratory Results
    $sql_laboratory_results = "SELECT * FROM tbl_laboratory_results";
    $result_laboratory_results = $db->prepare($sql_laboratory_results);
    $result_laboratory_results->execute();
    $response['LaboratoryResults'] = $result_laboratory_results->fetchAll(PDO::FETCH_ASSOC);
}

// Return JSON response
echo json_encode($response);
