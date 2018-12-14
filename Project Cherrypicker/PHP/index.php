<?php

	require ("login-function.php");

?>

<!DOCTYPE html>
<html>

	<head>

		<meta charset="utf-8">

		<title>Project Cherrypicker | Login</title>

		<!-- Link CSS File -->
		<link rel = "stylesheet" href = "../CSS\index.css">

	</head>

	<body>

		<!-- Login Form -->
		<div class = "LoginForm">

			<!-- City of Bath College Logo -->
			<img src = "../Images/City of Bath College Logo.jpg" class = "Logo">

			<!-- Headers -->
			<h1>Project Cherrypicker</h1>
			<h2>Log In</h2>

			<form action = "" method = "POST">

				<!-- Username Box -->
				<label for = "Username">Username</label>
				<input type = "text" name = "Username" placeholder = "Enter Username" autocomplete = "off" required>
				
				<!-- Password Box -->
				<label for = "Password">Password</label>
				<input type = "password" name = "Password" placeholder = "Enter Password" autocomplete = "off" required>
				
				<!-- Submit Button -->
				<input type = "submit" name = "Submit" value = "Login">
				
				<!-- Website Credit -->
				<p id = "LoginFormCredit">Website created by Jordan Rowe.</p>

			</form>

		</div>

	</body>

</html>