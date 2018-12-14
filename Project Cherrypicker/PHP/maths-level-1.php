<?php

	include("database-connection.php");

	$sql = "SELECT * FROM cherries WHERE subject  = 'Maths - Level 1'";
	$result = $Conn->query($sql);
	if($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc())
		{
			$cherry_a1_name = $row["cherry_a1_name"];
			$cherry_a1_desc = $row["cherry_a1_desc"];
			$cherry_b1_name = $row["cherry_b1_name"];
			$cherry_b1_desc = $row["cherry_b1_desc"];
			$cherry_b2_name = $row["cherry_b2_name"];
			$cherry_b2_desc = $row["cherry_b2_desc"];
			$cherry_b3_name = $row["cherry_b3_name"];
			$cherry_b3_desc = $row["cherry_b3_desc"];
			$cherry_b4_name = $row["cherry_b4_name"];
			$cherry_b4_desc = $row["cherry_b4_desc"];
			$cherry_c1_name = $row["cherry_c1_name"];
			$cherry_c1_desc = $row["cherry_c1_desc"];
			$cherry_c2_name = $row["cherry_c2_name"];
			$cherry_c2_desc = $row["cherry_c2_desc"];
			$cherry_c3_name = $row["cherry_c3_name"];
			$cherry_c3_desc = $row["cherry_c3_desc"];
			$cherry_c4_name = $row["cherry_c4_name"];
			$cherry_c4_desc = $row["cherry_c4_desc"];
			$cherry_c5_name = $row["cherry_c5_name"];
			$cherry_c5_desc = $row["cherry_c5_desc"];
			$cherry_c6_name = $row["cherry_c6_name"];
			$cherry_c6_desc = $row["cherry_c6_desc"];
			$cherry_c7_name = $row["cherry_c7_name"];
			$cherry_c7_desc = $row["cherry_c7_desc"];
			$cherry_c8_name = $row["cherry_c8_name"];
			$cherry_c8_desc = $row["cherry_c8_desc"];
			$cherry_c9_name = $row["cherry_c9_name"];
			$cherry_c9_desc = $row["cherry_c9_desc"];
			$cherry_c10_name = $row["cherry_c10_name"];
			$cherry_c10_desc = $row["cherry_c10_desc"];
			$cherry_c11_name = $row["cherry_c11_name"];
			$cherry_c11_desc = $row["cherry_c11_desc"];
			$cherry_c12_name = $row["cherry_c12_name"];
			$cherry_c12_desc = $row["cherry_c12_desc"];

		}
	}

?>


