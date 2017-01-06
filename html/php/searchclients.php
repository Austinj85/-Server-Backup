<html>
	<head>
			<link rel="stylesheet" type="text/css" href="../css/searchclients.css">
			<base target="_parent" />
	</head>


	<body>

<?php
	$searchfor = $_GET["search"];

$login = "/var/PHPStuff/logintobeomaster.php";


	if (strpos($login, '..') == false || strpos($login, '.php') !== true) 
	{
		include ($login);
	}

	else
	{
		echo "Nice Try.";
	}


		$sql =  "select * from Clients where Email like '%" . $searchfor . "%' OR First_Name like '%" . $searchfor . "%' OR Last_Name like '%" . $searchfor . "%' OR Phone like '%" . $searchfor . "%' OR Street like '%" . $searchfor . "%' OR City like '%" . $searchfor . "%' OR State like '%" . $searchfor . "%' OR Zip like '%" . $searchfor . "%';";

		$result = $conn->query($sql);

		if($result->num_rows > 0)
		{
			echo "<table>";
			echo "<tr>";
			echo "<td>Name</td>";
			echo "<td>Email</td>";
			echo "<td>Phone</td>";
			echo "<td>Street</td>";
			echo "<td>City</td>";
			echo "<td>State</td>";
			echo "<td>Zip</td>";
			echo "</tr>";
			while($row = $result->fetch_assoc())
			{
				echo "<form  action=\"../CreateEvent.php\" method=\"post\">";
				echo "<input type=\"hidden\" name=\"client-email\" value=\"". $row["Email"] . "\">";
				echo "<tr>";	
				echo "<td>" . "<button>" . $row["First_Name"]  . " " . $row["Last_Name"] . "</button>" ."</td>";
				echo "<td>" . $row["Email"]  ."</td>";
				echo "<td>" . $row["Phone"]  ."</td>";
				echo "<td>" . $row["Street"]  ."</td>";
				echo "<td>" . $row["City"]  ."</td>";
				echo "<td>" . $row["State"]  ."</td>";
				echo "<td>" . $row["Zip"]  ."</td>";
				echo "</tr>";
				echo "</form>";
			}
			echo "<table>";
	

	}


?>

</body>
</html>