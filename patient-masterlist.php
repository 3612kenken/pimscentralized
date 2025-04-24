<!DOCTYPE html>
<html lang="en">
<?php include("head.php"); ?>

<body>
	<div id="app">

		<div id="main">
			<?php include("nav.php"); ?>

			<div class="main-content container-fluid">

				<div class="page-title bg-primary">
					<h3 class="text-white" style="padding-left:20px;padding-top:20px;">Patient Masterlist Report</h3>
					<p class="text-subtitle  text-white" style="padding-left:20px;padding-bottom:20px;">
						Shows all list of patients</p>
				</div>
				<section class="section">
					<div class="row mb-4">
						<div class="col-md-12">
							<div class="card ">

								<div class="card-body">
									<div class="col-md-12">
										<div class="input-group" id="igroup">
											<span class="input-group-text" id="basic-addon1">From:</span>
											<input type="date" class="form-control">
											<span class="input-group-text" id="basic-addon1">To:</span>
											<input type="date" class="form-control">

											<!-- <select id="municipality-column" class="form-control"
													name="municipality-column">
													<option disabled="" selected="">--Select Municipality--</option>
													<option>Boac</option>
													<option>Gasan</option>
													<option>Mogpog</option>
													<option>Sta. Cruz</option>
												</select>

												<select id="" class="form-control" name="">
													<option disabled="" selected="">--Select Barangay--</option>
													<option value="Cawit">Cawit</option>
												</select>
											<select id="municipality-column" class="form-control"
												name="municipality-column">
												<option disabled="" selected="">--NHS--</option>

											</select> -->
											<button class="btn btn-primary">Search</button>
											<button class="btn btn-success"
												onclick="openPrintableTable()">Print</button>
										</div>
									</div>
									<br>
									<div class="col-md-12">
										<div class="table-responsive">
											<table class="table table-bordered table-md">

												<thead>
													<th>#</th>
													<th>Patient Name</th>
													<th>Patient Condition</th>
													<th>Patient History</th>
													<th>Address</th>
													<th>Contact Number</th>
													<th>Birth Date</th>
													<th>Age</th>
													<th>NHS</th>
												</thead>

												<tbody>
													<?php
													/*
																																																																																																																																																																			   
																																																																																																																																																																			   - Summary based NHS with filter day + (barangay, municipality, provincial)
																																																																																																																																																																			   - 
																																																																																																																																																																			   
																																																																																																																																																																			   */
													$sql = "Select CONCAT(p.firstname ,' ' , p.middle, ' ', p.lastname) as fullname, CONCAT(p.street,' ', p.barangay,' ', p.municipality,' ', p.province) as Address, c.patient_condition, c.history, nhs.disease, c.diagnosis, c.date_complaint, p.phone, p.birth, TIMESTAMPDIFF(YEAR, p.birth, CURDATE()) AS age, p.gender,  COUNT(*) as total_patient from tbl_patient_info as p LEFT OUTER JOIN tbl_patient_complaint as c on p.patient_id=c.patient_id LEFT OUTER JOIN tbl_nhs_disease as nhs on nhs.nhsid = c.nhsid GROUP BY c.nhsid, fullname ORDER BY fullname;";
													$result = $db->prepare($sql);
													$result->execute(array());
													$output = "";
													$j = 0;
													$total = 0;
													for ($i = 0; $row = $result->fetch(); $i++) {
														$j = $i + 1;
														$total += $row[11];
														$output .= '<tr><td>' . $j . '</td>
								
								
							
								
								<td>' . $row[0] . '</td>
								<td>' . $row[2] . '</td>
								<td>' . $row[3] . '</td>
								<td>' . $row[1] . '</td>
								
								<td>' . $row[7] . '</td>
								<td>' . $row[8] . '</td>
								<td>' . $row[9] . '</td>
								<td>' . $row[4] . '</td>
								</tr>';
													}
													$output .= '<tr><td colspan=8>Over All Total</td><td><b>' . $total . '</b></td></tr>';

													echo $output;
													?>
												</tbody>

											</table>

										</div>
									</div>
								</div>
							</div>

						</div>


					</div>

				</section>
			</div>
			<?php include("footer.php"); ?>
		</div>
	</div>

	<script>
		document.addEventListener('DOMContentLoaded', function () {
			const searchButton = document.querySelector('#igroup .btn-primary');
			const fromDateInput = document.querySelector('#igroup input[type="date"]:nth-child(2)');
			const toDateInput = document.querySelector('#igroup input[type="date"]:nth-child(4)');

			searchButton.addEventListener('click', function () {
				const fromDate = fromDateInput.value;
				const toDate = toDateInput.value;

				if (!fromDate || !toDate) {
					alert('Please select both From and To dates.');
					return;
				}

				$.post('./functions/functions.php', {
					action: 'search_patient_masterlist', // Ensure the action matches the server-side handler
					from_date: fromDate,
					to_date: toDate
				})
					.done(function (data) {
						try {
							// Parse and update the table body
							document.querySelector('tbody').innerHTML = data;
						} catch (error) {
							console.error('Error parsing response:', error);
							alert('An error occurred while processing the search results.');
						}
					})
					.fail(function () {
						alert('An error occurred while fetching the data.');
					});
			});
		});

		function openPrintableTable() {
			// Get the table content directly
			const tableContent = document.querySelector('.table-responsive').innerHTML;
			// Create a form to submit the table content
			const form = document.createElement('form');
			form.method = 'POST';
			form.action = 'printable-table.php';
			form.target = '_blank';

			// Add the table content as a hidden input
			const input = document.createElement('input');
			input.type = 'hidden';
			input.name = 'tableContent';
			input.value = tableContent;
			form.appendChild(input);

			// Append the form to the body and submit it
			document.body.appendChild(form);
			form.submit();
			document.body.removeChild(form);
		}
	</script>
</body>

</html>