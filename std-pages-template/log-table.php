<div class="table-responsive">
                        <table class="table table-bordered table-md">
						
                        <tr>
                            <th>#</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Full Name</th>
                            <th>Purpose/Description</th>
                            <th>Action</th>
                        </tr>
                     
                        <tbody>
						<?php
						$db = new PDODatabase;

						$sql = "Select ul.*, CONCAT(e.firstname, ' ', e.middle, ' ', e.lastname ) as fullname From users_log as ul LEFT OUTER JOIN tbl_users as u on ul.user_id = u.user_id LEFT OUTER JOIN tbl_emp_and_doctor as e on e.employee_id  = u.employee_id ;";
						//$ScheduleOutput
						$output='';
						
						$result = $db->prepare($sql);
						$result->execute(array());
						$j=0;
							for($i=0; $row = $result->fetch(); $i++){
								$j=$i+1;
								$output .='<tr><td>'.$j.'</td>
								<td class="font-weight-600">'.$row[1].'</td>
								
							
								<td>'.$row[2].'</td>
								<td>'.$row[5].'</td>
								<td>'.$row[3].'</td>
								<td> <a href="#" class="btn btn-danger" onclick="DeleteData(&#39;'.$row[0].'&#39;, &#39;idlog&#39;,0);">Delete</a></td>
								</tr>';
							}	
						
							echo $output;
							$j =0;
						?>
                        </tbody>
						
						
						</table>