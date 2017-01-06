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

	$sql =  "SELECT Category_Name FROM Categories";

		$result = $conn->query($sql);

		if($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
			{
	
				echo "<option value = " . $row["Category_Name"] .">" . $row["Category_Name"] . "</option>";
					
			}
		}
		else{

		}


?>