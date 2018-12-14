<?php

		include("save-cherries.php");

		// Get the Student ID from the previous page and set it in a variable
		$student_id = $_GET['student_id'];

		//Variables
		$Servername = 'localhost';
		$MySQLUser = 'root';
		$MySQLPass = '';
		$Database = "project_cherrypicker";

		//Connect to the database.
		$Conn = new mysqli($Servername, $MySQLUser, $MySQLPass, $Database);

		//If there was a connection error, kill the connection and display error message.
		if ($Conn->connect_error)
		{
			die("Connection failed: " . $Conn->connect_error);
		}

		// Get everything from the table row that matches the student ID that was clicked on the previous page.
		$SQL = "SELECT * FROM students WHERE student_id = '$student_id'";
		
		$Result = $Conn->query($SQL);

		while($row = $Result->fetch_assoc())
		{
			$student_name = $row["forename"] . " " . $row["surname"];
			$student_qualification_code = $row['qualification_code'];
			$student_grade = $row['grade'];
			$student_test_date = $row['test_date'];
			$cherries = array(
				$student_cherry_a1 = $row['cherry_a1'],
				$student_cherry_b1 = $row['cherry_b1'],
				$student_cherry_b2 = $row['cherry_b2'],
				$student_cherry_b3 = $row['cherry_b3'],
				$student_cherry_b4 = $row['cherry_b4'],
				$student_cherry_c1 = $row['cherry_c1'],
				$student_cherry_c2 = $row['cherry_c2'],
				$student_cherry_c3 = $row['cherry_c3'],
				$student_cherry_c4 = $row['cherry_c4'],
				$student_cherry_c5 = $row['cherry_c5'],
				$student_cherry_c6 = $row['cherry_c6'],
				$student_cherry_c7 = $row['cherry_c7'],
				$student_cherry_c8 = $row['cherry_c8'],
				$student_cherry_c9 = $row['cherry_c9'],
				$student_cherry_c10 = $row['cherry_c10'],
				$student_cherry_c11 = $row['cherry_c11'],
				$student_cherry_c12 = $row['cherry_c12']
			);
			$i = 0;

			foreach($cherries as $cherry)
			{
				if($cherries[$i] > 0)
				{
					$cherries[$i] = "green";
				}

				else
				{
					$cherries[$i] = "red";
				}

				$i++;
			}
		}

		$sql = "SELECT * FROM cherries WHERE subject = 'Maths - Level 1'";
		$result = $Conn->query($sql);
		while($row = $result->fetch_assoc())
		{
			$cherry_a1_name = $row['cherry_a1_name'];
			$cherry_a1_description = $row['cherry_a1_desc'];
			$cherry_b1_name = $row['cherry_b1_name'];
			$cherry_b1_description = $row['cherry_b1_desc'];
			$cherry_b2_name = $row['cherry_b2_name'];
			$cherry_b2_description = $row['cherry_b2_desc'];
			$cherry_b3_name = $row['cherry_b3_name'];
			$cherry_b3_description = $row['cherry_b3_desc'];
			$cherry_c1_name = $row['cherry_c1_name'];
			$cherry_c1_description = $row['cherry_c1_desc'];
			$cherry_c2_name = $row['cherry_c2_name'];
			$cherry_c2_description = $row['cherry_c2_desc'];
			$cherry_c3_name = $row['cherry_c3_name'];
			$cherry_c3_description = $row['cherry_c3_desc'];
			$cherry_c4_name = $row['cherry_c4_name'];
			$cherry_c4_description = $row['cherry_c4_desc'];
			$cherry_c5_name = $row['cherry_c5_name'];
			$cherry_c5_description = $row['cherry_c5_desc'];
			$cherry_c6_name = $row['cherry_c6_name'];
			$cherry_c6_description = $row['cherry_c6_desc'];
			$cherry_c7_name = $row['cherry_c7_name'];
			$cherry_c7_description = $row['cherry_c7_desc'];
			$cherry_c8_name = $row['cherry_c8_name'];
			$cherry_c8_description = $row['cherry_c8_desc'];
			$cherry_c9_name = $row['cherry_c9_name'];
			$cherry_c9_description = $row['cherry_c9_desc'];
		}

		$Conn->close();

?>

