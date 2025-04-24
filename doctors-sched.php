<!DOCTYPE html>
<html lang="en">
<?php include("head.php"); ?>

<body>
	<div id="app">

		<div id="main">
			<?php include("nav.php"); ?>

			<div class="main-content container-fluid">

				<div class="page-title bg-primary">
					<h3 class="text-white" style="padding-left:20px;padding-top:20px;">Doctor's Schedule</h3>
					<p class="text-subtitle  text-white" style="padding-left:20px;padding-bottom:20px;">
						Here are the list of doctor's schedule</p>
				</div>
				<section class="section">
					<div class="row">
						<div class="col-md-6">
							<h4>List of Doctors</h4>
							<div class="table-responsive">
								<table class='table mb-0' id="table1">
									<thead class="bg-primary text-white">
										<tr>
											<th>#</th>
											<th>Full Name</th>
											<th>Profession</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$db = new PDODatabase;

										$caddress = "";
										$sql = "SELECT d.*, c.* FROM tbl_emp_and_doctor as d LEFT OUTER JOIN tbl_clinic_info as c on c.employee_id = d.employee_id where d.designation=?";
										//$ScheduleOutput
										
										$j = 0;
										$result = $db->prepare($sql);
										$result->execute(array("Doctor"));
										for ($i = 0; $row = $result->fetch(); $i++) {
											$j = $i + 1;
											echo "<tr><td><input type='hidden' id='" . $j . "prof' value='" . $row[9] . "'><input type='hidden' id='" . $j . "fn' value='" . $row[2] . " " . $row[3] . " " . $row[1] . "'>" . $j . "</td><td>" . $row[2] . " " . $row[3] . " " . $row[1] . "</td>
									<td>" . $row[9] . "</td>
									<td><button class='btn btn-primary btn-sm' href='' onclick='setSchedule(" . $row[0] . ");'>Schedule</button></td></tr>";
										}

										?>
									</tbody>
								</table>
							</div>

						</div>
						<div class="col-md-6">

							<h4>Manage Schedule</h4>

							<label><b>Full Name:</b></label>
							<label id="lblfullname">Full Name</label>
							<br><b>Profession:</b></label>
							<label id="lblprof">Dr. Profession</label>
							<hr>

							<div class="form-group">
								<label for="first-name-column">Title</label>
								<input type="text" id="first-name-column" class="form-control" name="lname-column">
							</div>

							<div class="input-group">
								<div class="form-group">
									<label for="date_from">Date From</label>
									<input type="date" id="date_from" class="form-control" name="date_from">
								</div>
								<div class="form-group">
									<label for="date_to">Date To</label>
									<input type="date" id="date_to" class="form-control" name="date_to">
								</div>
								<div class="form-group">
									<label for="time_from">Time From</label>
									<input type="time" id="time_from" class="form-control" name="time_from">
								</div>
								<div class="form-group">
									<label for="time_to">Time To</label>
									<input type="time" id="time_to" class="form-control" name="time_to">
								</div>
							</div>
							<div class="form-group">
								<label for="room">Room</label>
								<input type="text" id="room" class="form-control" name="room">
							</div>
							<div class="text-right">
								<button class="btn btn-success" onclick="saveDoctorSchedule()">Save</button>
							</div>
						</div>

						<div class="col-md-12">
							<hr>
							<div class="table-responsive">
								<table class='table table-striped table-bordered' id="doctorScheduleTable">

									<thead class="bg-primary text-white">
										<tr>
											<th>#</th>
											<th>Employee ID</th>
											<th>Full Name</th>
											<th>Date From</th>
											<th>Date To</th>
											<th>Time From</th>
											<th>Time To</th>
											<th>Room</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody id="table-schedule">
										<?php
										$sql = 'SELECT d.*, c.*, s.* FROM tbl_emp_and_doctor as d LEFT OUTER JOIN tbl_doctor_sched as s ON d.employee_id = s.employee_id LEFT OUTER JOIN tbl_clinic_info as c on c.employee_id = d.employee_id WHERE d.designation ="Doctor"';
										$result = $db->prepare($sql);
										$result->execute();
										$j = 0;
										while ($row = $result->fetch()) {
											$j++;
											echo '<tr>
												<td>' . $j . '</td>
												<td>' . $row['employee_id'] . '</td>
												<td>' . $row['lastname'] . ', ' . $row['firstname'] . ' ' . $row['middle'] . '</td>
												<td>' . $row['date_from'] . '</td>
												<td>' . $row['date_to'] . '</td>
												<td>' . $row['time_from'] . '</td>
												<td>' . $row['time_to'] . '</td>
												<td>' . $row['room'] . '</td>
												<td>
													<button class="btn badge bg-primary" onclick="EditSchedule(\'' . $row['ds_id'] . '\')"> <i class="fa fa-edit"></i></button>
													<button class="btn badge bg-danger" onclick="DeleteSchedule(\'' . $row['ds_id'] . '\')"> <i class="fa fa-trash"></i></button>
												</td>
											</tr>';
										}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div id='wrap'>

						<div id='calendar'></div>

						<div style='clear:both'></div>
					</div>

				</section>
			</div>

			<?php include("scripts.php");
			include("footer.php"); ?>

			<script>
				var lID = 0;
				function setSchedule(id) {
					$('#lblprof').html($('#' + id + 'prof').val());
					$('#lblfullname').html($("#" + id + "fn").val());
					lID = id;


				}

				function saveDoctorSchedule() {
					const employee_id = lID; // Assuming the employee ID is stored in the label
					const date_from = $('#date_from').val();
					const date_to = $('#date_to').val();
					const time_from = $('#time_from').val();
					const time_to = $('#time_to').val();
					const room = $('#room').val();

					if (!employee_id || !date_from || !date_to || !time_from || !time_to || !room) {
						alert("Please fill in all required fields.");
						return;
					}

					$.post("./functions/functions.php", {
						add_schedule: true,
						employee_id: employee_id,
						date_from: date_from,
						date_to: date_to,
						time_from: time_from,
						time_to: time_to,
						room: room
					})
						.done(function (data) {
							alert(data);
							location.reload(); // Reload the page to reflect changes
						});
				}

				function EditSchedule(scheduleId) {
					alert("Edit schedule with ID: " + scheduleId);
					// Add your edit logic here
				}

				function DeleteSchedule(scheduleId) {
					if (confirm("Are you sure you want to delete this schedule?")) {
						$.post("./functions/functions.php", { delete_schedule_id: scheduleId })
							.done(function (data) {
								alert(data);
								location.reload(); // Reload the page to reflect changes
							});
					}
				}

				document.addEventListener('DOMContentLoaded', function () {
					// Initialize Simple-DataTables
					const doctorScheduleTable = document.querySelector('#doctorScheduleTable');
					if (doctorScheduleTable) {
						new simpleDatatables.DataTable(doctorScheduleTable, {
							searchable: true,
							fixedHeight: true,
							perPage: 10
						});
					}
				});
			</script>
</body>

</html>