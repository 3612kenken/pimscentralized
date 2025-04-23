<div class="modal text-left" id="modal_fullscreen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
	aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-fullscreen" role="document">
		<div class="modal-content">
			<div class="modal-header bg-info">
				<h5 class="modal-title white" id="myModalLabel1">Patients Lineup</h5>
				<button type="button" class="close rounded-pill" data-dismiss="modal" aria-label="Close">
					<i data-feather="x"></i>
				</button>
			</div>
			<div class="modal-body">
				<div class="col-md-12">

					<table class="table mb-0" id="table1">
						<thead>
							<tr>
								<th>#</th>
								<th>Full Name</th>
								<th>Condition</th>
								<th>Complaint</th>
								<th>history/Phisical Examination</th>
								<th>Diagnosis</th>
								<th>Action</th>

							</tr>
						</thead>
						<tbody>
							<?php




							$sql = "Select q.queue_id, CONCAT(p.firstname ,' ' , p.middle, ' ', p.lastname) as fullname, c.patient_condition, c.chief_complaint, c.history, TIMESTAMPDIFF(YEAR, p.birth, CURDATE()) AS age, p.gender, CONCAT(p.street,' ', p.barangay,' ', p.municipality,' ', p.province) as Address from tbl_queue as q LEFT OUTER JOIN tbl_patient_info as p on p.patient_id=q.patient_id LEFT OUTER JOIN tbl_patient_complaint as c on p.patient_id=c.patient_id WHERE q.employee_id=? and q.status=? GROUP BY c.complaint_id order by q.datetime_queue DESC;";
							//$sql = "Select q.queue_id, CONCAT(p.firstname ,' ' , p.middle, ' ', p.lastname) as fullname, c.patient_condition, c.chief_complaint, c.history, TIMESTAMPDIFF(YEAR, p.birth, CURDATE()) AS age, p.gender, p.address from tbl_queue as q LEFT OUTER JOIN tbl_patient_info as p on p.patient_id=q.patient_id LEFT OUTER JOIN tbl_patient_complaint as c on p.patient_id=c.patient_id WHERE q.employee_id=? and q.status=?";
							//$ScheduleOutput
							$output = '';

							$result = $db->prepare($sql);
							$result->execute(array($_SESSION['employee_id'], 'Pending'));
							$j = 0;
							for ($i = 0; $row = $result->fetch(); $i++) {
								$j = $i + 1;
								$output .= '<tr><td>' . $j . '</td>
															<td>' . $row[1] . '</td>
															<td>' . $row[2] . '</td>
															<td>' . $row[3] . '</td>
															<td>' . $row[4] . '</td>
															<td><textarea class="form-control" style="height:100px;"></textarea></td>
															
														   <td><button class="btn btn-sm btn-success" data-toggle="modal" data-target="#patient_history">Details</button>
														   <a class="btn btn-sm btn-primary" href="./prescriptions/presc.php?pname=' . $row[1] . '&page=' . $row[5] . '&pgender=' . $row[6] . '&paddr=' . $row[7] . '&fullname=' . $fullname . '&license=' . $license . '&ptr=' . $ptr . '" target="blank">Quick Prescription</a></td>
															</tr>';

							}
							echo $output;
							$j = 0;
							?>

						</tbody>
					</table>
				</div>
			</div>

		</div>
	</div>
