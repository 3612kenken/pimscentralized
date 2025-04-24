<div class="table-responsive">
	<table id="logTable" class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>Date</th>
				<th>Time</th>
				<th>Full Name</th>
				<th>Purpose/Description</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$db = new PDODatabase;

			$sql = "SELECT ul.*, CONCAT(e.firstname, ' ', e.middle, ' ', e.lastname) AS fullname 
                    FROM users_log AS ul 
                    LEFT OUTER JOIN tbl_users AS u ON ul.user_id = u.user_id 
                    LEFT OUTER JOIN tbl_emp_and_doctor AS e ON e.employee_id = u.employee_id;";
			$output = '';

			$result = $db->prepare($sql);
			$result->execute(array());
			$j = 0;
			for ($i = 0; $row = $result->fetch(); $i++) {
				$j = $i + 1;
				$output .= '<tr>
                    <td>' . $j . '</td>
                    <td class="font-weight-600">' . $row[1] . '</td>
                    <td>' . $row[2] . '</td>
                    <td>' . $row[5] . '</td>
                    <td>' . $row[3] . '</td>
                    <td>
                        <a href="#" class="btn btn-danger btn-sm" onclick="DeleteData(&#39;' . $row[0] . '&#39;, &#39;idlog&#39;, 0);">Delete</a>
                    </td>
                </tr>';
			}

			echo $output;
			?>
		</tbody>
	</table>
</div>

<script>
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