<?php

	ini_set('max_input_vars', 100000000000000000);

    if(ISSET($_POST['submit'])) {

        $hostname = "localhost";
        $db_username = "root";
        $db_password = "";
        $database = "project_cherrypicker";

        $db_connection = mysqli_connect($hostname, $db_username, $db_password) or die ("Unable to connect to database." . mysqli_error($db_connection));

        mysqli_select_db($db_connection, $database) or die ("Unable to connect to database." . mysqli_error($db_connection));

        $db_choice = $_POST['database_choice'];
        
        $file = $_FILES['file']['tmp_name']; // 'tmp_name' IS ACTUALLY IMPORTANT!!! IT HAS TO BE 'tmp_name' SPECIFICALLY!!!
        $handle = fopen($file, "r");

        $count = 0;

        $skippedfirstline = false;

        while(($csvdata = fgetcsv($handle, 1000, ",")) !== FALSE) {

            if(!$skippedfirstline) {$skippedfirstline = true; continue;}

            switch($db_choice) {

            	case "students":

		            $student_id = $csvdata[0];
		            $forename = $csvdata[1];
		            $surname = $csvdata[2];
		            $dob = $csvdata[3];
		            $course = $csvdata[4];
		            $department = $csvdata[5];
		            $campus = $csvdata[6];
		            $level = $csvdata[7];
		            $tutor = $csvdata[8];
		            $qualification_code = $csvdata[9];
		            $grade = $csvdata[10];
		            $test_date = $csvdata[11];
		            $cherry_a1 = $csvdata[12];
		            $cherry_b1 = $csvdata[13];
		            $cherry_b2 = $csvdata[14];
		            $cherry_b3 = $csvdata[15];
		            $cherry_b4 = $csvdata[16];
		            $cherry_c1 = $csvdata[17];
		            $cherry_c2 = $csvdata[18];
		            $cherry_c3 = $csvdata[19];
		            $cherry_c4 = $csvdata[20];
		            $cherry_c5 = $csvdata[21];
		            $cherry_c6 = $csvdata[22];
		            $cherry_c7 = $csvdata[23];
		            $cherry_c8 = $csvdata[24];
		            $cherry_c9 = $csvdata[25];
		            $cherry_c10 = $csvdata[26];
		            $cherry_c11 = $csvdata[27];
		            $cherry_c12 = $csvdata[28];

		            $cherries = array($cherry_a1, $cherry_b1, $cherry_b2, $cherry_b3, $cherry_b4, $cherry_c1, $cherry_c2, $cherry_c3, $cherry_c4, $cherry_c5, $cherry_c6, $cherry_c7, $cherry_c8, $cherry_c9, $cherry_c10, $cherry_c11, $cherry_c12);

	            	$sql = "INSERT INTO students (student_id, forename, surname, dob, course, department, campus, level, tutor, qualification_code, grade, test_date, cherry_a1, cherry_b1, cherry_b2, cherry_b3, cherry_b4, cherry_c1, cherry_c2, cherry_c3, cherry_c4, cherry_c5, cherry_c6, cherry_c7, cherry_c8, cherry_c9, cherry_c10, cherry_c11, cherry_c12)
	            	VALUES ('$student_id', '$forename', '$surname', '$dob', '$course', '$department', '$campus', '$level', '$tutor', '$qualification_code', '$grade', '$test_date', '$cherry_a1', '$cherry_b1', '$cherry_b2', '$cherry_b3', '$cherry_b4', '$cherry_c1', '$cherry_c2', '$cherry_c3', '$cherry_c4', '$cherry_c5', '$cherry_c6', '$cherry_c7', '$cherry_c8', '$cherry_c9', '$cherry_c10', '$cherry_c11', '$cherry_c12')";
	            	break;

            	case "staff":

            		$staff_id = $csvdata[0];
            		$forename = $csvdata[1];
            		$surname = $csvdata[2];
            		$course = $csvdata[3];
            		$department = $csvdata[4];
            		$number_of_students = $csvdata[5];
            		$campus = $csvdata[6];
            		$level = $csvdata[7];
            		$a_cherries = $csvdata[8];
            		$b_cherries = $csvdata[9];
            		$c_cherries = $csvdata[10];

            		$sql = "INSERT INTO staff (staff_id, forename, surname, course, department, number_of_students, campus, level, a_cherries_complete, b_cherries_complete, c_cherries_complete)
            		VALUES ('$staff_id', '$forename', '$surname', '$course', '$department', '$number_of_students', '$campus', '$level', '$a_cherries', '$b_cherries', '$c_cherries')";
		        	break;

		        }

            $query = mysqli_query($db_connection, $sql);

            $count = $count + 1;

        }

        if($query) {

            echo "<script>alert('Data uploaded succesfully.')</script>";

        }

        else {

            echo "<script>alert('An error has occured. Data not uploaded.')</script>";

        }

        $db_connection->close();

    }

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

						<h4>UPLOAD .CSV FILE</h4>
						<p> Select the table you wish to update and upload the .csv file.</p>

						<form name = "upload-form" method = "POST" role = "form" enctype = "multipart/form-data"> <!-- enctype needed to upload files -->
							<div>
								<select name = "database_choice">
									<option value = "students">Students</option>
									<option value = "staff">Staff</option>
								</select>
							</div>

							<br>

							<div>
								<input type = "file" name = "file" id = "file" size = "150"/>
								<span><input type = "submit" name = "submit" value = "Submit" /></span>
							</div>
						</form>

					</div>

				</div>

			</div>

		</div>

	</body>

</html>