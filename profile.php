<!DOCTYPE html>
<html lang="en">
<?php include("head.php"); ?>

<body>
    <div id="app">

        <div id="main">
            <?php include("nav.php"); ?>

            <div class="main-content container-fluid">

                <div class="page-title bg-primary">
                    <h3 class="text-white" style="padding-left:20px;padding-top:20px;">Profile</h3>
                    <p class="text-subtitle  text-white" style="padding-left:20px;padding-bottom:20px;">
                        Update your profile</p>
                </div>
                <section class="section">
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <div class="card ">
                                <div class="card-body">
                                    <?php
                                    include("std-pages-template/profile-inputs.php")
                                        ?>

                                </div>
                            </div>

                        </div>


                    </div>

                </section>
            </div>
            <?php include("footer.php"); ?>
            <script>
                loadFile = function (event) {
                    var output = document.getElementById('output');
                    output.src = URL.createObjectURL(event.target.files[0]);
                };

                function SaveRecord() {
                    const data = {
                        update_profile: true,
                        puemployee_id: '<?php echo $_SESSION['employee_id']; ?>',
                        pulastname: document.getElementById('lastname').value,
                        pufirstname: document.getElementById('firstname').value,
                        pumiddle: document.getElementById('middle').value,
                        pudesignation: '<?php echo $designation; ?>',
                        pugender: '<?php echo $gender; ?>',
                        puaddress: '<?php echo $address; ?>',
                        puusername: document.getElementById('username').value,
                        pupassword: document.getElementById('password').value,
                        puclinic_id: '<?php echo $clinic; ?>',
                        puprofession: document.getElementById('profession') ? document.getElementById('profession').value : '',
                        pulicense_num: document.getElementById('license_num') ? document.getElementById('license_num').value : '',
                        puclinic_name: document.getElementById('clinic_name') ? document.getElementById('clinic_name').value : '',
                        puclinic_address: document.getElementById('clinic_address') ? document.getElementById('clinic_address').value : '',
                        puclinic_contact: document.getElementById('contact') ? document.getElementById('contact').value : '',
                        puclinic_ptr: document.getElementById('ptr') ? document.getElementById('ptr').value : ''
                    };

                    $.post('./functions/functions.php', data, function (response) {
                        alert(response);
                        location.reload();
                    });
                }
            </script>
</body>

</html>