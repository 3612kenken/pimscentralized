<?php 
session_start();

		if(isset($_SESSION['ID'])){
			
		}else{
			header("Location: index.php");
		}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - PISYS</title>
    
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    
    <link rel="stylesheet" href="assets/vendors/chartjs/Chart.min.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

</head>
<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
      <div class="sidebar-header" >
        
        <p class="title text-primary">PIMS </p>
        <h2 class="text-primary" style="font-size:large; margin:0%;padding:0%;margin-bottom: 0%;">Patient Information System</h2>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
		<li class='sidebar-title'>Patient Assist Menu</li>
			<?php
			
			
            
			if($_SESSION['user_level']=="Doctor"){
            echo '<li class="sidebar-item active ">
                <a href="dashboard_main.php" class="sidebar-link">
                    <i data-feather="home" width="20"></i> 
                    <span>Dashboard</span>
                </a>
                
            </li>
					
				</li>
				 <li class="sidebar-item  ">
                <a href="doctors-sched.php" class="sidebar-link">
                    <i data-feather="layout" width="20"></i> 
                    <span>Doctors Schedule</span>
                </a>
                
            </li>';
			}
			?>
			
			<li class="sidebar-item ">
					<a href="profile.php" class="sidebar-link">
						<i data-feather="layout" width="20"></i> 
						<span>Profile</span>
					</a>
			
			<?php
			
			if($_SESSION['user_level']=="Administrator" || $_SESSION['user_level']=="Nurse"){
				echo '<li class="sidebar-item ">
					<a href="manage_patient.php" class="sidebar-link">
						<i data-feather="layout" width="20"></i> 
						<span>Manage Patient</span>
					</a>
					
				</li>';
			
			}
			 if($_SESSION['user_level']=="Administrator"){
			   echo '<li class="sidebar-item ">
					<a href="doctors.php" class="sidebar-link">
						<i data-feather="layout" width="20"></i> 
						<span>Manage Doctor list</span>
					</a>
					
				</li>

           
			<li class="sidebar-item  ">
                <a href="users-maintenance.php" class="sidebar-link">
                    <i data-feather="layout" width="20"></i> 
                    <span>Users Maintenance</span>
                </a>
            </li>';
			}
			?>
    </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
        </div>
        <div id="main">
            <nav class="navbar navbar-header navbar-expand navbar-light">
                <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
                <button class="btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ml-auto">
                        <li class="dropdown nav-icon">
                            <a href="#" data-toggle="dropdown" class="nav-link  dropdown-toggle nav-link-lg nav-link-user">
                                <div class="d-lg-inline-block">
                                    <i data-feather="bell"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-large">
                                <h6 class='py-2 px-4'>Notifications</h6>
                                <ul class="list-group rounded-none">
                                    <li class="list-group-item border-0 align-items-start">
                                        <div class="avatar bg-success mr-3">
                                            <span class="avatar-content"><i data-feather="shopping-cart"></i></span>
                                        </div>
                                        <div>
                                            <h6 class='text-bold'>New Order</h6>
                                            <p class='text-xs'>
                                                An order made by Ahmad Saugi for product Samsung Galaxy S69
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                       
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <div class="avatar mr-1">
                                    <img src="assets/images/avatar/avatar-s-1.png" alt="" srcset="">
                                </div>
                                <div class="d-none d-md-block d-lg-inline-block">Hi, Saugi</div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
                                <a class="dropdown-item active" href="#"><i data-feather="mail"></i> Messages</a>
                                <a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i data-feather="log-out"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            
