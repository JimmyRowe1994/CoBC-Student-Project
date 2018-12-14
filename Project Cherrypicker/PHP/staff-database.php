<?php

require("database-connection.php");?>

<!DOCTYPE html>
<html>

	<head>

		<title>Project Cherrypicker</title>

		<!-- Bootstrap & CSS -->
		<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<link rel = "stylesheet" href = "../CSS/home-page.css">
		<link rel = "stylesheet" href = "../CSS/sidebar.css">

	</head>

	<body>

		<div class = "row reduce-margin">

			<!-- Sidebar -->
			<div class = "col-md-2">

				<div class = "container-fluid">

					<?php include ("sidebar.php");?>

				</div>

			</div>

			<!-- Main Content -->
			<div class = "col-md-10">

				<div class = "container-fluid margin">

					<!-- Banner Display -->
					<div class = "jumbotron">

						<h3>STAFF DATABASE</h3>

						<p>To view a member of staff's profile in detail, click their Staff ID number.</p>

						<?php

							//Select all data from table "students"
							$SQL = "SELECT * FROM staff";

							$Result = $Conn->query($SQL);

							if ($Result->num_rows > 0) {

								echo
						        	"<table border = '2' cellpadding = '10'><tr>
						        	<th>Staff ID</th>
						        	<th>First Name</th>
						        	<th>Last Name</th>
						        	<th>Course</th>
						        	<th>Department</th>
						        	<th>Number of Students</th>
						        	<th>Campus</th>
						        	<th>Level</th>
						        	<th>A Cherries</th>
						        	<th>B Cherries</th>
						        	<th>C Cherries</th>
						        	</tr>";

						    	// output data of each row
						    	while($Row = $Result->fetch_assoc()) {

						    		$staff_id = $Row["staff_id"];

						    		echo "<tr>
						    				<td><a href = '#' style = 'display: block' id = $staff_id onclick = 'myFunction(this.id)'>".$Row["staff_id"]."</a></td>
						    				<td>".$Row["forename"]."</td>
						    				<td>".$Row["surname"]."</td>
						    				<td>".$Row["course"]."</td>
						    				<td>".$Row["department"]."</td>
						    				<td>".$Row["number_of_students"]."</td>
						    				<td>".$Row["campus"]."</td>
						    				<td>".$Row["level"]."</td>
						    				<td>".$Row["a_cherries_complete"]."/10</td>
						    				<td>".$Row["b_cherries_complete"]."/25</td>
						    				<td>".$Row["c_cherries_complete"]."/25</td>
						    			 </tr>";
						    			 
						    	}

						    	echo "</table>";
							}

							else {
						    
						    	echo "0 results";
							}

						?>

					</div>

				</div>

			</div>

		</div>

		<script>

			function myFunction(staff_id) {

				window.location.href = "staff-page.php?&staff_id="+staff_id;
			}

		</script>

	</body>

</html>