</div>
<div class="modal fade text-left" id="patient_history" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
	aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
		<div class="modal-content">
			<div class="modal-header bg-danger">
				<h5 class="modal-title white" id="myModalLabel1">Patient History</h5>
				<button type="button" class="close rounded-pill" data-dismiss="modal" aria-label="Close">
					<i data-feather="x"></i>
				</button>
			</div>
			<div class="modal-body">
				<div class="list-group list-group-horizontal-sm mb-1 text-center" role="tablist">

					<a class="list-group-item list-group-item-action active" id="list-monday-list" data-toggle="list"
						href="#phistory" role="tab" aria-selected="false">Patient History</a>
					<a class="list-group-item list-group-item-action" id="list-monday-list" data-toggle="list"
						href="#plaboratory" role="tab" aria-selected="false">Laboratory Results</a>

				</div>
				<div class="tab-content text-justify">

					<div class="tab-pane fade active show" id="phistory" role="tabpanel"
						aria-labelledby="list-monday-list">

						<div class="table-responsive">
							<table class='table mb-0' id="table1">
								<thead class="bg-info text-white">
									<tr>
										<th>#</th>
										<th>Full Name</th>
										<th>Condition</th>
										<th>Complaint</th>
										<th>history/Phisical Examination</th>
										<th>Diagnosis</th>
										<th>Action</th>

									</tr>
								</thead>

								<tbody>
									<?php




									$sql = "Select q.queue_id, CONCAT(p.firstname ,' ' , p.middle, ' ', p.lastname) as fullname, 
												c.patient_condition, c.chief_complaint, c.history, TIMESTAMPDIFF(YEAR, p.birth, CURDATE()) AS age, 
												p.gender, CONCAT(p.street,' ', p.barangay,' ', p.municipality,' ', p.province) as Address 
												from tbl_queue as q 
												LEFT OUTER JOIN tbl_patient_info as p on p.patient_id=q.patient_id 
												LEFT OUTER JOIN tbl_patient_complaint as c on p.patient_id=c.patient_id 
												WHERE q.employee_id=? and q.status=? GROUP BY c.complaint_id order by q.datetime_queue DESC;";
									//$sql = "Select q.queue_id, CONCAT(p.firstname ,' ' , p.middle, ' ', p.lastname) as fullname, c.patient_condition, c.chief_complaint, c.history, TIMESTAMPDIFF(YEAR, p.birth, CURDATE()) AS age, p.gender, p.address from tbl_queue as q LEFT OUTER JOIN tbl_patient_info as p on p.patient_id=q.patient_id LEFT OUTER JOIN tbl_patient_complaint as c on p.patient_id=c.patient_id WHERE q.employee_id=? and q.status=?";
									//$ScheduleOutput
									$output = '';

									$result = $db->prepare($sql);
									$result->execute(array($_SESSION['employee_id'], 'Pending'));
									$j = 0;
									for ($i = 0; $row = $result->fetch(); $i++) {
										$j = $i + 1;
										$output .= '<tr><td>' . $j . '</td>
														<td>' . $row[1] . '</td>
														<td>' . $row[2] . '</td>
														<td>' . $row[3] . '</td>
														<td>' . $row[4] . '</td>
														<td><textarea class="form-control" style="height:100px;"></textarea></td>
														
													   <td><button class="btn btn-sm btn-success" data-toggle="modal" data-target="#patient_history">Details</button>
											<button class="btn btn-primary btn-sm" class="btn btn-sm btn-success" data-toggle="modal" data-target="#prescriptionss" onClick="getPrescInfo(&#39;' . $row[1] . '&#39;,&#39;' . $row[5] . '&#39;,&#39;' . $row[6] . '&#39;,&#39;' . $row[7] . '&#39;,&#39;' . $fullname . '&#39;,&#39;' . $license . '&#39;,&#39;' . $ptr . '&#39;)">Add</button></td>
															</tr>';

									}
									echo $output;
									$j = 0;
									?>



								</tbody>

							</table>
						</div>
					</div>
					<div class="tab-pane fade" id="plaboratory" role="tabpanel" aria-labelledby="list-tuesday-list">
						<br>
						<div class="text-center">
							<button class="btn btn-info">Request for Laboratory</button>

						</div>
						<br>
						<div class="table-responsive">
							<table class='table mb-0' id="table1">
								<thead class="bg-info text-white">
									<tr>
										<th>#</th>
										<th>Date </th>
										<th>Test </th>
										<th>Results</th>
										<th>Unit</th>
										<th>Normal Value</th>
										<th>Doctor</th>
										<th>Hospital/Clinic</th>
										<th>Address</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>2023-11-11</td>
										<td>Sodium</td>
										<td>144.6</td>
										<td>mmol/l</td>
										<td>135-148</td>
										<td>Dr. Omiping</td>
										<td>Omiping's Over All Clinic</td>
										<td>Cawit, Boac, Marinduque</td>

									</tr>

								</tbody>
							</table>
						</div>
					</div>

					<div class="tab-pane fade" id="prescription" role="tabpanel" aria-labelledby="list-tuesday-list">
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger ml-1" data-dismiss="modal">
					<i class="bx bx-check d-block d-sm-none"></i>
					<span class="d-none d-sm-block">Close</span>
				</button>
			</div>


		</div>
	</div>
</div>


<div class="modal fade text-left" id="prescriptionss" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
	aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header bg-danger">
				<h5 class="modal-title white" id="myModalLabel1">Prescription</h5>
				<button type="button" class="close rounded-pill" data-dismiss="modal" aria-label="Close">
					<i data-feather="x"></i>
				</button>
			</div>
			<div class="modal-body">
				<br>
				<div class='row'>
					<div class="col-md-4">


						<div class="form-group">
							<label for="first-name-column">Medicine</label>
							<input type="text" id="first-name-column" class="form-control" name="lname-column">
						</div>
						<div class="form-group">
							<label for="first-name-column">Brand</label>
							<input type="text" id="first-name-column" class="form-control" name="lname-column">
						</div>
						<div class="form-group">
							<label for="first-name-column">Value</label>
							<input type="text" id="first-name-column" class="form-control" name="lname-column">
						</div>
						<a class="btn btn-success" href="">Save</a>
						<a class="btn btn-danger" href="">Delete</a>
					</div>
					<div class="col-md-12">
						<div class="table-responsive">
							<table class='table mb-0' id="table1">
								<thead>
									<tr>
										<th>#</th>
										<th>Medicine</th>
										<th>Brand</th>
										<th>Value</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Sodium</td>
										<td>Generic</td>
										<td>20</td>
										<td>
											<button class="btn badge bg-primary"> <i class="fa fa-edit"></i></button>
											<button class="btn badge bg-danger"> <i class="fa fa-trash"></i></button>
										</td>
									</tr>

								</tbody>
							</table>
						</div>
					</div>



				</div>
				<br>
				<a class="btn btn-primary"
					href="./prescriptions/presc.php?<?php echo "fullname=" . $fullname . "&" . "license=" . $license . "&ptr=" . $ptr; ?>">CLICK
					TO WRITE PRESCRIPTION</a>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-danger ml-1" data-dismiss="modal">
					<i class="bx bx-check d-block d-sm-none"></i>
					<span class="d-none d-sm-block">Close</span>
				</button>
			</div>

		</div>
	</div>
</div>