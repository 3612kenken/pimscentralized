<!DOCTYPE html>
<html lang="en">
<?php include("head.php");?>
<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
    <div class="sidebar-header" >
        
        <p class="title text-primary">PSYS </p>
        <h2 class="text-primary" style="font-size:large; margin:0%;padding:0%;margin-bottom: 0%;">Patient Information System</h2>
    </div>
    <div class="sidebar-menu">
       <ul class="menu">
        
            <li class='sidebar-title'>Patient Assist Menu</li>
            <li class="sidebar-item active ">
                <a href="dashboard_main.php" class='sidebar-link'>
                    <i data-feather="home" width="20"></i> 
                    <span>Dashboard</span>
                </a>
                
            </li>
			<li class="sidebar-item ">
                <a href="profile.php" class='sidebar-link'>
                    <i data-feather="layout" width="20"></i> 
                    <span>Profile</span>
                </a>
                
            </li>
            <li class="sidebar-item ">
                <a href="manage_patient.php" class='sidebar-link'>
                    <i data-feather="layout" width="20"></i> 
                    <span>Manage Patient</span>
                </a>
                
            </li>
           <li class="sidebar-item ">
                <a href="doctors.php" class='sidebar-link'>
                    <i data-feather="layout" width="20"></i> 
                    <span>Manage Doctor list</span>
                </a>
                
            </li>

            <li class="sidebar-item  ">
                <a href="doctors-sched.php" class='sidebar-link'>
                    <i data-feather="layout" width="20"></i> 
                    <span>Doctor's Schedule</span>
                </a>
                
            </li>
			<li class="sidebar-item  ">
                <a href="users-maintenance.php" class='sidebar-link'>
                    <i data-feather="layout" width="20"></i> 
                    <span>User's Maintenance</span>
                </a>
            </li>
    </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
        </div>
        <div id="main">
            <?php include("nav.php") ?>
            
