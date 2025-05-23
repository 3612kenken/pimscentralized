var cur_patient_id = "";
function DeleteData(del_id, del_indx){
					$.post("./functions/functions.php", {del_id:del_id,del_indx:del_indx})
					
					.done(function(data) {
						SwalAlert(1,"Data Deleted","Deleted");
						GetPatientInfo(cur_patient_id);
						GetPatientComplaint(cur_patient_id);
						GetVitalSign(cur_patient_id);
						GetLaboratoryResult(cur_patient_id);
					});
		}	
function EditBasicInfo(p_id){
	
	$('#patient_id').val(p_id);
	$('#lastname').val($('#lastname'+p_id).val());
	$('#firstname').val($('#firstname'+p_id).val());
	$('#middle').val($('#middle'+p_id).val());
	$('#ext').val($('#ext'+p_id).val());
	$('#municipality :selected').val($('#municipality'+p_id).val());
	$('#barangay :selected').val($('#barangay'+p_id).val());
	$('#street').val($('#street'+p_id).val());
	$('#phone').val($('#phone'+p_id).val());
	$('#birth').val($('#birth'+p_id).val());
	$('#place_birth').val($('#place_birth'+p_id).val());
	$('#informant').val($('#informant'+p_id).val());
	$('#gender :selected').val();
	$('#philhealth').val($('#street'+p_id).val());
	$('#civil_status :selected').val($('#civil_status'+p_id).val());
	$('#nationality :selected').val($('#nationality'+p_id).val());
	$('#religion :selected').val($('#religion'+p_id).val());
	$('#occupation').val($('#occupation'+p_id).val());
	$('#mss_class').val($('#mss_class'+p_id).val());
	$('#nearest_relative').val($('#nearest_relative'+p_id).val());
	$('#relationship :selected').val();
	
	UpdateInfo = true;
}	

var UpdateInfo =false;

function clearFormInputs(formSelector) {
    $(`${formSelector} input[type="text"], ${formSelector} input[type="date"], ${formSelector} input[type="number"], ${formSelector} textarea`).val('');
    $(`${formSelector} select`).prop('selectedIndex', 0);
}

function SaveBasicInfo() {
    var patient_id = $('#patient_id').val();
    var lastname = $('#lastname').val();
    var firstname = $('#firstname').val();
    var middle = $('#middle').val();
    var ext = $('#ext').val();
    var province = "Marinduque";
    var municipality = $('#municipality :selected').val();
    var barangay = $('#barangay :selected').val();
    var street = $('#street').val();
    var phone = $('#phone').val();
    var birthdate = $('#birth').val();
    var place_birth = $('#place_birth').val();
    var informant = $('#informant').val();
    var gender = $('#gender :selected').val();
    var philhealth = $('#philhealth').val();
    var civil_status = $('#civil_status :selected').val();
    var nationality = $('#nationality :selected').val();
    var religion = $('#religion :selected').val();
    var occupation = $('#occupation').val();
    var mss_class = $('#mss_class').val();
    var nearest_relative = $('#nearest_relative').val();
    var relationship = $('#relationship :selected').val();

    if (lastname == '' || firstname == '' || province == '' ||
        municipality == '' || barangay == '' || street == '' || phone == '' ||
        birthdate == '' || place_birth == '' || informant == '' || gender == '' ||
        civil_status == '' || nationality == '' || nearest_relative == '' || relationship == '') {

        SwalAlert(3, "Oops", "Please Fillup Required Fields!");

    } else {
        $.post("./functions/functions.php", {
            patient_id: patient_id,
            lastname: lastname,
            firstname: firstname,
            middle: middle,
            ext: ext,
            province: province,
            municipality: municipality,
            barangay: barangay,
            street: street,
            phone: phone,
            birthdate: birthdate,
            place_birth: place_birth,
            informant: informant,
            gender: gender,
            philhealth: philhealth,
            civil_status: civil_status,
            nationality: nationality,
            religion: religion,
            occupation: occupation,
            mss_class: mss_class,
            nearest_relative: nearest_relative,
            relationship: relationship
        })
        .done(function(data) {
            alert(data);
            location.reload();
            clearFormInputs('#app'); // Clear form inputs after successful save
        });
    }
}



