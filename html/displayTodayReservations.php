<?php

	//echo "<br>" . $name;
	$login = "/var/PHPStuff/logintobeomaster.php";



	if (strpos($login, '..') == false || strpos($login, '.php') !== true) 
	{
		include ($login);
	}

	else
	{
		echo "Nice Try.";
	}


	$sql = "select reservation_Name,reservation_Time,reservation_location,reservation_Instruction from Reservations where reservation_Date = curdate();";


		$result = $conn->query($sql);

		if($result->num_rows > 0)
		{
			echo "<table>";
			echo "<tr>";
			echo "<th class = \"title\" colspan = 5>Today's Reservations</th>";
			echo "</tr>";
			echo "<tr>";
				echo "<td></td>";
				echo "<td>Client Name</td>";
				echo "<td>Time</td>";
				echo "<td>Location</td>";
				echo "<td>Special Instructions</td>";
			echo "</tr>";
			while($row = $result->fetch_assoc())
			{
	
				echo "<tr>";

						echo "<td><button>Edit</button></td>";						
						echo "<td>" . $row['reservation_Name'] . "</td>";
						echo "<td>" . $row['reservation_Time'] . "</td>";
						echo "<td>" . $row['reservation_Location'] . "</td>";
						echo "<td>" . $row['reservation_Instruction'] . "</td>";
					
				echo "</tr>";
			}
			echo "</table>";
		}
		else
		{
			echo "<br>There are no reservations scheduled for Today.<br>";
		}


  
?>