<div class="main-content container-fluid">
    <?php include('modal-patient-info.php'); ?> 
    <div class="page-title">
        <h3>Manage Patient</h3>
        <p class="text-subtitle text-muted">Patient Information - Add Patient</p>
    </div>
    
    <section class="section">
        
        <div class="row mb-4">
                        
            <div class="col-md-12">
                <div class="card ">
                    
                    <div class="card-body">
                       
                        <form action="index.html">
                            <div class="list-group list-group-horizontal-sm mb-1 text-center" role="tablist">
                      
                                <a class="list-group-item list-group-item-action active"  data-toggle="list" href="#basic-info" role="tab" aria-selected="false">Basic Information</a>
                                 
								<a class="list-group-item list-group-item-action"  data-toggle="list" href="#vital-signs" role="tab" aria-selected="true">Vital Signs</a>
                               <a class="list-group-item list-group-item-action"  data-toggle="list" href="#chief-complaint" role="tab" aria-selected="true">Chief-Complaint & Diagnosis</a>
								<!--<a class="list-group-item list-group-item-action"  data-toggle="list" href="#admission" role="tab" aria-selected="true">Admission</a>
								<a class="list-group-item list-group-item-action"  data-toggle="list" href="#assigndoctor" role="tab" aria-selected="true">Assign Doctor</a>-->
                            </div>
                            
                            <div class="tab-content text-justify">
							
								
                              
								
                                 <div class="tab-pane fade active show" id="basic-info" role="tabpanel" aria-labelledby="list-monday-list">
									<div class="row">
										
										
											
										<p><b>PATIENT'S NAME</b></p>
                                   
                                        <div class="col-md-4 col-12">
                                        
                                            <div class="form-group">
                                                <label for="lastname">Last Name</label>
                                                <input type="text" id="lastname" class="form-control"  name="lastname">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="firstname">First Name</label>
                                                <input type="text" id="firstname" class="form-control"  name="firstname">
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-12">
                                            <div class="form-group">
                                                <label for="middle">Middle Name</label>
                                                <input type="text" id="middle" class="form-control"  name="middle">
                                            </div>
                                        </div>
                                        <div class="col-md-1 col-12">
                                            <div class="form-group">
                                                <label for="ext">Ext</label>
                                                <input type="text" id="ext" class="form-control"  name="ext">
                                            </div>
                                        </div>
                                        <p><b>ADDRESS</b></p>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="municipality">Municipality</label>
                                                <select  id="municipality" class="form-control" name="municipality">
                                                    <option disabled selected>--Select Municipality--</option>
                                                    <option>Boac</option>
                                                    <option>Gasan</option>
                                                    <option>Mogpog</option>
                                                    <option>Sta. Cruz</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="barangay">Barangay</label>
                                                <select  id="barangay" class="form-control" name="barangay">
                                                    <option disabled selected>--Select Barangay--</option>
                                                
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="street">Street</label>
                                                <input type="text" id="street" class="form-control"  name="street">
                                            </div>
                                        </div>
										<div class="col-md-3 col-12">
                                            <div class="form-group">
                                                <label for="phone">Phone Number</label>
                                                <input type="text" id="phone" class="form-control" name="phone">
                                            </div>
                                        </div>
										<div class="col-md-3 col-12">
                                            <div class="form-group">
                                                <label for="birth">Date of Birth</label>
                                                <input type="date" id="birth" class="form-control" name="birth">
                                            </div>
                                        </div>
										<div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="place_birth">Place of Birth</label>
                                                <input type="text" id="place_birth" class="form-control" name="place_birth">
                                            </div>
                                        </div>
										<div class="col-md-3 col-12">
                                            <div class="form-group">
                                                <label for="informant">Informant</label>
                                                <input type="text" id="informant" class="form-control" name="informant">
                                            </div>
                                        </div>
										<div class="col-md-3 col-12">
                                            <div class="form-group">
                                                <label for="gender">Gender</label>
                                                <select  id="gender" class="form-control" name="gender">
                                                    <option disabled selected>--Select Gender--</option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                    <option>Non Binary</option>
                                                </select>
                                            </div>
                                        </div>
										<div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="philhealth">Philhealth</label>
                                                <input type="text" id="philhealth" class="form-control" name="philhealth">
                                            </div>
                                        </div>
										 <div class="col-md-3 col-12">
                                            <div class="form-group">
                                                <label for="civil_status">Civil Status</label>
                                                <select  id="civil_status" class="form-control" name="civil_status">
                                                
                                                    <option selected>Single</option>
													<option >Child</option>
                                                    <option>Married</option>
                                                    <option>Widow</option>
													<option>Separated</option>
                                                </select>
                                            </div>
                                        </div>
                                
                                        
                                
                                     
                                        <div class="col-md-3 col-12">
                                            <div class="form-group">
                                                <label for="nationality">Nationality</label>
                                                <select  id="nationality" class="form-control" name="nationality">
                                    
                                                    <option selected>Filipino</option>
                                                    <option>Others</option>
                                                </select>
                                            </div>
                                        </div>
										 <div class="col-md-3 col-12">
                                            <div class="form-group">
                                                <label for="religion">Religion</label>
                                                <select  id="religion" class="form-control" name="religion">
                                                
                                                    <option selected>Catholic</option>
                                                    <option>Sabadista</option>
                                                    <option>Born Again</option>
                                                </select>
                                            </div>
                                        </div>
										
										<div class="col-md-3 col-12">
                                            <div class="form-group">
                                                <label for="occupation">Occupation</label>
												<input type="text" id="occupation" class="form-control"  name="occupation">
                                           
                                                
                                            </div>
                                        </div>
										<div class="col-md-3 col-12">
                                            <div class="form-group">
                                                <label for="mss_class">MSS Class</label>
												<input type="text" id="mss_class" class="form-control"  name="mss_class">
                                           
                                                
                                            </div>
                                        </div>
                                       <div class="col-md-3 col-12">
                                            <div class="form-group">
                                                <label for="nearest_relative">Nearest Relative</label>
												<input type="text" id="nearest_relative" class="form-control"  name="nearest_relative">
                                           
                                                
                                            </div>
                                        </div>
										<div class="col-md-3 col-12">
                                            <div class="form-group">
                                                <label for="relationship">Relationship</label>
                                                <select  id="relationship" class="form-control" name="relationship">
                                                
                                                    <option selected>Cousin</option>
                                                    <option>Grand Mother/Grand Father</option>
                                                    <option>Grand Child</option>
                                                </select>
                                            </div>
                                        </div>
										<div class="clearfix">
											<button class="btn btn-success float-right" onclick="SaveBasicInfo()">Save Basic Information</button>
										</div>
										
                                    </div>
                                </div>
                            
                            
                                <div class="tab-pane fade" id="vital-signs" role="tabpanel" aria-labelledby="list-monday-list">
                                    <div class="row">
										<div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="temp">Temperature(Temp)</label>
                                                <input type="text" id="temp" class="form-control"  name="temp">
                                            </div>
                                        </div>
										<div class="col-md-4 col-12">
                                        
                                            <div class="form-group">
                                                <label for="cr">Circulation Rate(CR)</label>
                                                <input type="text" id="cr" class="form-control"  name="cr">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-3 col-12">
                                            <div class="form-group">
                                                <label for="">Heart Rate(HR)</label>
                                                <input type="text" id="" class="form-control"  name="">
                                            </div>
                                        </div>
										<div class="col-md-3 col-12">
                                            <div class="form-group">
                                                <label for="">Respiratory Rate(RR)</label>
                                                <input type="text" id="" class="form-control"  name="">
                                            </div>
                                        </div>
										<div class="col-md-4 col-12">
                                        
                                            <div class="form-group">
                                                <label for="">Blood Pressure(BP)</label>
                                                <input type="text" id="" class="form-control"  name="">
                                            </div>
                                        </div>
										<div class="col-md-3 col-12">
                                            <div class="form-group">
                                                <label for="">Weight</label>
                                                <input type="text" id="" class="form-control"  name="">
                                            </div>
                                        </div>
										<div class="col-md-3 col-12">
                                            <div class="form-group">
                                                <label for="">Height</label>
                                                <input type="text" id="" class="form-control"  name="">
                                            </div>
                                        </div>
									
									</div>
									<div class="clearfix">
											<button class="btn btn-success float-right">Save Vital Sign</button>
										</div>

								</div>
									
									<div class="tab-pane fade" id="chief-complaint" role="tabpanel" aria-labelledby="list-monday-list">
                                        <div class="row">
										
										<div class="col-md-3 col-12">
                                            <div class="form-group">
                                                <p><b>CONDITION ON ARRIVAL</b></p>
                                                <select  id="condition-column" class="form-control" name="municipality-column">
                                                    <option disabled selected>--Select Condition--</option>
                                                    <option>Good</option>
                                                    <option>Fair</option>
                                                    <option>Poor</option>
                                                    <option>DOA</option>
                                                </select>
                                            </div>
											
												
                                        </div>
										<div class="col-md-4 col-12">
                                        
                                            <div class="form-group">
                                                <label for="">Chief Complaint</label>
                                                <textarea id="" class="form-control"  name="fname-column"></textarea>
											</div>
                                        </div>
                                        <div class="col-md-5 col-12">
                                            <div class="form-group">
                                                <label for="">History of Present Illness</label><textarea   id="" class="form-control"  name="lname-column"></textarea>
											</div>
                                        </div>
										<div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="">Diagnosis/Treatment(To be update after doctor's treatment)</label>
                                                <textarea id="" class="form-control"  name="lname-column"></textarea>
											</div>
                                        </div>
										<div class="row">
											<h3>Assign Doctor</h3>
											
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
														
													   
														<td>
															<button class="btn badge bg-primary"> <i class="fa fa-edit"></i>Assign</button>
														</td>
														
													</tr>
												   
												</tbody>
											</table>
											<br>
										</div>
										
									</div>
										<div class="clearfix">
											<button class="btn btn-success float-right">Save and add to queue</button>
										</div>
                                        </div>

                                    </div>
									<div class="tab-pane fade" id="admission" role="tabpanel" aria-labelledby="list-monday-list">
										<div class="row">
										
										</div>
									
									</div>
								
                           
                            <br>
                            
                        </form>
                        
                    </div>
                </div>
                
            </div>
            <div class="col-md-12">
              
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title">List of Patents</h4>
                        <div class="d-flex ">
                           

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></span>
                                    <input type="text" class="form-control" placeholder="Patient Record" aria-label="Patient " aria-describedby="button-addon2">
                                    <select id="municipality-column" class="form-control" name="municipality-column">
                                        <option disabled="" selected="">--Select Municipality--</option>
                                        <option>Boac</option>
                                        <option>Gasan</option>
                                        <option>Mogpog</option>
                                        <option>Sta. Cruz</option>
                                    </select>
                                    <select id="" class="form-control" name="">
                                        <option disabled="" selected="">--Select Barangay--</option>
                                    
                                    </select>
                                    <button class="btn btn-primary" type="button" id="button-addon2">Search</button>
                                    
                                </div>
                        
                        </div>
                    </div>
                    <div class="card-body px-0 pb-0">
                        <div class="table-responsive">
                            <table class='table mb-0' id="table1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Last Name</th>
                                        <th>First Name</th>
                                        <th>Middle Name</th>
                                        <th>Ext</th>
                                        <th>Manage Patient</th>
                                        <th>Assigned Doctor / <br> Room</th>
                                        <th>Action</th>
                                        <th>Status</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Omiping</td>
                                        <td>Kenneth</td>
                                        <td>Layron</td>
                                        <td>N/A</td>
                                        <td>
                                            <button class="btn badge bg-danger" data-toggle="modal" data-target="#patient_history">Patient History</button> 
                                            <button class="btn badge bg-primary" data-toggle="modal" data-target="#patient-lab">Patient Laboratory</button> 
                                            
                                    
                                            
                                        </td>
                                        <td>
                                            <span class="text-primary">Dr. Kenneth Omiping</span>  at 2nd Floor Room 3
                                        </td>
                                        <td>
                                            <button class="btn badge bg-primary"> <i class="fa fa-edit"></i></button>
                                            <button class="btn badge bg-danger"> <i class="fa fa-trash"></i></button>
                                        </td>
                                        <td>
                                            Checked Up
                                        </td>
                                    </tr>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </section>
</div>
<?php include("footer.php");?>
    <script>
        var triggerTabList = [].slice.call(document.querySelectorAll('#myTab a'))
triggerTabList.forEach(function (triggerEl) {
  var tabTrigger = new bootstrap.Tab(triggerEl)

  triggerEl.addEventListener('click', function (event) {
    event.preventDefault()
    tabTrigger.show()
  })
})
    </script>
</body>
</html>
