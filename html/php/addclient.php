
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

	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$email = $_POST["client-email"];
	$phone = $_POST["client-tel"];
	$street = $_POST["client-street"];
	$city = $_POST["client-city"];
	$state = $_POST["client-state"];
	$zip = $_POST["client-zip"];


	$sql = "INSERT INTO Clients (First_Name, Last_Name, Phone, Email, Street, City, State, Zip)
	VALUES ('$firstname', '$lastname', '$phone','$email', '$street', '$city', '$state', '$zip')";

	echo "this worked";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}


	$conn->close();
?>
