<?php
									echo "
									<table border = '2' cellpadding = '10'>
						        	<tr>
						        	<th>Student ID</th>
						        	<th>First Name</th>
						        	<th>Last Name</th>
						        	<th>Date of Birth</th>
						        	<th>Course</th>
						        	<th>Department</th>
						        	<th>Campus</th>
						        	<th>Level</th>
						        	<th>Tutor</th>
						        	</tr>";

						    	// output data of each row
						    	while($Row = $Result->fetch_assoc()) {

						    		$student_id = $Row["student_id"];

						    		echo "<tr>
						    				<td><a href = '#' style = 'display: block' id = $student_id onclick = 'myFunction(this.id)'>".$Row["student_id"]."</a></td>
						    				<td>".$Row["forename"]."</td>
						    				<td>".$Row["surname"]."</td>
						    				<td>".$Row["dob"]."</td>
						    				<td>".$Row["course"]."</td>
						    				<td>".$Row["department"]."</td>
						    				<td>".$Row["campus"]."</td>
						    				<td>".$Row["level"]."</td>
						    				<td>".$Row["tutor"]."</td>
						    			 </tr>";


						    	}

						    	echo "</table>";
?>