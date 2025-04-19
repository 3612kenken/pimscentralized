<div class="row" style="margin-left:10%;margin-right:10%;margin-top:50px;">
  <div class="col-md-4 text-center">
    <h4>Profile Picture</h4>



    <img class="border-gray" width="100%" src="https://cdn-icons-png.flaticon.com/128/149/149071.png" id='output'
      alt="..." width="300">
    <hr>
    <h5 class="title">Change User<br>
      <small>Profile Picture</small>
    </h5>
    <input onchange='loadFile(event);' style="display:none;" type='file' id='filename' />



    <label for='filename' class="btn btn-info">

      <span class="fa fa-upload"></span> Browse File</label>




  </div>

  <?php

  if ($designation != 'Doctor') {
    echo '<div class="col-md-6">';
  } else {
    echo '<div class="col-md-4">';
  }

  ?>

  <h4>Profile Information</h4>

  <div class="form-group">
    <label>ID Number</label>
    <input type="text" id='faculty_id' value='<?php echo $_SESSION['ID']; ?>' class="form-control" disabled>
  </div>

  <div class="form-group">
    <label>Last Name</label>
    <input type="text" id='lastname' value='<?php echo $lastname; ?>' class="form-control" required="">

  </div>

  <div class="form-group">
    <label>First Name</label>
    <input type="text" id='firstname' value='<?php echo $firstname; ?>' class="form-control" required="">

  </div>
  <div class="form-group">
    <label>Middle Name</label>
    <input type="text" id='middle' value='<?php echo $mi; ?>' class="form-control" required="">

  </div>

  <hr>
  <h5>User's Account</h5>
  <div class="form-group">
    <label>User Name</label>
    <input type="text" id='username' value='<?php echo $_SESSION['username']; ?>' class="form-control" required="">

  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" id='password' value='<?php echo $_SESSION['password']; ?>' class="form-control">

  </div>
  <div class="form-group">
    <label>Retype Password</label>
    <input type="password" id='password' value="<?php echo $_SESSION['password']; ?>" class="form-control">
  </div>
  <?php if ($designation != 'Doctor') {
    echo ' <div class="card-footer text-right">
       <button class="btn btn-success btn-lg" onclick="SaveRecord();"><i class="fa fa-save"></i> Update Profile</button>
     </div>';
  }
  ?>
</div>

<div class="col-md-4">
  <?php
  if ($designation == 'Doctor') {

    ?>
    <h5>Profession and Clinic</h5>
    <div class="form-group">
      <label>Profession</label>
      <input type="text" id='' value='<?php echo $designation; ?>' class="form-control">

    </div>
    <div class="form-group">
      <label>License Number</label>
      <input type="text" id='' value="<?php echo $license; ?>" class="form-control">

    </div>
    <div class="form-group">
      <label>Clinic Name</label>
      <input type="text" id='' value="<?php echo $clinicname; ?>" class="form-control">

    </div>
    <div class="form-group">
      <label>Clinic Address</label>
      <textarea id='' class="form-control"><?php echo $caddress; ?></textarea>

    </div>
    <div class="form-group">
      <label>Contact Number</label>
      <input type="text" id='' value="<?php echo $contact; ?>" class="form-control">

    </div>

    <?php

    echo ' <div class="card-footer text-right">
      <button class="btn btn-success btn-lg" onclick="SaveRecord();"><i class="fa fa-save"></i> Update Profile</button>
    </div>';

  }
  ?>


</div>



</div>
</div>