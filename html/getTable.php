
<?php
function displayTable($name)
{
	echo "<br>" . $name;
	$login = "/var/PHPStuff/logintobeomaster.php";

	echo "<style>";
		echo "td{";
		echo "text-align: left;";
		echo "padding-right: 20px;";
		echo "border: 1px solid;";
		echo "}";

		echo "th{";
		echo "text-align: left;";
		echo "}";

		echo "table{";
		echo "border: 1px solid;";
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


	/*$sql0 = "SELECT COUNT(*) as count FROM " . $name . ";";

	//$sql =  "SHOW COLUMNS IN " . $name;
		$rowcount = 0;

		$result = $conn->query($sql0);

		if($result->num_rows > 0)
		{
			$row = $result->fetch_assoc();

			$rowcount = $row["count"];
		}*/



	$sql1 = "select count(*) from INFORMATION_SCHEMA.COLUMNS where table_name = " . "'" . $name ."'" . ";";

	//$sql =  "SHOW COLUMNS IN " . $name;
		$fieldcount = 0;
		$result = $conn->query($sql1);

		if($result->num_rows > 0)
		{
			$row = $result->fetch_assoc();
			
			$fieldcount = $row["count(*)"];
		}


		$fields = array_fill(0,$fieldcount,"");

		$sql =  "SHOW COLUMNS IN " . $name;

		$result = $conn->query($sql);

		if($result->num_rows > 0)
		{
			for($i=0;$i<$fieldcount;$i++)
			{
				$row = $result->fetch_assoc();
				$fields[$i] =  $row["Field"];
			}
		}


		$sql =  "SELECT * FROM " . $name;

		$result = $conn->query($sql);

		if($result->num_rows > 0)
		{
			echo "<table>";
			echo "<tr>";
				for($i=0;$i<$fieldcount;$i++)
				{
					echo "<td>" . $fields[$i] . "</td>";
				}
			echo "</tr>";
			while($row = $result->fetch_assoc())
			{
	
				echo "<tr>";
					for($i=0;$i<$fieldcount;$i++)
					{
						echo "<td>" . $row[$fields[$i]] . "</td>";
					}
				echo "</tr>";
			}
			echo "</table>";
		}
		else{
			echo "<br>This table is empty.<br>";
		}

		/*if($result->num_rows > 0)
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
		}*/
}

		displayTable("BEO_Master");
		displayTable("Salespeople");
		displayTable("Clients");
		displayTable("Categories");
		displayTable("Locations");
		displayTable("Changelog");




?>
