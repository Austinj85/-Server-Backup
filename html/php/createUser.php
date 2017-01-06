
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

	$email = $_POST["user-email"];
	$firstname = $_POST["first-name"];
	$lastname = $_POST["last-name"];
	$phone = $_POST["user-tel"];
	$password = $_POST["user-password"];
	$password2 = $_POST["user-password2"];


	if($password == $password2)
	{	
		$pass_hashed = password_hash($password, PASSWORD_DEFAULT);

		$sql = "INSERT INTO Salespeople (Email,First_Name,Last_Name,Phone,Password)
		VALUES ('$email','$firstname','$lastname', '$phone', '$pass_hashed')";

		echo "this worked";

		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}


		$conn->close();
	}
	else
	{
		echo "Passwords do not match.";
	}

?>
