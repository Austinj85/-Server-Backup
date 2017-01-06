<?php

$login = "/var/PHPStuff/logintobeomaster.php";


	if (strpos($login, '..') == false || strpos($login, '.php') !== true) 
	{
		include ($login);
	}

	else
	{
		echo "Nice Try.";
	}

	$sql =  "SELECT Location_Name FROM Locations";

		$result = $conn->query($sql);

		if($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
			{
	
				echo "<option value = " . $row["Location_Name"] .">" . $row["Location_Name"] . "</option>";
					
			}
		}
		else{

		}


?>