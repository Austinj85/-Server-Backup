
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


	$sql = "select reservation_Date,reservation_Name,reservation_Time,reservation_Location from Reservations ORDER BY Date_Of ASC;";


		$result = $conn->query($sql);

		if($result!="")
		{
			if($result->num_rows > 0)
			{
				echo "<table>";
				echo "<tr>";
				echo "<th class = \"title\" colspan = 5>All Events</th>";
				echo "</tr>";
				echo "<tr>";
					echo "<td></td>";
					echo "<td>Date</td>";
					echo "<td>Guest Name</td>";
					echo "<td>Time</td>";
					echo "<td>Location</td>";
				echo "</tr>";
				while($row = $result->fetch_assoc())
				{
		
					echo "<tr>";
	
							echo "<td><button>Edit</button></td>";	
							echo "<td>" . $row['reservation_Date'] . "</td>";					
							echo "<td>" . $row['reservation_Name'] . "</td>";
							echo "<td>" . $row['reservation_Time'] . "</td>";
							echo "<td>" . $row['reservation_Location'] . "</td>";
						
					echo "</tr>";
				}
				echo "</table>";
			}
		}
		else
		{
			echo "<br>There are no events Scheduled.<br>";
		}




?>
