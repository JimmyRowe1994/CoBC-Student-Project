<?php

	if(!ISSET($_SESSION)){session_start();}
	if(!ISSET($_SESSION['login'])){header("Location: index.php"); exit;}

	include("database-connection.php");

	// include("search.php");
	if(ISSET($_POST['menu-search']))
	{
		$search_query = $_POST['menu-search'];
		$sql = "SELECT student_id FROM students WHERE student_id = '$search_query'";
		$result = $Conn->query($sql);

		if($result->num_rows > 0)
		{
			header("Location: student-page.php?&student_id=" . $search_query);
		}

		else
		{
			$sql = "SELECT staff_id FROM staff WHERE staff_id = '$search_query'";
			$result = $Conn->query($sql);

			if($result->num_rows > 0)
			{
				header("Location: staff-page.php?&staff_id=" . $search_query);
			}

			else
			{
				echo "<script>alert('Error: Neither staff nor student found. Did you enter their ID correctly?')</script>";
			}
		}
	}

	if(ISSET($_POST['btnLogOut']))
	{
		session_unset();
		session_destroy();
		$_SESSION['login'] = FALSE;
		header("Location: index.php");
	}

?>

<div class = "sidebar">

	<h4>PROJECT CHERRYPICKER</h4>

	<!-- Search Box -->
	<form method = "POST">
		<input type = "text" name = "menu-search" class = "search-bar" placeholder = " Search Databases">
	</form>
						
	<!-- Divider -->
	<hr>

	<!-- Navigation Buttons -->
		<a href = "home-page.php"><button name = "btnHome" class = "menu-button">Home</button></a>
		<hr>
		<a href = "students-database.php"><button name = "btnStudents" class = "menu-button">Students</button></a>
		<a href = "staff-database.php"><button name = "btnStaff" class = "menu-button">Staff</button></a>
		<a href = "departments.php"><button name = "btnDepartments" class = "menu-button">Departments</button></a>
		<a href = "upload-page.php"><button name = "btnUpload" class = "menu-button">Upload</button></a>
		<hr>
		<a href = "#"><button name = "btnAccountSettings" class = "menu-button">Account Settings</button></a>
		<a href = "unit-settings.php"><button name = "btnUnitSettings" class = "menu-button">Unit Settings</button></a>
		<hr>
			<form method = "POST">
		<button name = "btnLogOut" class = "menu-button">Log Out</button>
	</form>

</div>