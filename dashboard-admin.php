<!DOCTYPE html>
<html lang="en">
<?php include("head.php");


if (isset($_SESSION['ID'])) {

  if ($_SESSION['user_level'] == "Doctor") {


    header("Location: dashboard_main.php");
    exit();
  } elseif ($_SESSION['user_level'] == "Nurse") {
    header("Location: manage_patient.php");
    exit();

  }

} ?>


<body>
  <div id="app">

    <div id="main">


      <?php
      include("nav.php");
      ?>

      <div class="main-content container-fluid">

        <div class="page-title bg-primary">
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
                      <h3 class='card-title'>Pending Patients</h3>
                      <div class="card-right d-flex align-items-center">
                        <?php
                        $sql = "SELECT COUNT(*) as pending_count FROM tbl_patient_complaint WHERE patient_status = 'Pending'";
                        $result = $db->prepare($sql);
                        $result->execute();
                        $row = $result->fetch();
                        $pendingCount = $row['pending_count'] ?? 0;
                        ?>
                        <p><?php echo $pendingCount; ?> </p>
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
                      <h3 class='card-title'>Checked-up Patients</h3>
                      <div class="card-right d-flex align-items-center">
                        <?php
                        $sql = "SELECT COUNT(*) as chkup_count FROM tbl_patient_complaint WHERE patient_status = 'Checked Up'";
                        $result = $db->prepare($sql);
                        $result->execute();
                        $row = $result->fetch();
                        $chkup_count = $row['chkup_count'] ?? 0;
                        ?>
                        <p><?php echo $chkup_count; ?></p>
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
                      <h3 class='card-title'>Total Patients</h3>
                      <div class="card-right d-flex align-items-center">
                        <?php
                        $sql = "SELECT COUNT(*) as count FROM tbl_patient_complaint";
                        $result = $db->prepare($sql);
                        $result->execute();
                        $row = $result->fetch();
                        $Count = $row['count'] ?? 0;
                        ?>
                        <p><?php echo $Count; ?></p>
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
                          <select class="form-control" id="yr-complaint" onchange="updateComplaintData()">
                            <option value="2024">2024</option>
                            <option value="2023">2023</option>
                            <option value="2022">2022</option>
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
                            <option value="All">All</option>
                            <option value="1">January</option>
                            <option value="2">February</option>
                            <option value="3">March</option>
                            <option value="4">April</option>
                            <option value="5">May</option>
                            <option value="6">June</option>
                            <option value="7">July</option>
                            <option value="8">August</option>
                            <option value="9">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
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
                            <option value="All">All</option>
                            <option value="1">January</option>
                            <option value="2">February</option>
                            <option value="3">March</option>
                            <option value="4">April</option>
                            <option value="5">May</option>
                            <option value="6">June</option>
                            <option value="7">July</option>
                            <option value="8">August</option>
                            <option value="9">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
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

      <?php include("footer.php"); ?>
      <script src="assets/vendors/apexcharts/apexcharts.min.js"></script>
      <!-- <script src="assets/js/pages/ui-apexchart.js"></script> -->

      <script>
        function updateComplaintData() {

          location.href = "dashboard_main.php?year=" + $('#yr-complaint').val();
        }

        <?php
        if (isset($_GET['year'])) {
          $year = $_GET['year'];
          $sql = "SELECT * FROM tbl_patient_complaint WHERE YEAR(date_complaint)= ?";
          $result = $db->prepare($sql);
          $result->execute(array($year));
          $output = '';
          $data = array();
          $categories = array();
          for ($i = 0; $row = $result->fetch(); $i++) {
            // Process the data as needed
            // $output .= '<p>' . $row['complaint'] . '</p>';
          }
          // echo $output;
          echo "$('#yr-complaint').val(" . $year . ");";

          //exit;
        }

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

        <?php
        //   SELECT count(p.date_time_entry) as month_count, m.month_abbr from tbl_patient_complaint as p RIGHT JOIN tbl_months as m on m.month_name = MONTHNAME(p.date_time_entry) GROUP BY m.month_abbr; 
        $sql = " SELECT count(c.employee_id) as total_patient, d.lastname, d.firstname, d.middle, d.designation 
     FROM `tbl_patient_complaint` as c 
     LEFT OUTER JOIN tbl_emp_and_doctor as d on c.employee_id = d.employee_id 
     GROUP BY c.employee_id";

        $result = $db->prepare($sql);
        $result->execute(array());
        $data = array();
        $categories = array();
        $count_patient = array();
        $doctor = array();
        $total_doc = 0;

        for ($i = 0; $row = $result->fetch(); $i++) {
          array_push($count_patient, $row[0]);
          array_push($doctor, 'Dr. ' . $row[1] . ', ' . $row[2] . ' ' . $row[3]);
          $total_doc += 1;


        }


        ?>
        var options = {
          series: <?php echo json_encode($count_patient); ?>,

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
                  formatter: function (val) {
                    return parseInt(val)


                  }
                },
                total: {
                  show: true,
                  label: 'Total Doctors',
                  formatter: function (w) {
                    // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
                    return <?php echo $total_doc; ?>

                  }
                }
              }
            }
          },
          labels: <?php echo json_encode($doctor); ?>
        };

        var chart = new ApexCharts(document.querySelector("#doctors"), options);
        chart.render();
      </script>
</body>

</html>