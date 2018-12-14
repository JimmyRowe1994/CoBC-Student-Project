<?php

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

?>