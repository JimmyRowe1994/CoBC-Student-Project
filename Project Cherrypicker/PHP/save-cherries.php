<?php

	//Variables
	$Servername = 'localhost';
	$MySQLUser = 'root';
	$MySQLPass = '';
	$Database = "project_cherrypicker";

	//Connect to the database.
	$connection = new mysqli($Servername, $MySQLUser, $MySQLPass, $Database);

	//If there was a connection error, kill the connection and display error message.
	if ($connection->connect_error)
	{
		die("Connection failed: " . $connection->connect_error);
	}

	$student_id = $_GET['student_id'];

	if(ISSET($_POST['btnCherryA1']))
	{
		$sql = "SELECT cherry_a1, cherry_b1, cherry_b2, cherry_b3, cherry_c1, cherry_c2, cherry_c3, cherry_c4, cherry_c5, cherry_c6, cherry_c7, 	cherry_c8, cherry_c9 FROM students WHERE student_id = '$student_id'";
		$result = $connection->query($sql);
		if($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
			{
				$boolean = $row['cherry_a1'];
				// $cherry_b1 = $row['cherry_b1'];
				// $cherry_b2 = $row['cherry_b2'];
				// $cherry_b3 = $row['cherry_b3'];
				// $cherry_c1 = $row['cherry_c1'];
				// $cherry_c2 = $row['cherry_c2'];
				// $cherry_c3 = $row['cherry_c3'];
				// $cherry_c4 = $row['cherry_c4'];
				// $cherry_c5 = $row['cherry_c5'];
				// $cherry_c6 = $row['cherry_c6'];
				// $cherry_c7 = $row['cherry_c7'];
				// $cherry_c8 = $row['cherry_c8'];
				// $cherry_c9 = $row['cherry_c9'];

				// Going from green to red.
				if($boolean > 0)
				{
					$sql = "UPDATE students SET cherry_a1 = '0' WHERE student_id = '$student_id'";
				}

				// Going from red to green.
				else
				{
					$sql = "UPDATE students SET cherry_a1 = '1', cherry_b1 = '1', cherry_b2 = '1', cherry_b3 = '1', cherry_c1 = '1', cherry_c2 = '	 1', cherry_c3 = '1', cherry_c4 = '1', cherry_c5 = '1', cherry_c6 = '1', cherry_c7 = '1', cherry_c8 = '1', cherry_c9 = '1' WHERE student_id = '$student_id'";
				}

				if($connection->query($sql) === TRUE)
				{
					// Empty
				}
			}
		}
	}

	else if (ISSET($_POST['btnCherryB1']))
	{
		$sql = "SELECT cherry_b1, cherry_c1, cherry_c2, cherry_c3 FROM students WHERE student_id = '$student_id'";
		$result = $connection->query($sql);
		if($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
			{
				$boolean = $row['cherry_b1'];

				// Going from green to red.
				if($boolean > 0)
				{
					$sql = "UPDATE students SET cherry_b1 = '0' WHERE student_id = '$student_id'";
				}

				// Going from red to green.
				else
				{
					$sql = "UPDATE students SET cherry_b1 = '1', cherry_c1 = '1', cherry_c2 = '	 1', cherry_c3 = '1' WHERE student_id = '$student_id'";
				}

				if($connection->query($sql) === TRUE)
				{
					// Empty
				}
			}
		}
	}

	else if(ISSET($_POST['btnCherryB2']))
	{
		$sql = "SELECT cherry_b2, cherry_c4, cherry_c5, cherry_c6 FROM students WHERE student_id = '$student_id'";
		$result = $connection->query($sql);
		if($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
			{
				$boolean = $row['cherry_b2'];

				// Going from green to red.
				if($boolean > 0)
				{
					$sql = "UPDATE students SET cherry_b2 = '0' WHERE student_id = '$student_id'";
				}

				// Going from red to green.
				else
				{
					$sql = "UPDATE students SET cherry_b2 = '1', cherry_c4 = '1', cherry_c5 = '1', cherry_c6 = '1' WHERE student_id = '$student_id'";
				}

				if($connection->query($sql) === TRUE)
				{
					// Empty
				}
			}
		}

	}

	else if(ISSET($_POST['btnCherryB3']))
	{
		$sql = "SELECT cherry_b3, cherry_c7, cherry_c8, cherry_c9 FROM students WHERE student_id = '$student_id'";
		$result = $connection->query($sql);
		if($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
			{
				$boolean = $row['cherry_b3'];

				// Going from green to red.
				if($boolean > 0)
				{
					$sql = "UPDATE students SET cherry_b3 = '0' WHERE student_id = '$student_id'";
				}

				// Going from red to green.
				else
				{
					$sql = "UPDATE students SET cherry_b3 = '1', cherry_c7 = '1', cherry_c8 = '1', cherry_c9 = '1' WHERE student_id = '$student_id'";
				}

				if($connection->query($sql) === TRUE)
				{
					// Empty
				}
			}
		}
	}

	else if(ISSET($_POST['btnCherryC1']))
	{
		$sql = "SELECT cherry_c1 FROM students WHERE student_id = '$student_id'";
		$result = $connection->query($sql);
		if($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
			{
				$boolean = $row['cherry_c1'];

				// Going from green to red.
				if($boolean > 0)
				{
					$sql = "UPDATE students SET cherry_c1 = '0' WHERE student_id = '$student_id'";
				}

				// Going from red to green.
				else
				{
					$sql = "UPDATE students SET cherry_c1 = '1' WHERE student_id = '$student_id'";
				}

				if($connection->query($sql) === TRUE)
				{
					// Empty
				}
			}
		}
	}

	else if(ISSET($_POST['btnCherryC2']))
	{
		$sql = "SELECT cherry_c2 FROM students WHERE student_id = '$student_id'";
		$result = $connection->query($sql);
		if($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
			{
				$boolean = $row['cherry_c2'];

				// Going from green to red.
				if($boolean > 0)
				{
					$sql = "UPDATE students SET cherry_c2 = '0' WHERE student_id = '$student_id'";
				}

				// Going from red to green.
				else
				{
					$sql = "UPDATE students SET cherry_c2 = '1' WHERE student_id = '$student_id'";
				}

				if($connection->query($sql) === TRUE)
				{
					// Empty
				}
			}
		}
	}

	else if(ISSET($_POST['btnCherryC3']))
	{
		$sql = "SELECT cherry_c3 FROM students WHERE student_id = '$student_id'";
		$result = $connection->query($sql);
		if($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
			{
				$boolean = $row['cherry_c3'];

				// Going from green to red.
				if($boolean > 0)
				{
					$sql = "UPDATE students SET cherry_c3 = '0' WHERE student_id = '$student_id'";
				}

				// Going from red to green.
				else
				{
					$sql = "UPDATE students SET cherry_c3 = '1' WHERE student_id = '$student_id'";
				}

				if($connection->query($sql) === TRUE)
				{
					// Empty
				}
			}
		}
	}

	else if(ISSET($_POST['btnCherryC4']))
	{
		$sql = "SELECT cherry_c4 FROM students WHERE student_id = '$student_id'";
		$result = $connection->query($sql);
		if($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
			{
				$boolean = $row['cherry_c4'];

				// Going from green to red.
				if($boolean > 0)
				{
					$sql = "UPDATE students SET cherry_c4 = '0' WHERE student_id = '$student_id'";
				}

				// Going from red to green.
				else
				{
					$sql = "UPDATE students SET cherry_c4 = '1' WHERE student_id = '$student_id'";
				}

				if($connection->query($sql) === TRUE)
				{
					// Empty
				}
			}
		}
	}

	else if(ISSET($_POST['btnCherryC5']))
	{
		$sql = "SELECT cherry_c5 FROM students WHERE student_id = '$student_id'";
		$result = $connection->query($sql);
		if($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
			{
				$boolean = $row['cherry_c5'];

				// Going from green to red.
				if($boolean > 0)
				{
					$sql = "UPDATE students SET cherry_c5 = '0' WHERE student_id = '$student_id'";
				}

				// Going from red to green.
				else
				{
					$sql = "UPDATE students SET cherry_c5 = '1' WHERE student_id = '$student_id'";
				}

				if($connection->query($sql) === TRUE)
				{
					// Empty
				}
			}
		}
	}

	else if(ISSET($_POST['btnCherryC6']))
	{
		$sql = "SELECT cherry_c6 FROM students WHERE student_id = '$student_id'";
		$result = $connection->query($sql);
		if($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
			{
				$boolean = $row['cherry_c6'];

				// Going from green to red.
				if($boolean > 0)
				{
					$sql = "UPDATE students SET cherry_c6 = '0' WHERE student_id = '$student_id'";
				}

				// Going from red to green.
				else
				{
					$sql = "UPDATE students SET cherry_c6 = '1' WHERE student_id = '$student_id'";
				}

				if($connection->query($sql) === TRUE)
				{
					// Empty
				}
			}
		}
	}

	else if(ISSET($_POST['btnCherryC7']))
	{
		$sql = "SELECT cherry_c7 FROM students WHERE student_id = '$student_id'";
		$result = $connection->query($sql);
		if($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
			{
				$boolean = $row['cherry_c7'];

				// Going from green to red.
				if($boolean > 0)
				{
					$sql = "UPDATE students SET cherry_c7 = '0' WHERE student_id = '$student_id'";
				}

				// Going from red to green.
				else
				{
					$sql = "UPDATE students SET cherry_c7 = '1' WHERE student_id = '$student_id'";
				}

				if($connection->query($sql) === TRUE)
				{
					// Empty
				}
			}
		}
	}

	else if(ISSET($_POST['btnCherryC8']))
	{
		$sql = "SELECT cherry_c8 FROM students WHERE student_id = '$student_id'";
		$result = $connection->query($sql);
		if($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
			{
				$boolean = $row['cherry_c8'];

				// Going from green to red.
				if($boolean > 0)
				{
					$sql = "UPDATE students SET cherry_c8 = '0' WHERE student_id = '$student_id'";
				}

				// Going from red to green.
				else
				{
					$sql = "UPDATE students SET cherry_c8 = '1' WHERE student_id = '$student_id'";
				}

				if($connection->query($sql) === TRUE)
				{
					// Empty
				}
			}
		}
	}

	else if(ISSET($_POST['btnCherryC9']))
	{
		$sql = "SELECT cherry_c9 FROM students WHERE student_id = '$student_id'";
		$result = $connection->query($sql);
		if($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
			{
				$boolean = $row['cherry_c9'];

				// Going from green to red.
				if($boolean > 0)
				{
					$sql = "UPDATE students SET cherry_c9 = '0' WHERE student_id = '$student_id'";
				}

				// Going from red to green.
				else
				{
					$sql = "UPDATE students SET cherry_c9 = '1' WHERE student_id = '$student_id'";
				}

				if($connection->query($sql) === TRUE)
				{
					// Empty
				}
			}
		}
	}
?>