
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

	$email = $_POST["client-email"];
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$phone = $_POST["client-tel"];
	$street = $_POST["client-street"];
	$city = $_POST["client-city"];
	$state = $_POST["client-state"];
	$zip = $_POST["client-zip"];



	$sql = "INSERT INTO Clients(Email,First_Name,Last_Name,Phone,Street, City,State,Zip)
	VALUES ('$email','$firstname','$lastname', '$phone', '$street','$city','$state','$zip')";

	echo "this worked";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}


		$conn->close();


		include 'CreateEvent.php';



?>