<!DOCTYPE html>
<html>

	<head>

		<!-- Display the student id number in the title of the page -->
		<title><?php echo $student_id . " Profile"?></title>

		<!-- Bootstrap and CSS -->
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
			<div class = "col-md-10 student-page-header">

				<div class = "jumbotron">

					<h2><?php echo $student_name?></h2>

					<br>

					<div class = "container">

						<div>
							<p><b>Student ID: </b><?php echo $student_id?></p>
							<p><b>Qualification Code: </b><?php echo $student_qualification_code?></p>
							<p><b>Grade: </b><?php echo $student_grade?></p>
							<p><b>Date of Test: </b><?php echo $student_test_date?></p>		
						</div>

					</div>

				</div>

				<div class = "row">

					<div class = "col-md-12" style = "text-align: center;">

						<form method = "POST">

						<button name = "btnCherryA1" title = "<?php echo "$cherry_a1_description";?>" value = "Cherry A1" style = "margin-top: 0px; color: white; background-color: <?php echo $cherries[0];?>"><?php echo $cherry_a1_name;?></button>

						<div class = "row">

							<!-- CHERRY B1 -->
							<div class = "col-md-4" style = "text-align: center;">

									<button title = "<?php echo $cherry_b1_description;?>" style = "color: white; background-color: <?php echo $cherries[1];?>" name = "btnCherryB1"><?php echo $cherry_b1_name;?></button>

									<div class = "row">

										<div class = "col-md-4" style = "text-align: center;">

											<button style = "color: white; background-color: <?php echo $cherries[4];?>" name = "btnCherryC1" title = "<?php echo "$cherry_c1_description";?>"><?php echo $cherry_c1_name;?></button>

										</div>

										<div class = "col-md-4" style = "text-align: center;">

											<button style = "color: white; background-color: <?php echo $cherries[5];?>" name = "btnCherryC2" title = "<?php echo "$cherry_c2_description";?>"><?php echo $cherry_c2_name;?></button>

										</div>

										<div class = "col-md-4" style = "text-align: center;">

											<button style = "color: white; background-color: <?php echo $cherries[6];?>" name = "btnCherryC3" title = "<?php echo "$cherry_c3_description";?>"><?php echo $cherry_c3_name;?></button>

										</div>

									</div>

							</div>

							<!-- CHERRY B2 -->
							<div class = "col-md-4" style = "text-align: center;">

									<button style = "color: white; background-color: <?php echo $cherries[2];?>" name = "btnCherryB2" title = "<?php echo "$cherry_b2_description";?>"><?php echo $cherry_b2_name;?></button>


									<div class = "row">

										<div class = "col-md-4" style = "text-align: center;">

											<button style = "color: white; background-color: <?php echo $cherries[7];?>" name = "btnCherryC4" title = "<?php echo "$cherry_c4_description";?>"><?php echo $cherry_c4_name;?></button>

										</div>

										<div class = "col-md-4" style = "text-align: center;">

											<button style = "color: white; background-color: <?php echo $cherries[8];?>" name = "btnCherryC5" title = "<?php echo "$cherry_c5_description";?>"><?php echo $cherry_c5_name;?></button>

										</div>

										<div class = "col-md-4" style = "text-align: center;">

											<button style = "color: white; background-color: <?php echo $cherries[9];?>" name = "btnCherryC6" title = "<?php echo "$cherry_c6_description";?>"><?php echo $cherry_c6_name;?></button>

										</div>

									</div>

							</div>

							<!-- CHERRY B3 -->
							<div class = "col-md-4" style = "text-align: center;">

									<button style = "color: white; background-color: <?php echo $cherries[3];?>" name = "btnCherryB3" title = "<?php echo "$cherry_b3_description";?>"><?php echo $cherry_b3_name;?></button>


									<div class = "row">

										<div class = "col-md-4" style = "text-align: center;">

											<button style = "color: white; background-color: <?php echo $cherries[10];?>" name = "btnCherryC7" title = "<?php echo "$cherry_c7_description";?>"><?php echo $cherry_c7_name;?></button>

										</div>

										<div class = "col-md-4" style = "text-align: center;">

											<button style = "color: white; background-color: <?php echo $cherries[11];?>" name = "btnCherryC8" title = "<?php echo "$cherry_c8_description";?>"><?php echo $cherry_c8_name;?></button>

										</div>

										<div class = "col-md-4" style = "text-align: center;">

											<button style = "color: white; background-color: <?php echo $cherries[12];?>" name = "btnCherryC9" title = "<?php echo "$cherry_c9_description";?>"><?php echo $cherry_c9_name;?></button>

										</div>

									</div>

								</div>

							</div>

						</form>

						</div>

					</div>

				</div>

			</div>

		</div>

	</body>

</html>