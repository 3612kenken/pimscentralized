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
            </script>
</body>

</html>