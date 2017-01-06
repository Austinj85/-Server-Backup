
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

	$name = $_POST["category"];
	$description = $_POST["categorydescription"];



	$sql = "INSERT INTO Categories (Category_Name, Category_Description)
	VALUES ('$name', '$description')";

	echo "this worked";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}


	$conn->close();
?>
