<!DOCTYPE html>
<html lang="en">
<?php include("head.php");?>
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
        <h3>Profile</h3>
        <p class="text-subtitle text-muted">Update your profile</p>
    </div>
    <section class="section">
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="card ">
                  
                    <div class="card-body">
                      
                        <form action="index.html">
                            <div class="row">
                                <p><b>FULL NAME</b></p>
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
                                
                               
                                
                            </diV>
                            <div class="row">
								<div class="col-md-3 col-12">
                                    <div class="form-group">
                                        <label for="middle-name-column">Designation</label>
                                        <select class="form-control" >
											<option disabled>--Select Designation</option>
											<option value="Doctor">Doctor</option>
											<option value="Nurse III">Nurse III</option>
											<option value="Staff">Staff</option>
										</select>
                                    </div>
                                </div>
                                <div class="col-md-8 col-12">
                                    <div class="form-group">
                                        <label for="middle-name-column">Address</label>
                                        <input type="text" id="middle-name-column" class="form-control"  name="mname-column">
                                    </div>
                                </div>
                                <div class="col-md-3 col-12">
                                   
                                    <div class="form-group">
                                        <label for="last-name-column">Username</label>
                                        <input type="text" id="last-name-column" class="form-control"  name="fname-column">
                                    </div>
                                </div>
                                <div class="col-md-3 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Password</label>
                                        <input type="password" id="first-name-column" class="form-control"  name="lname-column">
                                    </div>
                                </div>
                                <div class="col-md-3 col-12">
                                    <div class="form-group">
                                        <label for="middle-name-column">User Level</label>
                                        <select class="form-control" >
											<option disabled>--Select User Level</option>
											<option value="Administrator">Administrator</option>
											<option value="Sub Administrator">Sub Administrator</option>
											<option value="Staff/User">Staff/User</option>
										</select>
                                    </div>
                                </div>
                               
                               
                                
                            </diV>
                             <br>
                            <div class="clearfix">
                                <button class="btn btn-success float-right">Update Profile</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
                
            </div>
            
           
        </div>
    
	</section>
</div>
<?php include("footer.php");?>
</body>
</html>
