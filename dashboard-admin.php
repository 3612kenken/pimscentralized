
<!DOCTYPE html>
<html lang="en">
<?php include("head.php");


if(isset($_SESSION['ID'])){
			
			if($_SESSION['user_level']=="Doctor"){
				
				
				header("Location: dashboard_main.php");
				exit();
			}elseif($_SESSION['user_level']=="Nurse"){
				header("Location: manage_patient.php");
				exit();
				
			}
			
		}?>


<body>
    <div id="app">
        
        <div id="main">
		
		
        <?php 
			include("nav.php");
		?>
            
<div class="main-content container-fluid">
<<<<<<< HEAD

	<div class="page-title bg-primary" >
        <h3 class="text-white" style="padding-left:20px;padding-top:20px;">Dashboard</h3>
        <p class="text-subtitle  text-white" style="padding-left:20px;padding-bottom:20px;">
		A good dashboard to display your statistics</p>
=======
    <div class="page-title">
        <h3>Dashboard</h3>
        <p class="text-subtitle text-muted">A good dashboard to display your statistics</p>
>>>>>>> 4155b13ec68b6dc5bd6b45d215bd3a61f3bb5878
    </div>
    <section class="section">
        <div class="row mb-2">
            <div class="col-12 col-md-4">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 d-flex justify-content-between'>
<<<<<<< HEAD
                                <h3 class='card-title'>Pending Patients<br>Today</h3>
=======
                                <h3 class='card-title'>Pending Patients Today</h3>
>>>>>>> 4155b13ec68b6dc5bd6b45d215bd3a61f3bb5878
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
<<<<<<< HEAD
                                <h3 class='card-title'>Checked-up Patients<br>Today</h3>
=======
                                <h3 class='card-title'>Checked-up Patients Today</h3>
>>>>>>> 4155b13ec68b6dc5bd6b45d215bd3a61f3bb5878
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
       
        <div class="row mb-4" >
<<<<<<< HEAD
            <div class="row">
			<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<div class="row">
								<div class="col-md-10">
									<h4>Patient Complaint Trends</h4>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<select class="form-control">
											<option value="2024" selected>2024</option>
										</select>
									</div>
								</div>
							</div>
							
						</div>
						<div class="card-body">
							<div id="complaints"></div>
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="card">
						<div class="card-header">
						<div class="row">
								<div class="col-md-8">
									<h4>National Health Service(NHS)</h4>
								</div>
								<div class="col-md-4">
									<div class="input-group">
								
										<select class="form-control">
											 <option selected disabled>--Month--</option>
											 <option value="All" >All</option>
											 <option value="1" >January</option>
											 <option value="2" >February</option>
											 <option value="3" >March</option>
											 <option value="4" >April</option>
											 <option value="5" >May</option>
											 <option value="6" >June</option>
											 <option value="7" >July</option>
											 <option value="8" >August</option>
											 <option value="9" >September</option>
											 <option value="10" >October</option>
											 <option value="11" >November</option>
											 <option value="12" >December</option>
										</select>
						
										<select class="form-control">
											 <option value="2024" selected>2024</option>
										</select>
									</div>
								</div>
							</div>
					</div>
						<div class="card-body">
							<div id="chart"></div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<div class="card-header">
							
							<div class="row">
								<div class="col-md-6">
									<h4>Doctor Services</h4>
								</div>
								<div class="col-md-6">
									<div class="input-group">
								
										<select class="form-control">
											 <option selected disabled>--Month--</option>
											 <option value="All" >All</option>
											 <option value="1" >January</option>
											 <option value="2" >February</option>
											 <option value="3" >March</option>
											 <option value="4" >April</option>
											 <option value="5" >May</option>
											 <option value="6" >June</option>
											 <option value="7" >July</option>
											 <option value="8" >August</option>
											 <option value="9" >September</option>
											 <option value="10" >October</option>
											 <option value="11" >November</option>
											 <option value="12" >December</option>
										</select>
						
										<select class="form-control">
											 <option value="2024" selected>2024</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="card-body">
							<div id="doctors"></div>
						</div>
					</div>
				</div>
				
			</div>
=======
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
>>>>>>> 4155b13ec68b6dc5bd6b45d215bd3a61f3bb5878
        </div>
    </section>
</div>

          <?php include("footer.php");?>
<<<<<<< HEAD
		  <script src="assets/vendors/apexcharts/apexcharts.min.js"></script>
<script src="assets/js/pages/ui-apexchart.js"></script>
		  
		  <script>
		   
        var options = {
          series: [{
		  name: "Patients",
          data: [400, 430, 448, 470, 540, 580, 690]
        }],
          chart: {
          type: 'bar',
          height: 350
        },
        
        plotOptions: {
          bar: {
            horizontal: true,
          }
        },
        dataLabels: {
          enabled: true
        },
        xaxis: {
          categories: ['Bladder Stones', 'Amputation', 'Bleeding after the menopause, see Postmenopausal bleeding', 'Bleeding between periods or after sex, see Vaginal bleeding between periods or after sex', 'Diabetes insipidus', 'Endometrial cancer, see Womb (uterus) cancer', 'Endoscopy'],
        },
        grid: {
          xaxis: {
            lines: {
              show: true
            }
          }
        },
        yaxis: {
          reversed: true,
          axisTicks: {
            show: true
          }
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
		
		
		
		
		
		 var options = {
          series: [{
            name: "Patients",
            data: [10, 41, 35, 51, 49, 62, 69, 91, 148, 200, 20, 30]
        }],
          chart: {
          height: 350,
          type: 'line',
          zoom: {
            enabled: false
          }
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: 'straight'
        },
    
        grid: {
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.5
          },
        },
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        }
        };

        var chart = new ApexCharts(document.querySelector("#complaints"), options);
        chart.render();
		
		
		var options = {
          series: [10, 41, 35, 51],
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
                label: 'Patients',
                formatter: function (w) {
                  // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
                  return 249
                }
              }
            }
          }
        },
        labels: ['Dr. K. Omiping', 'Dr. A. Macayaon', 'Dr. M. Nebreja', 'Dr. E. Magahis'],
        };

        var chart = new ApexCharts(document.querySelector("#doctors"), options);
        chart.render();
		  </script>
=======
>>>>>>> 4155b13ec68b6dc5bd6b45d215bd3a61f3bb5878
</body>
</html>
