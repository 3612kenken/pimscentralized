<!DOCTYPE html>
<html lang="en">
<?php include("head.php"); ?>

<body>
    <div id="app">

        <div id="main">
            <?php include("nav.php"); ?>

            <div class="main-content container-fluid">

                <div class="page-title bg-primary">
                    <h3 class="text-white" style="padding-left:20px;padding-top:20px;">User's Maintenance</h3>
                    <p class="text-subtitle  text-white" style="padding-left:20px;padding-bottom:20px;">
                        Add and update users</p>
                </div>
                <section class="section">
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <div class="card ">

                                <div class="card-body">
                                    <?php
                                    include("std-pages-template/user-inputs.php");
                                    ?>

                                </div>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Add Employee/Doctor</h4>
                                </div>
                                <div class="card-body">
                                    <form id="addEmployeeForm">
                                        <div class="row">
                                            <div class="input-group mb-3" style="display: none;">
                                                <span class="input-group-text" id="basic-addon1"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-search">
                                                        <circle cx="11" cy="11" r="8"></circle>
                                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                                    </svg></span>
                                                <input type="text" class="form-control" placeholder="Search Doctor"
                                                    aria-label="Patient " aria-describedby="button-addon2">

                                                <button class="btn btn-primary" type="button"
                                                    id="button-addon2">Search</button>

                                            </div>

                                        </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class='table table-striped table-bordered' id="usersTable">
                                            <thead>
                                                <tr>
                                                    <th>Last Name</th>
                                                    <th>First Name</th>
                                                    <th>Middle Name</th>
                                                    <th>Designation</th>
                                                    <th>Address</th>
                                                    <th>User Name</th>
                                                    <th>Password</th>
                                                    <th>User Level</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="usersTableBody">
                                                <?php
                                                $db = new PDODatabase();
                                                $sql = "SELECT u.user_name, u.password, u.user_level, e.lastname, e.firstname, e.middle, e.designation, e.address, u.user_id 
                                                        FROM tbl_users AS u 
                                                        LEFT JOIN tbl_emp_and_doctor AS e ON u.employee_id = e.employee_id";
                                                $result = $db->prepare($sql);
                                                $result->execute();
                                                $output = '';
                                                $j = 0;

                                                while ($row = $result->fetch()) {
                                                    $j++;
                                                    $output .= '<tr>
                                                        <td>' . $row['lastname'] . '</td>
                                                        <td>' . $row['firstname'] . '</td>
                                                        <td>' . $row['middle'] . '</td>
                                                        <td>' . $row['designation'] . '</td>
                                                        <td>' . $row['address'] . '</td>
                                                        <td>' . $row['user_name'] . '</td>
                                                        <td>****</td>
                                                        <td>' . $row['user_level'] . '</td>
                                                        <td>
                                                            <button class="btn badge bg-primary" onclick="EditUser(\'' . $row['user_id'] . '\')"> <i class="fa fa-edit"></i></button>
                                                            <button class="btn badge bg-danger" onclick="DeleteUser(\'' . $row['user_id'] . '\')"> <i class="fa fa-trash"></i></button>
                                                        </td>
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

                </section>
            </div>
            <?php include("footer.php"); ?>
            <script>
                $(document).ready(function () {
                    $('#usersTable').DataTable({
                        "paging": true,
                        "lengthChange": true,
                        "searching": true,
                        "ordering": true,
                        "info": true,
                        "autoWidth": false,
                        "responsive": true
                    });
                });

                function EditUser(userId) {
                    alert("Edit user with ID: " + userId);
                    // Add your edit logic here
                }

                function DeleteUser(userId) {
                    if (confirm("Are you sure you want to delete this user?")) {
                        $.post("./functions/functions.php", { deleteID: userId })
                            .done(function (data) {
                                alert(data);
                                location.reload(); // Reload the page to reflect changes
                            });
                    }
                }
            </script>
</body>

</html>