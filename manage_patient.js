function GetPatientInfo() {
    $.post("./functions/functions.php", {
        get_patient_id: cur_patient_id
    }).done(function (data) {
        // Update the patient table with the fetched data
        $('#table-patient').html(data);
    });
    location.reload(); // Corrected from window.reload() to location.reload()
}

document.addEventListener('DOMContentLoaded', function () {
    // List of table IDs to initialize
    const tableIds = ['patientTable', 'complaintTable', 'laboratoryTable', 'vitalSignsTable'];

    tableIds.forEach(tableId => {
        const tableElement = document.querySelector(`#${tableId}`);
        if (tableElement) {
            new simpleDatatables.DataTable(tableElement, {
                searchable: true,
                fixedHeight: true,
                perPage: 10
            });
        }
    });
});