function ModalComplaint(p_id){
	$('#patient_history').modal("show");
	cur_patient_id = p_id;
	//alert(cur_patient_id);
	GetPatientComplaint(cur_patient_id);
	GetVitalSign(cur_patient_id);
	GetLaboratoryResult(cur_patient_id);

}
function GetPatientInfo(){
	$.post("./functions/functions.php", {
		get_patient_id : cur_patient_id
	}).done(function(data) {
		//alert(data);
		$('#table-patient').html(data);
	});
	window.reload();
}
function GetPatientComplaint(){
	$.post("./functions/functions.php", {
		getc_patient_id : cur_patient_id
	}).done(function(data) {
		//alert(data);
		$('#patient_history_table').html(data);
	});
}
function GetVitalSign(){
	$.post("./functions/functions.php", {
		getv_patient_id :cur_patient_id
	}).done(function(data) {
		//alert(data);
		$('#vital_sign_table').html(data);
	});
}
function GetLaboratoryResult(){
	$.post("./functions/functions.php", {
		getl_patient_id :cur_patient_id
	}).done(function(data) {
		//alert(data);
		$('#laboratory_result_table').html(data);
	});
}

function SaveComplaint() {
    var dh_id = 1;
    var patient_condition = $('#patient_condition :selected').val();
    var chief_complaint = $('#chief_complaint').val();
    var history = $('#history').val();
    var nhsid = $('#nhsid :selected').val();
    var diagnosis = $('#diagnosis').val();
    var date_complaint = $('#date_complaint').val();
    var time_complaint = $('#time_complaint').val();
    var cpatient_id = cur_patient_id;
    var employee_id = $('#employee_id :selected').val();
    var patient_status = "Pending";

    $.post("./functions/functions.php", {
        dh_id: dh_id,
        patient_condition: patient_condition,
        chief_complaint: chief_complaint,
        history: history,
        nhsid: nhsid,
        diagnosis: diagnosis,
        employee_id: employee_id,
        cpatient_id: cpatient_id,
        date_complaint: date_complaint,
        time_complaint: time_complaint,
        patient_status: patient_status
    })
    .done(function(data) {
        alert(data);
        clearFormInputs('#patient_history'); // Clear form inputs after successful save
        GetPatientComplaint(cur_patient_id);
    });
}

function UpdateNotif(notif, status){
		var utitle=$('#title').val();
			var udescription=$('textarea#description').val();
			var upriority_cl=$('#priority_cl :selected').val();
			var usubj_status=$('#subj_status :selected').val();
			
			$.post("./functions/functions.php", {notif:notif,status:status, 
					notif_from_id: notif_from_id, notif_to_id:notif_to_id, notif_public:notif_public  })
					
					.done(function(data) {

						//alert(data);
						location.reload();
					});
				
					//window.open("college-info.php?tab-indx="+tabindx,"_self");
		}

function SaveVitalSign() {
    var temp = $('#temp').val();
    var hr = $('#hr').val();
    var rr = $('#rr').val();
    var bp = $('#bp').val();
    var ht = $('#ht').val();
    var wt = $('#wt').val();
    var vpatient_id = cur_patient_id;

    if (temp === '' || hr === '' || rr === '' || bp === '' || ht === '' || wt === '') {
        SwalAlert(3, "Oops", "Please fill in all required fields!");
    } else {
        $.post("./functions/functions.php", {
            vpatient_id: vpatient_id,
            temp: temp,
            hr: hr,
            rr: rr,
            bp: bp,
            ht: ht,
            wt: wt
        })
        .done(function(data) {
            alert(data);
            clearFormInputs('#vital-hs'); // Clear form inputs after successful save
            GetVitalSign(cur_patient_id);
        });
    }
}

function SaveLaboratoryResult() {
    var lab_patient_id =cur_patient_id;
    var test_date = $('#test_date').val();
    var test_name = $('#test_name').val();
    var result = $('#test_result').val();
    var unit = $('#test_unit').val();
    var normal_value = $('#test_normal_value').val();
    var doctor = $('#test_doctor').val();
    var hospital = $('#test_hospital').val();
    var address = $('#test_address').val();

    if (!lab_patient_id || !test_date || !test_name || !result || !unit || !normal_value || !doctor || !hospital || !address) {
        SwalAlert(3, "Oops", "Please fill in all required fields!");
        return;
    }

    $.post("./functions/functions.php", {
        lab_patient_id: lab_patient_id,
        test_date: test_date,
        test_name: test_name,
        result: result,
        unit: unit,
        normal_value: normal_value,
        doctor: doctor,
        hospital: hospital,
        address: address
    })
    .done(function(data) {
        alert(data);
        clearFormInputs('#laboratory'); // Clear form inputs after successful save
        GetLaboratoryResult(cur_patient_id);
    });
}

