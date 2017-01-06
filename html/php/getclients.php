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

	$sql =  "SELECT Email FROM Clients";

		$result = $conn->query($sql);

		if($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
			{
	
						echo "<option value = " . $row["Email"] .">" . $row["Email"] . "</option>";
					
			}
		}
		else{
			echo "<br>This table is empty.<br>";
		}

		echo "<h1>WORKED</h1>";

?>