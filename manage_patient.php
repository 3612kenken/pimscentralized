<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Voler Admin Dashboard</title>
    
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
        <h2 class="text-primary" style="font-size:large; margin:0%;padding:0%;margin-bottom: 0%;">Patient Information and Monitoring System</h2>
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
                        <li class="dropdown nav-icon mr-2">
                            <a href="#" data-toggle="dropdown" class="nav-link  dropdown-toggle nav-link-lg nav-link-user">
                                <div class="d-lg-inline-block">
                                    <i data-feather="mail"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
                                <a class="dropdown-item active" href="#"><i data-feather="mail"></i> Messages</a>
                                <a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i data-feather="log-out"></i> Logout</a>
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
                        <a class="list-group-item list-group-item-action" id="list-monday-list" data-toggle="list" href="#assign-doctor" role="tab" aria-selected="false">Assign to new Doctor</a>
                    
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
                        <div class="tab-pane fade" id="add-record" role="tabpanel" aria-labelledby="list-sunday-list">
                            <br>
                            <h3 class="text-center">New Patient Complain</h3>
                                <div class="row">
                                    
                                    <div class="col-md-6">
                                        <h5 >Current History</h5>
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
                                        
                                        <div class="form-group">
                                            <label for="first-name-column">Date</label>
                                            <input type="date" id="first-name-column" class="form-control" name="lname-column">
                                        </div>
                                        <div class="form-group">
                                            <label for="first-name-column">Reason To Visit</label>
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
                                        
                                       
                                        <td>
                                            <button class="btn badge bg-primary"> <i class="fa fa-edit"></i>Assign</button>
                                        </td>
                                        
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
                            <span class="d-none d-sm-block">Save All</span>
                        </button>
               
                </div>
             
            </div>
        </div>
    </div>
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
                      
                                <a class="list-group-item list-group-item-action active" id="list-monday-list" data-toggle="list" href="#basic-info" role="tab" aria-selected="false">Basic Information</a>
                                <a class="list-group-item list-group-item-action " id="list-sunday-list" data-toggle="list" href="#other-details" role="tab" aria-selected="true">Other Details</a>
                        
                            
                            </div>
                            
                            <div class="tab-content text-justify">
                                 <div class="tab-pane fade active show" id="basic-info" role="tabpanel" aria-labelledby="list-monday-list">
                               
                                    <p><b>FULL NAME</b></p>
                                    <div class="row">
                                        <div class="col-md-4 col-12">
                                        
                                            <div class="form-group">
                                                <label for="last-name-column">Last Name</label>
                                                <input type="text" id="last-name-column" class="form-control"  name="fname-column">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">First Name</label>
                                                <input type="text" id="first-name-column" class="form-control"  name="lname-column">
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-12">
                                            <div class="form-group">
                                                <label for="middle-name-column">Middle Name</label>
                                                <input type="text" id="middle-name-column" class="form-control"  name="mname-column">
                                            </div>
                                        </div>
                                        <div class="col-md-1 col-12">
                                            <div class="form-group">
                                                <label for="middle-name-column">Ext</label>
                                                <input type="text" id="middle-name-column" class="form-control"  name="mname-column">
                                            </div>
                                        </div>
                                        <p><b>ADDRESS</b></p>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="municipality-column">Municipality</label>
                                                <select  id="municipality-column" class="form-control" name="municipality-column">
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
                                                <label for="barangay-column">Barangay</label>
                                                <select  id="barangay-column" class="form-control" name="barangay-column">
                                                    <option disabled selected>--Select Barangay--</option>
                                                
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="street-column">Street</label>
                                                <input type="text" id="street-column" class="form-control"  name="street-column">
                                            </div>
                                        </div>
                        
                                
                                        <div class="col-md-3 col-12">
                                            <div class="form-group">
                                                <label for="company-column">Date of Birth</label>
                                                <input type="date" id="company-column" class="form-control" name="company-column">
                                            </div>
                                        </div>
                                
                                        <div class="col-md-3 col-12">
                                            <div class="form-group">
                                                <label for="barangay-column">Gender</label>
                                                <select  id="barangay-column" class="form-control" name="barangay-column">
                                                    <option disabled selected>--Select Gender--</option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                    <option>Non Binary</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-12">
                                            <div class="form-group">
                                                <label for="barangay-column">Nationality</label>
                                                <select  id="barangay-column" class="form-control" name="barangay-column">
                                    
                                                    <option selected>Filipino</option>
                                                    <option>Others</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-12">
                                            <div class="form-group">
                                                <label for="barangay-column">Civil Status</label>
                                                <select  id="barangay-column" class="form-control" name="barangay-column">
                                                
                                                    <option selected>Single</option>
                                                    <option>Married</option>
                                                    <option>Widow</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                            
                                    <div class="tab-pane fade" id="other-details" role="tabpanel" aria-labelledby="list-monday-list">
                                        <div class="row">
                                        </div>

                                    </div>
                                </div>
                           
                            <br>
                            <div class="clearfix">
                                <button class="btn btn-success float-right">Save Record</button>
                            </div>
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
                                    <select id="barangay-column" class="form-control" name="barangay-column">
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
                                            
                                            <button class="btn badge bg-info">Latest Prescription</button> 
                                            
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
