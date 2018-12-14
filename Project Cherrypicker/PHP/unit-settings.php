<?php

	include("database-connection.php");

	if(ISSET($_POST['Submit']))
	{
		$sql = "UPDATE cherries SET cherry_a1_name = '".$_POST['CherryA1Name']."',
									cherry_a1_desc = '".$_POST['CherryA1Description']."',
									cherry_b1_name = '".$_POST['CherryB1Name']."',
									cherry_b1_desc = '".$_POST['CherryB1Description']."',
									cherry_b2_name = '".$_POST['CherryB2Name']."',
									cherry_b2_desc = '".$_POST['CherryB2Description']."',
									cherry_b3_name = '".$_POST['CherryB3Name']."',
									cherry_b3_desc = '".$_POST['CherryB3Description']."',
									cherry_c1_name = '".$_POST['CherryC1Name']."',
									cherry_c1_desc = '".$_POST['CherryC1Description']."',
									cherry_c2_name = '".$_POST['CherryC2Name']."',
									cherry_c2_desc = '".$_POST['CherryC2Description']."',
									cherry_c3_name = '".$_POST['CherryC3Name']."',
									cherry_c3_desc = '".$_POST['CherryC3Description']."',
									cherry_c4_name = '".$_POST['CherryC4Name']."',
									cherry_c4_desc = '".$_POST['CherryC4Description']."',
									cherry_c5_name = '".$_POST['CherryC5Name']."',
									cherry_c5_desc = '".$_POST['CherryC5Description']."',
									cherry_c6_name = '".$_POST['CherryC6Name']."',
									cherry_c6_desc = '".$_POST['CherryC6Description']."',
									cherry_c7_name = '".$_POST['CherryC7Name']."',
									cherry_c7_desc = '".$_POST['CherryC7Description']."',
									cherry_c8_name = '".$_POST['CherryC8Name']."',
									cherry_c8_desc = '".$_POST['CherryC8Description']."',
									cherry_c9_name = '".$_POST['CherryC9Name']."',
									cherry_c9_desc = '".$_POST['CherryC9Description']."'
									 WHERE subject = 'Maths - Level 1'";


		if($Conn->query($sql) == TRUE)
		{
			echo "<script>alert('cool')</script>";
		}

		else
		{
			echo "<script>alert('Errrrrrroooooooooooor')</script>";
		}
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
		<link rel = "stylesheet" href = "../CSS/unit-settings.css">
		<!-- <link rel = "stylesheet" href = "../CSS/user-settings.css"> -->

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

						<form method = "POST">

							<span><input type = "submit" name = "Submit" value = "Submit Changes" style = "float: right;"></span>

							<h3>UNIT SETTINGS</h3>
							<p>In this area you can define the unit codes and their description.</p>

							<?php include("maths-level-1.php");?>

						</form>

					</div>

				</div>

			</div>

		</div>

	</body>

</html>



						<!-- <form method = "POST">

							<br/>

							<h6>LEVEL 1 MATHS</h6>

							<div class = "row">

								<div class = "col-lg-3">

									Cherry A1 Name:
									<br><br>
									Cherry A1 Description:

									<br><br>

									Cherry B1 Name:
									<br><br>
									Cherry B1 Description:

								</div>

								<div class = "col-lg-3">

									<input type = "text" name = "CherryA1Name" style = "width: 100%;">
									<br><br>
									<input type = "text" name = "CherryA1Description" style = "width: 100%;">

									<br><br>

									<input type = "text" style = "width: 100%;">
									<br><br>
									<input type = "text" style = "width: 100%;">

									<br/><br/>
									<input type = "submit" name = "Submit" value = "Submit Changes" style = "float: right;">

								</div>

								<div class = "col-lg-3">

									Empty

								</div>

							</div>

						</form> -->