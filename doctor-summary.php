<!DOCTYPE html>
<html lang="en">
<?php include("head.php");?>
<body>
    <div id="app">
        
        <div id="main">
            <?php include("nav.php");?>
            
<div class="main-content container-fluid">
  
	<div class="page-title bg-primary" >
        <h3 class="text-white" style="padding-left:20px;padding-top:20px;">Doctor Services</h3>
        <p class="text-subtitle  text-white" style="padding-left:20px;padding-bottom:20px;">
		Summary of Doctor's Services</p>
    </div>
    <section class="section">
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="card ">
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
						<div class="row">
						 <div class="card-header col-md-8">
								<h3 class='card-heading p-1 pl-3'>Dr. <?php echo $fullname; ?></h3>
							
								<p class="text-subtitle text-muted p-1 pl-3">Profession: <?php echo $designation; ?>
									<br>
									Address: <?php echo $address; ?>
									<br>
									Clinic: <?php echo $clinic; ?>
									<br>
									Clinic Address: <?php echo $caddress; ?>
								</p>
									<hr>
								<p class="text-subtitle text-muted p-1 pl-3">
									Serviced: 430 | 90%
									<br>
									Pending Patient: 20 | 6%
									<br>
									Not Serviced: 10 | 3%
									<br>
									Total Patients: 467
								</p>
							</div>
							<div class="col-md-4">
								<div id="doctors"></div>
							</div>
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
          series: [90, 6, 3 ],
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
                label: 'Total Patients',
                formatter: function (w) {
                  // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
                  return 467
                }
              }
            }
          }
        },
        labels: ['Serviced', 'Pending Patients', 'Not serviced'],
        };

        var chart = new ApexCharts(document.querySelector("#doctors"), options);
        chart.render();
		  </script>
</body>
</html>
