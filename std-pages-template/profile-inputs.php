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

  <div class="form-group">
    <label>Gender</label>
    <select id="gender" class="form-control" name="gender">
      <option disabled selected>--Select Gender--</option>
      <option value="Male" <?php echo ($gender == 'Male') ? 'selected' : ''; ?>>Male</option>
      <option value="Female" <?php echo ($gender == 'Female') ? 'selected' : ''; ?>>Female</option>
      <option value="Non Binary" <?php echo ($gender == 'Non Binary') ? 'selected' : ''; ?>>Non Binary</option>
    </select>
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
    <input type="password" id='retype_password' value="<?php echo $_SESSION['password']; ?>" class="form-control">
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
      <input type="text" id='profession' value='<?php echo $designation; ?>' class="form-control">
    </div>
    <div class="form-group">
      <label>License Number</label>
      <input type="text" id='license_num' value="<?php echo $license; ?>" class="form-control">
    </div>
    <div class="form-group">
      <label>Clinic Name</label>
      <input type="text" id='clinic_name' value="<?php echo $clinicname; ?>" class="form-control">
    </div>
    <div class="form-group">
      <label>Clinic Address</label>
      <textarea id='clinic_address' class="form-control"><?php echo $caddress; ?></textarea>
    </div>
    <div class="form-group">
      <label>Contact Number</label>
      <input type="text" id='contact' value="<?php echo $contact; ?>" class="form-control">
    </div>
    <div class="form-group">
      <label>PTR</label>
      <input type="text" id='ptr' value="<?php echo $ptr; ?>" class="form-control">
    </div>
    <?php
    echo ' <div class="card-footer text-right">
      <button class="btn btn-success btn-lg" onclick="SaveRecord();"><i class="fa fa-save"></i> Update Profile</button>
    </div>';
  }
  ?>
</div>

<div class="table-responsive">
  <table class="table table-striped" id="profileInputsTable">
    <thead class="bg-primary text-white">
      <tr>
        <th>#</th>
        <th>Input Name</th>
        <th>Input Type</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * FROM tbl_profile_inputs";
      $result = $db->prepare($sql);
      $result->execute();
      $j = 0;
      while ($row = $result->fetch()) {
        $j++;
        echo '<tr>
                    <td>' . $j . '</td>
                    <td>' . $row['input_name'] . '</td>
                    <td>' . $row['input_type'] . '</td>
                    <td>
                        <button class="btn badge bg-primary">Edit</button>
                        <button class="btn badge bg-danger">Delete</button>
                    </td>
                </tr>';
      }
      ?>
    </tbody>
  </table>
</div>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const profileInputsTable = document.querySelector('#profileInputsTable');
    if (profileInputsTable) {
      new simpleDatatables.DataTable(profileInputsTable, {
        searchable: true,
        fixedHeight: true,
        perPage: 10
      });
    }
  });
</script>

<script>

</script>
</div>
</div>