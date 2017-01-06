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

	$sql =  "SELECT First_Name, Last_Name FROM Clients";

		$result = $conn->query($sql);

		if($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
			{
	
				echo "<option value = " . $row["First_Name"]["Last_Name"] .">" . $row["First_Name"]["Last_Name"] . "</option>";
					
			}
		}
		else{

		}


?>