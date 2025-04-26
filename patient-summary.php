<!DOCTYPE html>
<html lang="en">
<?php include("head.php"); ?>

<body>
  <div id="app">

    <div id="main">
      <?php include("nav.php"); ?>

      <div class="main-content container-fluid">

        <div class="page-title bg-primary">
          <h3 class="text-white" style="padding-left:20px;padding-top:20px;">Patient Summary Report</h3>
          <p class="text-subtitle  text-white" style="padding-left:20px;padding-bottom:20px;">
            Shows all summary of patients</p>
        </div>
        <section class="section">
          <div class="row mb-4">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="row">
                    <div class="col-md-4">
                      <h4>Patient Complaint Trends</h4>
                    </div>
                    <div class="col-md-8">
                      <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">From:</span>
                        <input type="date" class="form-control">
                        <span class="input-group-text" id="basic-addon1">To:</span>
                        <input type="date" class="form-control">

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
                        <select id="municipality-column" class="form-control" name="municipality-column">
                          <option disabled="" selected="">--NHS--</option>

                        </select>
                        <button class="btn btn-primary">Search</button>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="card-body">
                  <div id="complaints"></div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="row">
                    <div class="col-md-8">
                      <h4>National Health Service(NHS)</h4>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div id="chart"></div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="card ">

                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered table-md">

                      <tr>
                        <th>#</th>
                        <th>Patient Name</th>
                        <th>Patient Condition</th>
                        <th>Patient History</th>
                        <th>Address</th>
                        <th>NHS</th>
                        <th>Total</th>
                      </tr>

                      <tbody>
                        <?php
                        /*
                              
                              - Summary based NHS with filter day + (barangay, municipality, provincial)
                              - 
                              
                              */
                        $sql = "Select CONCAT(p.firstname ,' ' , p.middle, ' ', p.lastname) as fullname, CONCAT(p.street,' ', p.barangay,' ', p.municipality,' ', p.province) as Address, c.patient_condition, c.history, nhs.disease, c.diagnosis, c.date_complaint, COUNT(*) as total_patient from tbl_patient_info as p LEFT OUTER JOIN tbl_patient_complaint as c on p.patient_id=c.patient_id LEFT OUTER JOIN tbl_nhs_disease as nhs on nhs.nhsid = c.nhsid GROUP BY c.nhsid, fullname;";
                        $result = $db->prepare($sql);
                        $result->execute(array());
                        $output = "";
                        $j = 0;
                        $total = 0;
                        for ($i = 0; $row = $result->fetch(); $i++) {
                          $j = $i + 1;
                          $total += $row[7];
                          $output .= '<tr><td>' . $j . '</td>
								
								
							
								
								<td>' . $row[0] . '</td>
								<td>' . $row[2] . '</td>
								<td>' . $row[3] . '</td>
								<td>' . $row[1] . '</td>
								<td>' . $row[4] . '</td>
								<td>' . $row[7] . '</td>
								</tr>';
                        }
                        $output .= '<tr><td colspan=6>Over All Total</td><td><b>' . $total . '</b></td></tr>';

                        echo $output;
                        ?>
                      </tbody>

                    </table>

                  </div>

                </div>
              </div>

            </div>


          </div>

        </section>
      </div>
      <?php include("footer.php"); ?>
      <script src="assets/vendors/apexcharts/apexcharts.min.js"></script>
      <script src="assets/js/pages/ui-apexchart.js"></script>

      <script>
        <?php

        $sql = "SELECT COUNT(*) as cnt,  nhs.disease as disease
      FROM tbl_patient_complaint as p 
      LEFT OUTER JOIN tbl_nhs_disease as nhs ON p.nhsid=nhs.nhsid GROUP BY nhs.nhsid;";

        $result = $db->prepare($sql);
        $result->execute(array());
        $data = array();
        $categories = array();
        $count_patient = array();
        $disease_patient = array();

        for ($i = 0; $row = $result->fetch(); $i++) {
          array_push($count_patient, $row[0]);
          array_push($disease_patient, $row[1]);

        }

        //   SELECT count(p.date_time_entry) as month_count, m.month_abbr from tbl_patient_complaint as p RIGHT JOIN tbl_months as m on m.month_name = MONTHNAME(p.date_time_entry) GROUP BY m.month_abbr; 
        $sql = " SELECT count(p.date_time_entry) as month_count, m.month_abbr from tbl_patient_complaint as p RIGHT JOIN tbl_months as m on m.month_name = MONTHNAME(p.date_time_entry) GROUP BY m.month_abbr; ";


        $result = $db->prepare($sql);
        $result->execute(array());
        $data = array();
        $categories = array();
        $month_count = array();
        $month_abbr = array();

        for ($i = 0; $row = $result->fetch(); $i++) {
          array_push($month_count, $row[0]);
          array_push($month_abbr, $row[1]);

        }

        ?>

        var options = {
          series: [{
            name: "Patients",
            data: <?php echo json_encode($count_patient); ?>
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
            categories: <?php echo json_encode($disease_patient); ?>,
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
            data: <?php echo json_encode($month_count); ?>
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
            categories: <?php echo json_encode($month_abbr); ?>
          }
        };

        var chart = new ApexCharts(document.querySelector("#complaints"), options);
        chart.render();

      </script>
</body>

</html>