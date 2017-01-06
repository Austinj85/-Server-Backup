
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


	$sql = "select Event_Name,Time_Of,Location,Category_Name from BEO_Master where Date_Of = curdate();";


		$result = $conn->query($sql);

		if($result->num_rows > 0)
		{
			echo "<table>";
			echo "<tr>";
			echo "<th class = \"title\" colspan = 5>Today's Events</th>";
			echo "</tr>";
			echo "<tr>";
				echo "<td></td>";
				echo "<td>Event Name</td>";
				echo "<td>Time</td>";
				echo "<td>Location</td>";
				echo "<td>Category</td>";
			echo "</tr>";
			while($row = $result->fetch_assoc())
			{
	
				echo "<tr>";

						echo "<td><button>Edit</button></td>";						
						echo "<td>" . $row['Event_Name'] . "</td>";
						echo "<td>" . $row['Time_Of'] . "</td>";
						echo "<td>" . $row['Location'] . "</td>";
						echo "<td>" . $row['Category_Name'] . "</td>";
					
				echo "</tr>";
			}
			echo "</table>";
		}
		else
		{
			echo "<br>There are no events Scheduled for Today.<br>";
		}





?>
