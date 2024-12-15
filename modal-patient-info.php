	<div class="modal fade text-left" id="patient-lab" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
	   <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title white" id="myModalLabel1">Information of Patient laboratory</h5>
                    <button type="button" class="close rounded-pill" data-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">
				 
                            <div class="row">
                                <div class="col-md-4">
                                            
                                    <div class="form-group">
                                        <label for="first-name-column">Date</label>
                                        <input type="date" id="first-name-column" class="form-control" name="lname-column">
                                    </div>
                                    <div class="form-group">
                                        <label for="first-name-column">Test</label>
                                        <select id="barangay-column" class="form-control" name="test-column">
                                            <option disabled="" selected="">--Select Test--</option>
                                            <option value="Sugar">Sugar</option>
                                            <option value="Sodium">Sodium</option>
                                            <option value="Potassium">Potassium</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="first-name-column">Result</label>
                                        <input type="text" id="first-name-column" class="form-control" name="lname-column">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                            
                                
                                    <div class="form-group">
                                        <label for="first-name-column">Unit</label>
                                        <input type="text" id="first-name-column" class="form-control" name="lname-column">
                                    </div>
                                    <div class="form-group">
                                        <label for="first-name-column">Normal Value</label>
                                        <input type="text" id="first-name-column" class="form-control" name="lname-column">
                                    </div>
                                    <div class="form-group">
                                        <label for="first-name-column">Doctor</label>
                                        <input type="text" id="first-name-column" class="form-control" name="lname-column">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                            
                                
                                    <div class="form-group">
                                        <label for="first-name-column">Hospital/ Clinic</label>
                                        <input type="text" id="first-name-column" class="form-control" name="lname-column">
                                    </div>
                                    <div class="form-group">
                                        <label for="first-name-column">Address</label>
                                        <input type="text" id="first-name-column" class="form-control" name="lname-column">
                                    </div>
                                    <div class="text-right">
                                        <button type="button" class="btn btn-info ml-1" data-dismiss="modal">
                                            <i class="bx bx-check d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Save Laboratory</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class='table mb-0' id="table1">
                                    <thead>
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
                                            <th>Action</th>
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
        </div>
    </div>
	<div class="modal fade text-left" id="patient_history" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
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
                      
                        <a class="list-group-item list-group-item-action active" id="list-monday-list" data-toggle="list" href="#sub-complaint" role="tab" aria-selected="false">Complaint/Diagnosis</a>
						<!--<a class="list-group-item list-group-item-action" id="list-monday-list" data-toggle="list" href="#sub-admission" role="tab" aria-selected="false">Admission</a>-->
						<a class="list-group-item list-group-item-action" id="list-monday-list" data-toggle="list" href="#vital-hs" role="tab" aria-selected="false">Vital Signs History</a>
						<!--<a class="list-group-item list-group-item-action" id="list-monday-list" data-toggle="list" href="#sub-diagnosis" role="tab" aria-selected="false">Diagnosis</a>
                        
                      
						<a class="list-group-item list-group-item-action" id="list-monday-list" data-toggle="list" href="#assign-doctor" role="tab" aria-selected="false">Previous Doctors</a>-->
                    </div>

                    <div class="tab-content text-justify">
                        <div class="tab-pane fade" id="sub-admission" role="tabpanel" aria-labelledby="list-monday-list">
									
								</div>
								<div class="tab-pane fade" id="sub-diagnosis" role="tabpanel" aria-labelledby="list-monday-list">
									
								</div>
                        <div class="tab-pane fade active show" id="sub-complaint" role="tabpanel" aria-labelledby="list-monday-list">
                          
							<div class="tab-content text-justify">
							 
									<h3 class="text-center">History of Patient</h3>
									<div class="table-responsive">
										<table class='table mb-0' id="table1">
											<thead>
												<tr>
													<th>#</th>
													<th>Date </th>
													<th>Condition </th>
													<th>Chief Complaint </th>
													<th>History/Phisical Examination</th>
													<th>Diagnosis/Treatment</th>
													<th>Doctor</th>
													<th>Prescription</th>
												</tr>
											</thead>
											
											<tbody>
												
											</tbody>
											
										</table>
									
									
									
										<!--<table class='table mb-0' id="table1">
											<thead>
												<tr>
													<th>#</th>
													<th>Date </th>
													<th>Complaint </th>
													<th>Symptoms</th>
													<th>Allergies</th>
													<th>Medication</th>
												   
													<th>Findings</th>
													<th>Doctor</th>
													<th>Hospital/Clinic</th>
													<th>Address</th>
													<th>Prescription Images</th>
													
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>2023-11-11</td>
													<td>Sumasakit ang ulo</td>
													<td>Head pain</td>
													<td>allergy sa kanya</td>
													<td>Anti-breakup medicine</td>
													<td>Hearth Failure</td>
													<td>Dr. Pogi Kenz</td>
													<td>Marinduque Provincial Hospital</td>
													<td>Santol, Boac, Marinduque</td>
													<td><a href="#">image_presc.jpg</a></td>
												</tr>
											   
											</tbody>
										</table>-->
									</div>
							
								
                            </div>
                        </div>
						<div class="tab-pane fade" id="vital-hs" role="tabpanel" aria-labelledby="list-tuesday-list">
							<br>
                            <h3 class="text-center">Vital Signs History</h3>
                            <div class="row">
										<div class="table-responsive">
											<table class='table mb-0' id="table1">
												<thead>
													<tr>
														<th>#</th>
														<th>Blood Pressure(BP)</th>
														<th>Temperature(Temp)</th>
														<th>Heart Rate(HR)</th>
														<th>Respiratory Rate(RR)</th>
														<th>Weight</th>
														<th>Height</th>
														<th>Action</th>
														<th>Status</th>
														
													</tr>
												</thead>
												<tbody>
													
												   
												</tbody>
											</table>
										</div>
							</div>
						</div>
                        
                        <div class="tab-pane fade" id="add-record" role="tabpanel" aria-labelledby="list-sunday-list">
                            <br>
                            <h3 class="text-center">New Chief-complaint</h3>
                                <div class="row">
                                    
                                    <div class="col-md-6">
                                        <h5 >Current History</h5>
                                        <hr>
                                        <h5 >Date</h5>
                                            <label>2023-11-11</label>
                                        <h5 >Complaint</h5>
                                            <label>Masakit ang Ulo</label>
                                        <h5 >Symptoms</h5>
                                             <label>Head pain</label>
                                        <h5 >Allergies</h5>
                                            <label>allergy sa kanya</label>
                                        <h5 >Medication</h5>
                                            <label>Anti-breakup medicine</label>
                                        <h5 >Previous Doctor</h5>
                                            <label>Dr. Pogi Kenz</label>
                                        
                                    </div>
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <label for="first-name-column">Date</label>
                                            <input type="date" id="first-name-column" class="form-control" name="lname-column">
                                        </div>
                                        <div class="form-group">
                                            <label for="first-name-column">Complaint</label>
                                            <input type="text" id="first-name-column" class="form-control" name="lname-column">
                                        </div>
                                        <div class="form-group">
                                            <label for="first-name-column">Symptoms</label>
                                            <input type="text" id="first-name-column" class="form-control" name="lname-column">
                                        </div>
                                        <div class="form-group">
                                            <label for="first-name-column">Allergies</label>
                                            <input type="text" id="barangay-column" class="form-control" name="allergies-column" list="mylist">
                                            <datalist id="mylist">
                                                <option value="Sugar">
                                                <option value="Salt">
                                                <option value="Onion">
                                                <option value="Garlic">
                                            </datalist>
                                        </div>
                                        <div class="form-group">
                                            <label for="first-name-column">Medication</label>
                                            <input type="text" id="barangay-column" class="form-control" name="allergies-column" list="myMedication">
                                            <datalist id="myMedication">
                                                <option value="Biogesic, Tempra, and robust">
                                                
                                            </datalist>
                                        </div>
                                      
                                        
                                   </div>
                                </div>
                        </div>
                        <div class="tab-pane fade" id="assign-doctor" role="tabpanel" aria-labelledby="list-tuesday-list">
                            <br>
							<div class="table-responsive">
                            <table class='table mb-0' id="table1">
                                <thead>
                                    <tr>
                                        <th>Last Name</th>
                                        <th>First Name</th>
                                        <th>Middle Name</th>
                                        <th>Ext</th>
                                        <th>Action</th>
                                     
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Omiping</td>
                                        <td>Dr. Kenneth</td>
                                        <td>Layron</td>
                                        <td>N/A</td>
                                        
                                       
                                       
                                        
                                    </tr>
                                   
                                </tbody>
                            </table>
                        </div>
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