<table border = "0" style = "width: 100%; text-align: center;" align = "center" class = "table-colors">

							<h5>Maths - Level 1</h5>
							<tr>
								<th>Cherry A1 Name:</th>
								<td><input type = "text" name = "CherryA1Name" style = "width: 100%;" value = "<?php echo $cherry_a1_name?>"></td>
								<th>Cherry A1 Description:</th>
								<td><input type = "text" name = "CherryA1Description" style = "width: 100%;" value = "<?php echo $cherry_a1_desc?>"></td>
							</tr>

							<tr>
								<th>Cherry B1 Name:</th>
								<td><input type = "text" name = "CherryB1Name" style = "width: 100%;" value = "<?php echo $cherry_b1_name?>"></td>
								<th>Cherry B1 Description:</th>
								<td><input type = "text" name = "CherryB1Description" style = "width: 100%;" value = "<?php echo $cherry_b1_desc?>"></td>
							</tr>

							<tr>
								<th>Cherry B2 Name:</th>
								<td><input type = "text" name = "CherryB2Name" style = "width: 100%;" value = "<?php echo $cherry_b2_name?>"></td>
								<th>Cherry B2 Description:</th>
								<td><input type = "text" name = "CherryB2Description" style = "width: 100%;" value = "<?php echo $cherry_b2_desc?>"></td>
							</tr>

							<tr>
								<th>Cherry B3 Name:</th>
								<td><input type = "text" name = "CherryB3Name" style = "width: 100%;" value = "<?php echo $cherry_b3_name?>"></td>
								<th>Cherry B3 Description:</th>
								<td><input type = "text" name = "CherryB3Description" style = "width: 100%;" value = "<?php echo $cherry_b3_desc?>"></td>
							</tr>

							<tr>
								<th>Cherry C1 Name:</th>
								<td><input type = "text" name = "CherryC1Name" style = "width: 100%;" value = "<?php echo $cherry_c1_name?>"></td>
								<th>Cherry C1 Description:</th>
								<td><input type = "text" name = "CherryC1Description" style = "width: 100%;" value = "<?php echo $cherry_c1_desc?>"></td>
							</tr>

							<tr>
								<th>Cherry C2 Name:</th>
								<td><input type = "text" name = "CherryC2Name" style = "width: 100%;" value = "<?php echo $cherry_c2_name?>"></td>
								<th>Cherry C2 Description:</th>
								<td><input type = "text" name = "CherryC2Description" style = "width: 100%;" value = "<?php echo $cherry_c2_desc?>"></td>
							</tr>

							<tr>
								<th>Cherry C3 Name:</th>
								<td><input type = "text" name = "CherryC3Name" style = "width: 100%;" value = "<?php echo $cherry_c3_name?>"></td>
								<th>Cherry C3 Description:</th>
								<td><input type = "text" name = "CherryC3Description" style = "width: 100%;" value = "<?php echo $cherry_c3_desc?>"></td>
							</tr>							

							<tr>
								<th>Cherry C4 Name:</th>
								<td><input type = "text" name = "CherryC4Name" style = "width: 100%;" value = "<?php echo $cherry_c4_name?>"></td>
								<th>Cherry C4 Description:</th>
								<td><input type = "text" name = "CherryC4Description" style = "width: 100%;" value = "<?php echo $cherry_c4_desc?>"></td>
							</tr>

							<tr>
								<th>Cherry C5 Name:</th>
								<td><input type = "text" name = "CherryC5Name" style = "width: 100%;" value = "<?php echo $cherry_c5_name?>"></td>
								<th>Cherry C5 Description:</th>
								<td><input type = "text" name = "CherryC5Description" style = "width: 100%;" value = "<?php echo $cherry_c5_desc?>"></td>
							</tr>

							<tr>
								<th>Cherry C6 Name:</th>
								<td><input type = "text" name = "CherryC6Name" style = "width: 100%;" value = "<?php echo $cherry_c6_name?>"></td>
								<th>Cherry C6 Description:</th>
								<td><input type = "text" name = "CherryC6Description" style = "width: 100%;" value = "<?php echo $cherry_c6_desc?>"></td>
							</tr>

							<tr>
								<th>Cherry C7 Name:</th>
								<td><input type = "text" name = "CherryC7Name" style = "width: 100%;" value = "<?php echo $cherry_c7_name?>"></td>
								<th>Cherry C7 Description:</th>
								<td><input type = "text" name = "CherryC7Description" style = "width: 100%;" value = "<?php echo $cherry_c7_desc?>"></td>
							</tr>

							<tr>
								<th>Cherry C8 Name:</th>
								<td><input type = "text" name = "CherryC8Name" style = "width: 100%;" value = "<?php echo $cherry_c8_name?>"></td>
								<th>Cherry C8 Description:</th>
								<td><input type = "text" name = "CherryC8Description" style = "width: 100%;" value = "<?php echo $cherry_c8_desc?>"></td>
							</tr>

							<tr>
								<th>Cherry C9 Name:</th>
								<td><input type = "text" name = "CherryC9Name" style = "width: 100%;" value = "<?php echo $cherry_c9_name?>"></td>
								<th>Cherry C9 Description:</th>
								<td><input type = "text" name = "CherryC9Description" style = "width: 100%;" value = "<?php echo $cherry_c9_desc?>"></td>
							</tr>

						</table>