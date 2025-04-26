<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="assets/calendar/css/style.css">

<?php include("head.php");


if (isset($_SESSION['ID'])) {

    if ($_SESSION['user_level'] == "Administrator") {


        header("Location: dashboard-admin.php");
        exit();
    } elseif ($_SESSION['user_level'] == "Nurse") {
        header("Location: manage_patient.php");
        exit();

    }

}


?>


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
                        A dashboard for doctor</p>
                </div>
                <section class="section">
                    <div class="row mb-2">
                        <div class="col-12 col-md-4">
                            <div class="card card-statistic">
                                <div class="card-body p-0">
                                    <div class="d-flex flex-column">
                                        <div class='px-3 py-3 d-flex justify-content-between'>
                                            <h3 class='card-title'>Pending Patients <br>Today</h3>
                                            <div class="card-right d-flex align-items-center">
                                                <?php
                                                $sql = "SELECT COUNT(*) as pending_count FROM tbl_patient_complaint WHERE patient_status = 'Pending' AND DATE(date_time_entry) = CURDATE()";
                                                $result = $db->prepare($sql);
                                                $result->execute();
                                                $row = $result->fetch();
                                                $pendingCount = $row['pending_count'] ?? 0;
                                                ?>
                                                <p><?php echo $pendingCount; ?></p>
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
                                            <h3 class='card-title'>Checked-up Patients <br>Today</h3>
                                            <div class="card-right d-flex align-items-center">
                                                <?php
                                                $sql = "SELECT COUNT(*) as chkup_count  FROM tbl_patient_complaint WHERE patient_status = 'Checked Up' AND DATE(date_time_entry) = CURDATE()";
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
                                            <h3 class='card-title'>Over-All - Total Checked-up</h3>
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
                                            <canvas id="canvas3" style="height:100px !important"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row mb-4">
                        <?php include('doctor-modal.php'); ?>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="row">
                                    <div class="card-header col-md-4">
                                        <h3 class='card-heading p-1 pl-3'>Welcome! Doctor <?php echo $fullname; ?></h3>

                                        <p class="text-subtitle text-muted p-1 pl-3">Profession:
                                            <?php echo $designation; ?>
                                            <br>
                                            Address: <?php echo $address; ?>
                                            <br>
                                            Clinic: <?php echo $clinic; ?>
                                            <br>
                                            Clinic Address: <?php echo $caddress; ?>
                                        </p>
                                        <hr>
                                        <p class="text-subtitle text-muted p-1 pl-3">
                                            Current Duty: Marinduque Provincial Hospital
                                            <br>
                                            Hospital Duty Address: Santol Boac Marinduque
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card-header ">

                                            <div class="row">

                                                <div class="col-md-12">
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
                                            <div id="doctor"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">


                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="calendar calendar-first" id="calendar_first">
                                                    <div class="calendar_header">
                                                        <button class="switch-month switch-left"> <i
                                                                class="fa fa-chevron-left"></i></button>
                                                        <h2></h2>
                                                        <button class="switch-month switch-right"> <i
                                                                class="fa fa-chevron-right"></i></button>
                                                    </div>
                                                    <div class="calendar_weekdays"></div>
                                                    <div class="calendar_content"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-md-7">
                                            <h3 class='card-heading p-1 pl-3'>Schedule</h3>

                                            <div class="table-responsive">
                                                <table class="table mb-0" id="table1">
                                                    <thead>
                                                        <tr class="bg-info text-white">
                                                            <th>#</th>
                                                            <th>Day</th>
                                                            <th>Date</th>
                                                            <th>In</th>
                                                            <th>Out</th>
                                                            <th>Room</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php




                                                        $sql = "SELECT * FROM tbl_doctor_sched WHERE employee_id =?";
                                                        //$ScheduleOutput
                                                        $output = '';

                                                        $result = $db->prepare($sql);
                                                        $result->execute(array($_SESSION['employee_id']));
                                                        $j = 0;
                                                        for ($i = 0; $row = $result->fetch(); $i++) {
                                                            $j = $i + 1;
                                                            $output .= '<tr><td>' . $j . '</td>
														
								
															<td>Monday</td>
															<td>' . $row[3] . '</td>
															<td>' . $row[4] . '</td>
															<td>' . $row[5] . '</td>
															<td>' . $row[6] . '</td>
															</tr>';

                                                        }
                                                        echo $output;
                                                        $j = 0;
                                                        ?>


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <h3 class='card-heading p-1 pl-3'>Patient line-up</h3>

                                                </div>
                                                <div class="col-md-4">
                                                    <button class="btn btn-info" data-toggle="modal"
                                                        data-target="#modal_fullscreen">Full Screen </button>
                                                </div>
                                            </div>
                                            <table class="table mb-0" id="table1">
                                                <thead>
                                                    <tr class="bg-success text-white">
                                                        <th>#</th>
                                                        <th>Full Name</th>
                                                        <th>Complaint</th>
                                                        <th>Action</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $sql = "SELECT q.queue_id, CONCAT(p.firstname, ' ', p.middle, ' ', p.lastname) as fullname, 
                                                            c.chief_complaint
                                                            FROM tbl_queue as q 
                                                            LEFT OUTER JOIN tbl_patient_info as p ON p.patient_id = q.patient_id 
                                                            LEFT OUTER JOIN tbl_patient_complaint as c ON p.patient_id = c.patient_id 
                                                            WHERE q.employee_id = ? AND q.status = ? 
                                                            GROUP BY c.complaint_id 
                                                            ORDER BY q.datetime_queue DESC;";
                                                    $result = $db->prepare($sql);
                                                    $result->execute(array($_SESSION['employee_id'], 'Pending'));
                                                    $output = '';
                                                    $j = 0;
                                                    for ($i = 0; $row = $result->fetch(); $i++) {
                                                        $j = $i + 1;
                                                        $output .= '<tr><td>' . $j . '</td>
                                                                    <td>' . $row[1] . '</td>
                                                                    <td>' . $row[2] . '</td>
                                                                    <td><button class="btn btn-sm btn-success" data-toggle="modal" data-target="#patient_history">Details</button></td>
                                                                    </tr>';
                                                    }
                                                    echo $output;
                                                    ?>
                                                </tbody>
                                            </table>

                                            <h3 class='card-heading p-1 pl-3 mt-4'>Patient Checked Up</h3>
                                            <table class="table mb-0" id="table2">
                                                <thead>
                                                    <tr class="bg-primary text-white">
                                                        <th>#</th>
                                                        <th>Full Name</th>

                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $sql = "SELECT q.queue_id, CONCAT(p.firstname, ' ', p.middle, ' ', p.lastname) as fullname, 
                                                            c.chief_complaint, c.diagnosis
                                                            FROM tbl_queue as q 
                                                            LEFT OUTER JOIN tbl_patient_info as p ON p.patient_id = q.patient_id 
                                                            LEFT OUTER JOIN tbl_patient_complaint as c ON p.patient_id = c.patient_id 
                                                            WHERE q.employee_id = ? AND q.status = ? 
                                                            GROUP BY c.complaint_id 
                                                            ORDER BY q.datetime_queue DESC;";
                                                    $result = $db->prepare($sql);
                                                    $result->execute(array($_SESSION['employee_id'], 'Checked Up'));
                                                    $output = '';
                                                    $j = 0;
                                                    for ($i = 0; $row = $result->fetch(); $i++) {
                                                        $j = $i + 1;
                                                        $output .= '<tr><td>' . $j . '</td>
                                                                    <td>' . $row[1] . '</td>
                                                                    <td><button class="btn btn-sm btn-primary">View</button></td>
                                                                    </tr>';
                                                    }
                                                    echo $output;
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
            </div>
            <script src="assets/calendar/js/jquery.min.js"></script>
            <script src="assets/calendar/js/popper.js"></script>
            <script src="assets/calendar/js/main.js"></script>

            <?php include("footer.php"); ?>

            <script src="assets/vendors/apexcharts/apexcharts.min.js"></script>
            <script src="assets/js/pages/ui-apexchart.js"></script>

            <script>
                <?php
                // SQL queries to count patient statuses
                $sql_pending = "SELECT COUNT(*) as pending_count FROM tbl_patient_complaint WHERE patient_status = 'Pending'";
                $sql_checked_up = "SELECT COUNT(*) as checked_up_count FROM tbl_patient_complaint WHERE patient_status = 'Checked Up'";
                $sql_not_checked_up = "SELECT COUNT(*) as not_checked_up_count FROM tbl_patient_complaint WHERE patient_status = 'Not Checked Up'";

                // Execute queries
                $result_pending = $db->prepare($sql_pending);
                $result_pending->execute();
                $pending_count = $result_pending->fetch()['pending_count'] ?? 0;

                $result_checked_up = $db->prepare($sql_checked_up);
                $result_checked_up->execute();
                $checked_up_count = $result_checked_up->fetch()['checked_up_count'] ?? 0;

                $result_not_checked_up = $db->prepare($sql_not_checked_up);
                $result_not_checked_up->execute();
                $not_checked_up_count = $result_not_checked_up->fetch()['not_checked_up_count'] ?? 0;
                ?>

                var options = {
                    series: [<?php echo $checked_up_count; ?>, <?php echo $pending_count; ?>, <?php echo $not_checked_up_count; ?>],
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
                                        return <?php echo $checked_up_count + $pending_count + $not_checked_up_count; ?>;
                                    }
                                }
                            }
                        }
                    },
                    labels: ['Checked Up', 'Pending Patients', 'Total Patients'],
                };

                var chart = new ApexCharts(document.querySelector("#doctor"), options);
                chart.render();


                var pname = "",
                    page = "",
                    pgender = "",
                    paddr = "",
                    fullname = "",
                    license = "",
                    ptr = "";

                function getPrescInfo(spname, spage, spgender, spaddr, sfullname, slicense, sptr) {
                    alert(pname + " " + page + " " + pgender + " " + paddr + " " + fullname + " " + license + " " + ptr);

                    //alert(pname+" "+page+" "+pgender+" "+paddr+" "+fullname+" "+license+" "+ptr);
                    //window.location.href = "./prescriptions/presc.php?pname="+pname+"&page="+page+"&pgender="+pgender+"&paddr="+paddr+"&fullname="+fullname+"&license="+license+"&ptr="+ptr;{
                    pname = spname;
                    page = spage;
                    pgender = spgender;
                    paddr = spaddr;
                    fullname = sfullname;
                    license = slicense;
                    ptr = sptr;
                }
            </script>
</body>

</html>