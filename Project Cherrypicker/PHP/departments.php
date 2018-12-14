<?php require("database-connection.php");

	

?>

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

						<form method = "POST" name = "SortByForm">

							<span><input type = "submit" value = "Sort by First Name" name = "btnSortName" style = "float: right;"></span>
							<span><input type = "submit" value = "Sort by ID" name = "btnSortID" style = "float: right; margin-right: 10px;"></span>

						</form>

						<h3>DEPARTMENTS</h3>

						<p>To view a profile, click their ID number.</p>

						<?php

							echo "<h3>Maths - Level 1</h3>";

							$subject = "Maths";
							$level = '1';

							include("order-by.php");

							$Result = $Conn->query($SQL);

							if ($Result->num_rows > 0) {

								include("make-table.php");
						        	
							}

							else {
						    
						    	echo "0 results";
							}

							echo "<br><br>";

							echo "<h3>Maths - Level 2</h3>";

							$subject = "Maths";
							$level = '2';

							include("order-by.php");

							$Result = $Conn->query($SQL);

							if ($Result->num_rows > 0) {

								include("make-table.php");
						        	
							}

							else {
						    
						    	echo "0 results";
							}

							echo "<br><br>";

							echo "<h3>Maths - Level 3</h3>";

							$subject = "Maths";
							$level = '3';

							include("order-by.php");

							$Result = $Conn->query($SQL);

							if ($Result->num_rows > 0) {

								include("make-table.php");
						        	
							}

							else {
						    
						    	echo "0 results";
							}

							echo "<br><br>";

							echo "<h3>English - Level 1</h3>";

							$subject = "English";
							$level = '1';

							include("order-by.php");

							$Result = $Conn->query($SQL);

							if ($Result->num_rows > 0) {

								include("make-table.php");
						        	
							}

							else {
						    
						    	echo "0 results";
							}

							echo "<br><br>";

							echo "<h3>English - Level 2</h3>";

							$subject = "English";
							$level = '2';

							include("order-by.php");

							$Result = $Conn->query($SQL);

							if ($Result->num_rows > 0) {

								include("make-table.php");
						        	
							}

							else {
						    
						    	echo "0 results";
							}

							echo "<br><br>";

							echo "<h3>English - Level 3</h3>";

							$subject = "English";
							$level = '3';

							include("order-by.php");

							$Result = $Conn->query($SQL);

							if ($Result->num_rows > 0) {

								include("make-table.php");
						        	
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