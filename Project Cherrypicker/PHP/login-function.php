<?php

	session_start();

	//Variables
	$Servername = 'localhost';
	$MySQLUser = 'root';
	$MySQLPass = '';
	$Database = "project_cherrypicker";

	//If Submit has been pressed.
	if(isset($_POST['Submit']))
	{
		//Store the values of the text boxes.
		$Username = $_POST['Username'];
		$Password = $_POST['Password'];

		//Connect to the database.
		$Conn = new mysqli($Servername, $MySQLUser, $MySQLPass, $Database);

		//If there was a connection error, kill the connection and display error message.
		if ($Conn->connect_error)
		{
			die("Connection failed: " . $Conn->connect_error);
		}

		//Search the table 'users' in the database for an exact match of what the user typed in.
		$SQL = "SELECT * FROM users WHERE username = '$Username' AND password = '$Password'";

		//Store the result of the search in a variable.
		$Result = $Conn->query($SQL);

		//If an exact match has been found, move the user to 'home-page.php'.
		if ($Result->num_rows == 1)
		{
			$_SESSION['login'] = TRUE;
			header("Location: home-page.php");
		}

		//Otherwise, display an error message in an alert box.
		else
		{
			// Error Message
			echo "<script type = 'text/javascript'> alert('Username or Password incorrect.'); </script>";
		}
	}

	// Close the connection to the database.
	//$Conn->close();

?>