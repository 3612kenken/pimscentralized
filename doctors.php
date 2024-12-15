<!DOCTYPE html>
<html lang="en">
<?php include("head.php");?>
<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
    <div class="sidebar-header" >
        
        <p class="title text-primary">PIMS </p>
        <h2 class="text-primary" style="font-size:large; margin:0%;padding:0%;margin-bottom: 0%;">Patient Information and Monitoring System</h2>
    </div>
    <div class="sidebar-menu">
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
           <?php include("nav.php");?>
            
<div class="main-content container-fluid">
    <div class="page-title">
        <h3>Manage Doctors</h3>
        <p class="text-subtitle text-muted">Here are the list of doctors</p>
    </div>
    <section class="section">
        
        <div class="row mb-4">
            
            <div class="col-md-12">
              
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title">List of Doctors</h4>
                        <div class="d-flex ">
                           

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></span>
                                    <input type="text" class="form-control" placeholder="Search Doctor" aria-label="Patient " aria-describedby="button-addon2">
                               
                                    <button class="btn btn-primary" type="button" id="button-addon2">Search</button>
                                    
                                </div>
                        
                        </div>
                    </div>
                    <div class="card-body px-0 pb-0">
                        <div class="table-responsive">
                            <table class='table mb-0' id="table1">
                                <thead>
                                    <tr>
                                        <th>Full Name</th>
                                        <th>Extension</th>
										<th>Address</th>
										<th>Proficiency</th>
										<th>Clinic</th>
										<th>Clinic Address</th>
										<th>Manage</th>
                                        <th>Action</th>
                                     
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Kenneth Omiping</td>
                                        <td>phD</td>
										<td>Cawit Boac Marinduque</td>
                                        <td>Doctor in Phsychology</td>
										<td>Kenz Clinic</td>
										<td>Mercado, Boac, Marinduque</td>
                                        <td>
											<button class="btn badge bg-success">Other Information</button> 
                                           
                                            <button class="btn badge bg-info">Manage Schedule</button> 
                                           
                                        </td>
                                       
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
    </section>
</div>

         <?php include("footer.php");?>
</body>
</html>
