<?php
	if(ISSET($_POST['btnSortName']))
	{
		$SQL = "SELECT * FROM students WHERE department = '".$subject."' AND level = '".$level."' ORDER BY forename ASC";
	}

	elseif(ISSET($_POST['btnSortID']))
	{
		$SQL = "SELECT * FROM students WHERE department = '".$subject."' AND level = '".$level."' ORDER BY student_id ASC";
	}

	else
	{
		$SQL = "SELECT * FROM students WHERE department = '".$subject."' AND level = '".$level."'";
	}
?>