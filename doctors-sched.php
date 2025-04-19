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
										$sql = "SELECT d.*, c.* FROM tbl_emp_and_doctor as d LEFT OUTER JOIN tbl_doctor_sched as s ON d.employee_id = s.employee_id LEFT OUTER JOIN tbl_clinic_info as c on c.employee_id = d.employee_id where d.designation=?";
										//$ScheduleOutput
										
										$j = 0;
										$result = $db->prepare($sql);
										$result->execute(array("Doctor"));
										for ($i = 0; $row = $result->fetch(); $i++) {
											$j = $i + 1;
											echo "<tr><td><input type='hidden' id='" . $j . "prof' value='" . $row[9] . "'><input type='hidden' id='" . $j . "fn' value='" . $row[2] . " " . $row[3] . " " . $row[1] . "'>" . $j . "</td><td>" . $row[2] . " " . $row[3] . " " . $row[1] . "</td>
									<td>" . $row[9] . "</td>
									<td><button class='btn btn-primary btn-sm' href='' onclick='setSchedule(" . $j . ");'>Schedule</button></td></tr>";
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
									<label for="first-name-column">Date Schedule</label>
									<input type="date" id="first-name-column" class="form-control" name="lname-column">
								</div>
								<div class="form-group">
									<label for="first-name-column">Time From</label>
									<input type="time" id="first-name-column" class="form-control" name="lname-column">
								</div>
								<div class="form-group">
									<label for="first-name-column">Time To</label>
									<input type="time" id="first-name-column" class="form-control" name="lname-column">
								</div>
							</div>
							<div class="form-group">
								<label for="first-name-column">Description</label>
								<textarea id="first-name-column" class="form-control" name="lname-column"></textarea>
							</div>
							<div class="text-right">
								<a class="btn btn-success" href="">Save</a>
							</div>
						</div>

						<div class="col-md-12">
							<hr>
							<div class="table-responsive">
								<table class='table mb-0' id="table1">
									<thead class="bg-primary text-white">
										<tr>
											<th>#</th>
											<th>Title</th>
											<th>Date Schedule</th>
											<th>Description</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Clinical</td>
											<td>11/12/2024</td>
											<td>Description...</td>
											<td>
												<button class="btn badge bg-primary"> <i
														class="fa fa-edit"></i></button>
												<button class="btn badge bg-danger"> <i
														class="fa fa-trash"></i></button>
											</td>
										</tr>

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
				function setSchedule(id) {
					$('#lblprof').html($('#' + id + 'prof').val());
					$('#lblfullname').html($("#" + id + "fn").val());
				}

			</script>
</body>

</html>