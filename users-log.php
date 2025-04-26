<!DOCTYPE html>
<html lang="en">
<?php include("head.php"); ?>

<body>
    <div id="app">

        <div id="main">
            <?php include("nav.php"); ?>

            <div class="main-content container-fluid">

                <div class="page-title bg-primary">
                    <h3 class="text-white" style="padding-left:20px;padding-top:20px;">User's Log</h3>
                    <p class="text-subtitle  text-white" style="padding-left:20px;padding-bottom:20px;">
                        Log in information of the users</p>
                </div>
                <section class="section">
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <div class="card ">

                                <div class="card-body">

                                    <?php
                                    include("std-pages-template/log-table.php")
                                        ?>

                                </div>
                            </div>

                        </div>


                    </div>

                </section>
            </div>
            <?php include("footer.php"); ?>

            <script>
                function DeleteLog(logId) {
                    //if (confirm("Are you sure you want to delete this log?")) {
                    // Check if functions.php exists before making the request
                    $.get("./functions/functions.php")
                        .done(function () {
                            $.post("./functions/functions.php", { del_id: logId, del_indx: '171758c3f04b8aa77ea6892b5c4647492d271ab8' })
                                .done(function (response) {
                                    alert(response);
                                    location.reload(); // Reload the page to reflect changes
                                })
                                .fail(function () {
                                    alert("Failed to delete the log. Please try again.");
                                });
                        })
                        .fail(function () {
                            alert("Error: functions.php is missing or inaccessible.");
                        });
                    //}
                }

                $(document).ready(function () {
                    $('#logTable').DataTable({
                        "paging": true,
                        "lengthChange": true,
                        "searching": true,
                        "ordering": true,
                        "info": true,
                        "autoWidth": false,
                        "responsive": true
                    });
                });
            </script>
</body>

</html>