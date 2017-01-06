
<?php
function displayTable($name)
{
	$login = "/var/PHPStuff/logintobeomaster.php";

	echo "<style>";
		echo "td{";
		echo "text-align: left;";
		echo "padding-right: 20px;";
		echo "}";

		echo "th{";
		echo "text-align: left;";
		echo "}";

	echo "</style>";

	if (strpos($login, '..') == false || strpos($login, '.php') !== true) 
	{
		include ($login);
	}

	else
	{
		echo "Nice Try.";
	}

	$sql =  "SHOW COLUMNS IN " . $name;
		$result = $conn->query($sql);

		if($result->num_rows > 0)
		{
			echo "<h2>" . $name . "</h2>"; 
			echo "<table>";
			echo "<tr>";
				echo "<th>Field</th>";
				echo "<th>Type</th>";
				echo "<th>Null</th>";
				echo "<th>Key</th>";
				echo "<th>Default</th>";
				echo "<th>Extra</th>";
			echo "</tr>";
			while($row = $result->fetch_assoc())
			{
				echo "<tr>";
					echo "<td>" . $row["Field"] . "</td>";
					echo "<td>" . $row["Type"] . "</td>";
					echo "<td>" . $row["Null"] . "</td>";
					echo "<td>" . $row["Key"] . "</td>";
					echo "<td>" . $row["Default"] . "</td>";
					echo "<td>" . $row["Extra"] . "</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
}

		displayTable("BEO_Master");
		displayTable("Clients");
		displayTable("Categories");
		displayTable("Salespeople");
		displayTable("Changelog");



?>