<div class="main-content container-fluid">
    <div class="page-title">
        <h3>Dashboard</h3>
        <p class="text-subtitle text-muted">A good dashboard to display your statistics</p>
    </div>
    <section class="section">
        <div class="row mb-2">
            <div class="col-12 col-md-4">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'>Pending Patients Today</h3>
                                <div class="card-right d-flex align-items-center">
                                    <p>10 </p>
                                </div>
                            </div>
                            <div class="chart-wrapper">
                                <canvas id="canvas1" style="height:100px !important"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'>Checked-up Patients Today</h3>
                                <div class="card-right d-flex align-items-center">
                                    <p>20 </p>
                                </div>
                            </div>
                            <div class="chart-wrapper">
                                <canvas id="canvas2" style="height:100px !important"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'>Total Checked-up Patients</h3>
                                <div class="card-right d-flex align-items-center">
                                    <p>444 </p>
                                </div>
                            </div>
                            <div class="chart-wrapper">
                                <canvas id="canvas3" style="height:100px !important"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
        <div class="row mb-4">
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
                      
								<a class="list-group-item list-group-item-action active" id="list-monday-list" data-toggle="list" href="#phistory" role="tab" aria-selected="false">History</a>
								<a class="list-group-item list-group-item-action" id="list-sunday-list" data-toggle="list" href="#add-record" role="tab" aria-selected="true">Patient Complain</a>
								<a class="list-group-item list-group-item-action" id="list-monday-list" data-toggle="list" href="#plaboratory" role="tab" aria-selected="false">Laboratory Results</a>
								<a class="list-group-item list-group-item-action" id="list-monday-list" data-toggle="list" href="#prescription" role="tab" aria-selected="false">Prescription</a>
							
							</div>
							<div class="tab-content text-justify">
                        
								<div class="tab-pane fade active show" id="phistory" role="tabpanel" aria-labelledby="list-monday-list">
									<br>
									<h3 class="text-center">History of Patient</h3>
									<div class="table-responsive">
										<table class='table mb-0' id="table1">
											<thead>
												<tr>
													<th>#</th>
													<th>Date </th>
													<th>Reason to visit </th>
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
										</table>
									</div>
								</div>
								<div class="tab-pane fade" id="plaboratory" role="tabpanel" aria-labelledby="list-tuesday-list">
									<br>
									<h3 class="text-center">Information of Patient laboratory</h3>
									
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
								<div class="tab-pane fade" id="add-record" role="tabpanel" aria-labelledby="list-sunday-list">
									<br>
									<h3 class="text-center">Patient Complain</h3>
										<div class="row">
											<div class="col-md-6">
												<h5 >Previous Complain</h5>
												<hr>
												<h5 >Date</h5>
													<label>2023-11-11</label>
												<h5 >Reason to visit</h5>
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
												<h5 >Current Complain</h5>
												<hr>
												
												<h5 >Reason to visit</h5>
													<label>Masakit ang Ulo</label>
												<h5 >Symptoms</h5>
													 <label>Head pain</label>
												<h5 >Allergies</h5>
													<label>allergy sa kanya</label>
												<h5 >Medication</h5>
													<label>Anti-breakup medicine</label>
											</div>
											
										</div>
								</div>
								<div class="tab-pane fade" id="prescription" role="tabpanel" aria-labelledby="list-tuesday-list">
									<br>
									<h3 class="text-center">Prescription</h3>
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
									<a class="btn btn-primary" href="./prescriptions/presc.html">CLICK TO WRITE PRESCRIPTION</a>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger ml-1" data-dismiss="modal">
								<i class="bx bx-check d-block d-sm-none"></i>
								<span class="d-none d-sm-block">Save All</span>
							</button>
						</div>
					</div>
				</div>
			</div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header col-md-6">
                        <h3 class='card-heading p-1 pl-3'>Welcome! Doctor Kenneth L. Omiping</h3>
                        <p class="text-subtitle text-muted p-1 pl-3">Doctor of Psychology
                            <br>
                            Address: Cawit Boac Marinduque
                            <br>
                            Clinic: Omiping's Clinic
                            <br>
                            Clinic Address: Cawit Boac Marinduque
                        </p>
                            <hr>
                        <p class="text-subtitle text-muted p-1 pl-3">
                            Current Duty: Marinduque Provincial Hospital
                            <br>
                            Hospital Duty Address: Santol Boac Marinduque
                        </p>
                    </div>
                    <div class="card-body">
                        
                        <div class="row">
                            <div class="col-8">
                                <h3 class='card-heading p-1 pl-3'>Schedule</h3>
                            
                                <div class="table-responsive">
                                    <table class="table mb-0" id="table1">
                                        <thead>
                                            <tr class="bg-info text-white">
                                                <th>#</th>
                                                <th>Date</th>
                                                <th>In</th>
                                                <th>Out</th>
                                                <th>Room</th>
                                                <th>Location Details</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>204-01-01</td>
                                                <td>8:00 AM</td>
                                                <td>4:00 PM</td>
                                                <td>Room 402</td>
                                                <td>2nd Floor Admit Section</td>
                                            </tr>
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-4">
                                <h3 class='card-heading p-1 pl-3'>Patient line-up</h3>
                                <table class="table mb-0" id="table1">
                                    <thead>
                                        <tr class="bg-success text-white">
                                            <th>#</th>
                                            <th>Full Name</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Patient Full Name</td>
                                            <td><button class="btn btn-sm btn-success" data-toggle="modal" data-target="#patient_history">Details</button></td>
                                        </tr>
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row mb-4" style="display: none;">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class='card-heading p-1 pl-3'>Sales</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-12">
                                <div class="pl-3">
                                    <h1 class='mt-5'>$21,102</h1>
                                    <p class='text-xs'><span class="text-green"><i data-feather="bar-chart" width="15"></i> +19%</span> than last month</p>
                                    <div class="legends">
                                        <div class="legend d-flex flex-row align-items-center">
                                            <div class='w-3 h-3 rounded-full bg-info mr-2'></div><span class='text-xs'>Last Month</span>
                                        </div>
                                        <div class="legend d-flex flex-row align-items-center">
                                            <div class='w-3 h-3 rounded-full bg-blue mr-2'></div><span class='text-xs'>Current Month</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 col-12">
                                <canvas id="bar"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Orders Today</h4>
                        <div class="d-flex ">
                            <i data-feather="download"></i>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-0">
                        <div class="table-responsive">
                            <table class='table mb-0' id="table1">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>City</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Graiden</td>
                                        <td>vehicula.aliquet@semconsequat.co.uk</td>
                                        <td>076 4820 8838</td>
                                        <td>Offenburg</td>
                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Dale</td>
                                        <td>fringilla.euismod.enim@quam.ca</td>
                                        <td>0500 527693</td>
                                        <td>New Quay</td>
                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nathaniel</td>
                                        <td>mi.Duis@diam.edu</td>
                                        <td>(012165) 76278</td>
                                        <td>Grumo Appula</td>
                                        <td>
                                            <span class="badge bg-danger">Inactive</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Darius</td>
                                        <td>velit@nec.com</td>
                                        <td>0309 690 7871</td>
                                        <td>Ways</td>
                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ganteng</td>
                                        <td>velit@nec.com</td>
                                        <td>0309 690 7871</td>
                                        <td>Ways</td>
                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Oleg</td>
                                        <td>rhoncus.id@Aliquamauctorvelit.net</td>
                                        <td>0500 441046</td>
                                        <td>Rossignol</td>
                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kermit</td>
                                        <td>diam.Sed.diam@anteVivamusnon.org</td>
                                        <td>(01653) 27844</td>
                                        <td>Patna</td>
                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card ">
                    <div class="card-header">
                        <h4>Your Earnings</h4>
                    </div>
                    <div class="card-body">
                        <div id="radialBars"></div>
                        <div class="text-center mb-5">
                            <h6>From last month</h6>
                            <h1 class='text-green'>+$2,134</h1>
                        </div>
                    </div>
                </div>
                <div class="card widget-todo">
                    <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                        <h4 class="card-title d-flex">
                            <i class='bx bx-check font-medium-5 pl-25 pr-75'></i>Progress
                        </h4>
                
                    </div>
                    <div class="card-body px-0 py-1">
                        <table class='table table-borderless'>
                            <tr>
                                <td class='col-3'>UI Design</td>
                                <td class='col-6'>
                                    <div class="progress progress-info">
                                        <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="0"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class='col-3 text-center'>60%</td>
                            </tr>
                            <tr>
                                <td class='col-3'>VueJS</td>
                                <td class='col-6'>
                                    <div class="progress progress-success">
                                        <div class="progress-bar" role="progressbar" style="width: 35%" aria-valuenow="0"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class='col-3 text-center'>30%</td>
                            </tr>
                            <tr>
                                <td class='col-3'>Laravel</td>
                                <td class='col-6'>
                                    <div class="progress progress-danger">
                                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="0"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class='col-3 text-center'>50%</td>
                            </tr>
                            <tr>
                                <td class='col-3'>ReactJS</td>
                                <td class='col-6'>
                                    <div class="progress progress-primary">
                                        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="0"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class='col-3 text-center'>80%</td>
                            </tr>
                            <tr>
                                <td class='col-3'>Go</td>
                                <td class='col-6'>
                                    <div class="progress progress-secondary">
                                        <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="0"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class='col-3 text-center'>65%</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-left">
                        <p>2020 &copy; Voler</p>
                    </div>
                    <div class="float-right">
                        <p>Crafted with <span class='text-danger'><i data-feather="heart"></i></span> by <a href="http://ahmadsaugi.com">Ahmad Saugi</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>
    
    <script src="assets/vendors/chartjs/Chart.min.js"></script>
    <script src="assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>
</body>
</html>
