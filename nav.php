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
			
			
            
			if($_SESSION['user_level']=="Doctor" || $_SESSION['user_level']=="Administrator"){
            echo '<li class="sidebar-item active ">
                <a href="dashboard_main.php" class="sidebar-link">
                    <i data-feather="home" width="20"></i> 
                    <span>Dashboard</span>
                </a>
<<<<<<< HEAD
				
                
            </li>
			<li class="sidebar-item ">
					<a href="profile.php" class="sidebar-link">
						<i data-feather="layout" width="20"></i> 
						<span>Profile</span>
					</a>
					
				</li>
				
                
            </li>';
			}
=======
                
            </li>
					
				</li>
				 <li class="sidebar-item  ">
                <a href="doctors-sched.php" class="sidebar-link">
                    <i data-feather="layout" width="20"></i> 
                    <span>Doctors Schedule</span>
                </a>
                
            </li>';
			}
			
>>>>>>> 4155b13ec68b6dc5bd6b45d215bd3a61f3bb5878
			if($_SESSION['user_level']=="Administrator" || $_SESSION['user_level']=="Nurse"){
				echo '<li class="sidebar-item ">
					<a href="manage_patient.php" class="sidebar-link">
						<i data-feather="layout" width="20"></i> 
						<span>Manage Patient</span>
					</a>
					
				</li>';
			
			}
			
<<<<<<< HEAD
			if($_SESSION['user_level']=="Administrator"){
				echo  '<li class="sidebar-item  ">
                <a href="doctors-sched.php" class="sidebar-link">
                    <i data-feather="layout" width="20"></i> 
                    <span>Doctors Schedule</span>
                </a>';
			}
			
			
			
			if( $_SESSION['user_level']=="Nurse"){
				
				echo '<li class="sidebar-item ">
=======
			?>
			<li class="sidebar-item ">
>>>>>>> 4155b13ec68b6dc5bd6b45d215bd3a61f3bb5878
					<a href="profile.php" class="sidebar-link">
						<i data-feather="layout" width="20"></i> 
						<span>Profile</span>
					</a>
<<<<<<< HEAD
					
				</li>';
			}
			if( $_SESSION['user_level']=="Doctor"){
				
				echo '<li class="sidebar-item ">
					<a href="calendar.php" class="sidebar-link">
						<i data-feather="layout" width="20"></i> 
						<span>Calendar Schedule</span>
					</a>
					
				</li>';
			}
			
			 if($_SESSION['user_level']=="Administrator"){
			   echo '<li class="sidebar-item " style="display:none;">
=======
			<?php
			 if($_SESSION['user_level']=="Administrator"){
			   echo '<li class="sidebar-item ">
>>>>>>> 4155b13ec68b6dc5bd6b45d215bd3a61f3bb5878
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
            </li>
<<<<<<< HEAD
			<hr>
			<li class="sidebar-title">Reports</li>
			
=======
>>>>>>> 4155b13ec68b6dc5bd6b45d215bd3a61f3bb5878
			<li class="sidebar-item  ">
                <a href="users-log.php" class="sidebar-link">
                    <i data-feather="layout" width="20"></i> 
                    <span>Users Log</span>
                </a>
<<<<<<< HEAD
            </li>
			<li class="sidebar-item  has-sub">
                    <a href="#" class="sidebar-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> 
                        <span>Medical Services Report</span>
                    </a>
                    
                    <ul class="submenu active">
                        
                        <li>
                            <a href="patient-masterlist.php"">Patient Masterlist</a>
                        </li>
                        
                        <li>
                            <a href="patient-summary.php">Patient Summary</a>
                        </li>
                        
                        <li>
                            <a href="doctor-summary.php">Doctor Services</a>
                        </li>
                        
                    </ul>
                    
                </li>
			
			
			
			';
=======
            </li>';
>>>>>>> 4155b13ec68b6dc5bd6b45d215bd3a61f3bb5878
			}
			?>
    </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
        </div>
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
<<<<<<< HEAD
                                <div class="d-none d-md-block d-lg-inline-block">Hi,  <?php echo $fullname; ?></div>
=======
                                <div class="d-none d-md-block d-lg-inline-block">Hi, Kenneth Omiping</div>
>>>>>>> 4155b13ec68b6dc5bd6b45d215bd3a61f3bb5878
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
                                <a class="dropdown-item active" href="#"><i data-feather="mail"></i> Messages</a>
                                <a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="index.php"><i data-feather="log-out"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>