<!DOCTYPE html>
<html lang="en">
<?php include("head.php"); ?>

<body>
	<script src="assets/vendors/apexcharts/apexcharts.min.js"></script>
	<script src="assets/js/pages/ui-apexchart.js"></script>
	<div id="app">

		<div id="main">
			<?php include("nav.php"); ?>

			<div class="main-content container-fluid">

				<div class="page-title bg-primary">
					<h3 class="text-white" style="padding-left:20px;padding-top:20px;">Doctor Services</h3>
					<p class="text-subtitle  text-white" style="padding-left:20px;padding-bottom:20px;">
						Summary of Doctor's Services</p>
				</div>
				<section class="section">
					<div class="row mb-4">
						<div class="col-md-12">
							<div class="card ">
								<div class="card-header">

									<div class="row">
										<div class="col-md-6">
											<h4>Doctor Services</h4>
										</div>
										<div class="col-md-6">
											<div class="input-group">

												<select class="form-control">
													<option selected disabled>--Month--</option>
													<option value="All">All</option>
													<option value="1">January</option>
													<option value="2">February</option>
													<option value="3">March</option>
													<option value="4">April</option>
													<option value="5">May</option>
													<option value="6">June</option>
													<option value="7">July</option>
													<option value="8">August</option>
													<option value="9">September</option>
													<option value="10">October</option>
													<option value="11">November</option>
													<option value="12">December</option>
												</select>

												<select class="form-control">
													<option value="2024" selected>2024</option>
												</select>
											</div>
										</div>
									</div>
								</div>



								<div class="card-body">
									<div class="row">
										<?php

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
										$sql = "SELECT d.*, c.* FROM tbl_emp_and_doctor as d LEFT OUTER JOIN tbl_doctor_sched as s ON d.employee_id = s.employee_id LEFT OUTER JOIN tbl_clinic_info as c on c.employee_id = d.employee_id WHERE d.designation = 'Doctor' GROUP BY d.employee_id ORDER BY d.employee_id ASC	";

										//$ScheduleOutput
										$output = '';

										$result = $db->prepare($sql);
										$result->execute(array());

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
										
											// SQL queries to count patient statuses
											$sql_pending = "SELECT COUNT(*) as pending_count FROM tbl_patient_complaint WHERE patient_status = 'Pending' AND employee_id = '$row[0]'";
											$sql_checked_up = "SELECT COUNT(*) as checked_up_count FROM tbl_patient_complaint WHERE patient_status = 'Checked Up' AND employee_id = '$row[0]'";
											$sql_not_checked_up = "SELECT COUNT(*) as not_checked_up_count FROM tbl_patient_complaint WHERE patient_status = 'Not Checked Up' AND employee_id = '$row[0]'";

											// Execute queries
											$result_pending = $db->prepare($sql_pending);
											$result_pending->execute();
											$pending_count = $result_pending->fetch()['pending_count'] ?? 0;

											$result_checked_up = $db->prepare($sql_checked_up);
											$result_checked_up->execute();
											$checked_up_count = $result_checked_up->fetch()['checked_up_count'] ?? 0;

											$result_not_checked_up = $db->prepare($sql_not_checked_up);
											$result_not_checked_up->execute();
											$not_checked_up_count = $result_not_checked_up->fetch()['not_checked_up_count'] ?? 0;

											?>
											<div class="card-header col-md-8">
												<h3 class='card-heading p-1 pl-3'>Doctor <?php echo $fullname; ?>
												</h3>

												<p class="text-subtitle text-muted p-1 pl-3">Profession:
													<?php echo $designation; ?>
													<br>
													Address: <?php echo $address; ?>
													<br>
													Clinic: <?php echo $clinic; ?>
													<br>
													Clinic Address: <?php echo $caddress; ?>
												</p>
												<hr>
												<p class="text-subtitle text-muted p-1 pl-3">
													Current Duty: Marinduque Provincial Hospital
													<br>
													Hospital Duty Address: Santol Boac Marinduque
												</p>
											</div>



											<div class="col-md-4">

												<div class="card-body">
													<div id="doctor<?php echo $i; ?>"></div>
												</div>
											</div>

											<script>

												var options<?php echo $i; ?> = {
													series: [<?php echo $checked_up_count; ?>, <?php echo $pending_count; ?>, <?php echo $not_checked_up_count; ?>],
													chart: {
														height: 350,
														type: 'radialBar',
													},
													plotOptions: {
														radialBar: {
															dataLabels: {
																name: {
																	fontSize: '22px',
																},
																value: {
																	fontSize: '16px',
																},
																total: {
																	show: true,
																	label: 'Total Patients',
																	formatter: function (w) {
																		return <?php echo $checked_up_count + $pending_count + $not_checked_up_count; ?>;
																	}
																}
															}
														}
													},
													labels: ['Checked Up', 'Pending Patients', 'Total Patients'],
												};

												var chart<?php echo $i; ?> = new ApexCharts(document.querySelector("#doctor<?php echo $i; ?>"), options<?php echo $i; ?>);
												chart<?php echo $i; ?>.render();

											</script>
										<?php } ?>
									</div>
								</div>

							</div>

						</div>


					</div>

				</section>
			</div>
			<?php include("footer.php"); ?>



			<script>

				// var options = {
				// 	series: [90, 6, 3],
				// 	chart: {
				// 		height: 350,
				// 		type: 'radialBar',
				// 	},
				// 	plotOptions: {
				// 		radialBar: {
				// 			dataLabels: {
				// 				name: {
				// 					fontSize: '22px',
				// 				},
				// 				value: {
				// 					fontSize: '16px',
				// 				},
				// 				total: {
				// 					show: true,
				// 					label: 'Total Patients',
				// 					formatter: function (w) {
				// 						// By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
				// 						return 467
				// 					}
				// 				}
				// 			}
				// 		}
				// 	},
				// 	labels: ['Serviced', 'Pending Patients', 'Not serviced'],
				// };

				// var chart = new ApexCharts(document.querySelector("#doctors"), options);
				// chart.render();
			</script>
</body>

</html>