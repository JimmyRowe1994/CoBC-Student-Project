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

				<div class = "container-fluid">

					<!-- Banner Display -->
					<div class = "jumbotron">

						Project Cherrypicker | Home

					</div>

					<div class = "row">

						<!-- Box 1 -->
						<div class = "col-md-4">
							
							<div class = "container content-box">

								<div class = "container-header"><h1>Databases</h1></div>
								<div class = "container content-box-padding">
									Click on the Students, Staff or Departments links on the left-hand side of the page to view various database tables.
								</div>

							</div>

						</div>

						<!-- Box 2 -->
						<div class = "col-md-4">
							
							<div class = "container content-box">

								<div class = "container-header"><h1>Upload</h1></div>
								<div class = "container content-box-padding">
									Click the Upload button on the left-hand side to upload a .CSV file to the database.
								</div>

							</div>

						</div>

						<!-- Box 3 -->
						<div class = "col-md-4">
							
							<div class = "container content-box">

								<div class = "container-header"><h1>Log Out</h1></div>
								<div class = "container content-box-padding">
									To log out, press the button on the left-hand side of the page.
								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</body>

</html>