<?php require("database-connection.php");?>

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

						<h3>STUDENT DATABASE</h3>

						<p>To view a student's profile, click their Student ID number.</p>

						<?php

							//Select all data from table "students"
							$SQL = "SELECT * FROM students";

							$Result = $Conn->query($SQL);

							if ($Result->num_rows > 0) {

								echo
						        	"<table border = '2' cellpadding = '10'><tr>
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

			function myFunction(student_id) {

				window.location.href = "student-page.php?&student_id="+student_id;
			}

		</script>

	</body>

</html>