
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

	<div class="page-title bg-primary" >
        <h3 class="text-white" style="padding-left:20px;padding-top:20px;">Dashboard</h3>
        <p class="text-subtitle  text-white" style="padding-left:20px;padding-bottom:20px;">
		A good dashboard to display your statistics</p>
    </div>
    <section class="section">
        <div class="row mb-2">
            <div class="col-12 col-md-4">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'>Pending Patients<br>Today</h3>
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
                                <h3 class='card-title'>Checked-up Patients<br>Today</h3>
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
        </div>
    </section>
</div>

          <?php include("footer.php");?>
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
</body>
</html>